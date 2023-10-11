<style media="screen">
    .modal-dialog {
        max-width: 700px;
    }
</style>
<div class="text-center">
    <button type="button" id="btnRegistroCatalogo" class="btn btn-success" data-bs-toggle="modal"
        data-bs-target="#modelAgregarCatalogo" data-bs-whatever="@fat" data-bs-backdrop="static"
        data-bs-keyboard="false">Agregar Catalogo</button>
</div>
<div class="modal fade  " id="modelAgregarCatalogo" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  ">
        <div class="modal-content containerModalAddCatalogo">
            <div class="modal-header text-center d-flex justify-content-center">
                <h5 class="modal-title " id="exampleModalLabel">Agregar Catalogo a la Tienda </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('insert.admin.catalogo') }}" id="formSave"
                    enctype="multipart/form-data">
                    @csrf
                    @method('GET')
                    <div class="row row-cols-md-2 row-cols-1">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del catalogo:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control"
                                placeholder="Ingrese el nombre del catalogo" required />
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Descripcion de catalogo:</label>
                            <input type="text" name="descripcion" class="form-control"
                                placeholder="Ingrese la descripcion del producto" required />
                        </div>
                        <div class="mb-3 col-md-12 ">
                            <div class="col text-center d-flex justify-content-center">
                                <label for="message-text" class="col-form-label">Portada del catalogo</label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <img class="mb-3 card-img-top" src="" height="150" width="320"
                                    id="edPreviewImg" alt="Imagen prevista..." />
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" onchange="previewFile()" id="archivo"
                                    name="imagen" aria-describedby="fileHelp" accept="image/*" required />
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
