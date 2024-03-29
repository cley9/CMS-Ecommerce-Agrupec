<div class="modal fade modal-destino modalEfectGlass" id="loginAdmin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal--frm--adminLog ">
        <div class="modal-content ">
            <form class="shadow  form--frm--adminLog col-md-12 col-12 p-4 rounded-3" id="formLoginAdmin" action=""
                method="POST">
                @method('GET')
                @csrf
                <h2 class="fw-normal text-center titleFormLoginUser">Iniciar Sesion</h2>
                <div class="mb-3">
                    <input type="email" class="form-control input--frm--adminLog" id="emailLoginAdmin" name="email"
                        placeholder="Tu correo electronico " required />
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control input--frm--adminLog" id="passwordLoginAdmin"
                        name="password" placeholder="Ingresa la contraseña" required />
                    <img src="{{ asset('storage/img/icons/eye-slash-fill.svg') }}" class="frm--loginUser--img passwordLoginUserViewA"
                        id="imgPassLoginAdmin" alt="">
                </div>
                <div class="mb-3 d-flex justify-content-center pt-3">
                    <button type="submit" class="btn col-12 btn-primary btnIniciarSesion">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
