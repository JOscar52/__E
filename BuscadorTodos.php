

<?php
// Mostrar datos

  print("ENCABEZADO estoy en submit");
  echo nl2br("\n");echo nl2br("\n");
  $campo="username";

/********************************************/
// el archivo tiene que ir como lectura "r"
  $archi=fopen("./data-1.json","r");
  $lee_dat=fread($archi,filesize("./data-1.json"));
  $dato=json_decode($lee_dat,true);

  foreach ($dato as $key => $dato_campo) {

    echo '<div href="index.html" target="imrpimetodo">'. json_encode($dato_campo);
    echo nl2br("\n");
    echo nl2br("\n");

  }
/*******************************************/
?>
