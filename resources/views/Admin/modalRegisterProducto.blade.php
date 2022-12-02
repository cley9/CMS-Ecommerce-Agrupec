<style media="screen">
    .modal-dialog {
        max-width: 700px;
    }
</style>

<div class="text-center">
    <button type="button" id="btnListener" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modelAgregar"
        data-bs-whatever="@fat" data-bs-backdrop="static" data-bs-keyboard="false">Agregar Producto</button>
</div>
<div class="modal fade  " id="modelAgregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  ">
        <div class="modal-content ">
            <div class="modal-header text-center d-flex justify-content-center">
                <h5 class="modal-title " id="exampleModalLabel">Agregar Producto a la Tienda </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('save.admin.list') }}" id="formSave"
                    enctype="multipart/form-data">
                    @csrf
                    @method('GET')
                    <div class="row row-cols-md-2 row-cols-1">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                            <input type="text" name="Pnombre" id="nameP" class="form-control"
                                placeholder="Ingrese el nombre del producto" required />
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Precio del Producto:</label>
                            <input type="number" step="0.01" name="Pprecio" class="form-control"
                                placeholder="Ingrese el precio del producto" required />
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Precio Nuevo :</label>
                            <input type="number" step="0.01" name="PnewPre" class="form-control"
                                placeholder="Ingrese el precio  nuevo del producto" required />
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Descripcion de Producto:</label>
                            <input type="text" name="Pdescrip" class="form-control"
                                placeholder="Ingrese la descripcion del producto" required />
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
                        <div class="mb-3">
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" name="btnsave" id="btnSavei" value="Guardar">
                        <button type="reset" class="btn btn-warning" id="d">Borrar</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"
                            aria-label="Close">Salir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
