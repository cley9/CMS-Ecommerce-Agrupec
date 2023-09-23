<div class="modal fade modal-general modalEfectGlass" id="recuperarCuenta" aria-hidden="true"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal--frm--userLog">
        <div class="modal-content ">
            <form class="col-md-12 col-12 p-4 rounded-3 shadow form--frm--userRecuperar " id="formBody"
                action="{{ route('restablecer.user.password') }}" method="POST">
                @method('GET')
                @csrf
                <div class="textRecuperation" id="formTitleRecupera">
                    <h2 class="fw-normal text-center mb-4">Recuperación de contraseña</h2>
                </div>
                <dir id="formTitleVeri">
                    <h2 class="fw-normal text-center mb-4 form__text__vacio">Verifique</h2>
                </dir>
                <div class="mb-4" id="formEmail">
                    <input type="email" class="form-control input--frm--userLog" id="emailRecupe" name="email"
                        placeholder="Correo electronico " required />
                    <p class="form__input__vacio">
                        ✅ Acabamos de enviar un enlace de restablecimiento de contraseña a <b id="emailData"></b> .<br>
                        Por favor revise su bandeja de entrada y carpetas de correo no deseado.
                        {{--  ✅ Acabamos de enviar un enlace de restablecimiento de contraseña a <b>cley@gmail.com</b> .<br> Por favor revise su bandeja de entrada y carpetas de correo no deseado.  --}}
                    </p>
                </div>
                <div class="mb-3 d-flex justify-content-center" id="formBtnEnvio">
                    <a class="btn col-12 btn-primary btnIniciarSesion " id="btnEnvioRecu">Restablecer la contraseña</a>
                </div>
                <div class="mb-3 d-flex justify-content-center" id="formBtnClose">
                    <a class="btn col-12 btn-primary form__btn__vacio" data-bs-dismiss="modal">Volver a Retransmitir</a>
                </div>
                <hr class="" id="formDiv">
                <div class="mb-3 text-center" id="formOpcion">
                    <h6>¿Cambiaste de opinión? <a class="text-primary textRegistration"
                            data-bs-target="#loginUserInicio" data-bs-toggle="modal" data-bs-dismiss="modal">Iniciar
                            sesión</a></h6>
                </div>
            </form>
        </div>
    </div>
</div>
