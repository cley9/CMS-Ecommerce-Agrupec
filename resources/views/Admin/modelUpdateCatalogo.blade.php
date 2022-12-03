<style media="screen">
    .modal-dialog {
        max-width: 700px;
    }
</style>

<div class="modal fade  " id="modelUpdateCatalogo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  ">

        <div class="modal-content ">
            <div class="modal-header text-center d-flex justify-content-center">
                <h5 class="modal-title " id="exampleModalLabel">Agregar Catalogo a la Tienda </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('update.admin.catalogo') }}" id="formSave"
                    enctype="multipart/form-data">
                    @csrf
                    @method('GET')
                    <div class="row row-cols-md-2 row-cols-1">
                        <div class="mb-3">
                            <input type="hidden" name="id" id="updateCatalogoIdDat" value="">
                            <input type="hidden" name="imgId" id="updateCatalogoImgDat" value="">

                            <label for="recipient-name" class="col-form-label">Nombre del catalogo:</label>
                            <input type="text" name="nombre" id="updateCatalogoNombre" class="form-control"
                                placeholder="Ingrese el nombre del producto" required />
                        </div>


                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Descripcion de catalogo:</label>
                            <input type="text" name="descripcion" id="updateCatalogoDescripcion" class="form-control"
                                placeholder="Ingrese la descripcion del producto" required />
                        </div>
                        <div class="mb-3 col-md-12 ">
                            <div class="col text-center d-flex justify-content-center">
                                <label for="message-text" class="col-form-label">Foto del catalogo</label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <img class="mb-3 card-img-top" src="" height="150" width="320"
                                    id="updateCatalogoImg" alt="Imagen prevista..." />
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" onchange="previewFile()"
                                    id="updateCatalogoFile" aria-describedby="fileHelp" name="imagen" accept="image/*">
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
