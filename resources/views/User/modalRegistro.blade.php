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
                    <input type="password" class="form-control input--frm--userLog inputPass1" id="passwordLoginUser"
                        name="pass1" placeholder="Ingresa la contraseña" required />
                    <img src="{{ asset('storage/img/icons/eye-slash-fill.svg') }}" class="frm--loginUser--img"
                        id="imgPassLoginUser" onclick="mostrar()" alt="">
                </div>
                <div class="mb-4">
                    <input type="password" class="form-control input--frm--userLog inputPass2" id="passwordLoginUserB"
                        name="pass2" placeholder="Vuelva a ingresar su contraseña" required />
                    <img src="{{ asset('storage/img/icons/eye-slash-fill.svg') }}" class="frm--loginUser--img"
                        id="imgPassLoginUserB" onclick="mostrarB()" alt="">
                </div>
                {{-- <div class="mb-3">
                    <input type="password" class="form-control input--frm--userLog" id="passwordLoginUser"
                        name="pass" placeholder="Clave" required />
                    <img src="{{ asset('storage/img/icons/eye-slash-fill.svg') }}" class="frm--loginUser--img"
                        id="imgPassLoginUser" onclick="mostrar()" alt="">
                </div> --}}



                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="checkTermino1" required />
                    <label class="form-check-label" for="checkTermino1">Acepto los Terminos y Condiciones</label>
                </div>
                {{-- <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="checkTermino2" required />
                    <label class="form-check-label" for="checkTermino2">Acepto la Compra Segura y Políticas de
                        Privacidad</label>
                </div> --}}

                <div class="mb-3 d-flex justify-content-center">
                    {{--  <button type="submit" class="btn col-12 btn-primary">Registrar</button>  --}}
                    {{--  <button type="submit" onsubmit="return validarEmail();" id="validarEmail" class="btn col-12 btn-primary">Registrar</button>  --}}
                    <a class="btn col-12 btn-primary" id="validarEmail">Registrar</a>
                </div>

                <hr class="" id="formDiv">
                <div class="mb-3 text-center" id="formOpcion">
                    <h6>¿Cambiaste de opinión? <a class="text-primary" data-bs-target="#loginUserInicio"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Iniciar sesión</a></h6>
                </div>
            </form>
        </div>
    </div>
</div>
