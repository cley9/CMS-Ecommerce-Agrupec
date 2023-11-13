<template>
    <div class="containerProductoTen ">
      <div class="rowProductoTen">
        <div class="columProductoTitle center">
          <h2 class="textTitleVenHome">¡Conoce los Productos <small class="colorText">que están en tendencia
              para la remodelación de la casa!</small></h2>
        </div>
        <div class="columProductoTen center">
          <div class="produtoTendenciaBox ">
            <div class="imgProductoTendenciaBox center">
              <img class="iconProductoTen" :src="'storage/img/icons/app-store-app.png'" alt="">
            </div>
            <h3 class="compraText center">Compra</h3>
            <p class="descripProductTen font-monospace center ">Ahora también compra productos desde tu
              celular y
              deja
              que nos encarguemos del envió.</p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
  
  }
  </script>
  
  <style scoped>
  .containerProductoTen {
    display: flex;
    justify-content: center;
    align-content: center;
  }
  
  .rowProductoTen {
    width: 69%;
    background: #F4F5F6;
    margin-bottom: 50px;
    border-radius: 8px;
    /* padding: 40px; */
    display: grid;
    grid-template-columns: auto auto;
  }
  
  .center {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
  .colorText{
    color: black;
  }
  .imgProductoTendenciaBox {
    /* background: blue !important; */
    text-align: center;
    margin-bottom: 20px;
    padding: 20px;
  }
  
  .iconProductoTen {}
  
  .compraText {
    margin-bottom: 22px;
  }
  
  .produtoTendenciaBox {
    background: #FFFFFF;
    box-shadow: 5px 10px 12px #d5dbdb;
    border-radius: 4px;
    padding: 38px 6px;
  }
  
  .columProductoTen {
    padding: 20px;
    /* background: salmon; */
    /* width:50%; */
  }
  
  @media(width >=1700px) {
    .rowProductoTen {
      width: 69%;
      padding: 40px;
    }
  
    .columProductoTitle {
      /* background: sandybrown; */
      padding: 20px 26px;
      /* width: 120%; */
      min-width: 800px;
    }
    .produtoTendenciaBox {
      padding: 38px 6px;
    }
  
    .iconProductoTen {
      width: 66px;
    }
  
  }
  
  @media(1300px <=width <=1700px) {
  
    .rowProductoTen {
      width: 80%;
      padding: 40px;
  
    }
  
    .columProductoTitle {
      /* background: sandybrown; */
      padding: 20px;
      /* width: 120%; */
      min-width: 680px;
    }
    .produtoTendenciaBox {
      padding: 40px 4px;
      width: 84%;
    }
    .columProductoTitle {
      /* background: blueviolet; */
    }
  
    .iconProductoTen {
      width: 68px;
    }
  }
  
  @media(1000px <=width <=1299px) {
  
    .rowProductoTen {
      width: 90%;
      padding: 40px;
    }
  
    .columProductoTitle {
      /* background: sandybrown; */
      padding: 20px;
      /* width: 120%; */
      min-width: 480px;
    }
  
    .produtoTendenciaBox {
      padding: 40px 6px;
    }
  
    .iconProductoTen {
      width: 66px;
      object-fit: cover;
    }
  }
  
  
  @media(600px<=width < 1000px) {
    .rowProductoTen {
      width: 90%;
      padding: 40px;
    }
  
    .columProductoTitle {
      /* background: sandybrown; */
      grid-column: span 2;
      padding: 20px;
    }
  
    .columProductoTen {
      grid-column: span 2;
    }
  
    .produtoTendenciaBox {
      /* background: blue !important; */
      padding: 20px 20px;
      width: 46% !important;
    }
  
    .imgProductoTendenciaBox{
      margin-bottom:0px;
      height:130px ;
      /* background: salmon; */
    }
    .iconProductoTen {
      padding: 40px;
      width: 150px;
    }
  
  }
  
  @media(width <600px) {
    .rowProductoTen {
      width: 100%;
      padding: 18px 2px;
    }
  
    .columProductoTitle {
      /* background: sandybrown; */
      grid-column: span 2;
      padding: 5px;
    }
  
    .columProductoTen {
      grid-column: span 2;
    }
  
    .produtoTendenciaBox {
      /* background: blue !important; */
      padding: 40px 20px;
      width: 86% !important;
    }
    .iconProductoTen {
      width: 100px;
      height: 90px;
      padding: 10px;
      object-fit: cover;
    }
  .imgProductoTendenciaBox{
    margin-bottom: 6px !important;
    /* background: slateblue !important; */
  }
  
  }</style>