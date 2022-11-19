@extends('adminlte::page')
<link type="text/css" rel="shortcut icon" href="{{ asset('storage/img/icons/logo_ferreteria.svg') }}" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
<!--nw verson--->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
{{--  <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">  --}}

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear una nueva factura</h1>
@stop

@section('content')
    <p></p>
    <style media="screen">
        .modal-dialog {
            max-width: 700px;
        }
    </style>
    <div class="text-center">
        <button type="button" id="btnListener__" class="btn btn-warning" data-bs-toggle="modal"
            data-bs-target="#modelFactura" data-bs-whatever="@fat" data-bs-backdrop="static" data-bs-keyboard="false">Crear
            factura</button>
    </div>

    <div class="modal fade  " id="modelFactura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  ">
            <div class="modal-content ">
                <div class="modal-header text-center d-flex justify-content-center">
                    <h5 class="modal-title " id="exampleModalLabel">Agregar Producto a la Tienda </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('save.admin.list') }}" id="formSave"
                        enctype="multipart/form-data">
                        {{--  <form method="post" action="" id="formSave" enctype="multipart/form-data" >  --}}
                        @csrf
                        @method('GET'){{-- // es muy inportante para el envio de date de formularios --}}
                        <div class="row row-cols-md-2">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Tipo de consulta:</label>
                                <div class="col-5 col-md-12">
                                    <select class="form-select precioDestinoA" aria-label="Default select example"
                                        id="precioDestino">
                                        <option selected> Seleccione el tipo de consulta</option>
                                        <option value="1">DNI</option>
                                        <option value="2">RUC</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Consulta sunat:</label>
                                <div class="input-group mb-3">
                                    <input type="number" maxlength="11" size="11" minlength='11'
                                        class="form-control fNumRut" id="fNumRut" placeholder="Recipient's username"
                                        aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                                    <span type='button' class="input-group-text  btn btn-outline-secondary"
                                        id="fBtnSearch"><i class="bi bi-search"></i>SUNAT</span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="col-form-label">Nombre y Apellido:</label>
                                <input type="text" name="fNombreUser" class="form-control" id="fNombreUser"
                                    placeholder="Ingrese el numero de rut" required />
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Numero de Rut:</label>
                                <input type="text" name="cRut" class="form-control" id="fNumero"
                                    placeholder="Ingrese el numero de rut" required />
                            </div>

                            <div class="mb-3">
                                <label class="col-form-label">Tipo de documento :</label>
                                <input type="text" name="cRut" class="form-control" id="fTipoDocumento"
                                    placeholder="Ingrese el numero de rut" required />
                            </div>

                            <div class="mb-3">
                                <label class="col-form-label">Estado de Contribuyento:</label>
                                <input type="text" name="cRut" class="form-control" id="fEstadoContribuyente"
                                    placeholder="Ingrese el numero de rut" required />
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Condicion de Contribuyente:</label>
                                <input type="text" name="cRut" class="form-control" id="fCondicionContribuyente"
                                    placeholder="Ingrese el numero de rut" required />
                            </div>
                        </div>
                        <div class="row row-cols-md-2 row-cols-1">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                                <!--<input type="hidden" name="dataInpDB" value="">-->
                                <input type="text" name="Pnombre" id="nameP" class="form-control"
                                    placeholder="Ingrese el nombre del producto" required />
                            </div>


                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Precio del Producto:</label>
                                <input type="number" step="0.01" name="Pprecio" class="form-control"
                                    placeholder="Ingrese el precio del producto" required />
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Cantidad de Producto:</label>
                                <input type="number" name="Pcant" class="form-control"
                                    placeholder="Ingrese la cantidad del producto" required />
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Peso de Producto:</label>
                                <div class="d-flex justify-content-between align-items-center">
                                    <input type="number" step="0.01" name="Ppeso" class="form-control"
                                        placeholder="Ingrese el peso del producto" required />
                                    <span class="h5"> g </span>
                                </div>
                            </div>
                            {{-- <div class="mb-3">
                                <div class="col">
                                    <label for="message-text" class="col-form-label">Foto del Producto Principal</label>
                                </div>
                                <img class="mb-3" src="" height="150" width="150" id="edPreviewImg"
                                    alt="Imagen prevista..." />
                                <div class="mb-3">
                                    <input type="file" class="form-control" onchange="previewFile()" id="archivo"
                                        name="imagen" aria-describedby="fileHelp" name="imagen" accept="image/*"
                                        required />
                                </div>
                            </div> --}}
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" name="btnsave" id="btnSavei"
                                value="Guardar">
                            <button type="reset" class="btn btn-warning" id="d">Borrar</button>
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                                aria-label="Close">Salir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    {{--  <link rel="stylesheet" href="/css/admin_custom.css">  --}}
@stop

@section('js')
    <script src="{{ asset('js/factLogic.js') }}"></script>
@stop
