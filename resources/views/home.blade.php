@extends('layout.layout')
@section('header')
    <style>
        nav svg {
            height: 20px;
        }
    </style>



    {{-- <!-- --------------------------------------------------------------------------------------slayder_img---> --}}
    <section class="boxCaruselMainHome" >
        <div id="carouselExampleIndicators" class="carousel slide boxCaruselMainHome" data-bs-ride="carousel">
            <div class="carousel-indicators btnItemCaruselMainHome">
                @php
                    $slayActivi = 0;
                    $slayBtn = 0;
                @endphp
                @foreach ($viewSlayderMain as $itemBtn)
                    @php
                        $slayBtn++;
                    @endphp
                    @if ($slayBtn === 1)
                        <button type="button" data-bs-target="#items" data-bs-slide-to="0" class="active btnCaruselMainHome" aria-current="true"
                            aria-label="Slide 1" ></button>
                    @else
                        <button type="button" class="btnCaruselMainHome" data-bs-target="#items" data-bs-slide-to="{{ $slayBtn - 1 }}"
                            aria-label="Slide {{ $slayBtn }}"></button>
                    @endif
                @endforeach

            </div>
            <div class="carousel-inner ">
                @foreach ($viewSlayderMain as $itemSlay)
                    @php
                        $slayActivi += 1;
                    @endphp
                    @if ($slayActivi === 1)
                        <div class="carousel-item active ">
                            <img src="{{ asset('storage/img/SlayderMain/' . $itemSlay->imagen . '') }}"
                                class="d-block w-100 imgCaruselMainHome" alt="..." draggable="false">
                        </div>
                    @else
                        <div class="carousel-item ">
                            <img src="{{ asset('storage/img/SlayderMain/' . $itemSlay->imagen . '') }}"
                                class="d-block w-100 imgCaruselMainHome" alt="..." draggable="false">
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
    <div class="container boxPrecioMainIcons">
        <div class="text-center mb-4">
            <h2>¡Precios locaz😵s! </h2>
            <small>en miles de productos </small>
        </div>
        <div class="row row-cols-4 row-cols-sm-3  row-cols-md-4 row-cols-lg-5 row-cols-xl-6 d-flex justify-content-center" >
            <div class="col-4 boxItemIconsHome">
                <a href="/Search?search=clavo">
                    <div class="col boxMainImgItems boxBackMainImgItems">
                        <img class="boxImgMainLink img-fluid" src="{{ asset('storage/img/Productos/968823.webp') }}"
                        alt="" draggable="false">
                    </div>
                    <div class="col iconIntemHome- text-center boxMainImgItems">
                        <a href="/Search?search=clavo" class="font-monospace-">Herramientas</a>
                    </div>
                </a>
            </div>
            <div class="col-4 boxItemIconsHome">
                <a href="/Search?search=Válvula">
                    <div class="col boxMainImgItems">
                        <img class="boxImgMainLink img-fluid" src="{{ asset('storage/img/Productos/681273.jpeg') }}"
                        alt="" draggable="false">
                    </div>
                    <div class="col iconIntemHome- text-center boxMainImgItems">
                        <a href="/Search?search=Válvula" class="font-monospace-">Válvula </a>
                    </div>
                </a>
            </div>
            <div class="col-4 boxItemIconsHome">
                <a href="/Search?search=tubo">
                    <div class="col boxMainImgItems">
                        <img class="boxImgMainLink img-fluid" src="{{ asset('storage/img/Productos/281393.jpg') }}"
                        alt="" draggable="false">
                    </div>
                    <div class="col iconIntemHome- text-center boxMainImgItems">
                        <a href="/Search?search=tubo" class="font-monospace-">Tubos</a>
                    </div>
                </a>
            </div>
            <div class="col-4 boxItemIconsHome">
                <a href="/Search?search=caño">
                    <div class="col boxMainImgItems">
                        <img class="boxImgMainLink img-fluid" src="{{ asset('storage/img/Productos/712572.jpg') }}"
                        alt="" draggable="false">
                    </div>
                    <div class="col iconIntemHome- text-center boxMainImgItems">
                        <a href="/Search?search=caño" class="font-monospace-">caños</a>
                    </div>
                </a>
            </div>

        </div>

    </div>
    <div class="container p-2 p-lg-4  p-md-4 boxInfoTendProHome  ">
        <div class="row d-flex align-items-center">
            <div class="col-lg-8  d-flex justify-content-center mb-3">
                <h2 class="textTitleVenHome text-center">¡Conoce los Productos <small style="color:black">que están en tendencia para la remodelación de la casa!</small></h2>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="col-2 boxInformationHome ">
                    <div class="d-flex justify-content-center boxItemImgHome">
                        <img class="icons--items--home- iconIntemHome img-fluid -card-img-top "
                            src="{{ asset('storage/img/icons/app-store-app.png') }}" alt="">
                    </div>
                    <div class="text-center">
                        <h6 class="h3 mb-3">Compra</h6>
                        <p class="h9 text-muted- font-monospace lh-base-">Ahora también compra productos desde tu celular y
                            deja
                            que nos encarguemos del envió.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-4 mb-md-2 pt-4 boxSimbolSlayProHome">
        <h6 class="display-6 textTitleSlayProHome">¡No los dejes ir!</h6>
    </div>

    <div class="container-fluid boxSlayProHomeView">
        <div class="row" id="news-slider">
                    @foreach ($slayderProducto as $itemProducto)
                        <div class="d-flex justify-content-center border  boxBodySlayMin">
                            <div class="row">
                                <div class="col-6 boxImgSlayMin me-2- d-flex  align-items-center justify-content-center ">
                                    <a href="{{ route('View.home.index', $id = $itemProducto['id']) }}"
                                        class="p-2 carrusel-min-pro">
                                        <img src="{{ asset('storage/img/Productos/' . $itemProducto['imagen'] . '') }}"
                                            class="img-fluid-a imgItemSlayMin" alt="" draggable="false">
                                    </a>
                                </div>
                                <div class="col-6 cuen">
                                    <div class="mb-2 boxTitleSlayMin">
                                        <h5 class="text-dark h6 txtBoxTitle- textBoxHeadTitle-">{{ $itemProducto['nombre'] }}
                                        </h5>
                                    </div>
                                    <div class="mb-2 d-flex justify-content-between  ">
                                        <span class="text-dark- txtBoxPreBefore textPrecioProBefore"><del>S/
                                                {{ number_format($itemProducto['precio'], 2, '.', ',') }}</del></span>
                                        <span class="text-dark textPrecioProAfter">S/
                                            {{ number_format($itemProducto['newPrecio'], 2, '.', ',') }}</span>
                                    </div>
                                    <div class=" align-items-center d-flex mb-2 ">
                                        <span class="h6 mb-0 text-muted fw-normal textCountProDis">
                                            <small class="">{{ $itemProducto['cantidad'] }} disponibles</small>
                                        </span>
                                    </div>
                                    <div class="col mb-3">
                                        <h6 class="text-center iconStartSlay">
                                            @for ($i = 1; $i <= rand(3, 5); $i++)
                                                <i class="bi bi-star-fill icons--star"></i>
                                            @endfor
                                        </h6>
                                        <div class=" d-flex justify-content-center">
                                            <a href="{{ route('View.home.index', $id = $itemProducto['id']) }}"
                                                class="btn btn-sm  btn--view-add btn-slay-producto-  btnEfectClick">Ver
                                                Producto </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
        </div>
    </div>

    <div class="container boxPresenProHome  ">
        <div class="">

            <div class="d-flex justify-content-center mb-3">
                <h2 class="textTitleVenHome text-center">¡Conoce los beneficios <small style="color:black">que ofrecemos
                        para que tu compra sea un exito!</small></h2>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-2 boxInformationHome ">
                    <div class="d-flex justify-content-center boxItemImgHome">
                        <img class="icons--items--home- iconIntemHome img-fluid -card-img-top "
                            src="{{ asset('storage/img/icons/app-store-app.png') }}" alt="">
                    </div>
                    <div class="text-center">
                        <h6 class="h3 mb-3">Compra</h6>
                        <p class="h9 text-muted- font-monospace lh-base-">Ahora también compra productos desde tu celular y
                            deja que nos encarguemos del envió.</p>
                    </div>
                </div>
                <div class="col-2 boxInformationHome d-sm-none d-none d-lg-block d-block">
                    <div class="d-flex justify-content-center boxItemImgHome">
                        <img class="icons--items--home- iconIntemHome img-fluid -card-img-top "
                            src="{{ asset('storage/img/icons/store.png') }}" alt="">
                    </div>
                    <div class="text-center">
                        <h6 class="h3 mb-3">Locales</h6>
                        <p class="h9 text-muted- font-monospace lh-base-">Nos encontramos actualmente en lima en el
                            distrito de San Juan de Lurigancho.</p>
                    </div>
                </div>
                <div class="col-2 boxInformationHome d-sm-none d-none d-lg-block d-block">
                    <div class="d-flex justify-content-center boxItemImgHome">
                        <img class="icons--items--home- iconIntemHome img-fluid -card-img-top "
                            src="{{ asset('storage/img/icons/delivery-truck.png') }}" alt="">
                    </div>
                    <div class="text-center">
                        <h6 class="h3 mb-3">Envios Perú</h6>
                        <p class="h9 text-muted- font-monospace lh-base-">Enviamos productos a todos los departamentos del
                            Perú de manera segura y puntual.</p>
                    </div>
                </div>
                <div class="col-2 boxInformationHome d-sm-none d-none d-lg-block d-block">
                    <div class="d-flex justify-content-center boxItemImgHome">
                        <img class="icons--items--home- iconIntemHome img-fluid -card-img-top "
                            src="{{ asset('storage/img/icons/customer-service.png') }}" alt="">
                    </div>
                    <div class="text-center">
                        <h6 class="h3 mb-3">Atención 24/7</h6>
                        <p class="h9 text-muted- font-monospace lh-base-">Estamos para ayudarte en tus consultas o
                            brindarte información de nuevos productos.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    {{-- <h2>{{ $viewProducto  }}</h2> --}}
    {{-- <div class="container">
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
    </div> --}}
    {{-- <br><br><br> --}}
    {{-- <head>323</head> --}}
     <div id="promocion"></div>
     <div class="" id="promoListProducto"></div>
    <div class="d-flex justify-content-center align-items-center boxTextTitleStock">
        <div
            class=" col-md-10 col-10 d-flex justify-content-center align-items-center  pt-2 rounded-3 title--producto-group">
            <small class="h3 ">Productos en Stock </small>
        </div>
    </div>
    <div class="container pt-4">
        <div
            class="row row-cols-2 row-cols-sm-3  row-cols-md-4 row-cols-lg-5 row-cols-xl-6 d-flex justify-content-center ">
            @foreach ($producto as $key)
                <div class="col  mb-5 mb-lg-6 ">
                    <div class="card box-love box-efect">
                        <a href="{{ route('View.home.index', $id = $key['id']) }}" class="pt-3">
                            <img src="{{ asset('/storage/img/Productos/' . $key['imagen'] . '') }}" class=" card-img-top"
                                width="200px" height="120px" alt="" draggable="false">
                        </a>
                        <div class="bg-warning- box--btn--addHomeP ">
                            <div class="card-body">
                                <div class="mb-2 d-flex  align-items-center  box--home--text">
                                    <h5 class="card-title text-dark h6 txtBoxTitle textBoxHeadTitle">{{ $key['nombre'] }}
                                    </h5>
                                </div>
                                <div class="mb-2 d-flex justify-content-between  ">
                                    <span class="text-dark- txtBoxPreBefore textPrecioProBefore"><del>S/
                                            {{ number_format($key['precio'], 2, '.', ',') }}</del></span>
                                    <span class="text-dark textPrecioProAfter">S/
                                        {{ number_format($key['newPrecio'], 2, '.', ',') }}</span>
                                </div>
                                <div class=" align-items-center d-flex mb-2 ">
                                    <span class="h6 mb-0 text-muted fw-normal textCountProDis">
                                        <small class="">{{ $key['cantidad'] }} disponibles</small>
                                    </span>
                                </div>
                                <hr class="arrow--box">

                                @if (session()->exists('name') && session()->get('rol') === '0')
                                    <div class="overlay d-flex align-items-center-- justify-content-center">
                                        <a onclick="addProCart({{ $key['id'] }},1,{{ $key['newPrecio'] }},'{{ $key['nombre'] }}','{{ $key['imagen'] }}')"
                                            class="icon btnAddCardLove btnEfectClick"><i class="bi bi-heart"></i></a>
                                    </div>
                                    <div class="box--btn--addHome">
                                        <div class=" d-flex justify-content-end align-items-center mb-4 ">
                                            <a class="btn-sm text-dark btn--view-add btn-sm btnEfectClick btnBodyAddProHome"
                                                id="addProCard{{ $key['id'] }}">Agregar</a>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a
                                                class="des{{ $key['id'] }} btn rounded-circle  btn--addCard--count btnEfectClick fw-normal">-</a>
                                            <span id="numDate{{ $key['id'] }}">1</span>
                                            <a
                                                class="start{{ $key['id'] }} btn rounded-circle btn--addCard--count btnEfectClick">+</a>
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
                                            class="btn btn-sm  btn--view-add btnEfectClick">Ver Producto </a>
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
