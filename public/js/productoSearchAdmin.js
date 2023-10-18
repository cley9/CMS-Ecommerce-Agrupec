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
// api admin
// const listUser=document.getElementById('listPedidoUser');
// listUser.addEventListener("Click",(e)=>{
//     console.log("2");
// });

function listPedidoUser(iduser){
fetch(`/api/admin/listPedio/${iduser}`).then(response=>response.json()).then((response)=>{
// console.log(response);
let body='';
if (response.msg == "Con pedidos") {
    let neto=0;
    response.data.list_pedido_user.forEach((item)=>{
        neto +=item.pivot.cantidad * item.newPrecio;
         body +=`
            <div class="mb-2 col p-2 rounded-3 box--view--favorite">
                <div class="row col d-flex align-items-center">
                    <div class="col-4 col-md-2">
                        <a href="/View-page/${item.id}">
                            <img src="storage/img/Productos/${item.imagen}" class="card-img-top"
                                width="90px" height="120px" />
                        </a>
                    </div>
                    <div class="col col-md-4">
                        <div class="row">
                            <span class="fw-normal mb-3 ">${item.nombre}</span>
                            <small class="mb-0 md-0 text-muted"> SKU:3</small>
                            <div
                                class="col d-flex justify-content-between align-items-center  d-md-none d-sm-block d-block">
                                <small>Cantidad : 3</small>
                                <small>Precio : 3</small>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-6  d-none d-sm-none d-md-block">
                        <div class="col ">
                            <div class="row  ">
                                <div class="col ">
                                    <div class="col mb-4  rounded-3 d-flex justify-content-center align-items-center bg-light">
                                        <h6 class="pt-2">Precio unitario</h6>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center ">
                                        <h6>S/ ${item.newPrecio}</h6>
                                    </div>
                                </div>
                                <div class="col ">
                                    <div class="col mb-4  rounded-3 d-flex justify-content-center align-items-center bg-light">
                                        <h6 class="pt-2">Cantidad</h6>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center ">
                                        <h6>${item.pivot.cantidad}</h6>
                                    </div>
                                </div>
                                <div class="col ">
                                    <div class="col mb-4 rounded-3 d-flex justify-content-center align-items-center bg-light">
                                        <h6 class="pt-2">Subtotal</h6>
                                    </div>
                                    <div class="d-flex justify-content-center align-items-center ">
                                        <h6>S/ ${item.pivot.cantidad * item.newPrecio}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `;
        // bodyListPedido.innerHTML=body;
        
        // Ahora puedes usar la variable htmlString en tu código JavaScript como desees.
        
    });
    // console.log("true");
    body +=`<div class="p-3">
    <h5 class="text-end">Total: S/ ${neto}.00</h5>
    </div>`;
} else {
    body += `<div class="">
    <h3 class="text-center">Sin pedidos</h3>
</div>`;
    // console.log("sin pedidos");
}
bodyListPedido.innerHTML=body;

});

// fetch('/Admin-search/'+fProductoLista+'').then(search=>search.json()).
// then(function(search){

}

