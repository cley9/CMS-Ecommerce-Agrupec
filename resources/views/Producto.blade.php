
@extends('layout.layout')
      @section('header')
{{--    --}}
<nav class="navbar bg-light  d-block d-sm-block d-md-none ">
    <div class="container-fluid  ">

        <small class="  h6"> Seleccione Producto : </small>

      <form class=" overflow-auto " id="multi-filters" method="post">

      <div class="row row-cols-2 row-cols-md-4 x-menu ">
          <div class="col  ">
            <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck1"  name="db_nombre[]" value="Perfil de Aluminio">
            <label class="form-check-label p-1 bd-highlight"  for="exampleCheck1">Perfil de Aluminio</label>
          </div>

            <div class="col ">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck2" name="db_nombre[]" value="Fragua">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck2">  Fragua </label>
            </div>
            <div class="col ">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck3" id="type_3" name="db_nombre[]" value="Pegamento">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck3">Pegamento </label>
            </div>
            <div class="col ">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck4" id="type_3" name="db_nombre[]" value="Cantoneras">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck4">Cantoneras </label>
            </div>
            <div class="col ">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck5" id="type_3" name="db_nombre[]" value="Tubo de Agua">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck5">Tubo de Agua </label>
            </div>
            <div class="col">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck6" id="type_3" name="db_nombre[]" value="Tubo de Luz">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck6">Tubo de Luz </label>
            </div>
            <div class="col ">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck7" id="type_3"    name="db_nombre[]"
              value="Perfil de Plastico">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck7">Perfil de Plastico </label>
            </div>
            <div class="col">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck8"  name="db_nombre[]" value="Nivelador">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck8">Niveladores</label>
            </div>

            <div class="col">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck9"  name="db_nombre[]" value="Tubo de Desague (Nicol)">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck9">Tubo de Desague
              </label>
            </div>
            <div class="col ">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck10"  name="db_nombre[]" value="Caños de Cosina">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck10">Caños de Cosina
              </label>
            </div>
            <div class="col  d-flex  align-items-center  justify-content-center">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck11"  name="db_nombre[]" value="Caño Lavatorio Nacional">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck11"> Caño Lavatorio Nacional
              </label>
            </div>
            <div class="col d-flex  align-items-center  justify-content-center">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck12"  name="db_nombre[]" value="Caño Lavatorio ">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck12">Caño Lavatorio Importado
              </label>
            </div>
            <div class="col">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck13"  name="db_nombre[]" value="Caño de Jardin">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck13">Caño de Jardin
              </label>
            </div>
            <div class="col">
              <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck14"  name="db_nombre[]" value="Ocre Bayer ">
              <label class="form-check-label p-1 bd-highlight"  for="exampleCheck14">Ocre Bayer
              </label>
            </div>  <div class="col ">
                <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck15"  name="db_nombre[]" value="Tapas de Desague PVC">
                <label class="form-check-label p-1 bd-highlight"  for="exampleCheck15">Tapas de Desague
                </label>
              </div>  <div class="col ">
                  <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck16"  name="db_nombre[]" value="One Piece">
                  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck16">One Piece
                  </label>
                </div>


        </div>




      </div>
      </form>

    </div>
  </nav>


  <!-----------------------------------------------------------------------------------  -->

  <div class="container-fluid p-4 ">
    <div class="row  ">
     <div class="col-1 col-md-4 col-lg-3  d-none d-sm-none d-md-block ">

       <form class="" id="multi-filters"  method="post">



         <div class="container accordion  " id="accordionPanelsStayOpenExample" style="width: 315px; ">
           <div class="accordion-item">
             <h2 class="accordion-header mb-3" id="panelsStayOpen-headingOne">
               <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                   Producto
               </button>
             </h2>

             <div id="panelsStayOpen-collapseOne" class=" " aria-labelledby="panelsStayOpen-headingOne">

                   <div class="vertical-menu bg-info">



                     <div class="  list-group-item  align-items-
                     center  d-flex bd-highlight ">
                     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="itemSearch1"  name="db_nombre[]" value="Perfil de Aluminio">
                     <label class="form-check-label p-1 bd-highlight"  for="itemSearch1">Perfil de Aluminio</label>
                     <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="itemSearch1" >1</label>
                     </div>
                     <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
                     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck2" name="db_nombre[]" value="Fragua">
                     <label class="form-check-label p-1 bd-highlight"  for="exampleCheck2">  Fragua </label>
                     <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck2" >2</label>
                     </div>
                     <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
                     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck3" id="type_3" name="db_nombre[]" value="Pegamento">
                     <label class="form-check-label p-1 bd-highlight"  for="exampleCheck3">Pegamento </label>
                   <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck3" >3</label>
                     </div>


                     <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
                     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck4" id="type_3" name="db_nombre[]" value="Cantoneras">
                     <label class="form-check-label p-1 bd-highlight"  for="exampleCheck4">Cantoneras </label>
                   <label class="badge ms-auto p-2 bd-highlight btn-numbers"  for="exampleCheck4" >4</label>
                     </div>

                     <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
                     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck5" id="type_3" name="db_nombre[]" value="Tubo de Agua">
                     <label class="form-check-label p-1 bd-highlight"  for="exampleCheck5">Tubo de Agua </label>
                   <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck5" >5</label>
                     </div>

                     <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
                     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck6"  name="db_nombre[]" value="Tubo de Luz">
                     <label class="form-check-label p-1 bd-highlight"  for="exampleCheck6">Tubo de Luz </label>
                   <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck6" >6</label>
                     </div>

  <!-- ------------------------------------------- -->

  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
   <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck7"  name="db_nombre[]"
   value="Perfil de Plastico">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck7"> Perfil de Plastico </label>
  <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck7" >7</label>

  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight ">
     <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck8"  name="db_nombre[]" value="Nivelador">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck8"> Niveladores</label>
  <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck8" >8</label>

  </div>

  <div class="  list-group-item  align-items-center  d-flex bd-highlight "> <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck9"  name="db_nombre[]" value="Tubo de Desague (Nicol)">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck9"> Tubo de Desague(Nicol)</label>
  <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck9" >9</label>

  </div>
  <!-- ---------------------------------- -->
  <div class="  list-group-item  align-items-center  d-flex bd-highlight "> <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck10"  name="db_nombre[]" value="Caños de Cosina">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck10"> Caños de Cosina</label>
  <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck10" >10</label>
  <!-- falta insertar data -->
  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight "> <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck11"  name="db_nombre[]" value="Caño Lavatorio Nacional">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck11"> Caño Lavatorio Nacional  </label>
  <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck11" >11</label>
  <!-- falta insertar data -->

  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight "> <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck12"  name="db_nombre[]" value="Caño Lavatorio">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck12"> Caño Lavatorio Importado </label>
  <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck12" >12</label>

  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight "> <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck13"  name="db_nombre[]" value="Caño de Jardin">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck13"> Caño de Jardin </label>
  <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck13" >13</label>

  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight "> <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck14"  name="db_nombre[]" value="Ocre Bayer">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck14"> Ocre Bayer</label>
  <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck14" >14</label>

  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight "> <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck15"  name="db_nombre[]" value="Tapas de Desague PVC">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck15"> Tapas de Desague PVC</label>
  <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck15" >15</label>
  <!-- falta insertar data -->

  </div>
  <div class="  list-group-item  align-items-center  d-flex bd-highlight "> <input type="checkbox" class="form-check-input p-2 bd-highlight" id="exampleCheck16"  name="db_nombre[]" value="One Piece">
  <label class="form-check-label p-1 bd-highlight"  for="exampleCheck16"> One Piece</label>
  <label class="badge ms-auto p-2 bd-highlight btn-numbers" for="exampleCheck16" >16</label>

  </div>

                   </div>
             </div>
           </div>
         </div>

       </form>
     </div>

     <div class="col-md-9">
       <div class="text-center ">  <small class="h4  ">Lista de Producto</small></div>
       <div class="row  row-cols-2  row-cols-md-5 " id="filters-result" class="bg-white">

          <!-- //mostarar lo pintado  de js -->
       </div>
     </div>

    </div>
  </div>




      {{--    --}}
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="news-slider" class="owl-carousel">
      @foreach ($viewProducto as $producto)
        <div class="post-slide">
          <div class="post-img">
            <a href="{{route('View.home.index',$id=$producto['id'])}}">
              <img src="{{asset('storage/img/Productos/'.$producto['imagen'].'')}}" class="img-fluid-a" alt="">
            </a>
             {{--  <a href="" class="over-layer"><i class="fa fa-link"></i></a>  --}}
          </div>
          <div class="post-content">
            <span>
              @for ($i = 1; $i <=2; $i++)
              <i class="bi bi-star-fill icons--star"></i>
              @endfor
            </span>
            <a href="{{route('View.home.index',$id=$producto['id'])}}" class="read-more">Ver Producto</a>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </div>
