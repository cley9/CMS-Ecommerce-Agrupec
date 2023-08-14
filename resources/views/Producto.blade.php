@extends('layout.layout')
@section('header')
    {{-- app --}}
    <nav class="navbar bg-light  d-block d-sm-block d-md-none ">
        <div class="container-fluid  navHeadDisingApp" >
            <small class="  h6"> Seleccione Producto : </small>
            <form class=" overflow-auto " id="multi-filters" method="post">
                <div class="row row-cols-2 row-cols-md-4 x-menu  ">
                    @foreach ($listCategory as $listCate)
                    <div class="col ">
                        <input type="checkbox" class="form-check-input p-2 bd-highlight btnFilterSearch" id="btn{{ $listCate['id'] }}" name="{{ $listCate['nombre'] }}"
                        value="Perfil de Aluminio">
                        <label class="form-check-label p-1 bd-highlight" for="btn{{ $listCate['id'] }}">{{ $listCate['nombre'] }}</label>
                    </div>
                    @endforeach
                </div>
        </div>
        </form>
        </div>
    </nav>
    {{-- <!-----------------------------------------------------------------------------------  -->start de la categoria  --}}
      <div class="container-fluid p-4 ">
        <div class="row  ">
         <div class="col-1 col-md-4 col-lg-3  d-none d-sm-none d-md-block ">
             <form class="" id="multi-filters"  method="post">
             <div class="container accordion  " id="accordionPanelsStayOpenExample" style="width: 315px; ">
               <div class="accordion-item">
                 <h2 class="accordion-header mb-3" id="panelsStayOpen-headingOne">
                   <button class="accordion-button listCategoryCard" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                       Producto
                   </button>
                 </h2>
                 <div id="panelsStayOpen-collapseOne" class=" " aria-labelledby="panelsStayOpen-headingOne">
                       <div class="vertical-menu bg-info">
                         @foreach ($listCategory as $listCate )
                        <div class="  list-group-item  align-items-center  d-flex bd-highlight "> <input type="checkbox" class="form-check-input p-2 bd-highlight btnFilterSearch" id="btnW{{ $listCate['id'] }}"  name="{{ $listCate['nombre'] }}" value="Ocre Bayer">
                          <label class="form-check-label p-1 bd-highlight"  for="btnW{{ $listCate['id'] }}">{{ $listCate['nombre'] }}</label>
                          <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="btnW{{ $listCate['id'] }}" >{{ $listCate['id'] }}</label>
                        </div>
                        @endforeach 
                       </div>
                 </div>
               </div>
             </div>
           </form>
         </div>
      
         <div class="col-md-9">
           <div class="text-center ">  <small class="h4  ">Lista de Producto </small></div>
           {{-- <div class="row  row-cols-2  row-cols-md-5 " id="filters-result" class="bg-white"> --}}
            <div class="row  row-cols-2  row-cols-md-6 row-cols-ms-4- listCategoryFilterClickBodyMain" id="listCatProduct" class="bg-white">
            </div>
         </div>
        </div>
      </div>
      
    {{-- <!-----------------------------------------------------------------------------------  -->end de la categoria  --}}
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div id="news-slider" class="owl-carousel">
                    @foreach ($viewProducto as $producto)
                        <div class="post-slide boxSlayderProSec" >
                            <div class="post-img">
                                <a href="{{ route('View.home.index', $id = $producto['id']) }}">
                                    <img src="{{ asset('storage/img/Productos/' . $producto['imagen'] . '') }}"
                                        class="img-fluid-a" alt="">
                                </a>
                                 {{-- <a href="" class="over-layer"><i class="fa fa-link"></i></a>  --}}
                            </div>
                            <div class="post-content">
                                <span>
                                    @for ($i = 1; $i <= 2; $i++)
                                        <i class="bi bi-star-fill icons--star"></i>
                                    @endfor
                                </span>
                                <a href="{{ route('View.home.index', $id = $producto['id']) }}" class="read-more btnEfectClick">Ver
                                    Producto</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{--    --}}
    <div class="container pt-4 mb-3 ">
        <div class="title--producto-group-2 rounded-3 pt-2 d-flex align-items-center justify-content-center"
            style="height:50px;">
            {{--  <small class="h4 ">Lista de <?php echo $nameListaProducto; ?> </small>  --}}
            <small class="h4 ">Lista de Producto</small>
        </div>
        <div class="row  row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5">
            @foreach ($viewProducto as $itemPro)
                <div class="pt-4 mb-4 ">
                    <div class="card shadow box--produ--view">
                        <a href="{{ route('View.home.index', $id = $itemPro['id']) }}">
                            <img src="{{ asset('storage/img/Productos/' . $itemPro['imagen'] . '') }}"
                                class="img-fluid-a- card-img-top" height="210px" width="100px" alt="">
                        </a>
                        <div class="card-body justify-content-between align-items-center">
                            <div class="d-flex  align-items-center ">
                                <h5 class="card-title title--box--pro-view txtBoxTitle">{{ $itemPro['nombre'] }}</h5>
                            </div>
                            <div class="mb-0 d-flex justify-content-between  ">
                                <span class="box--text--pre txtBoxPreBefore"><del>S/
                                        {{ number_format($itemPro['precio'], 2, '.', ',') }}</del></span>
                                <span class="box--text--pre">S/ {{ number_format($itemPro['precio'], 2, '.', ',') }}</span>
                            </div>
                            <div class=" align-items-center d-flex ">
                                <span class="h6 mb-0 text-muted fw-normal">
                                    <small class="box--text--pre">{{ $itemPro['cantidad'] }}: disponibles </small> </span>
                            </div>
                            <hr>
                            <div class="text-center">

                                {{--  <a onclick="confirmar('<?php echo $item['db_id']; ?>','<?php echo $_SESSION['sesionUser']; ?>','1','1','<?php echo $item['db_nombre']; ?>','<?php echo $item['db_imagen']; ?>','<?php echo $item['db_newPrecio']; ?>');" class="btn btn--view-add " >Agregar </a>  --}}
                                @if (session()->exists('name') && session()->get('rol') === '0')
                                    <a class="btn--addCard--countMaster btn-sm text-dark viewCP btnEfectClick"
                                        id="addProCard{{ $itemPro['id'] }}"
                                        onclick=" addProCart({{ $itemPro['id'] }}, 1, {{ $itemPro['newPrecio'] }},
        '{{ $itemPro['nombre'] }}', '{{ $itemPro['imagen'] }}')">Agregar</a>
                                @else
                                    <a onclick="msjInicieSesion()" class="btn btn--view-add btn-sm btnEfectClick">Agregar </a>
                                @endif
                                <a href="{{ route('View.home.index', $id = $itemPro['id']) }}" class="btn btn--view-page btn-sm btnEfectClick">Ver </a>
                                {{--  <a href="view-page?view=<?php echo $item['db_id']; ?>" class="btn btn--view-page">Ver </a>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{--    --}}
    @include('User.modelAddProCart')
@endsection
