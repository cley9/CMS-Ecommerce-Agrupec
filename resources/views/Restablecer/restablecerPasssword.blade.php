@extends('layout.layout')
@section('header')

<div class="container mb-5">
    <div class="row justify-content-md-center d-flex justify-content-center" >
        {{--  <a href="{{route('restablecerPassword.user.gmail')}}">adfa</a>  --}}
        {{--  <?php if($correcto){ ?>  --}}
        <form class="col-md-4 col-10 p-5 shadow " action="{{route('restablecerPassword.user.gmail')}}" method="POST">
            @method('GET')
            @csrf
                    <h2 class="fw-normal text-center mb-3">Restablecer Password</h2>

                    <div class="mb-3">
                        <label for="c" class="form-label">Nuevo Password</label>
                        <input type="password" class="form-control" id="c" name="p1" required/>

                    </div>
                    <div class="mb-3">
                        <label for="c" class="form-label">Confirmar Password</label>
                        <input type="password" class="form-control" id="c" name="p2" required/>

                    </div>
                    <div class="text-center">
                        <button type="submit" name="evaluarP" class="btn col-6 btn-primary">Cambiar</button>
                    </div>
                </form>
                {{--  <input type="hidden" class="form-control" id="c" name="email" value="<?php echo $email?>">  --}}
     {{--  <div class="d-flex justify-content-center" style="margin-top:12%;">
                                <div class="col-10 col-md-5 mb-5">
                                  <div class="alert alert-danger  d-flex align-items-center text-center" >
                                  <i class="bi bi-exclamation-triangle-fill text-danger flex-shrink-0 me-2" style="font-size:24px; color:"></i>
                                  <span class="text-center"> C&oacute;digo incorrecto o vencido,vuelva a intentarlo </span>
                </div>
                </div>
                </div>  --}}


        </div>
    </div>


    @endsection