</div>
{{--    --}}
<div class="container pt-4 mb-3 ">
    <div class="title--producto-group-2 rounded-3 pt-2 d-flex align-items-center justify-content-center" style="height:50px;">
        {{--  <small class="h4 ">Lista de <?php echo $nameListaProducto; ?> </small>  --}}
        <small class="h4 ">Lista de  </small>
    </div>
    <div class="row  row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5">
      @foreach ( $viewProducto as $itemPro  )
      <div class="pt-4 mb-4 ">
          <div class="card shadow box--produ--view"  >
                <a href="{{route('View.home.index',$id=$itemPro['id'])}}">
                    <img src="{{asset('storage/img/Productos/'.$itemPro['imagen'].'')}}" class="img-fluid-a- card-img-top" height="120px" width="100px" alt="">
        </a>
          <div class="card-body justify-content-between align-items-center">
              <div class="d-flex  align-items-center ">
                  <h5 class="card-title title--box--pro-view">{{$itemPro['nombre']}}</h5>
                </div>
                <div class="mb-0 d-flex justify-content-between  ">
                    <span class="box--text--pre"><del>S/ {{number_format($itemPro['precio'], 2, ".", ",")}}</del></span>
                    <span class="box--text--pre">S/ {{number_format($itemPro['precio'], 2, ".", ",")}}</span>
                </div>
                <div class=" align-items-center d-flex ">
           <span class="h6 mb-0 text-muted fw-normal">
           <small class="box--text--pre">{{$itemPro['cantidad']}}: disponibles </small>  </span>
           </div>
             <hr>
    <div class="text-center">

        {{--  <a onclick="confirmar('<?php echo $item['db_id']; ?>','<?php echo $_SESSION['sesionUser']; ?>','1','1','<?php echo $item['db_nombre'];?>','<?php echo $item['db_imagen'];?>','<?php echo $item['db_newPrecio'];?>');" class="btn btn--view-add " >Agregar </a>  --}}
        @if (session()->exists('name') && session()->get('rol') === '0')
        <a class="btn--addCard--countMaster btn-sm text-dark viewCP"
        id="addProCard{{ $itemPro['id'] }}" onclick=" addProCart({{ $itemPro['id'] }}, 1, {{ $itemPro['newPrecio'] }},
        '{{ $itemPro['nombre'] }}', '{{ $itemPro['imagen'] }}')">Agregar</a>
        @else

        <a onclick="msjInicieSesion()" class="btn btn--view-add btn-sm " >Agregar </a>
        @endif
        <a href="" class="btn btn--view-page btn-sm">Ver </a>
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
