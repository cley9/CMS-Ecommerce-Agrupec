<template>
  <div class="container boxPromoMain">

    <div class="row row-cols-1 row-cols-lg-1  mb-2 d-flex justify-content-center ">
      <!-- <div class="col  text-center">
                <img src="BT-DKP-LIQUI-DEPORTE-28SEP-HR.webp" class="card-img-top" alt="">
            </div> -->
      <swiper :spaceBetween="30" :centeredSlides="true" :autoplay="{
        delay: 2500,
        disableOnInteraction: false,
      }" :pagination="{
  clickable: true,
}" :navigation="true" :modules="modules" class="mySwiper">
        <swiper-slide>
          <div class="col  text-center">
            <!-- <img src="BT-DKP-LIQUI-DEPORTE-28SEP-HR.webp" class="card-img-top" alt=""> -->
            <img src="/storage/img/SlayderPromocion/1.png" class="card-img-top" alt="">

          </div>
        </swiper-slide>

        <swiper-slide>
          <div class="col  text-center">
            <img src="/storage/img/SlayderPromocion/2.png" class="card-img-top" alt="">
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="col  text-center">
            <img src="/storage/img/SlayderPromocion/3.png" class="card-img-top" alt="">
          </div>
        </swiper-slide>

        <swiper-slide>
          <div class="col  text-center">
            <img src="/storage/img/SlayderPromocion/4.png" class="card-img-top" alt="">
          </div>
        </swiper-slide>

        <swiper-slide>
          <div class="col  text-center">
            <img src="/storage/img/SlayderPromocion/5.png" class="card-img-top" alt="">
          </div>
        </swiper-slide>
        <!-- <swiper-slide>
        <div class="col  text-center">
            <img src="BT-DKP-LIQUI-DEPORTE-28SEP-HR.webp" class="card-img-top" alt="">
        </div>
    </swiper-slide> -->

      </swiper>
      <!-- <div class="col   text-center">
                <img src="BT-DKP-LIQUI-DEPORTE-28SEP-HR.webp" class="card-img-top" alt="">
            </div> -->
    </div>

    <div class="row row-cols-1 row-cols-lg-2  mb-2 d-flex justify-content-center  das">
      <div class="col  text-center mb-2">
        <!-- <img src="banner one.png" class="card-img-top" alt=""> -->
        <img src="/storage/img/SlayderPromocion/6.png" class="card-img-top" alt="" draggable="false">
        <!-- <img src="BT-DKP-LIQUI-DEPORTE-28SEP-HR.webp" class="card-img-top" alt=""> -->
      </div>
      <div class="col   text-center">
        <!-- <img src="BT-DKP-LIQUI-DEPORTE-28SEP-HR.webp" class="card-img-top" alt=""> -->
        <img src="/storage/img/SlayderPromocion/7.png" class="card-img-top" alt="" draggable="false">
      </div>
    </div>
    <div class="boxPromocionHead">
      <h2 class="text-center textPromoMain"><span class="boxPromoText text-white">¡ Solo por horas !</span>
        <span class="boxTextHora" v-text="hours"></span> <span class="text-white"> : </span> <span class="boxTextHora"
          v-text="minutes"></span><span class="text-white"> : </span>
        <span class="boxTextHora textSecond" v-text="seconds"></span>
        <span class="boxPromoTextEnd text-white h5 facter">Precios exclusivos por tiempo limitado</span>
      </h2>
    </div>


    <!-- <div class="row row-cols-2 row-cols-lg-4">
      <div class="col mb-3">
        <div>
          <a href="/Search?search=tanque+de+agua" class="boxListPromo">
            <img src="/storage/img/ProductoPromocion/2.png" class="card-img-top" alt="" draggable="false">
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="/Search?search=pegamento pvc" class="boxListPromo">
            <img src="/storage/img/ProductoPromocion/3.png" class="card-img-top" alt="" draggable="false">
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="/Search?search=codo c" class="boxListPromo">
            <img src="/storage/img/ProductoPromocion/4.png" class="card-img-top" alt="" draggable="false">
          </a>
        </div>
      </div>
      <div class="col">
        <div>
          <a href="/Search?search=codo desague" class="boxListPromo">
            <img src="/storage/img/ProductoPromocion/5.png" class="card-img-top" alt="" draggable="false">
          </a>
        </div>
      </div>
    </div> -->
  </div>
</template>
  
<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from 'swiper/vue';

