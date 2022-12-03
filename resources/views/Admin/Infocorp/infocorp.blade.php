@extends('adminlte::page')
@section('title', 'Dashboard')

@section('content_header')
    <h1><Var>Ver informe de infocor del usuario </Var></h1>
@stop

@section('content')
    <style media="screen">
        .modal-dialog {
            max-width: 700px;
        }
    </style>
    <div class="text-center">
        <button type="button" id="btnListener__" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modelFactura"
            data-bs-whatever="@fat" data-bs-backdrop="static" data-bs-keyboard="false">Consulta de infocor del usuario</button>
    </div>
    <div class="modal fade  " id="modelFactura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog--infocord--head   ">

            <div class="modal-content ">
                <div class="modal-header text-center d-flex justify-content-center">
                    <h5 class="modal-title " id="exampleModalLabel">Verificacion de infocorp </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="row row-cols-md-2">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Consulta:</label>
                                <input type="hidden" name="cSelect" id="nameP_" class="form-control"
                                    placeholder="Ingrese el nombre del producto" required />
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" maxlength="8" size="8" minlength='11'
                                    class="form-control vNumInfo" id="vNumInfocorp" placeholder="Ingrese el DNI"
                                    aria-label="Ingrese el DNI" aria-describedby="basic-addon2" required>
                                <span type='button' class="input-group-text btn btn-outline-secondary" id="vBtnSearch"><i
                                        class="bi bi-search"></i>INFOCORP</span>
                            </div>
                        </div>
                    </form>
                    <form method="post" action="{{ route('save.admin.list') }}" id="formSave"
                        enctype="multipart/form-data">
                        @csrf
                        @method('GET')
                        <div class="row row-cols-md-2">
                            <div class="mb-3">
                                <label class="col-form-label">Nombre y Apellido:</label>
                                <input type="text" name="fNombreUser" class="form-control" id="vNombreUser"
                                    placeholder="Ingrese su nombre" required />
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label">Numero de Dni:</label>
                                <input type="text" name="cRut" class="form-control" id="vNumero"
                                    placeholder="Ingrese el dni" required />
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="btnsave" id="btnSavei" value="Guardar">
                    <button type="reset" class="btn btn-warning" id="d">Borrar</button>
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" aria-label="Close">Salir</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

@stop
