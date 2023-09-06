<?php 
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 require '../../phpmailer/src/Exception.php';
 require '../../phpmailer/src/PHPMailer.php';
 require '../../phpmailer/src/SMTP.php';
 
class cotizacion{
    private $profile;
    
    public function __construct() {
    }
    public function sendEmailQuote($nombre,$email,$code,$data){
        require_once '../../email/principalController.php';
        require_once '../../config/parameters.php';
        $table = !empty($data)?$this->makeTableFromData($data):'';
        $msnData['title'] = "Quote Request";
        $msnData['info'] = "We have received your request #".$code.", we will glad to send you an answer as soon as possible";
        $msnData['intro'] = "Hello, $nombre";
        $msnData['url'] = "https://dinamarcav2.tecnosula.com/images/logo-CD.png";
        $msnData['table'] = $table;
        $newTemplate = new principalController();
        $respTemplate = $newTemplate->sendEmailForQuote($msnData);
        //CONFIG PHPMAILER
       
        date_default_timezone_set('Etc/UTC');
      
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_OFF;//SMTP::DEBUG_SERVER;  // SMTP::DEBUG_OFF = off;
        $mail->SMTPAutoTLS = false;
        $mail->SMTPSecure = false;
        $mail->Host = 'tecnosula.com';
        $mail->CharSet = 'UTF-8';
        $mail->Port = 25;
        $mail->SMTPAuth = true;
        $mail->isHTML(true);
        $mail->Username = 'info@tecnosula.com';
        $mail->Password = 'C0ntact0/2022*1';
        $mail->setFrom('info@tecnosula.com', 'Clínicas Dinamarca');


            $mail->addAddress('olman1000@gmail.com', 'Cliente');
            $mail->Subject = 'Cotización '.$code;
            $mail->Body = $respTemplate; 

        //ENVIO DE CORREO
        if ($mail->send()) {
        return true;
        } else {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        return false;
        }
        
    }
    
    public function sendEmailQuoteToBusiness($nombre,$email,$code,$data,$DNI,$direccion,$telefono){
        require_once '../../email/principalController.php';
        require_once '../../config/parameters.php';
        
        $table = !empty($data)?$this->makeTableFromData($data,true):'';
        $msnData['title'] = "Cotización";
        $msnData['info'] = "Ha recibido una solicitud de cotización #".$code." con la siguiente información";
        $intro = '';
        $intro .= '<ul>';
        $intro .= '<li>Name:'.utf8_decode($nombre).'</li>';
        $intro .= '<li>Email: '.utf8_decode($email).'</li>';
//        $intro .= '<li>Provincia: '.utf8_decode($provincia).'</li>';
//        $intro .= '<li>Cantón: '.utf8_decode($canton).'</li>';
//        $intro .= '<li>Distrito: '.utf8_decode($distrito).'</li>';
        $intro .= '<li>Address: '.utf8_decode($direccion).'</li>';
        $intro .= '<li>Phone Number: '.$telefono.'</li>';
        $intro .= '</ul>';
        $msnData['intro'] = $intro;
        $msnData['url'] = "https://dinamarcav2.tecnosula.com/images/logo-CD.png";
        $msnData['table'] = $table;
        $newTemplate = new principalController();
        $respTemplate = $newTemplate->sendEmailForQuote($msnData);
        //CONFIG PHPMAILER
       
        date_default_timezone_set('Etc/UTC');
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_OFF ;  // SMTP::DEBUG_OFF = off;// SMTP::DEBUG_SERVER
        $mail->SMTPAutoTLS = false;
        $mail->SMTPSecure = false;
        $mail->CharSet = 'UTF-8';
        $mail->Host = 'tecnosula.com';
        $mail->Port = 25;
        $mail->SMTPAuth = true;
        $mail->isHTML(true);
        $mail->Username = 'info@tecnosula.com';
        $mail->Password = 'C0ntact0/2022*1';
        $mail->setFrom('info@tecnosula.com', 'Clínicas Dinamarca');

            $mail->addAddress('olman1000@gmail.com', 'Cliente');
            $mail->Subject = utf8_decode('Quote ').$code;
            $mail->Body = $respTemplate; 

        //ENVIO DE CORREO
        if ($mail->send()) {
        return true;
        } else {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        return false;
        }
    }
    public function makeTableFromData($data,$adminEmail=false){
        $keys = array_keys($data[0]);
        $HTML = '<table><thead><tr>';
        foreach($keys as $keysvalues){
            if($keysvalues=='Files'){
                if($adminEmail){
                 $HTML.='<th style="font-size:23px;color:#333333;padding:0 0 20px 0; font-family:sans-serif;text-align:center;padding-top:75px;font-weight:400;">'.$keysvalues.'</th>'; 
                }
            } else {
                 $HTML.='<th style="font-size:23px;color:#333333;padding:0 0 20px 0; font-family:sans-serif;text-align:center;padding-top:75px;font-weight:400;">'.$keysvalues.'</th>'; 

            }
           }
        $HTML .='</tr></thead>';
        $HTML .='<tbody>';
        foreach($data as $index =>$datavalues){
           $HTML.='<tr>';
           foreach($keys as $keysvalues){
           //$datavalues
               if($keysvalues=='Files'){
                   if(!empty($datavalues[$keysvalues])&&$adminEmail){
                        $HTML.= '<td style="border:solid 1px gray;padding:30px;background:white;border-collapse:collapse;width:630px;">'
                                . '<button style="border-radius:10px;color:#6695FF;width:125px;padding:5px;"><a href="'.base_url."/assets/files/".$datavalues[$keysvalues].'">Ver Adjunto</a></td>';   
                   }
                }else{
                $HTML.= '<td style="border:solid 1px gray;padding:30px;background:white;border-collapse:collapse;width:630px;">'.$datavalues[$keysvalues]."</td>";

               }
           }
           
           $HTML.='</tr>'; 
        }
        $HTML .='</tbody>';
        $HTML .='</table>';
        return $HTML;
    }
}
?>
