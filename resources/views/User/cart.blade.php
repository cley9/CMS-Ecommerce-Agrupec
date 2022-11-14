@extends('layout.layout')

@section('header')
<body class=" bg-light ">
      <div class="mb-5 container-fluid container--flip ">
       <div class="row d-flex justify-content-between aling-items-center">
        <div class="col col-md-9">
       <div class="col-12 col-md-11 mb-3  box--flip--one">
          <h6 class="mb-1 h4 fw-normal text-center p-4"><i class="bi bi-cart3 me-2"></i>Carro de compras</h6>
          @php
          $total_neto=0;
          $nroCard=0;
          $totalProducto=0;
           if($exitProductoUser){
@endphp
@foreach ($cartArray->productos as $productoArray )
  <div class="mb-3 col ">
    <div class=" mb-4 col p-4  rounded-3 shadow box--view--favorite" >
    <div class="row  col  d-flex aling-items-center ">
    <div class="col-4 col-md-2">
      <a href="{{route('View.home.index',$productoArray->id)}}">
        <img src="{{asset('storage/img/Productos/'.$productoArray->imagen.'')}}"  class="card-img-top " width="90px" height="120px" />
      </a>
    </div>
    <div class=" col col-md-4">
       <div class="row">
     <span class="fw-normal mb-3 ">{{$productoArray->nombre}}</span>

    <small class=" mb-0 md-0 text-muted " > SKU: @php echo rand(1023,43683) @endphp</small>
    <small class=" mb-1 d-flex justify-content-end d-md-none d-sm-block d-block me-2 ">
    <small class="me-2 d-flex align-items-center ">Eliminar</small>

    <a href="procesoCaard.php?delete={{$productoArray->id}}" class="text-danger icons--delete--cart"> <i class="bi bi-trash"></i></a>
    </small>
     <div class="col d-flex justify-content-between aling-items-center  d-md-none d-sm-block d-block">
    <small>Cantidad : {{$productoArray->cantidad}}</small>
    <small>Precio : {{$productoArray->newPrecio}}</small>
    </div>
    </div>
    </div>
    <div class="col col-md-6  d-none d-sm-none d-md-block">
    <div class=" col ">
    <div class="row  ">
    <div class="col ">
    <div class="col mb-4  rounded-3 d-flex justify-content-center aling-items-center bg-light">
    <h6 class="pt-2">Precio unitario</h6>
    </div>
    <div class="d-flex justify-content-center aling-items-center ">
    <h6>S/ {{number_format($productoArray->newPrecio, 2, ".", ",")}}</h6>

    </div>
    </div>
    <div class="col ">
    <div class="col mb-4  rounded-3 d-flex justify-content-center aling-items-center bg-light">
    <h6 class="pt-2">Cantidad</h6>
    </div>
    <div class="d-flex justify-content-center aling-items-center ">
    <h6>{{$productoArray->pivot->cantidad}}</h6>
    </div>
    </div>
    @php
    $preProducto=$productoArray->pivot->cantidad*$productoArray->newPrecio;
    $totalProducto +=$productoArray->pivot->cantidad;
    @endphp
    <div class="col ">
    <div class="col mb-4 rounded-3 d-flex justify-content-center aling-items-center bg-light">
    <h6 class="pt-2">Subtotal</h6>
    </div>
    <div class="d-flex justify-content-center aling-items-center ">
    <h6>S/ {{number_format($preProducto, 2, ".", ",")}}</h6>
    </div>
    </div>
    </div>
    </div>
    <div class="d-flex justify-content-end">
    <a href="{{route('deleteCart.user.main',$productoArray->id)}}" class="text-danger icons--delete--cart"> <i class="bi bi-trash"></i></a>
    {{--  <a class="text-danger icons--delete--cart" id="deletePro"> <i class="bi bi-trash"></i></a>  --}}
    {{--  <a class="text-danger icons--delete--cart" id="deletePro$productoArray->id"><input type="hidden" value="{{$productoArray->id}}"><i class="bi bi-trash"></i></a>  --}}
    {{--  <a class="text-danger icons--delete--cart" id="deletePro"><i class="bi bi-trash"></i></a>  --}}
    </div>
    </div>
    </div>
    </div>
    {{--  $total_neto;
      echo $total_neto;  --}}
      @php
      $total_neto +=$preProducto;
    session(['countCart'=>$totalProducto]);
    $nroCard++;
    @endphp
  </div>
  @endforeach
  {{--  @php echo $total_neto; @endphp  --}}
@php }else{ @endphp
  <div class="d-flex justify-content-center">

    <div class="box-cart-validar p-3 text-center ">
        <h4>El carrito esta vacio, agregue producto a su carrito</h4>
    </div>
       </div>


@php } @endphp
</div>
</div>
 <div class="col-12 col-md-3  ">
         <div class="mb-3 col  p-4 rounded-3 shadow box--view--favorite">
     <h5 class="mb-4 ">Resumen de la compra:</h5>
     <h4>{{session()->get('userId')}}</h4>
     <h4>{{session()->get('name')}}</h4>
     <div class=" mb-0 d-flex justify-content-between aling-items-center ">
     <small class="mb-0 text-muted  fw-normal">Total productos </small>
           <small class=" mb-0 text-muted ">{{$totalProducto}}</small>
   </div>
   <hr class=" ">
     <div class="col">
       <div class="mb-3 d-flex justify-content-between aling-items-center ">
      <span class="text-dark h5 fw-normal">Total</span>
      <small class="text-dark h5 fw-normal">S/ {{number_format( $total_neto, 2, ".", ",")}}</small>
       </div>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <a href="{{route('viewProducto.home.list')}}" class="col-md-12 col-10 mb-md-3 btn btn--paymet--ver mb-3"><i class="bi bi-arrow-90deg-left me-2"></i>Ver más productos</a>
                <a href="{{route('viewProducto.home.list')}}" class="col-md-12 col-10 btn btn--paymet--ir mb-3" data-bs-toggle="modal" data-bs-target="#Mpayment"><i class="bi bi-paypal me-2"></i>Pagar</a>
            </div>
            </div>
     </div>
   </div>
            <div class="mb-3 col  p-4 rounded-3 shadow box--view--favorite">

     <h5 class="mb-4 text-center fw-normal">Opcciones Disponibles de la compra:</h5>
     <div class=" mb-0 d-flex justify-content-between aling-items-center bg-info">

   </div>
   @include('User.modalPaymentCart')
   <hr class=" ">
     <div class="col">
<div class="container">
<div class="row d-flex justify-content-center">
    <a href="{{ route('download.user.pdf') }}" class="col-md-12 col-10 btn btn--paymet-generar mb-3 " target="_blank"><i class="bi bi-ticket-detailed-fill me-2"></i>Generar tikect de compra </a>
    <a href="{{route('deleteTotalCart.user.main')}}" class="col-md-12 col-10 btn btn--paymet--vaciar  mb-3" ><i class="bi bi-trash-fill me-2"></i> vaciar carrito  </a>
</div>
</div>
           {{-- <button type="button" class="col-md-12 btn btn--paymet--pago mb-3" data-bs-toggle="modal" data-bs-target="#Mpayment">
Pagar</button> --}}
     </div>
   </div>

 </div>

</div>
</div><br>
{{--    --}}

{{--    --}}
</body>
@endsection
