<template>
  <div class="container d-flex justify-content-center boxListPromoImg">
    <swiper :slidesPerView="isMobile ? 1 : 4" :spaceBetween="30" :pagination="{
      clickable: true,
    }" :modules="modules" class="mySwiper ">
      <swiper-slide> <a href="/Search?search=tanque+de+agua" class="boxListPromo">
          <img :src="'/storage/img/ProductoPromocion/2.png'" class="card-img-top boxListPromo" alt="" draggable="false">
        </a></swiper-slide>
      <swiper-slide> <a href="/Search?search=pegamento pvc" class="boxListPromo">
          <img :src="'/storage/img/ProductoPromocion/3.png'" class="card-img-top" alt="" draggable="false">
        </a></swiper-slide>
      <swiper-slide><a href="/Search?search=codo c" class="boxListPromo">
          <img :src="'/storage/img/ProductoPromocion/4.png'" class="card-img-top" alt="" draggable="false">
        </a></swiper-slide>
      <swiper-slide class="boxSwiper">
        <a href="/Search?search=codo desague" class="boxListPromo">
          <img :src="'/storage/img/ProductoPromocion/5.png'" class="card-img-top" alt="" draggable="false">
        </a>
      </swiper-slide>
    </swiper>
  </div>
</template>
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
// import './style.css';
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
#app {
  height: 100%;
}

html,
body {
  position: relative;
  height: 100%;
}

@media (width >=700px) {
  body {
    background: orange;
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
  }

  .swiper {
    width: 100%;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: blue;
    width: 302px !important;
    /* border-radius: 7px; */

    /* height:28% !important; */
    /* Center slide text vertically */
    display: flex;
    justify-content: center;
    align-items: center;
    /* border-radius: 38px; */
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  /*  */
  .boxListPromo {
    /* border-radius: 6px; */
  }

  .boxListPromoImg {
    margin-bottom: 46px;
  }
}

@media (width <700px) {
  .swiper {
    width: 100% !important;
    height: 100%;
  }

  .swiper-slide {
    text-align: center;
    font-size: 18px;
    /* background: blue; */
    /* border-color: white; */
    /* border: 10px; */
    width: 100% !important;
    /* height:28% !important; */
    /* Center slide text vertically */
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .boxListPromoImg {
    margin-bottom: 20px;
  }
}
</style>  