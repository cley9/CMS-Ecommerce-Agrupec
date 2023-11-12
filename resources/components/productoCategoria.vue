<template>
    <div class="containerSlayCategoria">
        <div class="rowSlayCategoria">

            <swiper :slidesPerView="isMobile ? 1 : 4" :spaceBetween="30" :pagination="{
                clickable: true,
      }" :modules="modules">
        <swiper-slide> <a href="/Search?search=tanque+de+agua" class="imgCatalogoShadow">
            <img :src="'/storage/img/ProductoPromocion/2.png'" class="  imgCategoriaBody" alt="" draggable="false">
          </a></swiper-slide>
        <swiper-slide> <a href="/Search?search=pegamento pvc" class="">
            <img :src="'/storage/img/ProductoPromocion/3.png'" class="imgCategoriaBody" alt="" draggable="false">
        </a></swiper-slide>
        <swiper-slide><a href="/Search?search=codo c" class="">
            <img :src="'/storage/img/ProductoPromocion/4.png'" class="imgCategoriaBody" alt="" draggable="false">
        </a></swiper-slide>
        <swiper-slide class="boxSwiper">
            <a href="/Search?search=codo desague" class="">
                <img :src="'/storage/img/ProductoPromocion/5.png'" class="imgCategoriaBody" alt="" draggable="false">
          </a>
        </swiper-slide>
    </swiper>
</div>
    </div>
  </template>
  <script>
  // Import Swiper Vue.js components
  import { Swiper, SwiperSlide } from 'swiper/vue';
  
  // Import Swiper styles
  import 'swiper/css';
  import 'swiper/css/pagination';
  // import required modules
  import { Pagination } from 'swiper/modules';
  
  export default {
    data() {
      return {
        isMobile: window.matchMedia("(max-width: 700px)").matches,
      };
    },
    mounted() {
      window.matchMedia("(max-width: 700px)").addListener((event) => {
        this.isMobile = event.matches;
      });
    },
    components: {
      Swiper,
      SwiperSlide,
    },
    setup() {
      return {
        modules: [Pagination],
      };
    },
  };
  
  
  </script>
  
  <style scoped>
 .containerSlayCategoria{
    /* background: skyblue; */
    display: flex;
    justify-content: center;
    align-content:center;
    /* display: grid; */
    /* place-content: center; */
    /* display: flex;
    justify-content: center; */
 }
 .rowSlayCategoria{
    /* background: olivedrab; */
    width:94%;

 }
 .swiper{
    /* background:  blueviolet; */
    display: grid;
    grid-template-columns: auto;
 }
 .swiper-slide{
    /* background: blue !important; */

    /* background:orange; */
    /* width:10% !important; */
    
    /* place-content: center; */
    /* object-fit: cover; */
    /* min-width:30px; */
 }
 .imgCatalogoShadow{
    /* background: rebeccapurple !important; */
 }
.imgCategoriaBody{
    width:100%;
    object-fit: cover;
}
@media(1390px < width < 3669px){
    .containerSlayCategoria{
        /* background: black; */
        margin-bottom:30px;
    }
    .rowSlayCategoria{
        width:69%;
        padding:20px;
    }
}
@media(700px < width < 1190px){
    .containerSlayCategoria{
        /* background: wheat; */
    }
    .rowSlayCategoria{
        width:98%;
        padding:20px;
    }
}

@media( 500px < width < 700px){
    .containerSlayCategoria{
        /* background: orchid; */
    }
    .rowSlayCategoria{
        width:54%;
    }
}
 </style>  