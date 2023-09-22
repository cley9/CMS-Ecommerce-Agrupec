// --------------------------- btn-msj
const formBody=document.getElementById('#formBody');
const formulario=document.querySelectorAll('#formBody');
btnEnvioRecu.addEventListener('click',()=>{


    // console.log(12);
// console.log(formulario)  //----todo los datos ;
// console.log(formulario.formEmail.email);
// console.log(emailRecupe.value); ///--- recuperar los gmail
// document.querySelector(`#form__text__vacio h2`).classList.add("form__text__vacio");
// document.querySelector(`#formBody form`).classList.add("form--correcto");
// document.querySelector(`#formBody form`).classList.remove("form--frm--userRecuperar");
// form__input__vacio
const gmailValidate=emailRecupe.value;
if (gmailValidate === "") {
    // console.log(23);
msjCamposVacio();
} else {

    fetch("/envioGmail?email="+emailRecupe.value+"").then(data => data.text()
    ).then( (data)=> {
        // console.log("se envio");
        msjRegistroUsuarioCliente();
        emailData.innerHTML=`${gmailValidate}`;
        document.querySelector(`#formEmail p`).classList.add("form__input__email__correcto");
        document.querySelector(`#formEmail p`).classList.remove("form__input__vacio");
        document.querySelector(`#formEmail input`).classList.add("form__input__vacio");
        document.querySelector(`#formEmail input`).classList.remove("form-control");
        document.querySelector(`#formEmail input`).classList.remove("input--frm--userLog");
        document.querySelector(`#formTitleRecupera h2`).classList.add("form__text__vacio");
        document.querySelector(`#formTitleVeri h2`).classList.remove("form__text__vacio");
        document.querySelector(`#formBtnEnvio a`).classList.add("form__btn__vacio");
        document.querySelector(`#formBtnClose a`).classList.remove("form__btn__vacio");
        document.querySelector(`#formOpcion h6`).classList.add("form__text__vacio");
        document.querySelector(`#formDiv`).classList.add("form__text__vacio");

    });
}

});

// user Verification correo
// function validarEmail(){
    validarEmail.addEventListener('click',()=>{
        // const getFormRegister=document.querySelector('.form--frm--userRegistro');
        const getInputName=document.querySelector('.inputName').value;
        const getInputEmail=document.querySelector('.inputEmail').value;
        const getInputPass1=document.querySelector('.inputPass1').value;
        const getInputPass2=document.querySelector('.inputPass2').value;
                // console.log(getFormRegister.e.targert());
                // console.log(getFormRegister.input);
        // console.log(getInputName);
        // console.log(getInputEmail);
        // console.log(getInputPass1);
        // console.log(getInputPass2);
if (getInputEmail === '') {
// console.log('esta vacio');
msjCamposVacio();
} else {
    // console.log('esta lleno');

        fetch('/validarUser/'+getInputEmail+'' ,{
                method:'GET'
            // body:DataTransfer(id,cantidad)
        }).then(data => data.text()).then(function(data){
            // console.log(data);
            if (data=== 'true') {
                // console.log('si exite el user');
                document.querySelector(`.groud--email input`).classList.add("input--frm--errorValidacion");
                document.querySelector(`.groud--email span`).classList.add("text--frm--msgError");
                document.querySelector(`.groud--email span`).classList.remove("text--frm--msgVacio");
                document.querySelector(`.groud--email input`).classList.remove("input--frm--bienValidacion");
                document.querySelector(`.groud--email i`).classList.remove("icon--frm--bienValidacion");
                document.querySelector(`.groud--email i`).classList.add("icon--frm--vacio");
            } else {
                // console.log('no  exite el user');
//                 if (condition) {
if (getInputName === '' || getInputPass1 ==='' || getInputPass2 ==='' || getInputPass1 !== getInputPass2  ) {
// console.log('esta vacio los demas campos');
msjCamposVacio();

                }else{
                    location.href='/createUser?nombre='+getInputName+'&&email='+getInputEmail+'&&pass1='+getInputPass1+'&&pass2='+getInputPass2+'';
                    // console.log('envia');
                    msjRegistroUsuarioCliente();

                }
                document.querySelector(`.groud--email input`).classList.remove("input--frm--errorValidacion");
                document.querySelector(`.groud--email span`).classList.remove("text--frm--msgError");
                document.querySelector(`.groud--email span`).classList.add("text--frm--msgVacio");
                document.querySelector(`.groud--email input`).classList.add("input--frm--bienValidacion");
                document.querySelector(`.groud--email i`).classList.remove("icon--frm--vacio");
                document.querySelector(`.groud--email i`).classList.add("icon--frm--bienValidacion");
            }
    }
    );
}
});
// }


