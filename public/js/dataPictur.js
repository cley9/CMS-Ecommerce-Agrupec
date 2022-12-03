function msgUpdate(idProdu) {
  console.log(idProdu);
 fetch('/Admin-preview/'+idProdu+'')
  .then((response) => response.json())
  .then((response) => {
    console.log(response);
      edIdUpdate.value= response[0].id;
      edNombre.value = response[0].nombre;
      edPrecioA.value = response[0].precio;
      edPrecioNew.value = response[0].newPrecio;
      edDescription.value = response[0].description;
      edCount.value = response[0].cantidad;
      edPeso.value = response[0].peso;
    edPreviewImgUpdate.src = "storage/img/Productos/" + response[0].imagen;
    srcImagen.value="storage/img/Productos/" + response[0].imagen;
    edImgUpdate.value=response[0].imagen;
  });
}
// ----- preview
let registro=document.getElementById("btnRegistroPro");
if (registro) { 
  registro.addEventListener("click",()=>{
    const file = document.querySelector('#archivo').files[0];
    if (file===undefined) {
      edPreviewImg.src="storage/img/icons/arrastrar.png"
    }
  });
}
// previsualizacion de img con js
function previewFile() {
    // console.log("im");
    const preview = document.querySelector('#edPreviewImg');
    const file = document.querySelector('#archivo').files[0];
    const reader = new FileReader();// es una api que convierte a base 64  
    reader.addEventListener("load", function () {
      // convierte la imagen a una cadena en base64
      preview.src = reader.result;
    }, false);
    if (file) {
      reader.readAsDataURL(file);
    }
}
function update_(){
    const link="http://localhost/xampp/Api%20Create%202022/api%20Asincrono/Api_Agrupec_original.php?id="+
    edId.value+"&Pnombre="+edNombre.value+"&Pprecio="+edPrecio.value+"&PnewPre="+edPrecioNew.value+"&Pdescrip="+edDescription.value+
    "&Pcant="+edCount.value+"&Ppeso="+edPeso.value+"&imagen="+edPreviewImgUpdate.src+"";
    // &imagen="+"edPreviewImg.src"+
    fetch(link,{
        method:'PUT',
        // body:new FormData(formUpdate),
    }).then(response => response.text()).then(response=>{
        if (response) {
            // msgAgregado();
            console.log("corect");
        //    $('#exampleModal').modal('hide');
     } else {
        console.log("no corect");
        // msgAgregado();
     }
    })
}



function idCatalogo(id){
fetch('/Admin-idCatalogo/'+id+'').then(data=>data.json()).then(function(data){
updateCatalogoIdDat.value=data.id;
updateCatalogoImgDat.value=data.imagen;
updateCatalogoNombre.value=data.nombre;
updateCatalogoDescripcion.value=data.descripcion;
updateCatalogoImg.src='storage/img/SlayderMain/'+data.imagen+'';
});
}
// ----- preview catalogo
let catalogo=document.getElementById("btnRegistroCatalogo");
if (catalogo) { 
  catalogo.addEventListener("click",()=>{
    const file = document.querySelector('#archivo').files[0];
    if (file===undefined) {
      edPreviewImg.src="storage/img/icons/arrastrar.png"
    }
  });
}

