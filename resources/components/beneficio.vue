<template>
    <div class="container d-flex justify-content-center boxListPromoImg- boxPresenProHome">
        
        
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 col-lg-12 d-flex justify-content-center mb-3">
                    <h2 class="textTitleVenHome text-center">¡Conoce los beneficios <small style="color:black">que ofrecemos
                            para que tu compra sea un exito!</small></h2>
                </div>
            <!-- <swiper :slidesPerView="4" :spaceBetween="30" :pagination="{ -->
                <div class="col-sm-12 col-md-8 col-lg-12">
            <swiper :slidesPerView="isMobile ? 1 : 4" :spaceBetween="30" :pagination="{
                clickable: true,    
            }" :modules="modules" class="mySwiper  boxBeneficioHome">
                <swiper-slide class="boxBeneItems">
                    <div class="col-2 boxInformationHome ">
                        <div class="d-flex justify-content-center boxItemImgHome">
                            <img class="icons--items--home- iconIntemHome img-fluid -card-img-top "
                                :src="'storage/img/icons/app-store-app.png'" alt="">
                        </div>
                        <div class="text-center">
                            <h6 class="h3 mb-3">Compra</h6>
                            <p class="h9 text-muted- font-monospace lh-base-">Ahora también compra productos desde tu
                                celular y
                                deja que nos encarguemos del envió.</p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide class="boxBeneItems">

                    <div class="col-2 boxInformationHome">
                        <div class="d-flex justify-content-center boxItemImgHome">
                            <img class="icons--items--home- iconIntemHome img-fluid -card-img-top "
                                :src="'storage/img/icons/store.png'" alt="">
                        </div>
                        <div class="text-center">
                            <h6 class="h3 mb-3">Locales</h6>
                            <p class="h9 text-muted- font-monospace lh-base-">Nos encontramos actualmente en lima en el
                                distrito de San Juan de Lurigancho.</p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide class="boxBeneItems">

                    <div class="col-2 boxInformationHome">
                        <div class="d-flex justify-content-center boxItemImgHome">
                            <img class="icons--items--home- iconIntemHome img-fluid -card-img-top "
                                :src="'storage/img/icons/delivery-truck.png'" alt="">
                        </div>
                        <div class="text-center">
                            <h6 class="h3 mb-3">Envios Perú</h6>
                            <p class="h9 text-muted- font-monospace lh-base-">Enviamos productos a todos los departamentos
                                del
                                Perú de manera segura y puntual.</p>
                        </div>
                    </div>
                </swiper-slide>
                <swiper-slide class="boxBeneItems">

                    <div class="col-2 boxInformationHome">
                        <div class="d-flex justify-content-center boxItemImgHome">
                            <img class="icons--items--home- iconIntemHome img-fluid -card-img-top "
                                :src="'storage/img/icons/customer-service.png'" alt="">
                        </div>
                        <div class="text-center">
                            <h6 class="h3 mb-3">Atención 24/7</h6>
                            <p class="h9 text-muted- font-monospace lh-base-">Estamos para ayudarte en tus consultas o
                                brindarte información de nuevos productos.</p>
                        </div>
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

@media(width >= 1200px){

    .boxBeneficioHome{
    /* width: 68rem; */
    width: 1050px;
}
.boxBeneItems{
    /* background: red !important; */
    /* width: 40px !important; */
    margin-right: 25px !important;
    /* display: flex !important;
    justify-content: center !important; */
}
}

/* @media(width < 1200px){
    .boxBeneficioHome{
        background: blue !important;
}
.boxBeneItems{
    background: red !important;
    width: 230px !important;
    margin-right: 25px !important;
}
} */
@media(width <= 700px){
 
.boxBeneficioHome{
    width: 390px;
}
.boxBeneItems{
    /* background: orange !important; */
    display: flex !important;
    justify-content: center !important;
}   
}
</style>  