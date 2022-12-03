@extends('adminlte::page')

@section('title', 'Dashboard')
@section('content_header')
    <br>
@stop
@section('content')
    @include('Admin.modalRegisterProducto')

    {{-- <style>
        nav svg {
            height: 20px;
        }
    </style> --}}

    <div class="d-flex justify-content-end">
        <a href="{{ route('download.admin.pdf') }}" class="btn btn-success btn-sm">Export to PDF</a>

    </div>
    <div class="container ">
        <div class="row d-flex justify-content-end ">
            <div class="mb-3 col-4 ">
                <form action="" id="searchProducto" class="frm--search--home-- ">
                    <label for="recipient-name" class="col-form-label">Producto a buscar:</label>
                    <div class="input-group mb-3 ">
                        <input type="text" class="form-control fNumRut" id="fProductoLista"
                            placeholder="Ingrese el nombre a buscar" required>
                        <button class="input-group-text btn btn-outline-secondary" id="fBtnSearchLista"><i
                                class="bi bi-search"></i> Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="contentProducto">
    </div>
    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered text-center table-hover">
                    <thead class="table-dark">
                        <th>id</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>nuevo pre</th>
                        <th>Foto</th>
                        <th>Editar</th>
                    </thead>
                    <tbody id="dataProducto">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container"><br>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered text-center table-hover">
                    <thead class="table-dark">
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
                                <td>{{ $key['id'] }}</td>
                                <td>{{ $key['nombre'] }}</td>
                                <td>S/ {{ number_format($key['precio'], 2, ',', '.') }}</td>
                                <td>S/ {{ number_format($key['newPrecio'], 2, ',', '.') }}</td>
                                <td>
                                    <img src="{{ asset('storage/img/Productos/' . $key['imagen'] . '') }}" width="80px"
                                        alt="">
                                </td>
                                <td>

                                    <a onclick="msgUpdate({{ $key['id'] }})" class="mb-md-0 mb-2 btn btn-warning"
                                        data-bs-toggle="modal" data-bs-target="#exampleModal"> <i
                                            class="bi bi-pencil"></i></a>
                                    <a onclick="productDelete({{ $key['id'] }},'{{ $key['nombre'] }}','{{ $key['imagen'] }}')"
                                        class="btn btn-danger " id="delete-frm"> <i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
                {{ $cliente->links() }}
            </div>
        </div>
    </div>


    @include('Admin.modalUpdateProducto')
    {{--  my js create for me  --}}
    <script src="{{ asset('js/dataPictur.js') }}"></script>
    {{-- <script src="{{ asset('js/msj.js') }}"></script> --}}


@endsection
