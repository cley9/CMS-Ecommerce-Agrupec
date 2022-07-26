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

