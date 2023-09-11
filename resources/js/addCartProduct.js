
const cartHoverM=document.getElementById('cartHover');
if (cartHoverM) {
cartHoverM.addEventListener('mouseenter',()=>{
    // console.log('hola mark');
    const url = '/GetCart';
    fetch(url)
    .then((resp) => resp.json())
    .then(function(data) {
        // console.log(data);
        mark.innerHTML="";
        data.forEach(element => {
              mark.innerHTML +=
                 '<div class="container-flud mb-3 " id="mark__">'+
            '<div class="shadow rounded-2 bg-warning_ p-2 modal-preview-cart-box">'+
                '<div class="row">'+
        '<div class="col-4 col-md-5 me-2">'+
        '<a href="/View-page/'+element.id+'">'+
                    '<img src="/storage/img/Productos/'+element.imagen+'"  class="card-img-top " width="90px" height="70px" />'+
                            '</a>'+
                        '</div>'+
                        '<div class="col-4 col-md-6 bg-info_">'+
            '<span class="fw-normal mb-3 ">'+element.nombre+'</span>'+
            '<div class="d-flex justify-content-between align-items-center bg-warning_">'+
                '<small class=" mb-0 md-0 text-muted  " > Cantidad: '+element.pivot.cantidad+' </small>'+
                '<a href="/Delete/'+element.pivot.productoId+'" class="text-danger icons--delete--cart "> <i class="bi bi-trash"></i></a>'+
            '</div>'+
        '</div>'+
        '</div>'+
        '</div>'+
        '</div>'+'';
        });
    });
    $(document).ready(function() { // modal depende de jquery cdn
        $("#mViewListProCart").modal('show');
        });


});
}

// ----------------------
$(function() {
    $("#news-slider").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 2],
        itemsMobile: [600, 1],
        navigation: true,
        navigationText: ["", ""],
        pagination: true,
        autoPlay: true
    });
});
// Activate Carousel
//$("#myCarousel").carousel();
// Enable Carousel Indicators
$(".item").click(function() {
    $("#myCarousel").carousel(1);
});
// Enable Carousel Controls
$(".left").click(function() {
    $("#myCarousel").carousel("prev");
});

// ------------------- w3 para daltonico
// temaBodyDark.addEventListener("click", () => {
//     document.body.classList.toggle('dark');
//     temaBodyDark.classList.toggle('active');
// });
const btnSwitch = document.querySelector('#switch');
if (btnSwitch) {
    
    btnSwitch.addEventListener('click', () => {
        document.body.classList.toggle('dark');
        btnSwitch.classList.toggle('active');
        
        // Guardamos el modo en localstorage.
        if(document.body.classList.contains('dark')){
            localStorage.setItem('dark-mode', 'true');
        } else {
            localStorage.setItem('dark-mode', 'false');
        }
    });
    
    // Obtenemos el modo actual.
    if(localStorage.getItem('dark-mode') === 'true'){
        document.body.classList.add('dark');
        btnSwitch.classList.add('active');
    } else {
        document.body.classList.remove('dark');
        btnSwitch.classList.remove('active');
    }
}