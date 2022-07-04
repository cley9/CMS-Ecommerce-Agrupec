const formBody=document.getElementById('#formBody');
const formulario=document.querySelectorAll('#formBody');
btnEnvioRecu.addEventListener('click',()=>{
// console.log(12);
// console.log(formulario);
document.querySelector(`#formEmail p`).classList.add("form__input__email__correcto");
document.querySelector(`#formEmail p`).classList.remove("form__input__vacio");
document.querySelector(`#formEmail input`).classList.add("form__input__vacio");
document.querySelector(`#formEmail input`).classList.remove("form-control");
document.querySelector(`#formEmail input`).classList.remove("input--frm--userLog");
// document.querySelector(`#formBody form`).classList.add("form--correcto");
// document.querySelector(`#formBody form`).classList.remove("form--frm--userRecuperar");
document.querySelector(`#formTitleRecupera h2`).classList.add("form__text__vacio");
document.querySelector(`#formTitleVeri h2`).classList.remove("form__text__vacio");
document.querySelector(`#formBtnEnvio a`).classList.add("form__btn__vacio");
document.querySelector(`#formBtnClose a`).classList.remove("form__btn__vacio");
document.querySelector(`#formOpcion h6`).classList.add("form__text__vacio");
document.querySelector(`#formDiv`).classList.add("form__text__vacio");
// document.querySelector(`#form__text__vacio h2`).classList.add("form__text__vacio");
// form__input__vacio
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
        console.log(getInputName);
        console.log(getInputEmail);
        console.log(getInputPass1);
        console.log(getInputPass2);
if (getInputEmail === '') {
console.log('esta vacio');
} else {
    console.log('esta lleno');

        fetch('/validarUser/'+getInputEmail+'' ,{
                method:'GET'
            // body:DataTransfer(id,cantidad)
        }).then(data => data.text()).then(function(data){
            console.log(data);
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
console.log('esta vacio los demas campos');
                }else{
                    location.href='/createUser?nombre='+getInputName+'&&email='+getInputEmail+'&&pass1='+getInputPass1+'&&pass2='+getInputPass2+'';
                    console.log('envia');

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
