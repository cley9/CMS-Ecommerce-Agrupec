<div class="modal fade" id="loginAdmin" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered modal--frm--adminLog " >
        <div class="modal-content ">
              <form class="shadow  form--frm--adminLog col-md-12 col-12 p-4 rounded-3" action="{{route('loginAdmin.admin.main')}}" method="POST" >
                @method('GET')
                @csrf
                <h2 class="fw-normal text-center mb-4">Iniciar Sesion</h2>
                    {{--  <div class="mb-3">
                      <input type="hidden" name="userR" value="1">
                      <input type="text" class="form-control input--frm--adminLog" name="nombre" placeholder="Ingrese su nombre" required/>
                  </div>  --}}
                  <div class="mb-3">
                      <input type="email" class="form-control input--frm--adminLog" id="exampleInputEmail1"  name="email" placeholder="Tu correo electronico " required/>
                  </div>
                  <div class="mb-3">
                      <input type="password" class="form-control input--frm--adminLog" id="exampleInputPassword1" name="password" placeholder="Ingresa la contraseña" required/>
                  </div>
                  <div class="mb-3 d-flex justify-content-center pt-3">
                    <button type="submit" class="btn col-12 btn-primary">Registrar</button>
                  </div>
              </form>
      </div>
        </div>
      </div>



