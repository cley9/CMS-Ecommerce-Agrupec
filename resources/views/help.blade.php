@extends('layout.layout')
@section('header')
    <div class="container-fluid style--body-content p-5">

        <div class="container mb-5 ">
            <div class="row text-center">
                <h3 class="h1 mb-5 fw-normal">Central de Atención </h3>
                <h6 class="h4  fw-normal">Resolver tus consultas ahora es más fácil a través de nuestros <h6
                        class="h4 help--number mb-5">canales de atención.</h6>
                </h6>
                <div class="col-4 mb-4 mb-md-1 ">
                    <div class=" shadow p-4 c bg-light ">
                        <small class="h5 fw-normal ">Ingresa a nuestro canal de atención Whatsapp:</small>
                        <h3 class=" help--number">+51 {{ config('constants.numContact') }}</h3>
                        <a href="https://api.whatsapp.com/send?phone=923223" target="_blank">Consultar ahora</a>

                    </div>
                </div>
            </div>
            <div class="row text-center justify-content-end">
                <div class="col-md-4 mb-4  ">
                    <div class=" shadow p-4 c bg-light    ">
                        <small class="h5 fw-normal ">Llámanos</small>
                        <div class="mb-0">
                            <small class=" h6 help--number">123 <small class="h6 fw-normal text-muted">desde tu
                                    Bitel</small></small>
                        </div>
                        <div class="mb-0">
                            <small class=" h6 help--number">{{ config('constants.numProvincia') }} <small
                                    class="h6 fw-normal text-muted">desde Provincias y sin costo</small></small>
                        </div>
                        <div class="mb-2">
                            <small class=" h6 help--number">+51 {{ config('constants.numContact') }} <small
                                    class="h6 fw-normal text-muted">desde otro operador</small></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center d-flex mb-5  justify-content-center ">
                <div class="col-md-4  ">
                    <div class=" shadow p-4 c d-flex align-items-center bg-light">
                        <div class="mb-0">
                            <small class="h5 fw-normal ">Por correo electrónico </small>
                            <a href="https://mail.google.com/" target="_blank">{{ config('constants.gmailPersonal') }} </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class=" pt-2 pt-md-5 col-12 d-flex justify-content-center ">

                <div class="col-md-12 col-12  p-4 what--app shadow">
                    <div class="row  d-flex justiffdy-content-center ">
                        <div class="col-md-4 d-flex justify-content-center align-items-center  d-none d-sm-none d-md-block">
                            <img src="{{ asset('storage/img/icons/shopp1.svg') }}" alt="" class="img-fluid ">
                        </div>

                        <div class="col-md-6 col-12 mb-md-3 mb-4 ">
                            <div class="mb-5 ">
                                <div class="col-md-12 offset-md-1">
                                    <img src="{{ asset('storage/img/icons/logoVentas.png') }}" class="img-flid"
                                        alt="">
                                    <h5 class="fw-normal">¿Qué puedes hacer con el app AgrupecVentas?</h5>
                                </div>
                            </div>
                            <div class="mb-0">
                                <small class="h7 fw-normal">Consultar tu saldo, aplicaciones gratis…</small>
                            </div>
                            <div class="mb-0">
                                <small class="h7 fw-normal">Pagar tu recibo</small>
                            </div>
                            <div class="mb-0">
                                <small>Comprar tus herramientas favoritos</small>
                            </div>
                            <div class="mb-0">
                                <small>Acceder a descuentos con Cuponazo de Compra</small>
                            </div>
                            <div class="mb-2 ">
                                <small> Encontrar nuestras tiendas</small>
                            </div>

                        </div>

                        <div class="col-md-2 col-12  d-flex justify-content-center ">

                            <div class="   bg-light border--box-help pt-md-1  mb-5 ">

                                <!-- <div class=" mb-5 bg-info" > -->
                                <div class="mb-3 mb-md-1 text-center pt-md-1 pt-2">
                                    <small class="h6 fw-normal ">Descárgalo en</small>
                                </div>
                                <div class="mb-md-0 mb-2 text-center p-md-2 ">
                                    <a href="https://play.google.com/store/apps" target="_blank"> <img
                                            src="{{ asset('storage/img/icons/google-play.png') }}"
                                            class="img-fluid col-md-12 col-10 " alt=""> </a>
                                </div>
                                <div class="mb-md-0 mb-2 text-center p-md-2">
                                    <a href="https://www.apple.com/la/search/app?src=globalnav" target="_blank"> <img
                                            src="{{ asset('storage/img/icons/app-store.png') }}"
                                            class="img-fluid col-md-12 col-10 " alt=""> </a>
                                </div>
                                <div class="mb-0 text-center p-md-2">
                                    <a href="https://appgallery.huawei.com/#/Categories" target="_blank"> <img
                                            src="{{ asset('storage/img/icons/app-gallery.png') }}"
                                            class="img-fluid col-md-12 col-10" alt=""> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-5">
        <div class="row row-cols-1 row-cols-md-3  g-4  p-4 d-flex align-itmes-center">
            <div class="col   ">
                <div class="col card  text-center  rounded-3  p-3">
                    <small class="h4 ">Vision</small>
                    <p class="h9  mb-0">Ser la empresa ferretera preferida por nuestros clientes, brindándoles soluciones y
                        servicios de calidad.</p>
                    <div class=" text-center  ">
                        <a class="foda--view"href="#"><i class="bi bi-award "></i></a>
                    </div>
                </div>
            </div>

            <div class="col ">
                <div class="col card  text-center  rounded-3 p-3">
                    <small class="h4 ">Contáctenos</small>
                    <p class="h9  mb-0">Dirección: diresctio<br>
                        <span>Teléfono: numcontacto</span>
                        <br>
                        Correo: gmail
                    </p>
                    <div class=" text-center  ">
                        <a class="foda--view"href="{{ url('Contactenos') }}"><i class="bi bi-telephone-plus "></i></a>
                    </div>
                </div>
            </div>

            <div class="col ">
                <div class="col card  text-center  rounded-3 p-3">
                    <small class="h4 ">Valores</small>
                    <p class="h9 mb-0">Comprometidos con la honestidad y responsabilidad para la búsqueda de la excelencia.
                    </p>
                    <div class=" text-center  ">
                        <a class="foda--view" href="#"><i class="bi bi-bookmark-heart "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        let btnOpenPopup = document.querySelector('.whatsapp-button');
        let popup = document.querySelector('.popup-whatsapp');
        popup.classList.toggle('is-active-whatsapp-popup')
        popup.style.animation = "fadeIn .6s 0.0s both";
    </script>
@endsection
