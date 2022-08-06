@extends('layout.layout')

@section('header')
      <div class="container pt-4 mb-4- bg-danger- content--perfil--user ">
      <div class="row row-cols-12 row-cols-md-12 g-4 d-flex justify-content-center justify-content-lg-start">


        <div class="col-lg-3 col-10  bg-info- ">
            <div class="card h-80">
                  <div class="text-center pt-4">
              <img src="{{ session()->get('avatar')}}" class="card-img-top icons--perfil--user " alt="...">
          </div>
          <div class="card-body">
                <h5 class="card-title fw-normal h3">{{session()->get('name');}}</h5>
                <h5 class="card-title fw-normal h6">{{session()->get('email');}}</h5>

              <hr>
            <a href="#" class="me-4 text-success " style="hover:red;">
                <span class=" text-success " ><i class="i bi-cloud-arrow-down text-success "style="font-size:18px;" ></i> <?php echo rand(8, 234); ?></span>
              </a>
              <a href="#" class=" text-danger ">
                <span class="text-danger"><i class="bi bi-heart text-danger"  style="font-size:18px;"></i> <?php echo rand(8, 234); ?> </span>
          </a><br><br>
          <a href="" class="btn btn-info col-12 ">Edit Perfil</a>
          </div>
        </div>
      </div>

      <div class="col bg-warning- p-4">
        <form class="border p-3 row g-5- shadow" action="{{route('editPerfil.user.main')}}" method="post" enctype="multipart/form-data">
            <div class="col-6 bg-danger- me-md-5">
                @method('GET')
                  @csrf

                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Cambiar nombre de usuario </label>
                    <input type="text" class="form-control" name="nameUser" required>
                    {{--  <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>  --}}
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Contraseña </label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Aceptar los terminos </label>
                </div>
            </div>
            <div class="mb-3 col-5 bg-info- ">
                <h6 class="text-center">imagen del perfil</h6>
                <div class="c mb-3">
                <img src="" alt="">
                </div>
                <div class="mb-3">
                    <input class="form-control" type="file" id="formFileMultiple" name="imagenUser" accept="image/*">
                  </div>
            </div>
            <div class="d-flex justify-content-center">

                <button type="submit" class="btn btn-primary col-4 ">Guardar cambios</button>
            </div>
        </form>
      </div>


</div>
      </div>
@endsection
