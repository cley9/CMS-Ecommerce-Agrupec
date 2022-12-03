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

