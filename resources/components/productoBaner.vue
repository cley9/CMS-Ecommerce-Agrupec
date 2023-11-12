<template>
  <div class="containerBanerSlay">
    <div class="rowBanerSlay">
      <swiper :spaceBetween="30" :centeredSlides="true" :autoplay="{
        delay: 2500,
        disableOnInteraction: false,
      }" :pagination="{
  clickable: true,
}" :navigation="true" :modules="modules">
        <swiper-slide>
          <!-- <div class="col  text-center"> -->
            <img :src="'/storage/img/SlayderPromocion/2.png'" class=" imgBanerSlay" alt="">
          <!-- </div> -->
        </swiper-slide>
        <swiper-slide>
          <!-- <div class=""> -->
            <img :src="'/storage/img/SlayderPromocion/3.png'" class=" imgBanerSlay" alt="">
          <!-- </div> -->
        </swiper-slide>

        <swiper-slide>
          <!-- <div class="col  text-center"> -->
            <img :src="'/storage/img/SlayderPromocion/4.png'" class=" imgBanerSlay" alt="">
          <!-- </div> -->
        </swiper-slide>

        <swiper-slide>
          <!-- <div class="col  text-center"> -->
            <img :src="'/storage/img/SlayderPromocion/5.png'" class=" imgBanerSlay" alt="">
          <!-- </div> -->
        </swiper-slide>
        <swiper-slide>
          <!-- <div class="col  text-center"> -->
            <img :src="'/storage/img/SlayderPromocion/6.png'" class=" imgBanerSlay" alt="">
          <!-- </div> -->
        </swiper-slide>
        <swiper-slide>
          <!-- <div class="col  text-center"> -->
            <img :src="'/storage/img/SlayderPromocion/7.png'" class=" imgBanerSlay" alt="">
          <!-- </div> -->
        </swiper-slide>
      </swiper>
      <div class="banerBoxSlay">
        <div class="columBoxSlay">
          <img :src="'/storage/img/SlayderPromocion/6.png'" class="imgBanerSlay" alt="" draggable="false">
        </div>
        <div class="columBoxSlay">
          <img :src="'/storage/img/SlayderPromocion/7.png'" class="imgBanerSlay" alt="" draggable="false">
        </div>
      </div>

    </div>
  </div>
</template>
  
<script>
import { Swiper, SwiperSlide } from 'swiper/vue';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
import { Autoplay, Pagination, Navigation } from 'swiper/modules';

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const onSwiper = (swiper) => {
      console.log(swiper);
    };
    const onSlideChange = () => {
      console.log('slide change');
    };
    return {
      modules: [Autoplay, Pagination, Navigation],
    };
  },
  data() {
    return {
      days: 0,
      hours: 0,
      minutes: 0,
      seconds: 0,
    };
  },
  mounted() {
    this.fetchPromotionCountdown();
  },
  methods: {
    async fetchPromotionCountdown() {
      try {
        const response = await fetch("/api/promocionCoutDow");
        if (response.ok) {
          const data = await response.json();
          this.hours = data.hours;
          this.minutes = data.minus;
          this.seconds = data.secong;
          this.startCountdown();
        } else {
          console.error("Error al obtener datos de la API");
        }
      } catch (error) {
        console.error("Error al obtener datos de la API:", error);
      }
    },
    startCountdown() {
      setInterval(() => {
        if (this.seconds > 0) {
          this.seconds--;
        } else if (this.minutes > 0) {
          this.minutes--;
          this.seconds = 59;
        } else if (this.hours > 0) {
          this.hours--;
          this.minutes = 59;
          this.seconds = 59;
        } else {
          // El tiempo ha terminado, puedes manejarlo como desees
          clearInterval(this.startCountdown);
        }
      }, 1000);
    },
  },

};

</script>
<style scoped>
.containerBanerSlay{
  display:flex;
  justify-content:center;
  align-content: center;
}
.center{
  display: flex;
  justify-content: center;
  align-items: center;
}
.imgBanerSlay{
  width:100%;
  border-radius: 6px;
}
.banerBoxSlay{
  display:grid;
  grid-template-columns:auto auto;
}
@media(width >= 1051px){
  .rowBanerSlay{
    width:80%;
  }
  .banerBoxSlay{
    margin-bottom:40px;
  }
  .swiper{
    margin-bottom: 10px;
  }
  .columBoxSlay{
    padding:8px;
  }
  .swiper-slide{
    /* border-radius:80px; */
  }
}
@media( 631px <= width <= 1050px){
.rowBanerSlay{
    width:98%;
  }
   .banerBoxSlay{
    display: none;
    margin-bottom:40px;
  }
  .swiper{
    margin-bottom: 30px;
  }
}
@media(width <= 630px){
  .rowBanerSlay{
    width:98%;
  }
  .banerBoxSlay{
    display: none;
    margin-bottom:40px;
  }
  .swiper{
    margin-bottom: 20px;
  }
  .swiper-slide{

  }
  .columBoxSlay{
    padding:8px;
  }
  .imgBanerSlay{
    height:138px;
    /* object-fit: cover; */
    
  }
  
}
</style>