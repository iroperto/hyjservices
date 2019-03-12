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
$asunto = isset($_POST['asunto'])? limpiarCadena($_POST['asunto']):"";
$telefono = isset($_POST['telefono'])? limpiarCadena($_POST['telefono']):"";

$mensaje = isset($_POST['mensaje'])? limpiarCadena($_POST['mensaje']):"";

$mensaje = str_replace("\n\n", "</p>\n<p>", $mensaje);
$mensaje = "<p>" . $mensaje . "</p>";

$body_msg = "<div style='border: 4px solid navy; margin: 20px auto; padding: 30px;'>
  <img src='http://hyjservices.com.do/img/logo.png' alt='logo' style='width: 200px; height: auto;'>
  <h2 style='font-family: sans-serif;'>".$nombre."</h2>
  <p style='font-family: sans-serif;'><b>Tel&eacute;fono:</b> ".$telefono."</p>
  <p style='font-family: sans-serif;'><b>Mensaje:</b></p>
  <div style='font-family: sans-serif; font-size: 14px;'>".$mensaje."
  </div>
</div>";

echo "email: ".$email." nombre: ".$nombre." asunto: ".$asunto." telefono: ".$telefono." mensaje: ".$mensaje;
/*try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'ventas@hyjservice.com';                 // SMTP username
    $mail->Password = 'admin123';                           // SMTP password
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
    $mail->Subject = 'Formulario de Contacto';
    $mail->Body    = $body_msg;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}*/
?>
