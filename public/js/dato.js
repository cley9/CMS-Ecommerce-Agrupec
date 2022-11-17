// const precioEnvioDestinoN=document.getElementById('precioDestino');
// // const precioEnvioA=document.querySelectorAll('#precioDestino');
// // precioEnvioDestino.addEventListener('click',(e)=>{
//     precioEnvioDestinoN.addEventListener("click",function(){

//     switch (precioEnvioDestinoN.value) {
//         case "1":
//             precio="6.00";
//             break;
//             case "2":
//             precio="16.00";
//                 break;
//                 case "3":
//                     precio="18.00";
//                     break;
//                     case "4":
//                         precio="15.00";
//                         break;
//                         // default:
//                         //     break;
//                         }
//                         precioDes.innerHTML=`${precio}`;
//     // console.log(precioDestino.value);
// });


// const cartHoverM=document.getElementById('cartHover');
// cartHoverM.addEventListener('mouseenter',()=>{
//     // console.log('hola mark');
//     const url = '/GetCart';
//     fetch(url)
//     .then((resp) => resp.json())
//     .then(function(data) {
//         // console.log(data);
//         mark.innerHTML="";
//         data.forEach(element => {
//               mark.innerHTML +=
//                  '       <div class="container-flud mb-3 " id="mark__">'+
//             '<div class="shadow rounded-2 bg-warning_ p-2 modal-preview-cart-box">'+
//                 '<div class="row">'+
//         '<div class="col-4 col-md-5 me-2">'+
//         '<a href="/View-page/'+element.id+'">'+
//                     '<img src="/storage/img/Productos/'+element.imagen+'"  class="card-img-top " width="90px" height="70px" />'+
//                             '</a>'+
//                         '</div>'+
//                         '<div class="col-4 col-md-6 bg-info_">'+
//             '<span class="fw-normal mb-3 ">'+element.nombre+'</span>'+
//             '<div class="d-flex justify-content-between align-items-center bg-warning_">'+
//                 '<small class=" mb-0 md-0 text-muted  " > Cantidad: '+element.pivot.cantidad+' </small>'+
//                 '<a href="/Delete/'+element.pivot.productoId+'" class="text-danger icons--delete--cart "> <i class="bi bi-trash"></i></a>'+
//             '</div>'+
//         '</div>'+
//         '</div>'+
//         '</div>'+
//         '</div>'+'';
//         });
//     });
//     $(document).ready(function() { // this is model depende de jquery cdn
//         $("#mViewListProCart").modal('show');
//         });


// });




// $('[data-bs-toggle="popover"]').popover({
//     trigger: 'focus', // Esto es para definir el evento del mouse, igual a data-trigger = "focus"
//     html: true // La clave está aquí. Después de la modificación, podemos escribir código html en nuestro contenido de datos.
//     })
