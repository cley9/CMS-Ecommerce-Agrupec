$(document).ready(function(){

  $('.ir-arriba').click(function(){
    $('body, html').animate({
      scrollTop: '0px'
    },300 );
  });

  $(window).scroll(function(){
    if ($(this).scrollTop() > 0){
      $('.ir-arriba').slideDown(300);
    } else {
      $('.ir-arriba').slideUp(300);
    }
  });

});

function validar(){
  var a=document.getElementById("name").value;
  if (a === "") {
    return false;
  }else {

     Swal.fire({
      icon: 'success',
      title:  ' Su mensaje a sido enviado  ',

      text: 'Gracias por enviar !',
      showConfirmButton: false,
      timer: 3000

    })
  }

}


//
// document.querySelector('.input-icono').addEventListener('click', function() {
// this.querySelector('input').focus();
// });



// para la busqueda sincrona
$(document).ready(function(){//documento estee listo
$('#id_search').keyup(function(e){///para la busqueda
e.preventDefault();
let data = $('#form').serializeArray(); //para obtener los valores de form en forma de arays
$.post({//ajax
    url:'busqueda.php',
    data:data,  //datos a enviar
    success: function(response_){// respon puede ser cual quier nonmbre
       $('#response').html(response_);//se le llama con $.si e guardara en la variable response_
        //  $('#catalogo').html(response_catalogo);//se le llama con $.si e guardara en la variable response_
    }
})
})
});
