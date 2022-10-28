<div class="modal fade modal-general" id="registrarse" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal--frm--userLog">
        <div class="modal-content ">
            {{--  onsubmit="return validarEmail();"  --}}
            {{--  <form class="shadow form--frm--userRegistro col-md-12 col-12 p-4 rounded-3" action="{{route('create.user.index')}}" onsubmit="return validarEmail()" method="POST" >  --}}
            <form class="shadow form--frm--userRegistro col-md-12 col-12 p-4 rounded-3" method="POST">
                {{--  @method('GET')  --}}
                {{--  @csrf  --}}
                <h2 class="fw-normal text-center mb-4">Crear Cuenta</h2>
                <div class="mb-3">
                    <input type="text" class="form-control input--frm--userLog inputName" name="nombre"
                        placeholder="Ingrese su nombre" required />
                </div>
                <div class="mb-3 groud--email">
                    <input type="email" class="form-control  input--frm--userLog inputEmail" id="inputEmail"
                        name="email" placeholder="Tu correo electronico " required />
                    <span class="text--frm--msgVacio">El correo que ingresastes ya existe , porfavor ingrese otro correo
                        para continuar con el registro, gracias.</span>
                    {{--  <i class="bi bi-x-circle-fill icon--frm--vacio " ></i>  --}}
                    <i class="bi bi-check2-circle icon--frm--vacio"></i>
                    {{--  <span class="text--frm--msgVacio" id="bienGroud">Correo electronico correcto</span>  --}}
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control input--frm--userLog inputPass1"
                        id="exampleInputPassword1" name="pass1" placeholder="Ingresa la contraseña" required />
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control input--frm--userLog inputPass2"
                        id="exampleInputPassword2" name="pass2" placeholder="Vuelva a ingresar su contraseña"
                        required />
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="checkTermino1">
                    <label class="form-check-label" for="checkTermino1">Acepto los Terminos y Condiciones</label>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="checkTermino2">
                    <label class="form-check-label" for="checkTermino2">Acepto la Compra Segura y Políticas de
                        Privacidad</label>
                </div>

                <div class="mb-3 d-flex justify-content-center">
                    {{--  <button type="submit" class="btn col-12 btn-primary">Registrar</button>  --}}
                    {{--  <button type="submit" onsubmit="return validarEmail();" id="validarEmail" class="btn col-12 btn-primary">Registrar</button>  --}}
                    <a class="btn col-12 btn-primary" id="validarEmail">save</a>
                </div>

            </form>
        </div>
    </div>
</div>




{{--    --}}
<div class="modal fade" id="has" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Show a second modal and hide this one with the button below.
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                    data-bs-dismiss="modal">Open second modal</button>
            </div>
        </div>
    </div>
</div>
