

<?php
// Mostrar datos Seleccionados
  $buscaCiudad="New York";
  $buscaTipo="Casa";
  $buscaCiudad=$_POST['cd'];
  $buscaTipo=$_POST['tp'];
  $rnPrecioInicial=$_POST['rPrecI'];
  $rnPrecioFinal=$_POST['rPrecF'];
 //echo "<script>window.open='index.html';</script>";
  //echo " en PHP Busca la Ciudad de : ".$buscaCiudad." Tipo: ".$buscaTipo.PHP_EOL;
  //echo " Busca entre el precio : ".$rnPrecioInicial." y ".$rnPrecioFinal.PHP_EOL;
  //echo PHP_EOL;

/*******************************************/
// el archivo tiene que ir como lectura "r"
  $archi=fopen("./data-1.json","r");
  $lee_dat=fread($archi,filesize("./data-1.json"));
  $dato=json_decode($lee_dat,true);
  $i=0;
  foreach ($dato as $key => $seleccion) {

    $pre2=$seleccion['Precio'];
    $pre1=str_replace("$","",$pre2);
    $pre=str_replace(",","",$pre1);
    if($rnPrecioInicial<=$pre && $pre<=$rnPrecioFinal)
    {
      if($buscaCiudad=="Todo"){
        if($buscaTipo=="Todo"){
          $i=1;
          echo "Error en selección: NO se perimte seleccionar Todo en Ciudad y Tipo";
        }
        else{
          if($seleccion['Tipo']==$buscaTipo){
            $i=1;
            echo json_encode($seleccion);echo PHP_EOL;echo PHP_EOL;
          }
        }
      }
      else {
          if($seleccion['Ciudad']==$buscaCiudad){
            if($buscaTipo=="Todo"){
              $i=1;
              echo json_encode($seleccion);echo PHP_EOL;echo PHP_EOL;
            }
            else{
              if($seleccion['Tipo']==$buscaTipo){
                $i=1;
                echo json_encode($seleccion);echo PHP_EOL;echo PHP_EOL;
              }
            }
          }
      }
    }

    $pre1="";$pre="";
  }

  if($i==0){
    echo "No se encontró dato con las características solicitadas";
  }
?>
