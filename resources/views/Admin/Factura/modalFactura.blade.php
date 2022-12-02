<style media="screen">
    .modal-dialog {
        max-width: 900px;
    }
</style>
<div class="text-center">
    <button type="button" id="btnFacturaV" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modelFacturav"
        data-bs-whatever="@fat" data-bs-backdrop="static" data-bs-keyboard="false">Crear
        factura v3 </button>
</div>

<div class="modal fade  " id="modelFacturav" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  ">
        <div class="modal-content ">
            <div class="modal-header text-center d-flex justify-content-center">
                <h5 class="modal-title " id="exampleModalLabel">Generar una Factura </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="" id="formFactAgregar" enctype="multipart/form-data">
                    {{--  <form method="post" action="" id="formSave" enctype="multipart/form-data" >  --}}
                    @csrf
                    @method('GET'){{-- // es muy inportante para el envio de date de formularios --}}
                    <div class="row row-cols-md-2">
                        <div class="col-md-3 mb-3">
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
                        <div class="col-md-4 mb-3">
                            <label for="message-text" class="col-form-label">Consulta sunat:</label>
                            <div class="input-group mb-3">
                                <input type="number" maxlength="11" size="11" minlength='11'
                                    class="form-control fNumRut" id="fNumRut" placeholder="Ingrese el dato"
                                    aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                                <span type='button' class="input-group-text  btn btn-outline-secondary"
                                    id="fBtnSearch"><i class="bi bi-search"></i>SUNAT</span>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label class="col-form-label">Serie-Correlativo:</label>
                            <input type="text" name="fNombreUser" class="form-control" id="fserie"
                                placeholder="Ingrese el numero de serie" required />
                        </div>
                        <div class="col-md-2 mb-3">
                            <label class="col-form-label">Fecha Emision:</label>
                            <input type="text" name="fNombreUser" class="form-control" id="ffecha"
                                placeholder="Ingrese la fecha" required />
                        </div>

                        <div class="mb-3">
                            <label class="col-form-label">Nombre y Apellido:</label>
                            <input type="text" name="fNombreUser" class="form-control" id="fNombreUser"
                                placeholder="Ingrese el nombre" required />
                        </div>
                        <div class="mb-3">
                            <label class="col-form-label">Numero de Rut:</label>
                            <input type="text" name="cRut" class="form-control" id="fNumero"
                                placeholder="Ingrese el numero de rut" required />
                        </div>

                        <div class="mb-3">
                            <label class="col-form-label">Nombre del producto:</label>
                            <input type="text" name="cRut" class="form-control" id="nombrePF"
                                placeholder="Ingrese el nombre del producto" required />
                        </div>

                        <div class="mb-3">
                            <label class="col-form-label">Nombre/ razon social:</label>
                            <input type="text" name="cRut" class="form-control" id="fEstadoContribuyente"
                                placeholder="Ingrese la razon social" required />
                        </div>


                        <div class="col-md-2 mb-3">
                            <label for="message-text" class="col-form-label">Precio:</label>
                            <input type="number" step="0.01" name="Pprecio" class="form-control"
                                placeholder="Ingrese el precio del producto" id="precioPF" required />
                        </div>
                        <div class="col-md-2 mb-3">
                            <label for="recipient-name" class="col-form-label">Cantidad:</label>
                            <input type="number" name="Pcant" class="form-control"
                                placeholder="Ingrese la cantidad del producto" id="cantidadPF" required />
                        </div>

                        <div class="col-md-2 mb-3">
                            <label for="recipient-name" class="col-form-label">Agregar:</label>
                            <input type="button" class="btn btn-success" id="btnAddPF" value="Agregar">
                        </div>

                        <div class="col-md-5 mb-3">
                            <label class="col-form-label">Direccion:</label>
                            <input type="text" name="cRut" class="form-control" id="fCondicionContribuyente"
                                placeholder="Ingrese el la direccion " required />
                        </div>


                    </div>
                    <div class="row row-cols-md-2 row-cols-1">


                        <style>
                            .my-custom-scrollbar {
                                position: relative;
                                /* width: 800px; */
                                height: 150px;
                                overflow: auto;
                            }

                            .head--table {
                                position: sticky;
                                top: 0px;
                                /* position: absolute; */
                                /* background: #282C34; */
                            }
                        </style>

                        <div class="col-md-9 bg-danger-  ">
                            <div class="my-custom-scrollbar my-custom-scrollbar-primary">
                                <table class="table ">
                                    <thead class=" table bg-dark head--table">
                                        <tr>
                                            <td>Codigo</td>
                                            <td>Descripcion</td>
                                            <td>Cantidad</td>
                                            <td>Precio</td>
                                            <td>Importe</td>
                                            <td>Accion</td>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-none" id="listProducto">
                                    </tbody>
                                </table>
                            </div>


                        </div>
                        <div class="col-md-3 bg-info card P-4" id="precioTVenta">
                            {{-- <h5>Sub Total 23</h5>
                            <h5>I.G.V. 18% 23</h5>
                            <h5>Total 46</h5> --}}
                        </div>

                    </div>

                    {{-- <div class="row row-cols-md-2 row-cols-1">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                            <input type="text" name="Pnombre" id="fNombreProducto" class="form-control"
                            placeholder="Ingrese el nombre del producto" required />
                        </div> --}}

                    <!--<input type="hidden" name="dataInpDB" value="">-->


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
                    {{-- </div> --}}
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" name="btnsave" id="btnFsave"
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
