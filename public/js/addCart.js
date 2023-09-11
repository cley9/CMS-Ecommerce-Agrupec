function addProCart(id,cantidad,newPrecio,nombre,img){
    // console.log(id+'---'+cantidad+'---'+newPrecio+'---'+nombre+'---'+img);
    // location.href ="AddCart_a/"+id+"/"+cantidad;
    fetch('/AddCart/'+id+'/'+cantidad+'' ,{
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
