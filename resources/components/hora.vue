<template>
    <div class="containerPromocionSlay">
        <div class="rowPromocionSlay d-flex- justify-content-center- ">
            <div class="promocionHeadBox">
                <div class="promocion">
                    <span class="promoTextBox centerBox">¡ Solo por horas !</span>
                    <div class="horaRowBox">
                        <div class="horaBodyBox centerBox ">
                            <span class="horaTextBox " v-text="hours"></span>
                        </div>
                        <span class="pointText"> : </span>
                        <div class="horaBodyBox centerBox">
                            <span class="horaTextBox " v-text="minutes"></span>
                        </div>
                        <span class="pointText"> : </span>
                        <div class="horaBodyBox centerBox">
                            <span class="horaTextBox " v-text="seconds"></span>
                        </div>
                    </div>
                </div>
                <div class="titlePromocionBox centerBox">
                    <span class="textColor">Precios exclusivos por tiempo limitado</span>
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
.containerPromocionSlay {
    display: flex;
    justify-content: center;
    align-content: center;
}

.centerBox {
    display: flex;
    justify-content: center;
    align-items: center;
}

.textColor {
    color: white;
}
/* ----------- */
.promocionHeadBox {
    background: #1ccc86;
    margin-bottom: 2rem;
    display: grid;
    grid-template-columns: auto auto;
    Gap: 20px;
    padding: 20px;
    border-radius: 8px;
    /* width:98%; */
    place-content: center;
}

.promoTextBox {
    background: red;
    padding: 2px 10px 2px 2px;
    border-radius: 8px;
    margin-right: 8px;
    font-size: 32px;
    padding: 10px 45px 10px 45px;
    color: white;
    /* margin-left: -50px; */
}

.horaTextBox {
    /* background: orange; */
    border-radius: 4px;
    font-size: 30px;
}

.promocion {
    /* background: skyblue; */
    display: flex;
    justify-content: center;
    align-content: center;
}

.horaRowBox {
    display: flex;
    justify-content: center;
    align-items: center;
    /* background: olivedrab; */
    padding: 4px;
}

.pointText {
    color: white;
    font-size: 30px;
    padding: 8px;
}

.titlePromocionBox {
    font-size: 26PX;
}

@media(width >=1600px) {
    .rowPromocionSlay {
        width: 72%;
        /* background: skyblue; */
    }

    .horaBodyBox {
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 64px;
        height: 100%;
        border-radius: 5px;

    }
    .promoTextBox{
        /* background: orange; */
        margin-right:50px;
    }
    .promocionHeadBox{
        margin-bottom: 44px;
    }

}

/* 1093 */
@media(1121px <= width <=1599px) {
    .horaBodyBox {
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 64px;
        height: 100%;
        border-radius: 5px;
    }
   
}

@media(840px <= width <=1120px) {
    .rowPromocionSlay {
        width: 98%;
    }

    .horaBodyBox {
        background: white;
        width: 64px;
        height: 100%;
        border-radius: 5px;
    }
}

/* @media(443px < width < 840px){ */

@media(444px <=width <=839px) {
    .rowPromocionSlay {
        width: 96%;
    }

    .promoTextBox {
        font-size: 18px;
    }

    .titlePromocionBox {
        font-size: 18px;
    }

    .horaTextBox {
        font-size: 28px;
    }

    .horaBodyBox {
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 38px;
        /* height:40px; */
        /* height:100%; */
        /* padding: 30px; */
        /* padding:10px 20px 10px 20px; */
        border-radius: 5px;
    }

    .pointText {
        color: white;
        font-size: 30px;
        padding: 4px;
    }

}

@media(width <=443px) {

    /* grid-column:; */
    .promocion {
        /* background: salmon; */
        grid-column: span 2;
        margin-bottom: -10px;
    }

    .rowPromocionSlay {
        width: 96%;
    }

    .promoTextBox {
        font-size: 18px;
    }

    .titlePromocionBox {
        font-size: 18px;
    }

    .horaTextBox {
        font-size: 22px;
    }

    .titlePromocionBox {
        /* background: orange; */
        grid-column: span 2;
    }

    .promocionHeadBox {
        /* background: blue; */
        padding: 18px 10px 18px 10px;
    }

    /* .boxPromoTextEnd */
    .textColor {
        /* font-size:18px; */
    }

    .promoTextBox {
        /* background: red; */
        /* padding:-21px 1px -21px 1px; */
        padding: 1px 14px 1px 14px;
        border-radius: 8px;
        margin-right: 8px;
        /* font-size:32px; */
        color: white;
        /* margin-right:12px; */

        /* margin-left: -50px; */
    }

    .horaBodyBox {
        background: white;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 38px;
        /* padding:10px 20px 10px 20px; */
        border-radius: 5px;
    }

    .pointText {
        color: white;
        font-size: 30px;
        padding: 4px;
    }


}</style>
  