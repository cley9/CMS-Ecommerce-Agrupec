<section class="modal--form--data modalViewCP " >
    <div class="modal__container" >
      <div class="btn--close icons--close">
        <i class="bi bi-x-lg text-bolder"></i>
      </div>
      <h2 class="modal__title fw-normal "><i class="bi bi-check-circle-fill me-3"></i>Producto agregado a tu carrito</h2>

      <div class="row item--viewPro">
          <div class="col-4 col-md-2 col-sm-2  img--min">
            <h6 class="icons--countProd " id="outCount">1</h6>
            <div id="outImg" class="img--cart-modal"></div>
            <!--<h3 id="outImg"></h3>-->
          </div>
          <div class="col-8 col-md-10" >

            <h6 class="mb-4  fw-normal" id="outNombre">Chalked aerosol rosa invierno</h6>
            <div class="  d-flex justify-content-between align-items-center">
            <span class=" text-muted fw-normal" id="outCodigo">c3323</span>
            <span class=" text-dark fw-bolder outPrecio__" id="outPrecio">S/ 3</span>

           </div>
          </div>
      </div>
      <div class="btn--optionCard ">
          {{--  <a  class="modal__close  me-none me-lg-4-">Seguir comprando</a>  --}}
          <a  class="modal__close btnEfectClick">Seguir comprando ds</a>
        {{--  <a href="{{route('cart.user.main')}}" class="modal__viewPro">Ir a mi carrito</a>  --}}
        <a href="{{route('cart.user.main')}}" class="modal__viewPro btnEfectClick">Ir a mi carrito</a>
        {{--  <a href="{{route('cart.user.main')}}" class="modal__viewPro">Ir a mi carrito</a>  --}}
      </div>
    </div>
  </section>
