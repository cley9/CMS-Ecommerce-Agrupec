
<style>
    .modal-dialog-left{
        //background: red;
        //position: -102px;
        margin-right: 120px;

    }
.modal-Preview-Cart-Body{
    background: #F3F3F3;
}
.modal-preview-cart-box{
background: #fff;
}
</style>
<!-- Modal -->
<div class="modal fade" id="mViewListProCart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    {{--  <div class="modal-dialog modal-dialog-scrollable">  --}}
        <div class="modal-dialog modal-dialog-left modal-dialog-scrollable modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mi lista de productos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body modal-Preview-Cart-Body">
            <div id="mark">

            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn  btn-sm btn--listCart--viewCart" data-bs-dismiss="modal">Salir</button>
            <a href="/Cart" class="btn btn-sm btn--listCart--close">Ver Carrito</a>
        </div>
    </div>
</div>
</div>

