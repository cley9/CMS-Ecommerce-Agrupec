function msjOk(){
    Swal.fire({
    // position:'center',
    icon: 'success',
    title: 'Bien venido ',
    text: 'Gracias por usar nuestro CMS !',
    showConfirmButton: false,
    timer: 3000
    })
    }

    function msjError() {
      Swal.fire({
        title: ' Error de logueo',
        text: ' Vuelve a intentarlo ',
        icon: 'error',
        showConfirmButton:false,
        timer: 3000
        })
    }
// console.log(32);

// admin producto

function productDelete(id,nomProducto,img){
    console.log(id+' ----- '+nomProducto+' ----- '+img);
    swal.fire({
        title: "&iquest;Estas seguro de eliminar ?",
        text: "El produto " + nomProducto + "",
        imageUrl: "storage/img/Productos/" + img + " ",
        imageWidth: 200,
        imageHeight: 200,
        imageAlt: "Custom image",
        allowOutsideClick: false,
        showCancelButton: true,
        confirmButtonColor: "#45B39D",
        cancelButtonColor: "#EC7063",
        confirmButtonText: "Confirmar",
    }).then((result) => {
    if (result.value) {
      var url="/Admin-delete/"+id+"/"+img+"";
      window.location.href=url;
      /*
      */
    Swal.fire({
        icon: "success",
        title: "Eliminado ",
        text: "Producto eliminado correctamente",
        showConfirmButton: false,
        timer: 1500,

      });
        }


    });
}

function msjInicieSesion() {
    Swal.fire({
      title: ' Debes de iniciar sesi&oacute;n para agregar ',
      text: 'Gracias por entender',
      icon: 'info',
      showConfirmButton:false,
      timer: 2000
      })
  }




//   -----------------espa

function msgAgregado(){

    Swal.fire({
    // position:'center',
    icon: 'success',
    title: 'Producto agregado ',
    text: 'Gracias por ingresar datos !',
    showConfirmButton: false,
    timer: 3000
    })
    }
    function msgNotProducto() {
      Swal.fire({
        title: ' El producto no se agrego correctamente ',
        text: ' Vuelve a intentarlo ',
        icon: 'error',
        showConfirmButton:false,
        timer: 2000
        })
    }

    function msgedit(){

        var editP=document.getElementById("editP").value;
        if (editP === "") {
            return false;
        }else {
    Swal.fire({
    icon: 'success',
    title: 'Producto editado ',
    showConfirmButton: false,
    timer: 2000

    })
    }
    }
    // function love() {
    //   Swal.fire({
    //     title: ' Debes de iniciar sesi&oacute;n para agregar ',
    //     text: 'Gracias por entender',
    //     icon: 'info',
    //     showConfirmButton:false,
    //     timer: 2000
    //     })
    // }

    function addCard(){
      Swal.fire({
      icon: 'success',
      title: 'Producto agregado ',
      text: 'Se agrego al carrito su producto elegido',
      showConfirmButton: false,
      timer: 2000
    })
    }
    function addViewCardP() {
          let a = "<h2>hola jas</h2>";
    //   let a = "";
    //   a += " <h2>hola jas</h2>";
      return a;
    }

        // function confirmar(idView , userName,ationUser,countProd,idImg) {

     function viewAddCardP(viewItem,viewName,viewImg,viewPayment,viewCount) {
    //  function viewAddCardP(idView,viewName,viewImg,viewPayment,viewCount) {
    //   alert("---> " + viewItem);
    // const openModal = document.querySelector(".viewCP"+viewItem);
    // let outProduPreci=document.querySelector(".outPrecio");
    // outProduPreci.classList.add("<h4>gagas</h4>");
    // let outProduPreci=document.getElementById("outPrecio");

    // outProduPreci.textContent='S/ '+viewPrecio;
    // let outImg=document.getElementById("outImg");


    let outName=document.getElementById("outNombre");
    const modal = document.querySelector(".modalViewCP");
    let outPayment=document.getElementById("outPrecio");
    let outCount=document.getElementById("outCount");
    let outCod=document.getElementById("outCodigo");
    let outImg=document.getElementById("outImg");
    // outName.textContent=viewName;

    outName.textContent=viewName;
      outImg.innerHTML = "<img src='imagenes/"+viewImg+"'  class='img-fluid' alt=''  >";
    outPayment.textContent='S/ '+viewPayment;
    outCount.textContent=viewCount;
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


    //  function viewAddCardP(viewItem,viewName,viewImg,viewPayment,viewCount) {
    //     function confirmar(idView , userName,ationUser,countProd,proName,proImg,proPrecio) {

    //     //   console.log(idView+" -- "+userName+" -- "+ationUser+"-- "+countProd+"---"+proName+"---"+proImg+"---"+proPrecio);
    //       if (idView >0 && userName !=='' && ationUser == '1') {//car

    //       viewAddCardP(idView,proName,proImg,proPrecio,countProd);
    //     //   console.log("-- "+idView+" -- "+userName+" -- "+ationUser+" -- "+countProd+"--");
    //     $(document).ready(function(){
    //     $.ajax({
    //       type:"POST",
    //       url:"addPruevad.php",
    //       // data:datos,
    //       data: {countProdCard:countProd,addProductoCard:idView},
    //       success:function(r){console.log("insert --> ");

    //     //   viewAddCardP(viewItem,viewName,viewImg,viewPayment,viewCount);
    //       }
    //     });
    //     return false;
    // });
    //     }
    //      if (idView >0 && userName ==='' && ationUser == '1') {//car
    //        love();console.log("no user");
    //     }
    //     if(idView >0 && userName !=='' && ationUser == '2') {//view love
    //       window.location.href ="view-page?view="+idView;
    //       }
    //       if(idView >0 && userName ==='' && ationUser == '2') {//view love
    //     love();
    //       }
    //       if(idView >0 && userName ==='' && ationUser == '3') {//button xtra
    //       window.location.href ="view-page?view="+idView;

    //       }
    //     }

    // function msgAgregado(){

    //   var nameP=document.getElementById("nameP").value;
    //   if (nameP === "") {
    //     return false;
    //   }else {
    // Swal.fire({
    // // position:'center',
    // icon: 'success',
    // title: 'Producto agregado ',
    // text: 'Gracias por ingresar datos !',
    // showConfirmButton: false,
    // timer: 3000
    // })
    // }
    // }


    // popers user logi

    // var popover = new bootstrap.Popover(document.querySelector('.popover'), {
    //   container: 'body'
    // })

    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl)
    })

    // $(document).ready(function(){

    //   $('[data-bs-toggle="popover"]').popover();

    //   });

    // $('[data-toggle="popover"]').popover()

    $('[data-bs-toggle="popover"]').popover({
      trigger: 'focus', // Esto es para definir el evento del mouse, igual a data-trigger = "focus"
      html: true // La clave está aquí. Después de la modificación, podemos escribir código html en nuestro contenido de datos.
      })
