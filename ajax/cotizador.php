<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';

function limpiarCadena($str)
{
  return htmlspecialchars($str);
}

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions

$email = isset($_POST['email'])? limpiarCadena($_POST['email']):"";
$nombre = isset($_POST['nombre'])? limpiarCadena($_POST['nombre']):"";
$empresa = isset($_POST['empresa'])? limpiarCadena($_POST['empresa']):"";
$direccion = isset($_POST['direccion'])? limpiarCadena($_POST['direccion']):"";
$cotizacion = isset($_POST['cotizacion'])? limpiarCadena($_POST['cotizacion']):"";
$telefono = isset($_POST['telefono'])? limpiarCadena($_POST['telefono']):"";

$direccion = str_replace("\n\n", "</p>\n<p>", $direccion);
$direccion = "<p>" . $direccion . "</p>";

$cotizacion = str_replace("\n\n", "</p>\n<p>", $cotizacion);
$cotizacion = "<p>" . $cotizacion . "</p>";

$body_msg = "<div style='border: 4px solid navy; margin: 20px auto; padding: 30px;'>
  <img src='http://hyjservices.com.do/img/logo.png' alt='logo' style='width: 200px; height: auto;'>
  <h2 style='font-family: sans-serif;'>".$nombre."</h2>
  <h3 style='font-family: sans-serif; margin-top: -19px; font-weight: lighter;'>".$empresa."</h3>
  <p style='font-family: sans-serif;'><b>Tel&eacute;fono:</b> ".$telefono."</p>
  <p style='font-family: sans-serif;'><b>Direcci&oacute;n:</b></p>
  <div style='font-family: sans-serif; font-size: 14px;'>".$direccion."</div>
<p style='font-family: sans-serif;'><b>Desea Cotizar:</b></p>
<div style='font-family:sans-serifl font-size: 14px;'>".$cotizacion."
  </div>
</div>";

try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'roperto@gmail.com';                 // SMTP username
    $mail->Password = 'LiaMichelle@260313';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $nombre);
    $mail->addAddress('ventas@hyjservice.com', 'Formulario de Contacto');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo($email, $nombre);
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Formulario de Cotizaciones';
    $mail->Body    = $body_msg;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
