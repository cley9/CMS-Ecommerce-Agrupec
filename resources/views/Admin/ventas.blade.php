@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    <h1>Historial de pedidos</h1>
@stop

@section('content')

<div class="container"><br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered text-center table-hover">
                <thead class="table-dark">
                    <th>id</th>
                    <th>Nombre del usuario</th>
                    <th>cantidad</th>
                    <th>precio total</th>
                    {{-- <th>Foto</th> --}}
                    <th>Ver</th>
                </thead>
                <tbody>
                    @foreach ($listUser as $itemUser)
                        
                    <tr>
                        <th>{{ $itemUser['id'] }}</th>
                        <th>{{ $itemUser['name'] }}</th>
                        {{-- <th>{{ $itemUser['email'] }}</th> --}}
                        <th>--</th>
                        <th>--</th>
                        <th><a  class=" col-12 col-md-6 btn bg-success" id="listPedidoUser" onclick="listPedidoUser({{ $itemUser['id'] }})" data-bs-toggle="modal"
                            data-bs-target="#listPedido">Ver</a> </th>
                    </tr>
                    @endforeach
                </tbody>
                
            </table>
        </div>
    </div>
</div>
                    <script>
                        // listPedidoUser.addEventListener("click",(e)=>{
                        //     console.log(2222);

                        // })
        //                 document.addEventListener("DOMContentLoaded", function() {
        //     const listPedidoUser = document.getElementById("listPedidoUser");
        //     listPedidoUser.addEventListener("click", (e) => {
        //         console.log(2222);
        //     });
        // });
                    </script>

    @include('Admin.modalListPedido')
@endsection