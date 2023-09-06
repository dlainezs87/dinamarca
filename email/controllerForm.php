<?php 

//GET VARS
$emailBusiness = 'olman1000@gmail.com';
$mensajeCompleto="";
$emailSend = !empty($_POST['email'])?filter_var(addslashes($_POST['email']), FILTER_SANITIZE_EMAIL):'';
$name = !empty($_POST['name'])?filter_var(addslashes($_POST['name']), FILTER_SANITIZE_STRING):'';
$phone = !empty($_POST['phone'])?filter_var(addslashes($_POST['phone']), FILTER_SANITIZE_STRING):'';
$message = !empty($_POST['message'])?filter_var(addslashes($_POST['message']), FILTER_SANITIZE_STRING):'';

$mensajeCompleto.=$message;

//CONFIG PHPMAILER
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
date_default_timezone_set('Etc/UTC');
require '../phpmailer/src/Exception.php';
require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_OFF;  // SMTP::DEBUG_OFF = off; SMTP::DEBUG_SERVER;
$mail->SMTPAutoTLS = false;
$mail->SMTPSecure = false;
$mail->CharSet = 'UTF-8';
$mail->Host = 'tecnosula.com';
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->isHTML(true);
$mail->Username = 'info@tecnosula.com';
$mail->Password = 'C0ntact0/2022*1';
$mail->setFrom('info@tecnosula.com', 'Clínica Dinamarca');

 
    $mail->addAddress($emailBusiness, 'Cliente');
    $mail->Subject = 'Contacto desde el sitio web';
    $mail->Body = "<div style='padding:20px;'>
    <h2>Pregunta de cliente</h2>
    <p>Hemos recibido contacto de la web: </p> <br>
    <p>Nombre: <b>". $name ."</b></p>
    <p>Email: <b>". $emailSend ."</b></p>
    <p>Teléfono: <b>". $phone ."</b></p>
    <p>Mensaje: <br><b>". $mensajeCompleto ."</b></p>
    </div>
    "; 



//ENVIO DE CORREO
if (!$mail->send()) {
    $Result['status']=false;
    $Result['msn']='Error enviando el email';

} else {
    $Result['status']=true;
    $Result['msn']='Email enviado con exito!';

}
header('Content-Type: application/json');
echo json_encode($Result);

?>