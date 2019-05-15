<?php
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//wildalys
 class envio{
  function send($nombre,$mensaje,$asunto,$correo){
    
    try{
      $mail = new PHPMailer(true);
          $body =" Nombre:{$nombre}\n Asunto:{$asunto}\n Mensaje:{$mensaje}\n Correo:{$correo}\n";

          $mail->isSMTP();
          $mail->SMTPDebug = 0;
          $mail->SMTPSecure ='tls';
          $mail->Host = 'smtp.mailtrap.io';
          $mail->Port = 2525;
          $mail->SMTPAuth = true;

          $mail->Username = '19be0a56f8415b';
          $mail->Password = 'e9d1467694b9f9';

          $mail->setFrom($correo,$nombre); //Envia
          $mail->addAddress('5bf7263ef2-9420de@inbox.mailtrap.io','Remitente'); //Recibe
          $mail->Subject  = ('Contacto de la pagina web - '.$asunto); //asunto
          $mail->Body     = $body;
          $mail->send();
          return true;
        }
        catch (Exception $e) {
          return $e;
        }
    }
  }
 ?>