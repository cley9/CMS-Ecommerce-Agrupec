function addProCart(id,cantidad,newPrecio,nombre,img){
    // console.log(id+'---'+cantidad+'---'+newPrecio+'---'+nombre+'---'+img);
    // location.href ="AddCart_a/"+id+"/"+cantidad;
    // let array={};
    // http://127.0.0.1:8000/
    fetch('/AddCart/'+id+'/'+cantidad+'' ,{
        // fetch('AddCart/'+id+'/'+cantidad+'' ,{
        method:'GET'
        // body:DataTransfer(id,cantidad)
    });
    viewModalProAddCart(nombre,newPrecio,cantidad,img);
}
function viewModalProAddCart(nombre,newPrecio,cantidad,img) {
    let outName=document.getElementById("outNombre");
    const modal = document.querySelector(".modalViewCP");
    let outPayment=document.getElementById("outPrecio");
    let outCount=document.getElementById("outCount");
    let outCod=document.getElementById("outCodigo");
    let outImg=document.getElementById("outImg");
    outName.textContent=nombre;
    outImg.innerHTML = "<img src='/storage/img/Productos/"+img+"'  class='img-fluid' alt=''  >";
    outPayment.textContent='S/ '+newPrecio+'.00';
    outCount.textContent=cantidad;
    outCod.textContent='kst-12-3d';
      modal.classList.add("modal--show");
    const closeModal = document.querySelector(".modal__close");
    const btnClose = document.querySelector(".btn--close");
    closeModal.addEventListener("click", (e) => {
    modal.classList.remove("modal--show");
    });
    btnClose.addEventListener("click", (e) => {
    modal.classList.remove("modal--show");
    });
    }

    // let delePro=document.getElementById('deletePro');
    // delePro.addEventListener('click',(e)=>{
    //     console.log('co');
    // });

const cartHoverM=document.getElementById('cartHover');
cartHoverM.addEventListener('mouseenter',()=>{
    // console.log('hola mark');
    const url = '/GetCart';
    fetch(url)
    .then((resp) => resp.json())
    .then(function(data) {
        // console.log(data);
        mark.innerHTML="";
        data.forEach(element => {
              mark.innerHTML +=
                 '       <div class="container-flud mb-3 " id="mark__">'+
            '<div class="shadow rounded-2 bg-warning_ p-2 modal-preview-cart-box">'+
                '<div class="row">'+
        '<div class="col-4 col-md-5 me-2">'+
        '<a href="/View-page/'+element.id+'">'+
                    '<img src="/storage/img/Productos/'+element.imagen+'"  class="card-img-top " width="90px" height="70px" />'+
                            '</a>'+
                        '</div>'+
                        '<div class="col-4 col-md-6 bg-info_">'+
            '<span class="fw-normal mb-3 ">'+element.nombre+'</span>'+
            '<div class="d-flex justify-content-between align-items-center bg-warning_">'+
                '<small class=" mb-0 md-0 text-muted  " > Cantidad: '+element.pivot.cantidad+' </small>'+
                '<a href="/Delete/'+element.pivot.productoId+'" class="text-danger icons--delete--cart "> <i class="bi bi-trash"></i></a>'+
            '</div>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>'+'';
        });
    });
    $(document).ready(function() { // this is model depende de jquery cdn
        $("#mViewListProCart").modal('show');
        });


});
//   onmouseover

// let test = document.getElementById("test");
// test.addEventListener("mouseenter", function( event ) {
// //   event.target.style.color = "purple";
// console.log('hola mark');
//   setTimeout(function() {
//     // event.target.style.color = "";
//   }, 500);
// }, false);

// test.addEventListener("mouseover", function( event ) {
//   event.target.style.color = "orange";
//   setTimeout(function() {
//     event.target.style.color = "";
//   }, 500);
// }, false);

