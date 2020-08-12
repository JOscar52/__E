/*
  Creación de una función personalizada para jQuery que detecta cuando se detiene el scroll en la página
*/

alert("estoy en index.js");
$.fn.scrollEnd = function(callback, timeout) {
  $(this).scroll(function(){
    var $this = $(this);
    if ($this.data('scrollTimeout')) {
      clearTimeout($this.data('scrollTimeout'));
    }
    $this.data('scrollTimeout', setTimeout(callback,timeout));
  });
};
/*
  Función que inicializa el elemento Slider
*/

function inicializarSlider(){
  $("#rangoPrecio").ionRangeSlider({
    type: "double",
    grid: false,
    min: 0,
    max: 100000,
    from: 200,
    to: 80000,
    prefix: "$"
  });
}
/*
  Función que reproduce el video de fondo al hacer scroll, y deteiene la reproducción al detener el scroll
*/
function playVideoOnScroll(){
  var ultimoScroll = 0,
      intervalRewind;
  var video = document.getElementById('vidFondo');
  $(window)
    .scroll((event)=>{
      var scrollActual = $(window).scrollTop();
      if (scrollActual > ultimoScroll){
       video.play();
     } else {
        //this.rewind(1.0, video, intervalRewind);
        video.play();
     }
     ultimoScroll = scrollActual;
    })
    .scrollEnd(()=>{
      video.pause();
    }, 10)
}

inicializarSlider();
playVideoOnScroll();

//*********************************
$('#submitButton').submit(function(event){  // detecta botón
  alert("js")
}
/*
$('#submitButton').submit(function(event){  // detecta bot�n
  alert("Mostrar TODOS");
   var subvarjs3 = "mostrarTodos";
   //var subvarjs4 = $('form').find('input[name="hinputname4"]').val();
   //alert(" en js "+subvarjs3);alert(subvarjs4);
   event.preventDefault();
   $.ajax(
   {
     url: './Mostrar.php',
// agrego 2 l�neas
//    cache: false,
//    contentType: false,
//    processData: false,
// agregu� 2 l�neas
    // dataType:"json",
     type: 'POST',
     data: {ajaxvarjs3: subvarjs3}

   }
  ).done(function(data){
      alert("FIN");
  }
*/
