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
            <img :src="'/storage/img/SlayderPromocion/2.png'" class="card-img-top" alt="">  
          </div>
        </swiper-slide>

        <swiper-slide>
          <div class="col  text-center">
                        <img :src="'/storage/img/SlayderPromocion/2.png'" class="card-img-top" alt="">
          </div>
        </swiper-slide>
        <swiper-slide>
          <div class="col  text-center">
                        <img :src="'/storage/img/SlayderPromocion/3.png'" class="card-img-top" alt="">
          </div>
        </swiper-slide>

        <swiper-slide>
          <div class="col  text-center">
                        <img :src="'/storage/img/SlayderPromocion/4.png'" class="card-img-top" alt="">
          </div>
        </swiper-slide>

        <swiper-slide>
          <div class="col  text-center">
                        <img :src="'/storage/img/SlayderPromocion/5.png'" class="card-img-top" alt="">
          </div>
        </swiper-slide>
      </swiper>
    </div>

    <div class="row row-cols-1 row-cols-lg-2  mb-2 d-flex justify-content-center  das">
      <div class="col  text-center mb-2">
        <!-- <img src="banner one.png" class="card-img-top" alt=""> -->
                <img :src="'/storage/img/SlayderPromocion/6.png'" class="card-img-top" alt="" draggable="false">
        <!-- <img src="BT-DKP-LIQUI-DEPORTE-28SEP-HR.webp" class="card-img-top" alt=""> -->
      </div>
      <div class="col   text-center">
        <!-- <img src="BT-DKP-LIQUI-DEPORTE-28SEP-HR.webp" class="card-img-top" alt=""> -->
                <img :src="'/storage/img/SlayderPromocion/7.png'" class="card-img-top" alt="" draggable="false">
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
  <div>
      <!-- <p>Countdown: {{ hours }}:{{ minutes }}:{{ seconds }}</p> -->
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
      // mark:"../../public/1.png",
      // mark:"./public/1.png",
      // cley:"https://laravelacademy.org/wp-content/uploads/2016/08/00-featured-vuejs-logo-simple-256x128.jpg",
      // promotio: "@promo/1.png",
      // counter: "74:30:00",
      // hours: "",
      // minutes: "",
      // seconds: "",
      // hours: 0,
      //   minutes: 0,
      //   seconds: 0,
    };
  },

//   data() {
//   return {
//     days: 0,
//     hours: 0,
//     minutes: 0,
//     seconds: 0,
//   };
// },
// mounted() {
//   this.fetchPromotionCountdown();
// },
// methods: {
//   async fetchPromotionCountdown() {
//     try {
//       const response = await fetch("/api/promocionCoutDow");
//       if (response.ok) {
//         const data = await response.json();
//         this.days = data.days;
//         this.hours = data.hours;
//         this.minutes = data.minutes;
//         this.seconds = data.seconds;
//         this.convertDaysToHours(); // Convierte los días en horas
//         this.startCountdown();
//       } else {
//         console.error("Error al obtener datos de la API");
//       }
//     } catch (error) {
//       console.error("Error al obtener datos de la API:", error);
//     }
//   },
//   convertDaysToHours() {
//     // Convierte los días a horas y suma al total de horas
//     this.hours += this.days * 24;
//   },
//   startCountdown() {
//     setInterval(() => {
//       if (this.seconds > 0) {
//         this.seconds--;
//       } else if (this.minutes > 0) {
//         this.minutes--;
//         this.seconds = 59;
//       } else if (this.hours > 0) {
//         this.hours--;
//         this.minutes = 59;
//         this.seconds = 59;
//       } else {
//         // El tiempo ha terminado, puedes manejarlo como desees
//         clearInterval(this.startCountdown);
//       }
//       // Almacena los valores actualizados en el almacenamiento local
//       this.storeCountdownValues();
//     }, 1000);
//   },
//   storeCountdownValues() {
//     // Almacena los valores en el almacenamiento local del navegador
//     localStorage.setItem('countdownValues', JSON.stringify({
//       days: this.days,
//       hours: this.hours,
//       minutes: this.minutes,
//       seconds: this.seconds
//     }));
//   },
// },



  data() {
    return {
      days:0,
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


  // mounted() {
  //     this.updateCountdown();
  //     setInterval(this.updateCountdown, 1000);
  //   },
  //   methods: {
  //     updateCountdown() {
  //       console.log("hola");
  //       // Llama a la API para obtener la hora objetivo (timestamp)
  //       axios.get('/api/promocionCoutDow')
  //         .then((response) => {
  //           const targetTime = response.data.target_time * 1000; // Multiplica por 1000 para convertir a milisegundos
  //           const currentTime = Date.now();
  //           const timeDiff = targetTime - currentTime;
  
  //           if (timeDiff > 0) {
  //             this.hours = Math.floor(timeDiff / 3600000);
  //             this.minutes = Math.floor((timeDiff % 3600000) / 60000);
  //             this.seconds = Math.floor((timeDiff % 60000) / 1000);
  //             console.log(this.seconds);
  //           } else {
  //             this.hours = 0;
  //             this.minutes = 0;
  //             this.seconds = 0;
  //             console.log("else ",this.seconds);

  //           }
  //         })
  //         .catch((error) => {
  //           console.error(error);
  //         });
  //     },
  //   },
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
    /* background: orange; */
    /* width: 30rem !important; */
    /* min-width: 290px !important; */
  }
  /* .textSecond{
    background: red;
    width: 230px !important;
  } */
  /* .boxPromocionHead .textSecond {
  width: 230px !important;
} */

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
