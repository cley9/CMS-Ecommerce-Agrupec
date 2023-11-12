<template>
    <div class="containerSlayHome">
        <div class="conItemInfo">
            <h2 class="textTitleVenHome">¡Conoce los beneficios <small style="color:black">que
                    ofrecemos
                    para que tu compra sea un exito!</small></h2>
            <div class="boxSlayderMain">
                <swiper :slidesPerView="isMobile ? 1 : 4" :spaceBetween="6" :pagination="{
                    clickable: true,
                }" :modules="modules">
                    <swiper-slide>
                        <div class="infoProBox">
                            <div class="iconHeadSlay">
                                <img class="top iconIntemSlay" :src="'storage/img/icons/app-store-app.png'" alt="">
                            </div>
                            <h6 class="compraTextBody">Compra</h6>
                            <p class="font-monospace descripTextBody">
                                Ahora también compra productos desde tu
                                celular y
                                deja que nos encarguemos del envió.</p>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="infoProBox">
                            <div class="iconHeadSlay">
                                <img class="top iconIntemSlay" :src="'storage/img/icons/store.png'" alt="">
                            </div>
                            <h6 class="compraTextBody">Locales</h6>
                            <p class="font-monospace descripTextBody">
                                Nos encontramos actualmente en lima en el
                                distrito de San Juan de Lurigancho.</p>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="infoProBox">
                            <div class="iconHeadSlay">
                                <img class="top iconIntemSlay" :src="'storage/img/icons/delivery-truck.png'" alt="">
                            </div>
                            <h6 class="compraTextBody">Envios Perú</h6>
                            <p class="font-monospace descripTextBody">
                                Enviamos productos a todos los departamentos
                                del
                                Perú de manera segura y puntual.</p>
                        </div>
                    </swiper-slide>
                    <swiper-slide>
                        <div class="infoProBox">
                            <div class="iconHeadSlay">
                                <img class="iconIntemSlay" :src="'storage/img/icons/customer-service.png'" alt="">
                            </div>
                            <h6 class="h3- mb-3- compraTextBody text-center-">Atención 24/7</h6>
                            <p class="font-monospace descripTextBody">
                                Estamos para ayudarte en tus consultas o
                                brindarte información de nuevos productos.</p>
                        </div>
                    </swiper-slide>
                </swiper>
            </div>
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
@media(width >1500px) {
    .swiper {
        margin-left: 160px;
        margin-right: 160px;
        /* background: olivedrab !important; */
    }

    .textTitleVenHome {
        text-align: center;
        margin-left: 120px;
        margin-right: 120px;
        margin-bottom: 30px;
    }

    .conItemInfo {
        width: 80%;
        padding: 60px;
    }

    .swiper-slide {
        /* background: blue !important; */
        min-height: 418px !important;
        max-height: 418px !important;
    }
}

@media (min-width: 618px) and (max-width: 1500px) {

    /* @media(418px  <= width <= 1500px) { */
    .textTitleVenHome {
        text-align: center;
        margin-left: 0px;
        margin-right: 0px;
        margin-bottom: 30px;

    }

    .conItemInfo {
        width: 94%;
        padding: 20px;
    }

    .swiper-slide {
        /* background: rgb(192, 168, 216) !important; */
        display: grid;
        grid-template-columns: auto;
        padding: 23px;
        border-radius: 8px;
        place-items: center;
        min-height: 398px !important;
        max-height: 398px !important;
        /* text-align: center; */
    }

}

@media(width <618px) {
    .swiper {
        /* background: olivedrab !important; */
    }

    .textTitleVenHome {
        text-align: center;
        margin-left: 0px;
        margin-right: 0px;
    }

    .conItemInfo {
        width: 94%;
        padding: 20px;
    }

    .boxSlayderMain {
        /* background: rgb(47, 153, 23) !important; */
        padding: 30px !important;
    }
    .containerSlayHome {
    margin-bottom: 40px !important;
}
}

.containerSlayHome {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-bottom: 80px;
}

.textTitleVenHome {
    text-align: center;
}

.conItemInfo {
    background: #F4F5F6;
    border-radius: 10px;
}

.swiper-slide {
    display: grid;
    grid-template-columns: auto;
    padding: 23px;
    border-radius: 8px;
    place-items: center;
    background: white;
    border: 1px solid #DFDFDF;
    box-shadow: 1px 2px 3px 1px #E1E5E5;
    /* box-shadow: 1px 2px 3px 1px #F4F7F7; */
    /* box-shadow: 13px 23px 23px 1px #F4F7F7; */
    border-radius: 8px;
    /* text-align: center; */
}

.swiper-slide:hover {
    box-shadow: 2px 2px 12px 2px #F4F7F7;
    /* box-shadow: 2px 2px 12px 2px #eeeeee; */
    transition: 0.3s ease;
}

.iconIntemSlay {
    width: 34%;
    height: 100%;
    object-fit: cover;
    /* background: skyblue; */
}

.iconHeadSlay {
    /* background: steelblue; */
    text-align: center;
    margin-bottom: 48px;
}

.infoProBox {
    margin: 32px 0;

}

.compraTextBody {
    /* background: bisque; */
    display: flex;
    align-content: center;
    display: grid;
    place-content: center;
    /* size: 100px; */
    font-family: 'Roboto', sans-serif;
    font-size: 26px;
}

.descripTextBody {
    /* background: orange; */
    text-align: center;
}
</style>