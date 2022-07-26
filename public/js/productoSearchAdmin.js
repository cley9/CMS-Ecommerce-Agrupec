const searchProducto=document.getElementById('formSearchProducto');
searchProducto.addEventListener('keyup',function(e) {

    e.preventDefault();
    // const fBtnSearchLista=document.getElementById('fBtnSearchLista').value;
const fProductoLista=document.getElementById('fProductoLista').value;
//     console.log(e.target.fProductoLista.name);
// fBtnSearchLista.preventDefault();

    console.log(fProductoLista);
    if (fProductoLista.length>=1) {

        // contentProducto.innerHTML +="<h4>hola</h4>";
        // console.log(fProductoLista.length);
        fetch('/Admin-search/'+fProductoLista+'').then(search=>search.json()).
        then(function(search){
            console.log(search);
            // demo
            let content =document.getElementById("dataProducto");
            content.innerHTML =``;
search.forEach(item => {
    // content.innerHTML ='';
    // var no= String(item.nombre);
    var no= ""+item.nombre;

                content.innerHTML +=
//                 '<tr>'+
//                 ' <td>'+item.id+'</td>'+
//                 ' <td>'+item.nombre+'</td>'+
//                 ' <td>'+item.precio+'</td>'+
//                 ' <td>'+item.newPrecio+'</td>'+
//                 ' <td>'+item.imagen+'</td>'+
//                 ' <td>'+
//   '<a onclick="msgUpdate('+item.id+')"  class="mb-md-0 mb-2 btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="bi bi-pencil"></i></a>'+
// // ' <a   onclick="productDelete('+item.id+','+item.nombre+','+item.imagen+')" class="btn btn-danger " id="delete-frm"> <i class="bi bi-trash"></i></a>'+
//   '</td>'+
//                 '</tr>';



`<tr>`+
                `<td>${item.id}</td>`+
                `<td>${item.nombre}</td>`+
                `<td>${item.precio}</td>`+
                `<td>${item.newPrecio}</td>`+
                `<td>`+
      `<img src="/storage/img/Productos/${item.imagen}"  width="80px"  alt="">`+
    //   ${item.imagen}</td>`+
                // `<td>${item.id}</td>`+
                // `<td>${item.id}</td>`+
                // <td>'+item.nombre+'</td>'+
                // <td>'+item.precio+'</td>'+
                // <td>'+item.newPrecio+'</td>'+
                // <td>'+item.imagen+'</td>'+
                `<td>`+
  `<a onclick="msgUpdate(${item.id})"  class="mb-md-0 mb-2 btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="bi bi-pencil"></i></a>`+
// `<a   onclick="productDelete(${item.id},${item.nombre},${item.imagen})" class="btn btn-danger " id="delete-frm"> <i class="bi bi-trash"></i></a>`+
// `<a onclick="productDelete(${item.id},item.nombre+ ``+`)">dele</a>`+
`<a onclick="productDelete(${item.id})" class="btn btn-danger "> <i class="bi bi-trash"></i></a>`+

// `<a   onclick="productDelete('+item.id+','+item.nombre+','+item.imagen+')" class="btn btn-danger " id="delete-frm"> <i class="bi bi-trash"></i></a>`+
  `</td>`+
    `</tr>`;






    // console.log(item.nombre);
});


            // search.forEach(e => {
            //     // let cursos='';
            //     // cursos +=''+
                // content.innerHTML +=
            //     '<tr>'+
            //     ' <td>dfa</td>'+
            //     ' <td>dfa</td>'+
            //     ' <td>dfa</td>'+
            //     ' <td>dfa</td>'+
            //     ' <td>dfa</td>'+
            //     ' <td>dfa</td>'+
            //     '</tr>';
            // });
            // content.innerHTML=cursos;

        });
    } else {

    }


});


// const contentProducto=document.getElementById('contentProducto');
// contentProducto.innerHTML="<h4>hola</h4>";

// let letra=document.getElementById("demo");dfa
// letra.innerHTML="fdjalkdjf";
// searchProducto.addEventListener('onkeypress',function(e) {
//     e.preventDefault();
//     console.log(e.target.fProductoLista.value);
//     console.log(2);

// })
// const fProductoLista=document.getElementById('searchProducto');
// searchProducto.addEventListener('keyup',function(e) {
//     console.log(2);
// })



// document.querySelector("#rooms").innerHTML = document.querySelector("#rooms").innerHTML + `<div class="element">
// <img alt="foto-habitación" src="https://media-cdn.tripadvisor.com/media/photo-s/0e/c5/bc/ff/hotel-piscina-melgar.jpg" class="foto">
// <h1 class="descripción">Habitacion para ${capacidad} personas</h1>
// <div class="servicios">
//     <ul>
//         <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M13.5 3H5v18h4v-5h4.5c3.584 0 6.5-2.916 6.5-6.5S17.084 3 13.5 3zm0 9H9V7h4.5C14.879 7 16 8.121 16 9.5S14.879 12 13.5 12z"></path></svg>Parqueadero Gratis</li>
//         <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M21 10H7V7c0-1.103.897-2 2-2s2 .897 2 2h2c0-2.206-1.794-4-4-4S5 4.794 5 7v3H3a1 1 0 0 0-1 1v2c0 2.606 1.674 4.823 4 5.65V22h2v-3h8v3h2v-3.35c2.326-.827 4-3.044 4-5.65v-2a1 1 0 0 0-1-1zm-1 3c0 2.206-1.794 4-4 4H8c-2.206 0-4-1.794-4-4v-1h16v1z"></path></svg>Baño privado</li>
//         <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"></path><circle cx="12" cy="18" r="2"></circle></svg>Wi-fi</li>
//     </ul>
//     <ul>
//         <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" ></path></svg>TV</li>
//         <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" ></path></svg>Camaras de seguridad</li>
//         <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" ></path></svg> Servicio 24 horas para huespedes</li>
//     </ul>
// </div>
// <div class="precio">
//     <p>Por solo</p>
//     <h1>$${precio} COP</h1>
//     <a id="${identificacion}" onclick="loadStorage(this)" class="getter"  href="form-cliente.html">Reserva</a>
//     <a id="${identificacion}" onclick="loadStorage(this)" href="hab1.html" class="details getter">Mas detalles</a>
// </div>
// </div>`
