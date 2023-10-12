<template>
  

        <!--  -->

        <div class="row row-cols-1 row-cols-lg-1  mb-2 d-flex justify-content-center ">
            <!-- <div class="col  text-center">
                <img src="BT-DKP-LIQUI-DEPORTE-28SEP-HR.webp" class="card-img-top" alt="">
            </div> -->
            <swiper 
        :spaceBetween="30"
        :centeredSlides="true"
        :autoplay="{
            delay: 2500,
            disableOnInteraction: false,
        }"
    :pagination="{
      clickable: true,
    }"
    :navigation="true"
    :modules="modules"
    class="mySwiper"
    >
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
</template>

<script>
export default {

}
</script>

<style>

</style>