// const btnSearch=document.getElementById('#fBtnSearch');
// btnSearch.addEventListener('click',()=>{
    fBtnSearch.addEventListener('click',()=>{
    const getNumRut=document.querySelector('.fNumRut').value;
  fetch('/Admin-facturaSearch/'+getNumRut+'').then(data =>data.json()).then(
 function(data){
    console.log(data);
    // 10070320814
    fNombreUser.value=data.nombre;
    fCondicionContribuyente.value=data.condicion;
    fEstadoContribuyente.value=data.estado;
    fNumero.value=data.numeroDocumento;
    fTipoDocumento.value=data.tipoDocumento;
    // fNombreUser.value=data.nombre;
    // fNombreUser.value=data.nombre;
 }
);
});


// btnSearch.addEventListener("click", (e) => {
//     // btnSearch.addEventListener('click'
// console.log('factura');
// }
// );
// console.log('factura');

// btnSearch.addEventListener("click", (e) => {
//     modal.classList.remove("modal--show");
//     });


// const getNumRut=document.querySelector('.bas').value;
// a.addEventListener('click',()=>{
//     // console.log(123);

//     console.log(getNumRut);
//     });

// vBtnSearch.addEventListener('click',()=>{
// console.log(2332);
// });
