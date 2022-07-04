@include('User.registro')
@include('User.recuperarCuenta')
{{--    --}}
<div class="modal fade" id="loginUserInicio" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal--frm--userLog" >
    <div class="modal-content ">
          <form class="shadow form--frm--userLog col-md-12 col-12 p-4 rounded-3" action="{{route('loginLocalUser.user.index')}}" method="POST" >
            @method('GET')
            @csrf
            <h2 class="fw-normal text-center mb-4">Iniciar sesion</h2>
                {{--  <div class="mb-3">
                  <input type="text" class="form-control input--frm--userLog" name="nombre" placeholder="Ingrese su nombre" required/>
              </div>  --}}
              <div class="mb-3">
                  <input type="email" class="form-control input--frm--userLog" id="exampleInputEmail1"  name="email" placeholder="Correo electronico " required/>
              </div>
              <div class="mb-3">
                  <input type="password" class="form-control input--frm--userLog" id="exampleInputPassword1" name="pass" placeholder="Clave" required/>
              </div>
              {{--  <div class="mb-4">
                  <input type="password" class="form-control input--frm--userLog" id="exampleInputPassword2" name="pass2" placeholder="Vuelva a ingresar su contraseña" required/>
              </div>  --}}
              <div class="mb-3 d-flex justify-content-center">
                <button type="submit" class="btn col-12 btn-primary">Iniciar sesion</button>
              </div>
                <div class="mb-3 text-center">
                <a href="{{route('login.user.index')}}" class="form-control- mb-3 googleBody "><img src="{{ asset('storage/img/icons/logoGoogle.png')}}" alt="" class="logoSesion me-2"> </a>

               <a href="#" class="form-control- mb-3 facebookBody "><img src="{{asset('storage/img/icons/logoFb.svg')}}" width="30px"  class="logoSesion img-fluid me-2" alt=""></a>
             </div>
             <hr>
            <div class="mb-4 text-center">
             <a  class="text-primary" data-bs-target="#registrarse" data-bs-toggle="modal" data-bs-dismiss="modal">¿Eres nuevo?,Registrate Aqui.</a>
             <a class="text-primary" data-bs-target="#recuperarCuenta" data-bs-toggle="modal" data-bs-dismiss="modal">¿Olvidaste tu contraseña?</a>
            </div>
        </form>
    </div>
  </div>
</div>

