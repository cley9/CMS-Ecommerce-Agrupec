<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" /> <!--nw verson--->
    <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">


    {{--  <link type="text/css" rel="shortcut icon" href="{{ asset('img/logo.jpg') }}"/>
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">  --}}
              <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
              {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">   --}}
{{--  icons  --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
{{--  <link rel="stylesheet" href="{{asset('resources/css/app.css')}}">  --}}
{{--  <link rel="stylesheet" href="{{asset('/storage/css/app.css')}}">  --}}
{{--  <link rel="stylesheet" href="{{asset('app.css')}}">  --}}

    {{--  css/style.css  --}}
    {{--  <link href="{{ asset('js/dataPictur.js') }}" rel="stylesheet">  --}}
    <title>Document</title>
</head>


<body>


<div class="rounded-2 ir-arriba ">
<!--<i class="bi bi-arrow-up"></i>-->
<i class="bi bi-chevron-up"></i>
</div>
<!--<a href="./ApiGoogle/f.php?logout=tru">bas</a>-->


<div class="container text-center mb-4 h-100  d-flex justify-content-center align-items-center">
  <div class="col-10 col-md-5 ">
    <form action="" id="form" class="">
      <input type="search" name="busqueda" id="id_search" class=" input-icono form-control me-2 rounded-pill " placeholder="Producto a buscar..." >

    </form>
  </div>
</div>
<div class="pt-4" id="response"> </div>

@include('Admin.login')
@include('Admin.loginAdmin')
<br><br><br>
{{--  response -- web barra  --}}
<nav class=" navbar-light ">
  <div class="container  nav--link  ">
    <div class="row  ">
    <div class="navbar-nav col  ">
      <div class=" container navbar-navd  d-sm-none d-none d-lg-block d-block ">
        <div class="row">
          <a class="nav-link col-lg-3" href="">Ventas por mayor</a>
          <a class="nav-link col-lg-2" href="">Locales</a>
          <a class="nav-link col-lg-2" href="">Contactos</a>
          <a class="nav-link col-lg-2" href="">Locales</a>
          <a class="nav-link col-lg-2" href="">Descuentos</a>
        </div>
      </div>
      </div>
      <div class="  col d-flex justify-content-end  align-items-center ">
        <div class="d-sm-none d-none d-lg-block d-block ">
        <a href="https://api.whatsapp.com/send?phone={{config('constants.numContactWhats')}}" class="  icons--Contact--he" target="_blank"><i class="bi bi-whatsapp me-lg-2"></i>{{config('constants.numContact')}}
        </a>
    <a href="https://www.messenger.com/login.php" class=" icons--Contact--he" target="_blank"><i class="bi bi-messenger"></i> </a>
        <a href="https://www.pinterest.es/login/" class="  icons--Contact--he" target="_blank"><i class="bi bi-pinterest"></i> </a>
        <a href="https://www.linkedin.com/checkpoint/lg/login?trk=hb_signin" class="  icons--Contact--he" target="_blank"><i class="bi bi-linkedin"></i> </a>
      </div>
        </div>
      </div>
      <hr class="my-1">
      <div class="container-fluid  navbar navbar-expand-lg navbar-light bg-light nav--home">
          <div class="collapse navbar-collapse navbar-nav d-flex justify-content-end" id="navbarNavAltMarkup">
              <a class="nav-link " aria-current="page" href="{{ route('viewProducto.home.list') }}">Ver producto</a>
              <a class="nav-link" href="{{ route( 'list.admin.list')  }}">lista producto</a>
           <a  class="nav-link  icons--style--raya" aria-current="page">Venta Telefónica (01) 615 6002 ǀ</a>
           <a  class="nav-link  icons--style--raya" aria-current="page">Servicio al Cliente (01) 419 2000  ǀ</a>
           {{--  <a href="informacion" class="nav-link  icons--style--raya" aria-current="page">Tiendas</a>  --}}
           <a href="informacion" class="nav-link  icons--style--raya" aria-current="page">Seguimiento de tu compra  ǀ</a>
           <a href="informacion" class="nav-link  icons--style--raya" aria-current="page">Venta Empresa ǀ</a>
           <a href="informacion" class="nav-link  icons--style--raya" aria-current="page">SEGUROS ǀ</a>
            </div>
          </div>
  </div>

</nav>
<br><br><br>
{{--  main  --}}
<nav class="navbar navbar-light navbar-expand-sm bg-light fixed-top">
  <div class="container-fluid">
    <div class="container d-none d-sm-none d-md-block">
<div class="row link--heder--m  d-flex align-items-center">
<div class="col-lg-1 ">
  <b><a class="navbar-brand text-success  h-3 text--nav--home" href="{{route('vista.index')}}">AgrupecVentas</a></b>
  {{--  <a href="{{route('vista.index')}}" class="navbar-brand text-success  h-3 text--nav--home" >AgrupecVentas</a>  --}}
</div>
       <div class="col ">
<div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
  <div class="navbar-nav ">
 <a class="nav-link active icons--style--raya" aria-current="page" href="{{ route('vista.index') }}">Home</a>
 <a href="{{ route('viewProducto.home.list') }}" class="nav-link active icons--style--raya" aria-current="page">Ver producto</a>
 <a href="{{route('nosotros.home.index')}}" class="nav-link active icons--style--raya" aria-current="page">Nosotros</a>
 <a href="{{url('Ayuda')}}" class="nav-link active icons--style--raya me-3" aria-current="page">Atencion</a>

 @if (session()->exists('name') && session()->get('rol') === '0')

<div class="cart-menu align-items-center d-flex">
  <div class="sidebar-social">
    <ul>
        <a href="{{route('cart.user.main')}}" class="cart" id="cartHover" title="Facebook"  rel="nofollow" ><i class="fas fa-shopping-cart"></i>
        <span id="cart_menu_num" data-action="cart-can" class="badge rounded-circle">{{session()->get('contProducto');}}</span>
      </a>
      </li>
    </ul>
  </div>
</div>

<div class="dropdown  ">
 <a  role="button" id="userView" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{session()->get('avatar')}}" class=" icons--login--user  rounded-circle_ " alt=""></a>
 <ul class="dropdown-menu" aria-labelledby="userView">
   <h6> Usuario</h6>
  <h6>{{session()->get('email')}}</h6>
  <li>
      <a  href="{{route('perfil.user.main')}}" class="" >Mi Perfil</a>
  </li>
  <li>
    <a class=""  href="#exampleModalToggle">Ajuste</a>
  </li>
  <li>
    <a href="{{route('logout.user.index')}}" >Cerrar Sesion </a>
  </li>
  </ul>
    </div>
 @elseif (session()->exists('name') && session()->get('rol') === '4')
 <a class="nav-link active icons--style--raya" href="{{ route('list.admin.list')  }}">lista producto</a>
 <div class="dropdown  ">
  <a  role="button" id="userView" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{asset('storage/img/icons/person-circle.svg')}}" class=" icons--login--user  rounded-circle_ " alt=""></a>
  <ul class="dropdown-menu" aria-labelledby="userView">
    {{--  <h6> Administrador</h6>  --}}
    <a href="{{url('/Admin')}}">Administrador</a>
  <h6>{{session()->get('email')}}</h6>
  <li>
    <a class=""  href="#exampleModalToggle">Ajuste</a>
  </li>
  </ul>
    </div>
 @else
 {{--  <a data-bs-toggle="modal" href="#loginUserInicio"><img src="{{asset('storage/img/icons/userLogin.png')}}" class="icon--loginMin" alt=""></a>  --}}

 <div class="dropdown  ">
  <a href="" class="btn bg-warning " href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill me-lg-2"></i>Iniciar sesión</a>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <li>
        <a class="" data-bs-toggle="modal" href="#loginUserInicio">Usuario</a>
        <a class="" data-bs-toggle="modal" href="#loginAdmin">Administrador</a>
    </li>
      </ul>
    </div>
    @endif
  </div>
  </div>
  </div>
  </div>
      </div>


      {{--  <h3 class="fa">gaaaaaaaa</h3>  --}}




{{--  ----------------------------- response app --}}
<button class="navbar-toggler  bg-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
<a class="navbar-brand d-md-none d-sm-block d-block" href="#">AgrupecVentas </a>
<div class="d-md-none d-sm-block d-block ">

@if (session()->exists('name') && session()->get('rol') === '0')
<div class="cart-menu align-items-center d-flex d-none- d-md-none- d-block-">
    <div class="sidebar-social">
      <ul>
          <a href="{{route('cart.user.main')}}" class="cart" id="cartHover" title="Facebook"  rel="nofollow" ><i class="fas fa-shopping-cart"></i>
          <span id="cart_menu_num" data-action="cart-can" class="badge rounded-circle">{{session()->get('contProducto');}}</span>
        </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="nav-item d-none- d-md-none- d-sm-block-">
      <div class="dropdown ">
          <a  role="button" id="userView" data-bs-toggle="dropdown" aria-expanded="false"><img src="{{session()->get('avatar')}}" class=" icons--login--user  rounded-circle_ " alt=""></a>
          <ul class="dropdown-menu" aria-labelledby="userView">
              <h6> Usuario</h6>
              <h6>{{session()->get('email')}}</h6>
              <li>
                  <a  href="{{route('perfil.user.main')}}" class="" >Mi Perfil</a>
                </li>
                <li>
                    <a class=""  href="#exampleModalToggle">Ajuste</a>
                </li>
                <li>
                    <a href="{{route('logout.user.index')}}" >Cerrar Sesion </a>
                </li>
            </ul>
        </div>
    </div>

    {{--  <a data-bs-toggle="modal" href="#loginUserInicio"><img src="{{asset('storage/img/icons/userLogin.png')}}" class="icon--loginMin" alt=""></a>  --}}
@elseif (session()->exists('name') && session()->get('rol') === '4')

@else
<a data-bs-toggle="modal" href="#loginUserInicio"><img src="{{asset('storage/img/icons/userLogin.png')}}" class="icon--loginMin" alt=""></a>
{{--  <div class="d-md-none d-sm-block d-block ">

</div>  --}}

   @endif
    <div class="offcanvas offcanvas-start gb-info" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav row justify-content-end flex-grow-1 pe-3">
            <li class="nav-item"> <a class="nav-link active icons--style--raya" aria-current="page" href="{{route('vista.index')}}">Home</a></li>
            <li class="nav-item"> <a class="nav-link active icons--style--raya" aria-current="page" href="{{route('viewProducto.home.list')}}">Ver Producto</a></li>
            <li class="nav-item"> <a class="nav-link active icons--style--raya" aria-current="page" href="{{route('nosotros.home.index')}}">Nosotros</a></li>
            <li class="nav-item"> <a class="nav-link active icons--style--raya" aria-current="page" href="{{url('Ayuda')}}">Atencion</a></li>
            <li class="nav-item"> <a class="nav-link active icons--style--raya" aria-current="page" href="">lista producto</a></li>
      </ul>
    </div>

</div>
</div>
{{--  -----------------------------  --}}
  </div>
</nav>


 @yield('header')
<footer class="pt-4   footer--one"><br><br>
<div class="container text-muted mb-4">
<div class="row ">
         <div class="container  d-flex align-items-center justify-content-center pt-4">
             <div class="col-12 mb-4 row  ">
               <div class="col-lg-6 d-flex mb-4 align-items-center justify-content-between">
                <h5 class="btn--footer--rese text-center me-lg-4">  <img src="{{asset('storage/img/icons/peru.png')}}" class="me-2" width="26px" alt="">  Perú</h5>
           <h5 class="btn--footer--rese text-center  me-lg-4">Nuevo Productos</h5>
           {{--  <h5 class="btn--footer--rese text-center  me-lg-4 ">Regiones</h5>  --}}
          </div>

           <div class="col-lg-6 col-12 d-flex justify-content-lg-end">
            <div class=" text-center">

              <a href="https://www.instagram.com/?hl=es" class="rounded-circle btn   icons--Contact"  target="_blank"><i class="bi bi-instagram"></i></a>
              <a href="https://web.facebook.com/?_rdc=1&_rdr" class="rounded-circle btn  icons--Contact" target="_blank"><i class="bi bi-facebook"></i></a>
              <a href="https://github.com/kevinPumaille/DeliveryRestaurante" class="rounded-circle btn  icons--Contact" target="_blank"><i class="bi bi-github"></i></a>
              <a href="https://twitter.com/iniciarsesion?lang=es" class="rounded-circle btn  icons--Contact" target="_blank"><i class="bi bi-twitter"></i> </a>
              {{--  <a href="https://api.whatsapp.com/send?phone= + 51 {{config('constants.numContact')}}" class="rounded-circle btn  icons--Contact" target="_blank"><i class="bi bi-whatsapp"></i></a>  --}}
              <a href="" class="rounded-circle btn  icons--Contact" target="_blank"><i class="bi bi-youtube"></i> </a>
              <a href="" class="rounded-circle btn  icons--Contact" target="_blank"><i class="bi bi-twitch"></i> </a>
              <a href="" class="rounded-circle btn  icons--Contact" target="_blank"><i class="bi bi-messenger"></i> </a>
              <a href="" class="rounded-circle btn  icons--Contact" target="_blank"><i class="bi bi-pinterest"></i> </a>
              <a href="" class="rounded-circle btn  icons--Contact" target="_blank"><i class="bi bi-linkedin"></i> </a>


            </div>
          </div>
         </div>
        </div>
        <div class="col-12 mb-3 ">
            <h4 class="fw-normal "> Suscríbete </h4>
            <h5 class="fw-normal mb-4"> Te enviaremos las mejores ofertas de todo los productos y mas.</h5>
         <form action=""  class="text-center mb-4 ">
          <input type="text" class="input--frm--sub mb-3 me-lg-4" placeholder="Correo electronico">
          <input type="text" class="input--frm--sub mb-4 me-lg-3" placeholder="Nombre">
<input type="submit" class="btn--frm--sub" value="Suscrìbete">
         </form>
          </div>
         <div class="col-3 col-md  ">
           <h5 class="text-light">Contáctanos</h5>
          <ul class="list-unstyled text-small">
              <li><a href="contactenos"  class="text-muted  " href="#">Contáctanos</a></li>
              <li><a href="Nosotros"  class="text-muted" href="#">Ubícanos</a></li>
          </ul>

         </div>
         <div class="col-3 col-md ">
           <h5 class="text-light">Nosotros</h5>
           <ul class="list-unstyled text-small">
               <li><a href="Nosotros"  class="text-muted" href="#">Nosotros</a></li>
               {{--  <li><a href="{{route('help.home.index')}}" class="text-muted" href="#">Ayuda</a></li>  --}}
           </ul>
         </div>
         <div class="col-3 col-md ">
          <h5 class="text-light">Marcas</h5>
          <ul class="list-unstyled text-small">
            <h5 class="text-muted h6">Pavco</h5>
            <h5 class="text-muted h6">Matusita</h5>
            <h5 class="text-muted h6">Nicolle</h5>
            <h5 class="text-muted h6">Nipon Plas</h5>

          </ul>
        </div>

        <div class="col-3 col-md  ">
          <h5 class="text-light">Marcas</h5>
          <ul class="list-unstyled text-small">
              <li><a href="Nosotros"  class="text-muted" href="#">Nosotros</a></li>
              <li><a href="help" class="text-muted" href="#">Ayuda</a></li>
          </ul>
        </div>
         <hr class=" d-block d-sm-block d-md-none ">
       </div>
    </div>
    <div class=" footer--final mb-3 d-flex justify-content-center align-items-center">
      <div class="text-center ">
        <small class=" mb-3 text-muted h6"> ©2021 copyright Agrupec </small>
      </div>
    </div>
   </footer>
{{--  <script src="js/btn-filters.js" charset="utf-8"></script>
<script src="js/viewPassword.js" charset="utf-8"></script>
<script src="js/funcion-msg.js" charset="utf-8"></script>
<script src="js/btn-up.js" charset="utf-8"></script>  --}}
 {{--  <script src="js/btn-cardProduct.js"></script>  --}}
 {{--  <script src="js/loader-main.js"></script>  --}}
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src='https://code.jquery.com/jquery-3.5.1.js' ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert2@10.15.0/dist/sweetalert2.all.js" charset="utf-8"></script>


 {{--  <script src="{{ asset('js/app.js') }}"></script>  --}}
  <script src="{{ asset('js/dataPictur.js') }}"></script>
  <script src="{{ asset('js/addCart.js') }}"></script>
  <script src="{{ asset('js/btn-msg.js') }}"></script>


  {{--  <script>
    Swal.fire(
      'The Internet?',
      'That thing is still around?',
      'question'
    )
  </script>  --}}
  {{--  </script>  --}}


{{--  <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
$(function() {
    $("#news-slider").owlCarousel({
        items :4,
        itemsDesktop:[1199,3],
        itemsDesktopSmall:[980,2],
        itemsMobile : [600,1],
        navigation:true,
        navigationText:["",""],
        pagination:true,
        autoPlay:true
    });
});



// Activate Carousel
//$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
    $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
    $("#myCarousel").carousel("prev");
});
        </script>
        @include('User.modalListProCart')





</body>
</html>

