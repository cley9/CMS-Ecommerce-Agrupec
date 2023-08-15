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
  // console.log("gaa");
  
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
    // console.log(item.id);
    // btnDelete+item.id.addEventListener("click",(e)=>{
      //   console.log("hi");
      // });
    });
  } else {
    // console.log("gaa");
    
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
console.log("---------");
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
     