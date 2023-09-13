@extends('layout.layout')
@section('header')
    <div class="container  mb-5">
        <div class="row row-cols-md-1 row-cols-1">
            <small class="display-6 mb-3">Ubiquenos</small>
            <hr class="hrGoogleMaps">
            <div
                class="col mb-12 mb-md-0 rounded-3 bg-light form--backgroud- fromGoogleMapsbackground text-center  pt-3  shadow">
                {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124895.2773205106!2d-77.06307662272273!3d-11.97606445985937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c56a978fd8bf%3A0x3d67f37d51e1d7c0!2sSan%20Juan%20de%20Lurigancho!5e0!3m2!1ses-419!2spe!4v1614401633151!5m2!1ses-419!2spe" width="400" height="500" style="border:0;" allowfullscreen="" loading="lazy" class="card-img"></iframe> --}}
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124895.2773205106!2d-77.06307662272273!3d-11.97606445985937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c56a978fd8bf%3A0x3d67f37d51e1d7c0!2sSan%20Juan%20de%20Lurigancho!5e0!3m2!1ses-419!2spe!4v1614401633151!5m2!1ses-419!2spe"
                    style="border:0;" allowfullscreen="" loading="lazy" class="card-img fromGoogleMapsBox"></iframe>
            </div>
        </div>
    </div>
    </div>
@endsection