const precioEnvioDestinoN=document.getElementById('precioDestino');
// const precioEnvioA=document.querySelectorAll('#precioDestino');
// precioEnvioDestino.addEventListener('click',(e)=>{
if (precioEnvioDestinoN) {
precioEnvioDestinoN.addEventListener("click",function(){
let precio=0.00;
    switch (precioEnvioDestinoN.value) {
        case "1":
            precio="6.00";
            break;
            case "2":
            precio="16.00";
                break;
                case "3":
                    precio="18.00";
                    break;
                    case "4":
                        precio="15.00";
                        break;
                        // default:
                        //     break;
                        }
                        precioDes.innerHTML=`${precio}`;
    // console.log(precioDestino.value);
});
}

function msjCamposVacio(){
    Swal.fire({
        icon: 'warning',
        title:  ' Llene los campos ',
        text: 'Gracias por entender !',
        showConfirmButton: false,
        timer: 3000
    
      });
}

function msjRegistroUsuarioCliente(){
    Swal.fire({
        icon: 'success',
        title:  'Se registro correctamente',
        text: 'Gracias por usar nuestro servicios !',
        showConfirmButton: false,
        timer: 3000
    
      });
    
}

async function listCate(url){
    let responselistCategory= await fetch(url); // espera la promesa
    let listCategory= await responselistCategory.json();
    // console.log("cate",listCategory);
    listCatProduct.innerHTML="";
    listCategory.forEach((element)=>{
listCatProduct.innerHTML +=
"<div class='pt-3 mb-4 mb-md-2 listCategoryFilterClickHead'>" +
                " <div class='card shadow listCategoryFilterClickBody' >" +
       '<a href="/View-page/'+element.id+'"><img src="/storage/img/Productos/'+element.imagen+'"  class="card-img-top " width="90px" height="160px" /></a>'+
                " <div class='card-body justify-content-between align-items-center'>" +
           "<div class='d-flex  align-items-center' >"+
                   "<h5 class='card-title h6 txtListCategoryView textTitleProSearch'>" + element.nombre + "</h5>"+
               "</div>"+
            " <div class='d-flex justify-content-between'>"+
             "<span class='box--text--pre txtBoxPreBefore textPrecioProBefore'>"+"<del>"+"S/ "+element.precio+"</del>"+"</span>"+
             "<span class='textPrecioProAfter'>"+"S/ "+ element.newPrecio+ "</span>"+
                "</div>"+
                "<div class=' align-items-center d-flex'>"+
                "   <span class='h6 mb-0 text-muted fw-normal'>"+
                "<small>"+ element.cantidad+ " disponibles" +"</small>"+  "</span>"+
                "</div>"+
                "<hr>" +
                " <div class='text-center'>" +
    '<a href="/View-page/'+element.id+'" class="btn btn-sm btnListCategoryView btnEfectClick btnViewPageClick" style="">'+ 'Ver </a>'+
                " </div>" +
                " </div>" +
                " </div>" +
                " </div>  ";
    });
    // console.log(listCategory[].nombre);
}
// listCate(url);
const btnFilterSearch=document.querySelectorAll(".btnFilterSearch");
btnFilterSearch.forEach(btnFilterSearch =>{
    btnFilterSearch.addEventListener("click", (e)=>{
        let nameProduct=e.target.getAttribute("name");
        // console.log("nombre ",nameProduct);
        const url="/searchListCategory?search="+nameProduct+"";
        listCate(url);
        
    });
});



// -------------------------- addCartProduct.js
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


