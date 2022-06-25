@extends('layout.layout')
@section('header')
      
<div class="container p-4  mb-5">


      <div class="row row-cols-md-2 row-cols-1">
          <div class="col mb-4 mb-md-0 rounded-3 bg-light p-5 form--backgroud">
        <div class="mb-2">
          <small ><small class="form--color-icons"><i class="bi bi-envelope-fill" class="form--color-icons" ></i></small> {{config('constants.gmailPersonal')}} </small>
        </div>
    
    
        <div class="mb-2">
    <small ><small class="form--color-icons"><i class="bi bi-geo-alt-fill" class="form--color-icons" ></i></small> {{config('constants.directionContact')}} </small>
        </div>
    
        <div class="mb-3">
          <small ><small class="form--color-icons"><i class="bi bi-telephone-fill" class="form--color-icons" ></i></small>  {{config('constants.numContact')}}</small>
        </div>
    
        <div class="mb-4 text-center ">
          <img src="{{asset('storage/img/icons/programin1.svg')}}" class="img-fluid form--img-backgroud"  alt="">
        </div>
    
        <div class=" text-center">
    
          <a href="https://www.instagram.com/?hl=es" class="rounded-circle btn btn-info  form--icons"  target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="https://web.facebook.com/?_rdc=1&_rdr" class="rounded-circle btn btn-info form--icons" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="https://github.com/kevinPumaille/DeliveryRestaurante" class="rounded-circle btn btn-info form--icons" target="_blank"><i class="bi bi-github"></i></a>
          <a href="https://twitter.com/iniciarsesion?lang=es" class="rounded-circle btn btn-info form--icons" target="_blank"><i class="bi bi-twitter"></i> </a>
          <a href="https://api.whatsapp.com/send?phone= + 51 {{config('constants.numContact')}}" class="rounded-circle btn btn-info form--icons" target="_blank"><i class="bi bi-whatsapp"></i></a>
    
        </div>
    
      </div>
    
        <div class="col bg-light rounded-3 p-4 d-flex justify-content-center" >
          <form class=" col-md-10 col-12" action="Envio_email.php"  method="post" onsubmit="return validar();">
            <div class=" d-flex justify-content-center mb-4 ">
              <h4 class="form--text-color">Contacto</h4>
            </div>
    
          <div class="mb-3  ">
            <input type="text" class="form-control" id="name" placeholder="Nombre" name="thisName"  required/>
          </div>
          <div class="mb-3 ">
            <input type="email" class="form-control" name="thisEmail" placeholder="Correo electronico"   required/>
          </div>
    
          <div class="mb-3">
            <input type="text" class="form-control" name="thisAsunto" placeholder="Asunto"   required/>
          </div>
          <div class="mb-3" >
      <textarea class="form-control" name="thisMensaje" placeholder="Mensaje"  rows="5"  required/></textarea>
    </div>
      <div class="mb-3 form-check d-flex align-items-center">
      <input type="checkbox" class="form-check-input" id="ckeck1" required/>
      <label class="form-check-label form-text" for="ckeck1"> Acepto las políticas de privacidad.</label>
    </div>
    <div class="d-flex justify-content-end">
      <input class="btn btn-info btn-md form--sumit-color"id="#id_del_input" onclick="enviar_nex()" type="submit"  name="thisEnvio" value="Enviar" >
    </div>
    </form>
        </div>
    
      </div>
    
    </div>
    
    
    
@endsection