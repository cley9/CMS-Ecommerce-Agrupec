<template>
    <div class="containerProductoPage center">
      <div class="rowProductoPage">
        <h4 class=" titleProductoPage center">Lista de Producto</h4>
        <div class="rowProductoItemPage">
          <div class="productoPageBox shadowProductoPage" v-for="item in productos" :key="item.id">
            <a :href="`/View-page/${item.id}`">
              <img :src="`/storage/img/Productos/${item.imagen}`" class="imgProductoPage" alt="">
            </a>
            <h5 class="titleProductoPageBody">{{ item.nombre }}</h5>
            <div class="precioProductoPageBody">
              <span class="txtBoxPreBefore textPrecioProBefore"><del>S/ {{ item.precio }}</del></span>
              <span class="textPrecioProAfter">S/ {{ item.newPrecio }}</span>
            </div>
            <small class="cantidadProductoPageBody">{{ item.cantidad }} disponibles</small>
            <hr class="hrProductoPageBody">
            <div class="text-center">
              <a v-if="userObj" class="btn--view-add  btn-sm text-dark viewCP btnEfectClick"
                @click="addProductCart(item.id, 1, item.nombre, item.newPrecio, item.imagen)">Agregar</a>
              <a v-if="!userObj" onclick="msjInicieSesion()" class="btn btn--view-add btn-sm btnEfectClick">Agregar</a>
              <a :href="`/View-page/${item.id}`" class="btn btn--view-page btn-sm btnEfectClick btnViewPro">Ver</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  // import cart from './no usados/addCart.vue';
  // import '../js/metod.js';
  // import MyComponent from '../components/data.vue';
  export default {
    data() {
      return {
        productos: [],
        userName: '',
        userObj: [],
        userV: "",
      }
    },
    created() {
      // Intenta obtener el valor de 'name' de la sesión
      this.userName = localStorage.getItem('name') || ''; // Cambia a sessionStorage si es necesario
    },
    mounted() {// cuando ya eta creado se auto ejecuta si esta dentro de aqui
      this.producto();
    },
    //   name:'cartComponents',
    components: {
      // cart,
    },
    methods: {
      async producto() {
        const productList = await fetch("/view/productoView");
        if (productList.ok) {
          const productoJson = await productList.json();
          this.productos = productoJson.data.data;
          console.log(productoJson.data.data);
        }
        this.userObj = JSON.parse(localStorage.getItem("userObj"));
        if (this.userObj) {
          console.log("esta lleno");
        } else {
          console.log("esta vacio");
        }
  
      },
  
      async addProductCart(idProducto, cantidad, nameProduct, newPrecio, imgProduct) {
  
        const data = await fetch(`/api/user/${this.userObj.user[0].id}/addCart/${idProducto}/${cantidad}`, {
          method: 'GET',
          headers: {
            'Content-Type': 'application/json',
            'Authorization': `Bearer ${this.userObj.token}`,
          },
        });
        const view = await data.json();
        console.log(view);
  
        await viewModalProAddCart(cantidad, nameProduct, newPrecio, imgProduct);
      },
  
    },
  
  }
  </script>
  
  <style scoped>
  .center {
    display: flex;
    justify-content: center;
    align-content: center;
  }
  .containerProductoPage{
  margin-bottom:150px;
  /* background: orange; */
}
  .rowProductoPage {
    width: 80%;
  }
  
  .titleProductoPage {
    /* height: 50px; */
    /* background: darkcyan; */
    background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);
    text-align: center;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 40px;
  }
  
  
  .productoPageBox {
    background: white;
    padding: 4px 10px 18px 10px;
    border-radius: 6px;
  }
  
  .imgProductoPage {
    width: 100%;
    padding: 10px;
    object-fit: cover;
  }
  
  
  .titleProductoPageBody {
    /* background: skyblue; */
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 100;
    padding: 6px;
    min-height: 50px;
    max-height: 50px;
    /* 
    min-width:70px;
    max-width: 70px; */
    /* white-space: nowrap; */
    overflow: hidden;
    text-overflow: ellipsis;
  }
  
  
  .precioProductoPageBody {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* background:seagreen; */
    margin-bottom: 10px;
  }
  
  .cantidadProductoPageBody {
    color: #6C757D;
    font-size: 16px;
    margin-bottom: 0px;
    font-size:14px;
    /* background: orange; */
  }
  
  .shadowProductoPage {
    box-shadow: 5px 10px 12px #e7eeee;
    border-radius: 6px;
    height: 384;
    /* border:1px solid #6C757D; */
    border:1px solid #DFDFDF;
    transition: transform 0.2s ease-in-out; /* Añadido para una transición suave en ambos sentidos */
  }
  
  .shadowProductoPage:hover {
    border-radius: 6px;
    box-shadow: 5px 10px 12px #e0e7e7;
    transform: scale(1.04);
  }
  
  @media(width >=1580px) {
    .rowProductoItemPage {
      /* background: salmon; */
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      grid-auto-columns: auto;
      gap: 26px;
      padding: 10PX;
    }
    .productoPageBox {
      margin-bottom: 28px;
    }
    .hrProductoPageBody {
      margin-top: 10px;
      margin-bottom: 12px;
    }
    
  
  }
  
  @media(1320px <=width < 1580px) {
    .rowProductoItemPage {
      /* background: salmon; */
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      grid-auto-columns: auto;
      gap: 26px;
      padding: 10PX;
    }
  
    .hrProductoPageBody {
      margin-top: 10px;
      margin-bottom: 12px;
    }
  }
  
  @media(1070px <=width <1320px) {
    .rowProductoItemPage {
      /* background: salmon; */
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      grid-auto-columns: auto;
      gap: 26px;
      padding: 10PX;
    }
  
    .hrProductoPageBody {
      margin-top: 10px;
      margin-bottom: 12px;
    }
  }
  
  @media(790px <=width <1070px) {
    .rowProductoItemPage {
      /* background: rgb(114, 116, 250); */
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-auto-columns: auto;
      gap: 26px;
      padding: 10PX;
    }
  
    .hrProductoPageBody {
      margin-top: 10px;
      margin-bottom: 22px;
      /* padding-top: -190px; */
    }
  }
  
  @media(670px <=width <790px) {
    .rowProductoItemPage {
      /* background: rgb(69, 71, 190); */
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      grid-auto-columns: auto;
      gap: 20px;
      padding: 10PX;
    }
  
    .hrProductoPageBody {
      margin-top: 10px;
      margin-bottom: 22px;
      /* padding-top: -190px; */
    }
  }
  
  @media(430px <=width <670px) {
    .rowProductoItemPage {
      /* background: rgb(164, 250, 114); */
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-auto-columns: auto;
      gap: 26px;
      padding: 10PX;
    }
  
    .hrProductoPageBody {
      margin-top: 10px;
      margin-bottom: 22px;
      /* padding-top: -190px; */
    }
  
    .cantidadProductoPageBody {
      font-size: 14px;
    }
  }
  
  @media(360px <=width <430px) {
    .rowProductoPage {
      width: 98%;
    }
  
    .rowProductoItemPage {
      /* background: salmon; */
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-auto-columns: auto;
      gap: 10px;
      padding: 10PX 2px;
    }
  
    .productoPageBox {
      margin-bottom: 30px;
    }
  
    .hrProductoPageBody {
      margin-top: 10px;
      margin-bottom: 22px;
      /* padding-top: -190px; */
    }
  
    .cantidadProductoPageBody {
      font-size: 14px;
    }
  }
  
  @media(325px <=width <360px) {
    .rowProductoPage {
      width: 100%;
    }
  
    .productoPageBox {
      margin-bottom: 30px;
    }
  
    .rowProductoItemPage {
      /* background: rgb(219, 168, 162); */
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-auto-columns: auto;
      gap: 8px;
      padding: 10PX;
    }
  
    .hrProductoPageBody {
      margin-top: 10px;
      margin-bottom: 22px;
      /* padding-top: -190px; */
    }
  
    .cantidadProductoPageBody {
      font-size: 14px;
    }
  }
  
  @media(width <325px) {
    .rowProductoPage {
      width: 100%;
    }
  
    .productoPageBox {
      margin-bottom: 30px;
    }
  
    .rowProductoItemPage {
      /* background: rgb(219, 168, 162); */
      display: grid;
      grid-template-columns: repeat(1, 1fr);
      grid-auto-columns: auto;
      gap: 8px;
      padding: 10PX;
    }
  
    .hrProductoPageBody {
      margin-top: 10px;
      margin-bottom: 22px;
      /* padding-top: -190px; */
    }
  
    .cantidadProductoPageBody {
      font-size: 14px;
    }
  }</style>