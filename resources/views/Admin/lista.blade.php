@extends('adminlte::page')
<link type="text/css" rel="shortcut icon" href="{{ asset('img/icons/logo.jpg') }}"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" /> <!--nw verson--->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

@section('title', 'Dashboard')
@section('content_header')
<br>
@stop
@section('content')
@include('Admin.modalRegisterProducto')

<style>
    nav svg{
      height: 20px;
    }
  </style>

<div class="d-flex justify-content-end">
   <a href="{{ route('download.admin.pdf') }}" class="btn btn-success btn-sm">Export to PDF</a>

</div>
<div class=" mb-3">
   {{--  <button class="btn btn-primary"> pdf  </button>  --}}
   {{--  <a href="{{route('download.admin.pdf')}}"> pdf</a>  --}}
     <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
     {{--  <input type="text" name="producto_name" class="form-control" id="editP" value="<?php echo $db_id; ?>" required />  --}}
     {{--  <div class="container- text-center mb-4 h-100  d-flex justify-content-center align-items-center">
         --}}
         <div class="col-10 col-md-12  d-flex justify-content-end ">
             <form action="" id="formSearchProducto" class="frm--search--home-- col-3">
               {{--  <form action="{{route('search.home.search')}}" id="formSearchProducto" class="frm--search--home-- col-3">  --}}
                 {{--  <input type="search" name="search" id="id_search" class=" input-icono input--search--home- form-control me-2 rounded-pill- " placeholder="Menu a buscar..." >  --}}
                 <div class="input-group mb-3 ">
                 <input type="text"  class="form-control fNumRut" id="fProductoLista" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                 {{--  <span type='button' class="input-group-text" id="fBtnSearchLista"><i class="bi bi-search"></i> Buscar</span>  --}}
                <button class="input-group-text" id="fBtnSearchLista"><i class="bi bi-search"></i> Buscar</button>
               {{--  <input type="submit">   --}}
               </div>
               </form>
           </div>
                 {{--
               </div>  --}}
           </div>

<div id="contentProducto">
   {{--  <h4>prueba</h4>  --}}

</div>
{{--  <p id="demo"></p>  --}}
<div class="container"><br>
   <div class="row">
   <div class="col-md-12">
   <table class="table table-bordered text-center table-hover">
   <thead class="table-primary">
   <th>id</th>
   <th>Producto</th>
   <th>Precio</th>
   <th>nuevo pre</th>

   <th>Foto</th>
   <th>Editar</th>
   </thead>
   <tbody id="dataProducto">

{{--  <div id="demo">
</div>  --}}
</tbody>

</table>
</div>
</div>
</div>


 <div class="container"><br>
 <div class="row">
 <div class="col-md-12">
 <table class="table table-bordered text-center table-hover">
 <thead class="table-primary">
 <th>id</th>
 <th>Producto</th>
 <th>Precio</th>
 <th>nuevo pre</th>

 <th>Foto</th>
 <th>Editar</th>
 </thead>
 <tbody>
 @foreach ($cliente as $key)
 <tr>
     <td>{{$key['id']}}</td>
 <td>{{$key['nombre']}}</td>
 <td>S/ {{ number_format($key['precio'], 2, ",", ".")}}</td>
 <td>S/ {{ number_format($key['newPrecio'], 2, ",", ".")}}</td>
 <td>
     <img src="{{asset('storage/img/Productos/'.$key['imagen'].'')}}"  width="80px"  alt="">
     </td>
 <td>

 <a onclick="msgUpdate({{$key['id']}})"  class="mb-md-0 mb-2 btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="bi bi-pencil"></i></a>

       {{--  <a href="{{route('viewEdit.admin.list',$key['idProducto'])}}">edit</a>  --}}
      <a   onclick="productDelete({{$key['id']}},'{{$key['nombre']}}','{{$key['imagen']}}')" class="btn btn-danger " id="delete-frm"> <i class="bi bi-trash"></i></a>
</td>
 </tr>
   @endforeach
</tbody>

 </table>
 {{$cliente->links()}}
 </div>
 </div>
 </div>


 @include('Admin.modalUpdateProducto')

 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

 {{--  my js create for me  --}}
 <script src="{{ asset('js/productoSearchAdmin.js') }}"></script>
 <script src="{{ asset('js/dataPictur.js') }}"></script>
 <script src="{{ asset('js/msj.js') }}"></script>


@endsection
