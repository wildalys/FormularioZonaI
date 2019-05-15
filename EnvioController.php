<?php
  require 'envio.php';

  $mensaje=new envio();
  $mensj=$mensaje->send($_POST['name'],$_POST['body'],$_POST['subject'],$_POST['email']);
  echo $mensj; //Devuelve 1 si es TRUE 0 si es FALSE
?>