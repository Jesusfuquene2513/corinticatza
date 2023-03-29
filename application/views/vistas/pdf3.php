<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include_once "constantes.php";
$instancia = new Constantes();
$servidor = $instancia ->servidor_php_mailer();
$correo_corporativo = $instancia -> correo_corporativo();
$contrasena = $instancia -> clave();
$bienvenida = $instancia -> mensaje_bienvenida();
$empresa = $instancia -> empresa();
        
extract($_GET);
require_once 'application/libraries/pdf/vendor/autoload.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
ob_start();
include_once 'application/views/vistas/bienvenida.php';
$html = ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->render();
$output = $dompdf->output();
$correo =  $_SESSION['email'];
$codigo = rand(0 ,10000);
$namepdf = "FCF_".$codigo."_".$correo.".pdf";
//$pdf = $dompdf->stream($namepdf, [ "Attachment" => true]);
$path = 'application/cartas/'.$namepdf;

file_put_contents($path, $output);
require_once "phpmailer/vendor/autoload.php";     
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
        

        


    $mail->isSMTP();      
    $mail->Mailer    = "smtp";                                      //Send using SMTP
    $mail->Host       = $servidor;                    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $correo_corporativo;                     //SMTP username
    $mail->Password   = $contrasena;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           //Enable implicit TLS encryption
    $mail->Port       = 465;                                     //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->setFrom($correo_corporativo);
              $destino = $_SESSION['email'];
    $mail->addAddress($destino);               //Name is optional
         $mail->addAttachment($path, $namepdf);    //Optional name
        $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Formulario de Contacto'.'De '.$empresa;
    $mail->Body    = 'Hemos Recibido Una petición a traves de nuestro Formulario de Contacto, esperamos darle respuesta Siempre, Hemos enviado un Documento Adjunto';
    $mail->AltBody = '';
    $mail->send();     
    
    
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

<?php
$dompdf = new Dompdf();
ob_start();
include_once 'application/views/vistas/info.php';
$html = ob_get_clean();
$dompdf->loadHtml($html);
$dompdf->render();
$output = $dompdf->output();
$correo =  $_SESSION['email'];
$codigo = rand(0 ,10000);
$namepdf2 = "Peticion_".$codigo."_".$correo.".pdf";
//$pdf = $dompdf->stream($namepdf, [ "Attachment" => true]);
$path = 'application/cartas/'.$namepdf2;
file_put_contents($path, $output);
$mail = new PHPMailer(true);
try {
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();  
     $mail->Mailer    = "smtp";                                            //Send using SMTP
    $mail->Host       = $servidor;                    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $correo_corporativo;                     //SMTP username
    $mail->Password   = $contrasena;                              //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                   //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        $mail->setFrom($correo_corporativo);
              
    $mail->addAddress($correo_corporativo);               //Name is optional
         $mail->addAttachment($path, $namepdf2);    //Optional name
        $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Nuevo Registro Formulario de Contacto de '.$empresa;
    $mail->Body    = 'Se ha recibido un nuevo registro en el formulario de Registro, Ver Archivo Adjunto';
    $mail->AltBody = '';
    $mail->send();     
    
    echo '<script>
    alert("Gracias Por comunicarte Con nosotros Pronto te daremos respuesta a tu solicitud");
   window.location.href = "../Home";
    </script>';
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>