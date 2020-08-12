

<?php
// Mostrar datos
  // archivo openFile-w.php
  echo "Lee un archivo ";

  $campo="username";

  //$titulo = $_POST['ajaxvarjs3'];
  //echo json_encode($titulo);
  //$tex = $_POST['ajax4'];

  //$nuevfile= fopen("./".$titulo,"a") or die ("Error en la creacion del archivo");
/*******************************************/
// el archivo tiene que ir como lectura "r"
  $archi=fopen("./data-1.json","r");
  $lee_dat=fread($archi,filesize("./data-1.json"));
  $dato=json_decode($lee_dat,true);
  //$busca="456";
  //$cambio="cambio_username  sss";
  foreach ($dato as $key => $dato_campo) {
    /*
    if ($busca==$dato_campo['password']){
      $dat_cam=$dato_campo["username"];
      echo json_encode("eeeeel dato es campo ".$campo."\n");
      $respon["mens"]="mensaje el dato es ".$dat_cam."\n";
      echo json_encode($respon);


    }
    */
    //en jquery archivo json:  $(".pt2").html(pbt);
    echo json_encode($dato_campo);
  }
/*******************************************/
/*    // Actualiza
    session_start();

    $busca="456";
    $cambio="cambio_username NUEVO";

    $_SESSION['password']=$busca;
    updateData($_SESSION["password"],'username',$cambio);

    function updateData($busca, $archi, $cambio){

      $archi=fopen("./json.json","r");
      $lee_dat=fread($archi,filesize("./json.json"));
      $dato=json_decode($lee_dat,true);

      $data = $dato;
      if (isset($data)) {
        $i=-1;
        foreach ($data as $key => $value) {
          $i=$i+1;
          if ($value['password']==$busca) {
              $data[$i]['username']=$cambio;
            echo json_encode("estoy en update antes de write i=".$i." busca ".$busca."  ".$data[0]['username']);
          }
        }
        echo json_encode("estoy en update antes de write ".$busca." ".$archi."  ".$cambio);
        writeDataFile($data);
      }
    }

    function writeDataFile($data_array){
      if (sizeof($data_array)>0) {
        $data_file = fopen("./json.json","w");
        fwrite($data_file, json_encode($data_array));
        fclose($data_file);
      }

    }
    */
?>
