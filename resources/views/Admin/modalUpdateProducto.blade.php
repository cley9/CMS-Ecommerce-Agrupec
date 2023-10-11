<style media="screen">
    .modal-dialog--frm {
        max-width: 900px;
        /*background: red;*/
    }
</style>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog--frm">
        <div class="modal-content containerModalAddCatalogo">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Producto </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('update.admin.list') }}" id="formUpdate"
                    enctype="multipart/form-data">
                    <div class="row row-cols-md-3 ">
                        @method('PATCH')
                        @csrf
                        <div class=" mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                            <input type="hidden" name="Pid" id="edIdUpdate" value="">
                            <input type="hidden" name="PimgGet" id="edImgUpdate" value="">
                            <input type="text" name="Pnombre" class="form-control" id="edNombre" value=""
                                required />
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Precio del Producto:</label>
                            <input type="number" step="0.01" name="Pprecio" class="form-control" id="edPrecioA"
                                value="" required />
                        </div>


                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Precio Nuevo :</label>

                            <input type="number" step="0.01" name="PnewPre" class="form-control" id="edPrecioNew"
                                value="" required />
                        </div>

                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Descripcion de Producto:</label>
                            <input type="text" name="Pdescrip" class="form-control" id="edDescription" value=""
                                required />

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Cantidad de Producto:</label>
                            <input type="number" name="Pcant" class="form-control" id="edCount" value=""
                                required />

                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Peso del Producto:</label>
                            <div class="d-flex justify-content-between align-items-center">

                                <input type="number" step="0.01" name="Ppeso" class="form-control" id="edPeso"
                                    value="" required />
                                <span class="h5"> g </span>
                            </div>

                        </div>

                        <div class="mb-3 text-center">
                            <div class="col">
                                <label for="message-text" class="col-form-label">Foto del Producto</label>
                            </div>
                            <input type="hidden" name="srcImg" id="srcImagen" value="">
                            <img class="mb-3" src="" height="150" width="150" id="edPreviewImgUpdate"
                                alt="Image preview..." />
                            <div class="mb-3">
                                <input type="file" class="form-control" name="imagen" onchange="previewFileDb()"
                                    id="edPicturUpdate" aria-describedby="fileHelp" accept="image/*" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="file" class="form-control" id="edPicturUpdateB"
                                aria-describedby="fileHelp" name="imagenB" accept="image/*" />

                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" name="btnUpdate" id="btnUpdate" value="Guardar">
                <button type="reset" class="btn btn-warning">Borrar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                    id="exitProdu">Salir</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
