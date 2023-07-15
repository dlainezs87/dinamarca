<?php 
$emailBusiness = 'aligguillen@gmail.com';
$mensajeCompleto="";
$emailSend = !empty($_POST['email'])?filter_var(addslashes($_POST['email']), FILTER_SANITIZE_EMAIL):'';
$name      = !empty($_POST['name'])?filter_var(addslashes($_POST['name']), FILTER_SANITIZE_STRING):'';
$phone     = !empty($_POST['phone'])?filter_var(addslashes($_POST['phone']), FILTER_SANITIZE_STRING):'';
$nombrefinal = '';

$errorimg = false;
$fileUploaded = false;
$archivo = (!empty($_FILES['archivo']['name'])) ? $_FILES['archivo']['name']: '';
if(!empty($archivo)){
    $tipo = $_FILES['archivo']['type'];
    $tamano = $_FILES['archivo']['size'];
    $temp = $_FILES['archivo']['tmp_name'];
    if (strpos($tipo, "pdf") === false && ($tamano > 2921440)){
        $errorimg = true;
    }else {
        $pref = time();
        $nombrefinal = $pref.$archivo;
        if (move_uploaded_file($temp, '../assets/files/'.$nombrefinal)) {
            chmod('../assets/files/'.$nombrefinal, 0777);
            $fileUploaded = true;
        }else {
            $errorimg = true;
        }
    }
}

require_once('savecurriculo.php');
$Prospecto = new Prospecto();
$Prospecto->saveCandidateData([
    'nombre'   => $name,
    'email'    => $emailSend,
    'telefono' => $phone,
    'filename' => $nombrefinal
]);

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
$mail->Username = 'dlainez2587@gmail.com';
$mail->Password = 'rrope2587';
$mail->setFrom('contacto@tecnosula.com', "Clinica dinamarca");
$mail->addAddress($emailBusiness, 'Cliente');
$mail->Subject = 'Contacto desde el sitio web';
$mail->Body =  "<div style='padding:20px;'>".
                    "<h2>Informacion de Prospecto</h2>".
                    "<p>Hemos recibido información de candidato de la web: </p> <br>".
                    "<p>Nombre: <b>". $name ."</b></p>".
                    "<p>Email: <b>". $emailSend ."</b></p>".
                    "<p>Teléfono: <b>". $phone ."</b></p>".
                "</div>";
if($fileUploaded){
    $mail->addAttachment(__DIR__ . '/../assets/files/'.$nombrefinal, $nombrefinal);
}

$Result['status'] = false;
$Result['msn'] = 'Error enviando el email';
if($mail->send()) {
    $Result['status'] = true;
    $Result['msn'] = 'Email enviado con exito!';
}

header('Content-Type: application/json');
echo json_encode($Result);

?>