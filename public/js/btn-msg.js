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


// login user
const fromLoginUser=document.getElementById('formLoginUser');
fromLoginUser.addEventListener('submit',function(e){
    e.preventDefault();
    const email=document.getElementById('emailLoginUser');
    const password=document.getElementById('passwordLoginUserA');
    fetch('/loginLocalUser/'+email.value+'/'+password.value+'').then(data =>data.json()).
    then(function(data){
        // console.log(data);
        if (data.code==200) {
            msjOkUser();
            location.href='/';
        } else {
    msjError();
}
});

});


// login admin
const formLoginAdmin=document.getElementById('formLoginAdmin');
formLoginAdmin.addEventListener('submit',function(e){
    e.preventDefault();
    const emailAdmin=document.getElementById('emailLoginAdmin');
    const passwordAdmin=document.getElementById('passwordLoginAdmin');
    fetch('/Login-admin/'+emailAdmin.value+'/'+passwordAdmin.value+'').then(data =>data.json()).
    then(function(data){
        // console.log(data);
        if (data.code==200) {
            msjOk();
            location.href='/Admin';
        } else {
    msjError();
    // console.log('error');
}
});
});


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
                   "<h5 class='card-title h6 txtListCategoryView'>" + element.nombre + "</h5>"+
               "</div>"+
            " <div class='d-flex justify-content-between'>"+
             "<span class='box--text--pre txtBoxPreBefore'>"+"<del>"+"S/ "+element.newPrecio+"</del>"+"</span>"+
             "<span>"+"S/ "+ element.precio+ "</span>"+
                "</div>"+
                "<div class=' align-items-center d-flex'>"+
                "   <span class='h6 mb-0 text-muted fw-normal'>"+
                "<small>"+ element.cantidad+ " disponibles" +"</small>"+  "</span>"+
                "</div>"+
                "<hr>" +
                " <div class='text-center'>" +
    '<a href="/View-page/'+element.id+'" class="btn btn--view-page- btn-sm btnListCategoryView btnEfectClick" style="">'+ 'Ver </a>'+
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
