@extends('layout.layout')
@section('header')
    <div class="container bg-light-  boxContainerSearchProduct">

        @if ($searchExists === false)
            <div class="d-flex justify-content-center">
                <div class="box-search-validar p-3 text-center">
                    <h4>Tu búsqueda no se encontro</h4>
                </div>
            </div>
        @endif
        <div class="row mb-4 slay--carusel p-4">
            @foreach ($slaySearch as $slaySearch)
                <div class="col text-center  box-slay-search">
                    <a href="{{ route('View.home.index', $id = $slaySearch->id) }}">
                        <img src="{{ asset('storage/img/Productos/' . $slaySearch->imagen . '') }}" class="card-img-top"
                            width="200px" />
                        <h5 class="card-title h6 text-dark">{{ $slaySearch->nombre }}</h5>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="row row-cols-2 row-cols-md-6 pt-4">
            @foreach ($search as $itemSearch)
                <div class="col mb-5 ">
                    <div class="card boxProductSearch">
                        <a href="{{ route('View.home.index', $id = $itemSearch->id) }}">
                            <img src="{{ asset('storage/img/Productos/' . $itemSearch->imagen . '') }}" class="card-img-top"
                                width="200px" />
                        </a>
                        <div class="card-body">
                            {{-- <div class="d-flex  align-items-center ">
                                    <h5 class="card-title h6 title--box--pro textTitleProSearch">{{ $itemSearch->nombre }}
                                    </h5>
                                </div> --}}
                            <div class="mb-2 d-flex  align-items-center  box--home--text">
                                <h5 class="card-title text-dark h6 txtBoxTitle textBoxHeadTitle">{{ $itemSearch->nombre }}
                                </h5>
                            </div>
                            <div class="mb-1 mb-md-0 d-flex justify-content-between  ">
                                <span class="box--text--pre- text-dark- txtBoxPreBefore textPrecioProBefore"><del>S/
                                        {{ number_format($itemSearch->precio, 2, '.', ',') }}</del></span>
                                <span class="box--text--pre- text-dark textPrecioProAfter">S/
                                    {{ number_format($itemSearch->newPrecio, 2, '.', ',') }}</span>
                            </div>
                            <div class=" align-items-center d-flex mb-3">
                                <span class="h6 mb-0 text-muted fw-normal">
                                    <small
                                        class="box--text--pre- h7 mb-0 text-muted fw-normal textCountProDis">{{ $itemSearch->cantidad }}
                                        disponibles </small>
                                </span>
                            </div>
                            <hr class="hrProductSearch ">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div class="col-12 btn-group d-flex justify-content-center">
                                    @if (session()->exists('name') && session()->get('rol') === '0')
                                        <a class="text-dark  btn--view-add btnEfectClick btnBodyAddPro"
                                            id="addProCard{{ $itemSearch->id }}"
                                            onclick=" addProCart({{ $itemSearch->id }}, 1, {{ $itemSearch->newPrecio }},
                                             '{{ $itemSearch->nombre }}', '{{ $itemSearch->imagen }}')">Agregar</a>
                                    @else
                                        <a onclick="msjInicieSesion()" class="btn btn--view-add btn-sm">Agregar </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('User.modelAddProCart')
@endsection
