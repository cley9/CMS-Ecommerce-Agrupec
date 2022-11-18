@extends('layout.layout')
@section('header')
    <style>
        nav svg {
            height: 20px;
        }
    </style>



    {{-- <!-- --------------------------------------------------------------------------------------slayder_img---> --}}
    <section class="">
        <div id="carouselExampleIndicators" class="carousel slide bg-primary" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @php
                    $slayActivi = 0;
                    $slayBtn = 0;
                @endphp
                @foreach ($viewSlayderMain as $itemBtn)
                    @php
                        $slayBtn++;
                    @endphp
                    @if ($slayBtn === 1)
                        <button type="button" data-bs-target="#items" data-bs-slide-to="0" class="active" aria-current="true"
                            aria-label="Slide 1"></button>
                    @else
                        <button type="button" data-bs-target="#items" data-bs-slide-to="{{ $slayBtn - 1 }}"
                            aria-label="Slide {{ $slayBtn }}"></button>
                        {{-- <button type="button" data-bs-target="#items" data-bs-slide-to="1" aria-label="Slide {{$slayBtn}}"></button> --}}
                    @endif
                @endforeach

            </div>
            <div class="carousel-inner ">
                @foreach ($viewSlayderMain as $itemSlay)
                    @php
                        $slayActivi += 1;
                    @endphp
                    @if ($slayActivi === 1)
                        <div class="carousel-item active">
                            <img src="{{ asset('storage/img/SlayderMain/' . $itemSlay->imagen . '') }}"
                                class="d-block w-100" alt="..." height="410px">
                        </div>
                    @else
                        <div class="carousel-item ">
                            <img src="{{ asset('storage/img/SlayderMain/' . $itemSlay->imagen . '') }}"
                                class="d-block w-100" alt="..." height="410px">
                        </div>
                    @endif
                @endforeach

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    {{-- @include('Producto') --}}

    <div class="container mb-4 mb-md-2 pt-4">
        <h6 class="display-6">¡No los dejes ir!</h6>


        <!--<div class="row d-flex justify-content-center align-items-center bg-info mb-5 p-5">-->
        <!--<div class="col-12 col-md-10 bg-primary d-flex align-items-center">-->
        <div id="carouselExampleIndicators_" class="carousel slide p-0 " data-bs-ride="carousel">
            <div class="carousel-inner  p-md-4 p-0 ">
                <div class="carousel-item active">
                    <!--<div class="row  slider--mins  p-2 " width="500px;">-->
                    <style media="screen">
                        .componet--one {
                            /*height: 400px;*/
                            /*background: orange;*/
                        }
                    </style>

                    <div class="row p-md-5 p-3 ">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row p-md-5 p-3 ">
                    </div>
                </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators_"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators_"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    {{-- <h1>hi</h1> --}}
    {{-- <div class="alert {{ Session::get('flash_type') }}">
    <h3>{{ Session::get('flash_message') }}</h3>

</div> --}}
    {{-- flash msg --}}
    {{-- @if (Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif --}}
    <div class="container-fluid mb-4">
        <div class="row  ">
            <div class="col-md-12">
                <div id="news-slider" class="owl-carousel-">
                    @foreach ($slayderProducto as $itemProducto)
                        <div class="col-11 card- post-slide- border bg-info- slay-box-item">
                            <div class="row d-flex- justify-content-between-">
                                <dir class="col-6 bg-primary- me-2 ">
                                    <a href="{{ route('View.home.index', $id = $itemProducto['id']) }}"
                                        class="p-2 carrusel-min-pro">
                                        <img src="{{ asset('storage/img/Productos/' . $itemProducto['imagen'] . '') }}"
                                            class="img-fluid-a slay-img-item" height="120px" width="140px" alt="">
                                    </a>
                                </dir>
                                <div class="col-5 pt-2 bg-warning-s  ">
                                    <h6 class="mb-4 fw-normal- text-center">{{ $itemProducto['nombre'] }}</h6>
                                    <h6 class="text-center">
                                        @for ($i = 1; $i <= 2; $i++)
                                            <i class="bi bi-star-fill icons--star"></i>
                                        @endfor
                                    </h6>
                                    <div class=" d-flex justify-content-center">
                                        <a href="{{ route('View.home.index', $id = $itemProducto['id']) }}"
                                            class="btn btn-sm  btn--view-add btn-slay-producto-">Ver Producto </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <br><br><br>






    {{-- <h2>{{ $viewProducto  }}</h2> --}}
    <div class="container">
        <div class="row">
            <div class="col card">

                <img class="icons--items--home" src="{{ asset('storage/img/icons/itemCar.png') }}" alt="">
            </div>
            <div class="col card">
                <img class="icons--items--home" src="{{ asset('storage/img/icons/itemHelp.webp') }}" alt="">

            </div>
            <div class="col card">
                <img class="icons--items--home" src="{{ asset('storage/img/icons/itemHome.webp') }}" alt="">

            </div>
            <div class="col card">
                <img class="icons--items--home" src="{{ asset('storage/img/icons/itemVen.webp') }}" alt="">

            </div>
            <div class="col card">
                <img class="icons--items--home" src="{{ asset('storage/img/icons/itemMom.png') }}" alt="">

            </div>
        </div>
    </div>
    <br><br><br>

    <div class=" pt-3 mb-4  d-flex justify-content-center align-items-center">
        <div
            class=" col-md-10 col-10 d-flex justify-content-center align-items-center  pt-2 rounded-3 title--producto-group">
            <small class="h3 ">Productos en Stock </small>
        </div>
    </div>

    <link rel="stylesheet" href="css/style-start.css">
    <div class="container pt-4">
        <div
            class="row row row-cols-2 row-cols-sm-3  row-cols-md-4 row-cols-lg-5 row-cols-xl-6 d-flex justify-content-center ">
            @foreach ($producto as $key)
                <div class="col  mb-5 mb-lg-6 ">
                    <div class="card box-love box-efect">
                        <a href="{{ route('View.home.index', $id = $key['id']) }}" class="pt-3">
                            <img src="{{ asset('storage/img/Productos/' . $key['imagen'] . '') }}" class=" card-img-top"
                                width="200px" height="120px" alt="">
                        </a>
                        <div class="bg-warning- box--btn--addHomeP ">
                            <div class="card-body">
                                <div class="mb-2 d-flex  align-items-center  box--home--text">
                                    <h5 class="card-title text-dark h6">{{ $key['nombre'] }}</h5>
                                </div>
                                <div class="mb-2 d-flex justify-content-between  ">
                                    {{--  <span class="text-dark"><del>s/ {{ $key['precio'] }}</del></span>  --}}
                                    <span class="text-dark"><del>S/
                                            {{ number_format($key['precio'], 2, '.', ',') }}</del></span>

                                    <span class="text-dark">S/ {{ number_format($key['newPrecio'], 2, '.', ',') }}</span>
                                </div>
                                <div class=" align-items-center d-flex mb-2 ">
                                    <span class="h6 mb-0 text-muted fw-normal">
                                        <small>{{ $key['cantidad'] }} disponibles </small> </span>
                                </div>
                                <hr class="arrow--box">

                                @if (session()->exists('name') && session()->get('rol') === '0')
                                    <div class="overlay d-flex align-items-center-- justify-content-center">
                                        <a onclick="addProCart({{ $key['id'] }},1,{{ $key['newPrecio'] }},'{{ $key['nombre'] }}','{{ $key['imagen'] }}')"
                                            class="icon"><i class="bi bi-heart"></i></a>
                                    </div>
                                    <div class="box--btn--addHome">
                                        <div class=" d-flex justify-content-end align-items-center mb-4 ">
                                            <a class="btn--addCard--countMaster btn-sm text-dark viewCP"
                                                id="addProCard{{ $key['id'] }}">Agregar</a>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center ">
                                            <a
                                                class="des{{ $key['id'] }} btn rounded-circle  btn--addCard--count fw-normal">-</a>
                                            <span id="numDate{{ $key['id'] }}">1</span>
                                            <a
                                                class="start{{ $key['id'] }} btn rounded-circle btn--addCard--count">+</a>
                                        </div>
                                    </div>

                                    <script type="text/javascript">
                                        let printCant{{ $key['id'] }} = document.getElementById("numDate{{ $key['id'] }}");
                                        let count{{ $key['id'] }} = 1;
                                        let btnIn{{ $key['id'] }} = document.querySelector(".start{{ $key['id'] }}");
                                        let btnDes{{ $key['id'] }} = document.querySelector(".des{{ $key['id'] }}");
                                        let getAddPro{{ $key['id'] }} = document.getElementById("addProCard{{ $key['id'] }}");
                                        getAddPro{{ $key['id'] }}.addEventListener("click", () => {
                                            addProCart({{ $key['id'] }}, count{{ $key['id'] }}, {{ $key['newPrecio'] }},
                                                '<?php echo $key['nombre']; ?>', '<?php echo $key['imagen']; ?>');
                                        });

                                        function contIn() {
                                            if (count{{ $key['id'] }} < {{ $key['cantidad'] }}) {
                                                count{{ $key['id'] }}++;
                                                printCant{{ $key['id'] }}.textContent = count{{ $key['id'] }};
                                            }
                                        }

                                        function contDes() {
                                            if (count{{ $key['id'] }} > 1) {
                                                count{{ $key['id'] }}--;
                                                printCant{{ $key['id'] }}.textContent = count{{ $key['id'] }};
                                            }
                                        }
                                        btnIn{{ $key['id'] }}.addEventListener("click", contIn);
                                        btnDes{{ $key['id'] }}.addEventListener("click", contDes);
                                    </script>
                                @else
                                    <div class="overlay d-flex align-items-center-- justify-content-center">
                                        <a onclick="msjInicieSesion();" class="icon"><i class="bi bi-heart"></i></a>
                                    </div>

                                    <div class=" d-flex justify-content-center align-items-center">
                                        <a href="{{ route('View.home.index', $id = $key['id']) }}"
                                            class="btn btn-sm  btn--view-add">Ver Producto </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $producto->links() }}
    {{-- @include('User.modelViewAdd') --}}
    @include('User.modelAddProCart')
@endsection
