

<?php
// Mostrar datos Seleccionados
  print("ENCABEZADO estoy en Selección");
  echo nl2br("\n");
  //$("#idCiudad").change(function(event){
  //  $selCd=document.getElementById("idCiudad").value;
  //  print("Ciudad seleccionada:".$selcd);

  //})
  $buscaCiudad="New York";
  $buscaTipo="Casa";
  $buscaCiudad=$_POST['cd'];
  echo " AAAAAAAAAAAAA buscaCiudad : ".$buscaCiudad;

/*******************************************/
// el archivo tiene que ir como lectura "r"
/*  $archi=fopen("./data-1.json","r");
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
  */
?>