// -------------------------- dataPictur.js
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
  
  
// --------------------------factLogic.js
let fBtnSearchA=document.getElementById("fBtnSearch");
 if (fBtnSearchA) {
// const btnSearch=document.getElementById('#fBtnSearch');
    fBtnSearch.addEventListener('click',()=>{
    const getNumRut=document.querySelector('.fNumRut').value;
  fetch('/Admin-facturaSearch/'+getNumRut+'').then(data =>data.json()).then(
 function(data){
    fNombreUser.value=data.nombre;
    fCondicionContribuyente.value=data.condicion;
    fEstadoContribuyente.value=data.estado;
    fNumero.value=data.numeroDocumento;
    // fTipoDocumento.value=data.tipoDocumento;
 }
);
});
 }
  function viewListFactura(){
    fetch("/Admin-facturaList").then(dataFact=>dataFact.json()).
    then(function (dataFact){
      console.log(dataFact.listFVenta.length);
      const listVentas=document.getElementById("listFact");
      listVentas.innerHTML=``;
      dataFact.listFVenta.forEach(item => {
        listVentas.innerHTML +=
        `<tr>`+
        `<td>A000${item.id}</td>`+
        `<td>${item.nombreUser}</td>`+
        `<td>${item.numRuc}</td>`+
        // `<td>${item.precio}</td>`+
        // `<td>${item.precio*item.cantidad}</td>`+
        `<td><a href="" class="btn btn-danger"><i class="bi bi-file-earmark-pdf-fill"></i></a></td>`+
        `<tr>`;
      });
    })
  }
  viewListFactura();

  const formAddP=document.getElementById("formFactAgregar");
 if (formAddP) {
  btnAddPF.addEventListener("click",(e)=>{
    console.log(formAddP.precioPF.value);
    console.log(formAddP.nombrePF.value);
    console.log(formAddP.cantidadPF.value);
    let fid=0;
  let producto=JSON.parse(localStorage.getItem("listProducto")) || [];
  function arrayPro(fnombre,fCantidad,fprecio) {
    let list={
      id:producto.length+1,
      nombre:fnombre,
      cantidad:fCantidad,
      precio:fprecio
    }
    producto.push(list);
    insert();
  }
  let insert=()=>{
    localStorage.setItem("listProducto",JSON.stringify(producto));
  }
  arrayPro(formAddP.nombrePF.value,formAddP.cantidadPF.value,formAddP.precioPF.value) 
  // -------version 2 
  let productoItem=JSON.parse(localStorage.getItem("listProducto"));
  const listProductoV=document.getElementById("listProducto");
if (productoItem !==null) {

  listProductoV.innerHTML=``;
  const proTotal=document.getElementById("precioTVenta");
  proTotal.innerHTML=``;
  let precioT=0;
  productoItem.forEach(item => {
    listProductoV.innerHTML +=
    `<tr>`+
    `<td>A000${item.id}</td>`+
    `<td>${item.nombre}</td>`+
    `<td>${item.cantidad}</td>`+
    `<td>${item.precio}</td>`+
    `<td>${item.precio * item.cantidad}</td>`+
    `<td><a class="btn btn-danger" id="btnDelete${item.id}"><i class="bi bi-trash"></i></a></td>`+
    
    // `<td><button class="btn btn-danger" id="btnDelete"><i class="bi bi-file-earmark-pdf-fill"></i></button></td>`+
    `<tr>`;
    precioT+=item.precio * item.cantidad;
  });
  let igv=precioT*0.18;
  proTotal.innerHTML +=` <h6>Sub Total S/. ${precioT-igv}</h6>
  <h6>I.G.V. 18% S/. ${igv}</h6>
  <h6 >Total S/. <spam id="fpreTotal">${precioT}</spam></h6>`;
} else {
  
}
  // localStorage.removeItem(productoItem[2])
  // console.log(productoItem[2]);

  // console.log(fpreTotal.value);
});
}
// version 3
let productoItem=JSON.parse(localStorage.getItem("listProducto"));
const listProductoV=document.getElementById("listProducto");
if (productoItem !==null) {
  console.log("yes");
  listProductoV.innerHTML=``;
  productoItem.forEach(item => {
    listProductoV.innerHTML +=
    `<tr>`+
    `<td>A000${item.id}</td>`+
    `<td>${item.nombre}</td>`+
    `<td>${item.cantidad}</td>`+
    `<td>${item.precio}</td>`+
    `<td>${item.precio * item.cantidad}</td>`+
    `<td><a class="btn btn-danger" id="btnDelete${item.id}"><i class="bi bi-trash"></i></a></td>`+
    `<tr>`;
    });
  } else {
    
  }
  
  // localStorage.clear(); /// para eliminar todo el local storage
          // console.log(producto);
          
          let time=new Date();
          let day=time.getDate();
          let month=time.getMonth() +1;
          let year=time.getFullYear();
          const fechaa=document.getElementById("ffecha");
fechaa.value=`${day}/${month}/${year}`;

btnFacturaV.addEventListener("click",()=>{
  // console.log(`${day}/${month}/${year}`);
  fetch("/Admin-facturaList").then(SerieCorrel =>SerieCorrel.json()).then((serie)=>{
    let fserie=document.getElementById("fserie");
    if (serie.listFVenta.length!==0) {
      let ser=serie.listFVenta.at(-1);
      let serieVenta=ser.id+1;
      fserie.value=`A000${serieVenta}`;
      console.log(`A000${serieVenta}`);
      console.log("lleno ");
    } else {
      fserie.value='A0001';
      console.log("vacio");
      
    }

    // console.log(serie.listFVenta);
    // serie.listFVenta.forEach(item => {
      //   console.log(item.id);
      // });
    });
  // console.log(ffecha.value);

  })


  // --------------insert a base de dato  