// Import Swiper styles
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
//   import '../css/style.css';
// import required modules
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
      counter: "74:30:00",
      hours: "",
      minutes: "",
      seconds: "",
    };
  },
  mounted() {
    let hours = 74;
    let minutes = 30;
    let seconds = 0;

    const interval = setInterval(() => {
      if (hours === 0 && minutes === 0 && seconds === 0) {
        clearInterval(interval);
      } else {
        if (minutes === 0 && seconds === 0) {
          hours--;
          minutes = 59;
          seconds = 59;
        } else if (seconds === 0) {
          minutes--;
          seconds = 59;
        } else {
          seconds--;
        }

        this.counter = `${hours.toString().padStart(2, "0")}:${minutes
          .toString()
          .padStart(2, "0")}:${seconds.toString().padStart(2, "0")}`;

        const [h, m, s] = this.counter.split(":");
        this.hours = h;
        this.minutes = m;
        this.seconds = s;
      }
    }, 1000);
  },
};
</script>
  
<style>
@media (width >=700px) {

  /*  box descuentos por horas*/
  .boxPromocionHead {
    display: flex;
    align-items: center !important;
    justify-content: center;
    background: #1ccc86;
    /* background: rebeccapurple; */
    margin-bottom: 20px;
    height: 100px;
    border-radius: 8px;
  }

  .boxPromoText {
    background: red;
    padding: 12px 50px 12px 50px;
    border-radius: 8px;
    margin-right: 40px;
  }

  /* dfa */
  /* eliminar el margin del h2 para centrar bien verticalmente */
  .boxPromocionHead h2 {
    margin: 0;
  }

  .boxPromocionHeadc {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .boxPromoMain {
    /* background: #1ccc86; */
    margin-bottom: 40px;
  }

  .boxPromoTextEnd {
    /* display: flex; */
    /* justify-content: center; */
    /* align-items: center; */
    margin-left: 20px;
  }

  .boxPromoTextCent {
    padding: 12px 20px 12px 20px;
    background: #0D6EFD;
    color: white;
  }

  .boxTextHora {
    background: white;
    padding: 12px 12px 12px 12px;
    border-radius: 4px;
  }

}

@media (width < 700px) {

  /*  box descuentos por horas*/
  .boxPromocionHead {
    display: flex;
    align-items: center !important;
    justify-content: center;
    background: #1ccc86;
    /* background: rebeccapurple; */
    margin-bottom: 20px;
    height: 100px;
    border-radius: 8px;
  }

  .boxPromoText {
    background: red;
    padding: 2px 10px 2px 2px;
    border-radius: 8px;
    margin-right: 8px;
    /* margin-left: -50px; */
  }

  .facter {
    position: absolute;
    margin-top: 40px !important;
    /* margin-right: 20px !important; */
    margin-left: -352px !important;

  }

  .textPromoMain {
    margin-top: -8% !important;
  }

  /* dfa */
  /* eliminar el margin del h2 para centrar bien verticalmente */
  .boxPromocionHead h2 {
    margin: 0;
  }

  .boxPromocionHeadc {
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .boxPromoMain {
    /* background: #1ccc86; */
    margin-bottom: 40px;
  }

  .boxPromoTextEnd {
    /* display: flex; */
    /* justify-content: center; */
    /* align-items: center; */
    margin-left: 20px;
  }

  .boxPromoTextCent {
    padding: 12px 20px 12px 20px;
    background: #0D6EFD;
    color: white;
  }

  .textSecond {
    /* color:; */
    /* position: fixed;
  margin-top: 0px !important; */
    /* margin-right: 80px !important; */
  }

  .boxTextHora {
    background: white;
    padding: 4px 4px 4px 4px;
    border-radius: 4px;
  }
}

/* list producto promocion */
.boxListPromo {}

.boxListPromo:hover {
  /* background:black; */
  /* z-index: 1; */
  /* position:absolute; */
  /* background-color: rgba(0, 0, 0, 0); Fondo transparente inicialmente */
  /* transition: background-color 0.3s ease; Transición suave para el fondo */
  opacity: 0.9;
  transition: 0.5s ease;
}

/* slay de vue */
.das {
  /* display: inline; */

  /* background: orange !important; */
  /* display: flex;
     justify-content: center !important; */
}

/* .boxPromoText{
  background: red;
  padding: 12px 60px 12px 40px;
  border-radius: 8px;
  margin-right: 40px;
} */</style>
