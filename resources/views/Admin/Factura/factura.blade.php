@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Crear una nueva factura</h1>
@stop

@section('content')
    @include('Admin.Factura.modalFactura')
    <div class="pt-4 text-center" id="listFact_">
        <h2 class="fw-normal">Lista de factura</h2>
    </div>
    <table class="table ">
        <thead class="bg-dark">
            <tr>
                <td>Codigo</td>
                <td>Nonbre del cliente</td>
                <td>Numero de Ruc</td>
                {{-- <td>Precio</td> --}}
                {{-- <td>Precio Total</td> --}}
                <td>Pdf</td>
            </tr>
        </thead>
        <tbody class="bg-none" id="listFact">

        </tbody>
    </table>
@stop
@section('js')
    <script src="{{ asset('js/factLogic.js') }}"></script>
@stop
