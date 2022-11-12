@extends('layout.layout')

@section('header')

    <body class="bg-light">
        <div class="container mb-4 pt-4">
            <div class="row ">
                @foreach ($productoId as $idProducto)
                    <div class="col-md-8   ">
                        <div class="row">

                            <div class="col-2 " style="width:140px;">
                                <div class="card card-body mb-2">
                                    <img src="{{ asset('storage/img/Productos/' . $idProducto['imagen'] . '') }}"
                                        class="card-img-top" />

                                </div>
                                <div class="card card-body mb-2">
                                    <img src="{{ asset('storage/img/Productos/' . $idProducto['imagen'] . '') }}"
                                        class="card-img-top" />

                                </div>
                                <div class="card card-body mb-2">
                                    <img src="{{ asset('storage/img/Productos/' . $idProducto['imagen'] . '') }}"
                                        class="card-img-top" />

                                </div>
                                <div class="card card-body mb-2">
                                    <img src="{{ asset('storage/img/Productos/' . $idProducto['imagen'] . '') }}"
                                        class="card-img-top" />

                                </div>

                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <img src="{{ asset('storage/img/Productos/' . $idProducto['imagen'] . '') }}"
                                    class="img-fluid" width="400px;" />
                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="  col mb-5">

                            <div class="col mb-5">
                                <h4 class="fw-normal">Descripción</h4>
                                <small class="h6 fw-normal "> {{ $idProducto['description'] }} </small>
                            </div>
                            <div class="col-md-7 col">

                                <div class="">
                                    <h6 class="h5 fw-normal mb-4">Características del producto</h6>

                                </div>
                                <div class=" row row-cols-2  row-cols-md-2  ">

                                    <div class="col  mb-4">
                                        <h6><i class="bi bi-tools"></i> Heramienta : <small class="h6 fw-normal">No</small>
                                        </h6>
                                    </div>
                                    <div class="col ">
                                        <h6><i class="bi bi-hurricane"></i> Material : <small
                                                class="h6 fw-normal">Sí</small></h6>
                                    </div>
                                    <div class="col ">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h6><i class="bi bi-gear-wide-connected"></i> Peso :
                                                <small class="h6 fw-normal">{{ $idProducto['peso'] }}</small>
                                                <span class="h6 fw-normal"> g </span>

                                            </h6>
                                        </div>

                                    </div>
                                    <div class="col ">
                                        <h6><i class="bi bi-egg-fried "></i> Tamaño : <small
                                                class="h6 fw-normal">Mediano</small></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <small class="h4 fw-normal">Más productos en nuestra tienda virtual </small>

                            <div class="">
                                Hay mas productos en variedad en estock , consultanos en linea con los productos a llevar
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">

                        <div class=" mb-4 p-4 rounded-3 box--view--favorite shadow-sm ">
                            <small class="text-muted">Nuevo</small>

                            <div class="align-items-center justify-content-between d-flex mb-2">
                                <h6 class="h5 ">{{ $idProducto['nombre'] }}</h6>
                                @if (session()->exists('name') && session()->get('rol') === '0')
                                @else
                                    <a class=" " onclick="msjInicieSesion()" style="font-size:25px;"><i
                                            class=" bi bi-heart"></i></a>
                                @endif
                            </div>
                            <div class="mb-2">
                                <small class="text-lef mb-3 text-muted fw-normal"><del><b>s/.
                                            {{ number_format($idProducto['precio'], 2, ',', '.') }}</b></del></small>
                            </div>
                            <div class="d-flex align-items-center ">

                                <h6 class="h3 fw-normal ">S/ {{ number_format($idProducto['newPrecio'], 2, ',', '.') }}
                                </h6>
                                <small class=" h5 fw-normal " style="color:#3BBD51;"> OFF</small>
                            </div>

                            <div class="mb-2">

                                <!-- <div class="fb-share-button" data-href="http://agrupec.com/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fagrupec.com/%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore btn btn-danger">Compartir</a></div> -->

                                <small class="mb-5"><a href="#" data-bs-toggle="modal"
                                        data-bs-target="#Mpayment">Ver los medios de pago</a> </small>

                            </div>
                            <div class="">
                                <small class="text-success"><i class="bi  bi-truck" style="font-size:23px;"></i> Envío
                                    gratis a todo el país</small>
                            </div>
                            <div class=" col-md-8	 offset-md-1 col-6 offset-6 mb-4">
                                <smal class="col">Lima, Lima</small>
                                    <div class="col">
                                        <a href="#" class="" data-bs-toggle="modal"
                                            data-bs-target="#district">Ver costos de envío</a>

                                    </div>

                            </div>
                            <div class=" align-items-center d-flex ">
                                <span class="h6 mb-4 text-muted fw-normal"> Cantidad : <small
                                        class="text-dark h6">{{ $idProducto['cantidad'] }} unidad</small> <small>
                                        ({{ $idProducto['cantidad'] }} disponibles)
                                    </small> </span>
                            </div>
                            <div class="text-center mb-4">

                                @if (session()->exists('name') && session()->get('rol') === '0')
                                    <button type="button" class="col-9 col-sm-9 col-md-12 col-lg-9 mb-3 btn btn-info "
                                        data-bs-toggle="modal" data-bs-target="#Mpayment">
                                        Comprar ahora</button>
                                    <a id="addProductoId" class="col-9 col-sm-9 col-md-12 col-lg-9 btn btn-primary">Agregar
                                        al carrito</a>
                                    <script>
                                        addProductoId.addEventListener("click", (e) => {
                                            console.log({{ $idProducto['id'] }});
                                            addProCart({{ $idProducto['id'] }}, 1, {{ $idProducto['newPrecio'] }},
                                                '{{ $idProducto['nombre'] }}', '{{ $idProducto['imagen'] }}');

                                        });
                                    </script>

                                    {{--  @else  --}}
                                @else
                                    <button type="button" class="col-9 col-sm-9 col-md-12 col-lg-9 mb-3 btn btn-info "
                                        onclick="msjInicieSesion()">Comprar ahora</button>
                                @endif
                            </div>
                            <div class="col mb-3">
                                <small><i class="bi bi-shield-check"></i> Se abrirá en una nueva ventana recibe el producto
                                    que esperabas o te devolvemos tu dinero.</small>
                            </div>
                            <div class="">
                                <small> <i class="bi bi-award "></i> 12 meses de garantía de fábrica.</small>

                            </div>
                        </div>
                        <div class="col">

                            <div class="box--view--favorite pt-3 p-4 shadow-sm  rounded-3">
                                <div class="mb-4">
                                    <small class="text-center h5 fw-normal ">Información de la tienda</small>
                                </div>

                                <div class="text-center">
                                    <a class="navbar-brand" href="index.php"><img
                                            src="{{ asset('storage/img/icons/tienda-de-reparacion.svg') }}"
                                            class="img-fluid " width="50px" height="50px" alt=""></a>

                                    <span> {{ config('constants.nameProyect') }}</span>

                                </div>
                                <hr>

                                <div class="mb-3">
                                    <p> <small class="text-center h6 fw-normal">Medios de pago </small></ p>
                                    <p> <small>Por aplicativos </small></p>


                                </div>

                                <div class="col  text-center mb-4">
                                    <a href="https://play.google.com/store/apps/details?id=pe.interbank.bie"
                                        target="_blank"> <img src="{{ asset('storage/img\medio de pago\lukita.png') }}"
                                            alt="" width="70px;"></a>
                                    <a href="https://play.google.com/store/apps/details?id=pe.com.interbank.mpay.customer&hl=es_PE&gl=US"
                                        target="_blank"> <img src="{{ asset('storage/img\medio de pago\tunki.png') }}"
                                            alt="" width="70px;"></a>

                                    <a href="https://www.bbva.pe/personas/servicios-digitales/lukita.html"
                                        target="_blank"> <img src="{{ asset('storage/img\medio de pago\pling.jpg') }}"
                                            alt="" width="70px;"></a>

                                    <a href="https://play.google.com/store/apps/details?id=com.bcp.innovacxion.yapeapp&hl=es_PE&gl=US"
                                        target="_blank"> <img src="{{ asset('storage/img\medio de pago\yape.jpg') }}"
                                            alt="" width="70px;"></a>

                                </div>
                                <div class="mb-1">

                                    <p class=""> <small class="text-center">Tarjetas de crédito y débito</small></p>

                                    <p class="mb-3 text-muted"> <small>¡Cuotas sin interés con bancos
                                            seleccionados!</small> </p>
                                </div>



                                <div class="col  text-center mb-3">
                                    <a href="https://www.bbva.pe/personas/servicios-digitales/banca-por-internet.html"
                                        target="_blank"> <img src="{{ asset('storage/img\medio de pago\bbva.png') }}"
                                            alt="" width="70px;"></a>
                                    <a href="https://bcpzonasegurabeta.viabcp.com/#/iniciar-sesion" target="_blank"><img
                                            src="{{ asset('storage/img\medio de pago\bcp.png') }}" alt=""
                                            width="70px;"></a>

                                    <a href="https://bancaporinternet.interbank.pe/" target="_blank"> <img
                                            src="{{ asset('storage/img\medio de pago\interbank.png') }}" alt=""
                                            width="70px;"></a>

                                    <a href="https://www.scotiabank.com.pe/Personas/Canales-digitales/canales/banca-por-internet"
                                        target="_blank"> <img
                                            src="{{ asset('storage/img\medio de pago\scotiabank.png') }}" alt=""
                                            width="70px;"></a>

                                </div>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#Mpayment">Conoce otros medios
                                    de pago</a>

                                <hr>


                            </div>
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>

        </div>
        @include('User.modalPaymentCart')
        @include('User.modalDestino')


        @include('User.modelAddProCart')

    </body>
@endsection
