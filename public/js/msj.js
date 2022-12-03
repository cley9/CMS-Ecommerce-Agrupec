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
    function msjOkUser(){
      Swal.fire({
      // position:'center',
      icon: 'success',
      title: 'Bien venido ',
      text: 'Gracias por usar nuestro servicio',
      showConfirmButton: false,
      timer: 3000
      })
      }

    function msjError() {
      Swal.fire({
        title: ' Error de inicio de sesion',
        text: ' Vuelve a intentarlo ',
        icon: 'error',
        showConfirmButton:false,
        timer: 3000
        })
    }
    // admin catalogo
    function catalogoDelete(id, nomProducto, img) {
      swal.fire({
          title: "&iquest;Estas seguro de eliminar ?",
          text: "El produto " + nomProducto + "",
          imageUrl: "storage/img/SlayderMain/" + img + " ",
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
              var url = "/Admin-deleteCatalogo/" + id + "/" + img + "";
              window.location.href = url;
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
// admin producto
function productDelete(id,nomProducto,img){
    // console.log(id+' ----- '+nomProducto+' ----- '+img);
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
  // -----------------factura
  function msgFacturaok(){
    Swal.fire({
    // position:'center',
    icon: 'success',
    title: 'Factura Generada ',
    text: 'Se genero la factura exitosamente',
    showConfirmButton: false,
    timer: 3000
    });
    }
    function msgFacturaError(){
    Swal.fire({
    icon: 'error',
    title: 'Vuelva a intentarlo ',
    text: 'Error al genera la factura',
    showConfirmButton: false,
    timer: 3000
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
    function addCard(){
      Swal.fire({
      icon: 'success',
      title: 'Producto agregado ',
      text: 'Se agrego al carrito su producto elegido',
      showConfirmButton: false,
      timer: 2000
    })
    }
     function viewAddCardP(viewItem,viewName,viewImg,viewPayment,viewCount) {
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
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
      return new bootstrap.Popover(popoverTriggerEl);
    });
    // $(document).ready(function(){
    // $('[data-bs-toggle="popover"]').popover({
    //   trigger: 'focus', // Esto es para definir el evento del mouse, igual a data-trigger = "focus"
    //   html: true // La clave está aquí. Después de la modificación, podemos escribir código html en nuestro contenido de datos.
    //   })
