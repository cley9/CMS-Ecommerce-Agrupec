// login user
const fromLoginUser = document.getElementById('formLoginUser');
fromLoginUser.addEventListener('submit', function (e) {
    e.preventDefault();
    const email = document.getElementById('emailLoginUser');
    const password = document.getElementById('passwordLoginUserU');
    fetch('/loginLocalUser/' + email.value + '/' + password.value + '').then(data => data.json()).
        then(function (data) {
            // console.log(data);
            if (data.code == 200) {
                msjOkUser();
                location.href = '/';
            } else {
                msjError();
            }
        });

});



// login admin
// const formLoginAdmin = document.getElementById('formLoginAdmin');
// formLoginAdmin.addEventListener('submit', function (e) {
//     e.preventDefault();
//     const emailAdmin = document.getElementById('emailLoginAdmin');
//     const passwordAdmin = document.getElementById('passwordLoginAdmin');
//     fetch('/Login-admin/' + emailAdmin.value + '/' + passwordAdmin.value + '').then(data => data.json()).
//         then(function (data) {
//             // console.log(data);
//             if (data.code == 200) {
//                 msjOk();
//                 location.href = '/Admin';
//             } else {
//                 msjError();
//                 // console.log('error');
//             }
//         });
// });

// msj de login
function msjOkUser(){
    Swal.fire({
    // position:'center',
    icon: 'success',
    title: 'Bien venido ',
    text: 'Gracias por usar nuestro servicio',
    showConfirmButton: false,
    timer: 3000
    })
    }

function msjError() {
    Swal.fire({
      title: ' Error de inicio de sesion',
      text: ' Vuelve a intentarlo ',
      icon: 'error',
      showConfirmButton:false,
      timer: 3000
      })
  }