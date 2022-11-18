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
