

<?php
// Mostrar datos Seleccionados
  //echo("ENCABEZADO estoy en Buscador.php");
  //echo nl2br("\n");  echo nl2br("\n");
  //$("#idCiudad").change(function(event){
  //  $selCd=document.getElementById("idCiudad").value;
  //  print("Ciudad seleccionada:".$selcd);
 //echo rtrim($str,"World!");
  //})
  $buscaCiudad="New York";
  $buscaTipo="Casa";
  $buscaCiudad=$_POST['cd'];
  $rnPrecio=$_POST['rPrec'];
  //$cam=SELECT CONVERT(varchar,$rPrecio);
  echo " Busca la Ciudad de : ".$buscaCiudad.PHP_EOL;
  echo " Busca entre el precio : ".$rnPrecio.PHP_EOL;
  echo " Busca entre el precio CHAR : ".$cam.PHP_EOL;
//  echo " Busca entre el precio bajo : ".rtrim($rnPrecio,";").PHP_EOL;
//  echo " Busca entre el precio alto : ".ltrim($rnPrecio,";").PHP_EOL;
  echo PHP_EOL;
/*******************************************/
// el archivo tiene que ir como lectura "r"
  $archi=fopen("./data-1.json","r");
  $lee_dat=fread($archi,filesize("./data-1.json"));
  $dato=json_decode($lee_dat,true);
  $i=-1;
  foreach ($dato as $key => $seleccion) {
    $i=$i+1;
    if($buscaCiudad=="Todo"){
      if($buscaTipo=="Todo"){
        echo "Error en selección: NO se perimte seleccionar Todo en Ciudad y Tipo";
      }
      else{
        if($seleccion['Tipo']==$buscaTipo){
          echo json_encode($seleccion);echo nl2br("\n");echo nl2br("\n");
        }
      }
    }
    else {
        if($seleccion['Ciudad']==$buscaCiudad){
          if($seleccion['Tipo']=="Todo"){
            echo json_encode($seleccion);echo nl2br("\n");echo nl2br("\n");
          }
          else{
            if($seleccion['Tipo']==$buscaTipo){
              echo json_encode($seleccion);echo nl2br("\n");echo nl2br("\n");
            }
          }
        }
    }

  }
?>
