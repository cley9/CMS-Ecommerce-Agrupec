function msgUpdate(idProdu) {
  console.log(idProdu);
//     metodo get mostrar
// fetch('/Admin-list/view-preview/'+idProdu+'')

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
// previsualizacion de img con js
function previewFile() {
    // console.log("im");
    const preview = document.querySelector('#edPreviewImg');
    const file = document.querySelector('#archivo').files[0];
    const reader = new FileReader();// es una api que convierte a base 64
//     if(file.name==""){
// console.log("basio");
//     }
    reader.addEventListener("load", function () {
      // convierte la imagen a una cadena en base64
      preview.src = reader.result;
    }, false);
    if (file) {

      reader.readAsDataURL(file);
    }
// console.log(img);

    // console.log(reader.result);

  }
//   function getImgBase(img){
//       return console.log(img);
//   }
// ------------------->mejo
// function previewFileDb(){
// const file = document.querySelector('#edPicturUpdate').files[0];
// console.log(file);
// const reader=new FileReader();
// reader.addEventListener('load',()=>{
// console.log(reader.result);
// edPreviewImgUpdate.src=reader.result;
// });
// reader.readAsDataURL(file);
// }

function update_(){


    // const file = document.querySelector('#edPicturUpdate').files[0];
    // const reader = new FileReader();// es una api que convierte a base 64
    // console.log(reader.result);
    // reader.readAsDataURL(file);

//  previewFile();
// getImgBase();
//  console.log(previewFile());

//  console.log(reader.result);
// console.log(edPreviewImg.src);

    // console.log(edId.value);
    // console.log(edPicturUpdate.files[0]);

//     const fileSelector = document.getElementById('edPictur1');
//   fileSelector.addEventListener('change', (event) => {
//     const fileList = event.target.files;
//     console.log(fileList);
//   });

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

// function na(v){
// console.log(v);
// }

// function base64(){
// const file = document.querySelector('#edPicturUpdateB').files[0];
// const reader=new FileReader();
// reader.addEventListener('load',()=>{
// const v=reader.result;
// na(v);
// console.log(reader.result);
// });
// const a=reader.readAsDataURL(file);
// }

// function na(v){

// }
// cley.addEventListener('click',()=>{
// console.log(edPreviewImgUpdate.src);
// });
// cley.addEventListener('click',()=>{
// // console.log(2);
// const file = document.querySelector('#edPicturUpdateB').files[0];
// console.log(file);
// const reader=new FileReader();
// reader.addEventListener('load',()=>{
// // const v=reader.result;
// // na(v);
// console.log(reader.result);

// edPreviewImgUpdate.src=reader.result;
// });
// reader.readAsDataURL(file);

// });

// Swal.fire(
//   'The Internet?',
//   'That thing is still around?',
//   'question'
// )
// alert('dfadf');
// console.log("dfadf");

function idCatalogo(id){
// console.log(id);
fetch('/Admin-idCatalogo/'+id+'').then(data=>data.json()).then(function(data){
console.log(data);
updateCatalogoIdDat.value=data.id;
updateCatalogoImgDat.value=data.imagen;
updateCatalogoNombre.value=data.nombre;
updateCatalogoDescripcion.value=data.descripcion;
updateCatalogoImg.src='storage/img/SlayderMain/'+data.imagen+'';
// updateCatalogoFile.file='12';
});
}



// const email=e.target.emailLoginUser.value;
    // const password=e.target.passwordLoginUser.value;
    // console.log(email.value);
    // console.log(password.value);
    