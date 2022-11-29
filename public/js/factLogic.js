// const btnSearch=document.getElementById('#fBtnSearch');
    fBtnSearch.addEventListener('click',()=>{
    const getNumRut=document.querySelector('.fNumRut').value;
  fetch('/Admin-facturaSearch/'+getNumRut+'').then(data =>data.json()).then(
 function(data){
    fNombreUser.value=data.nombre;
    fCondicionContribuyente.value=data.condicion;
    fEstadoContribuyente.value=data.estado;
    fNumero.value=data.numeroDocumento;
    fTipoDocumento.value=data.tipoDocumento;
 }
);
});
const dataFactura=document.getElementById('formFactCreate');
dataFactura.addEventListener("submit",(e)=>{
  const fCreate=document.getElementById('formFactCreate');
  e.preventDefault();
  fetch("/Admin-facturaVenta/?fNombreUser="+fCreate.fNombreUser.value+"&fNumero="+
  fCreate.fNumero.value+"&fNomProducto="+fCreate.fNombreProducto.value+"&fprecio="+
  fCreate.fPrecio.value+"&fCantidad="+fCreate.fCantidad.value+"").
  then(factura => factura.json()).then(function (factura) {
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
      
  function viewListFactura(){
    fetch("/Admin-facturaList").then(dataFact=>dataFact.json()).
    then(function (dataFact){
      console.log(dataFact.listFVenta);
      const listVentas=document.getElementById("listFact");
      listVentas.innerHTML=``;
      dataFact.listFVenta.forEach(item => {
        listVentas.innerHTML +=
        `<tr>`+
                `<td>A000${item.id}</td>`+
                `<td>${item.nombreUser}</td>`+
                `<td>${item.cantidad}</td>`+
                `<td>${item.precio}</td>`+
              
                `<td><a href="" class="btn btn-danger"><i class="bi bi-file-earmark-pdf-fill"></i></a></td>`+

                `<tr>`;
      });
    })
  }
  viewListFactura();
