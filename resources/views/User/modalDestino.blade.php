<div class="modal fade modal-destino card" id="district" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Seleccione el lugar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body  row d-flex aling-items-center ">
                <div class="mb-3 col-5">
                    <h5 class="h6 fw-normal">Seleccione el lugar</h5>

                </div>
                <div class="mb-5 col-5">
                    <select class="form-select precioDestinoA" aria-label="Default select example" id="precioDestino">
                        <option selected> Seleccione la direcci&oacute;n</option>
                        <option value="1">Lima</option>
                        <option value="2">Arequipa</option>
                        <option value="3">Tacna</option>
                        <option value="4">Ayacucho</option>

                    </select>
                </div>
                <div class="d-flex justify-content-certer">
                    <h6>El precio de envio es: S/ <h6 id="precioDes"></h6>
                    </h6>
                    {{--  <span class="text--frm--msgVacio-">El correo que ingresastes ya existe , porfavor ingrese otro
                        correo
                        para continuar con el registro, gracias.</span>  --}}

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Salir</button>
                    {{--  <button type="button" class="btn btn-primary">Aceptar</button>  --}}
                </div>
            </div>
        </div>
    </div>
</div>
