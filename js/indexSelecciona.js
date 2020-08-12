/*
  Creación de una función para datos de selección de Ciudad y Tipo
*/

//alert("XRA estoy en indexSelecciona.js");
//$("#idCiudad").change(function(event){
$("#formulario").submit(function(event){  // detecta botón
  //alert("estoy en submit");
var selCd=document.getElementById("idCiudad").value;
var selTp=document.getElementById("idTipo").value;
var rPrecio=document.getElementById("rangoPrecio").value;
//var PrecioInicial=rtrim(rPrecio,";");
//busca = patron.exec("3c491a-9d1d6-91br");
var pospc=rPrecio.indexOf(";");
var PrecioInicial=rPrecio.slice(0,pospc);
var PrecioFinal=rPrecio.slice(pospc+1);
//  alert("Ciudad seleccionada: "+selCd+" tipo: "+selTp);
//  alert("Precio : "+rPrecio+" inicial "+PrecioInicial+" Final "+PrecioFinal);


//});

//$('#submitButton').submit(function(event){  // detecta botón
//  alert("Mostrar Selección");
   //var subvarjs3 = "mostrarTodos";
   //var subvarjs4 = $('form').find('input[name="hinputname4"]').val();
   //alert(" en js "+subvarjs3);alert(subvarjs4);
   //event.preventDefault();
   $.ajax(
   {
//     url: './Bus.php',
     url: './Buscador.php',
// agrego 2 l�neas
//    cache: false,
//    contentType: false,
//    processData: false,
// agregu� 2 l�neas
    // dataType:"json",
     type: 'POST',
     data: {cd: selCd,
            tp: selTp,
            rPrecI: PrecioInicial,
            rPrecF: PrecioFinal
           }
            //rPrecI:rPrecioInicial}

   }
  ).done(function(data){
      alert(data);
  });
});