const dataFactura=document.getElementById('formFactAgregar');
dataFactura.addEventListener("submit",(e)=>{
  const fCreate=document.getElementById('formFactAgregar');
  e.preventDefault();
  console.log("JOSE");
  // console.log(fpreTotal.value);

console.log(fCreate);
// --- pdf -- precio total
// console.log(fpreTotal.value);
// let fas="/Admin-facturaVenta/?fNombreUser="+fCreate.fNombreUser.value+"&fNumero="+
// fCreate.fNumero.value+"&fprecio="+fCreate.fpreTotal.value+"&fpdf=A0001ewse"; 
// console.log(fas);
//  fetch("/Admin-facturaVenta/?fNombreUser=1&fNumero=2&fprecio=3&fpdf=A0001ewse"). 
console.log(fNombreUser.value+fpreTotal.value);
    fetch("/Admin-facturaVenta/?fNombreUser="+fNombreUser.value+"&fNumero="+
    fCreate.fNumero.value+"&fprecio=1223&fpdf=A000&ffecha="+ffecha.value+"").then(factura => factura.json()).then(function (factura) {
console.log(factura.status);
if (factura.status=="ok") {
  Swal.fire({
    icon: 'success',
    title: 'Factura Generada ',
    text: 'Se genero la factura exitosamente',
    showConfirmButton: false,
    timer: 3000
    });
    viewListFactura();
    localStorage.clear("listProducto");
} else {
      Swal.fire({
      icon: 'error',
      title: 'Vuelva a intentarlo ',
      text: 'Error al genera la factura',
      showConfirmButton: false,
      timer: 3000
      });
    }
  });
  });
     
// -------------------------- productoSearchAdmin.js
const searchProductoPA=document.getElementById('searchProducto');
if (searchProductoPA) {
    
    searchProductoPA.addEventListener('keyup',function(e) {
        e.preventDefault();
    // const fBtnSearchLista=document.getElementById('fBtnSearchLista').value;
    const fProductoLista=document.getElementById('fProductoLista').value;
    //     console.log(e.target.fProductoLista.name);
// fBtnSearchLista.preventDefault();

// console.log(fProductoLista);
if (fProductoLista.length>=1) {
    // contentProducto.innerHTML +="<h4>hola</h4>";
    // console.log(fProductoLista.length);
    fetch('/Admin-search/'+fProductoLista+'').then(search=>search.json()).
    then(function(search){
            // console.log(search);
            // demo
            let content =document.getElementById("dataProducto");
            content.innerHTML =``;
            search.forEach(item => {
                var no= ""+item.nombre;
    content.innerHTML +=
    `<tr>`+
    `<td>${item.id}</td>`+
    `<td>${item.nombre}</td>`+
    `<td>${item.precio}</td>`+
    `<td>${item.newPrecio}</td>`+
    `<td>`+
    `<img src="/storage/img/Productos/${item.imagen}"  width="80px"  alt="">`+
    `<td>`+
    `<a onclick="msgUpdate(${item.id})"  class="mb-md-0 mb-2 btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="bi bi-pencil"></i></a>`+
    // `<a   onclick="productDelete(${item.id},${item.nombre},${item.imagen})" class="btn btn-danger " id="delete-frm"> <i class="bi bi-trash"></i></a>`+
    // `<a onclick="productDelete(${item.id},item.nombre+ ``+`)">dele</a>`+
    `<a onclick="productDelete(${item.id})" class="btn btn-danger "> <i class="bi bi-trash"></i></a>`+

// `<a   onclick="productDelete('+item.id+','+item.nombre+','+item.imagen+')" class="btn btn-danger " id="delete-frm"> <i class="bi bi-trash"></i></a>`+
`</td>`+
`</tr>`; 
});
});
} else {
    }
});
}
// --------infocord
let infocord=document.getElementById("vBtnSearch");
if (infocord) {
    
    vBtnSearch.addEventListener('click',()=>{
        const getNumInfo=document.querySelector("#vNumInfocorp").value;
        fetch('/Admin-infocorpSearch/'+getNumInfo+'').then(data =>data.json()).then(
 function(data){
     // const a=document.getElementById('vNombreUser').value;
     // 10070320814
     //     fNombreUser.value=data.nombre;
     vNombreUser.value=data.nombre;
     // a='data.nombres';
     vNumero.value=data.numeroDocumento;
     // fNumero.value=data.numeroDocumento;
     // fTipoDocumento.value=data.tipoDocumento;
     // fNombreUser.value=data.nombre;
     // fNombreUser.value=data.nombre;
     // console.log(data);
    }
);
});

}


// -------------------------- msj.js
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
    // function msjOkUser(){
    //   Swal.fire({
    //   // position:'center',
    //   icon: 'success',
    //   title: 'Bien venido ',
    //   text: 'Gracias por usar nuestro servicio',
    //   showConfirmButton: false,
    //   timer: 3000
    //   })
    //   }

    // function msjError() {
    //   Swal.fire({
    //     title: ' Error de inicio de sesion',
    //     text: ' Vuelve a intentarlo ',
    //     icon: 'error',
    //     showConfirmButton:false,
    //     timer: 3000
    //     })
    // }
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

// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------
// --------------------------

