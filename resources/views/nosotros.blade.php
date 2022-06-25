@extends('layout.layout')
@section('header')

<div class="container-fluid mb-4 we--view">
      <div class="row  d-flex justify-content-center ">
    
    
    <div class=" col-12 col-md-8  p-4 text-center" >
    
        <small class="h4">¿Quiénes somos?</small><br><br>
    
        <p class="mb-3 mb-md-4 h9 text-break">Somos una empresa dedicada a la venta de productos de ferretería al por mayor cumpliendo
           con los más altos estándares de calidad. Ofrecemos variedad de artículos de ferretería, en los mejores precios con
           grandes ofertas, nos esmeramos en darle una atención personalizada.</p>
    
           <div class="d-flex align-itmes-center justify-content-center">
             <a href="{{route('contactenos.home.index')}}" class="col-md-2 col-4 btn btn--view--add btn-primary ">Ver más   </a>
           </div>
    </div>
    <div class="col-8 mb-4 mb-md-2 col-md-4  p-0 p-md-4 ">
        <img src="{{asset('storage/img/icons/red.svg')}}" class="card-img"alt="" height=" 200px">
    </div>
      </div>
    </div>
    
    
    <div class="container p-md-5 ">
      <div class="row row-cols-1 row-cols-md-3  g-4  p-4 d-flex align-itmes-center">
            <div class="col ">
                  <div class="col card  text-center  rounded-3  p-3">
                  <small class="h4 ">Vision</small>
            <p class="h9  mb-0">Ser la empresa ferretera preferida por nuestros clientes, brindándoles soluciones y servicios de calidad.</p>
  <div class=" text-center  ">
  <a class="foda--view"href="#"   ><i class="bi bi-award "></i></a>
  </div>
  </div>
  </div>
    
          <div class="col ">
                  <div class="col card  text-center  rounded-3 p-3">
                  <small class="h4 ">Contáctenos</small>
              <p class="h9  mb-0">Direccion: {{config('constants.directionContact')}}<br>
                           Teléfono: {{config('constants.numContact')}}<br>
                           Correo: {{config('constants.gmailPersonal')}}</p>
                           <div class=" text-center  ">
                <a class="foda--view"href="{{url('Contactenos')}}" ><i class="bi bi-telephone-plus "></i></a>
              </div>
      </div>
      </div>
    
    <div class="col ">
            <div class="col card  text-center  rounded-3 p-3">
            <small class="h4 ">Valores</small>
              <p class="h9 mb-0">Comprometidos con la honestidad y responsabilidad para la búsqueda de la excelencia.</p>
    <div class=" text-center  ">
      <a class="foda--view" href="#" ><i class="bi bi-bookmark-heart "></i></a>
            </div>
    </div>
    </div>
    
    
        </div>
    </div>
    
    
    
    <div class="container mb-4 ">
      <div class="row">
        <div class="col">
          <div class=" text-center  pt-3  shadow">
            <small class="h4">Ubiquenos</small>
            <div class="container mb-4">
    
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124895.2773205106!2d-77.06307662272273!3d-11.97606445985937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c56a978fd8bf%3A0x3d67f37d51e1d7c0!2sSan%20Juan%20de%20Lurigancho!5e0!3m2!1ses-419!2spe!4v1614401633151!5m2!1ses-419!2spe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" class="card-img"></iframe>
            </div>
    
          </div>
          </div>
    
        </div>
      </div>
@endsection