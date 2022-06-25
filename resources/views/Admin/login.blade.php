<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal--frm--userLog" >
    <div class="modal-content ">
          <form class="shadow form--frm--userLog col-md-12 col-12 p-4 rounded-3" action="{{route('loginUser.admin.main')}}" method="POST" >
            @method('GET')
            @csrf
            <h2 class="fw-normal text-center mb-4">Crear Cuenta</h2>
                <div class="mb-3">
                  <input type="text" class="form-control input--frm--userLog" name="nombre" placeholder="Ingrese su nombre" required/>
              </div>
              <div class="mb-3">
                  <input type="email" class="form-control input--frm--userLog" id="exampleInputEmail1"  name="email" placeholder="Tu correo electronico " required/>
              </div>
              <div class="mb-3">
                  <input type="password" class="form-control input--frm--userLog" id="exampleInputPassword1" name="pass" placeholder="Ingresa la contraseña" required/>
              </div>
              <div class="mb-4">
                  <input type="password" class="form-control input--frm--userLog" id="exampleInputPassword2" name="pass2" placeholder="Vuelva a ingresar su contraseña" required/>
              </div>
              <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn col-12 btn-primary">Registrar</button>
              </div>
                <div class="mb-3">
               <a href="{{route('login.user.index')}}" class="form-control mb-3 googleBody "><img src="{{ asset('storage/img/icons/logoGoogle.png')}}" alt="" class="logoSesion me-2"> Inicia sesi&oacute;n con Google</a>
             </div>
             <div class="mb-3">
               <a href="#" class="form-control mb-3 facebookBody "><img src="{{asset('storage/img/icons/logoFb.svg')}}" width="30px"  class="logoSesion img-fluid me-2" alt=""> Inicia sesi&oacute;n con Facebook</a>
             </div>
          </form>
    </div>
  </div>
</div>

