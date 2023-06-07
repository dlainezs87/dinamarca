<?php

class quotesController{
    public function insertQuote($note,$amount,$idProduct,$hashQuote,$mysqli){
        $sql = "insert into quotes(amount,
                                    idProduct,note, hashQuote)
                            values(
                                '".$amount."',
                                '".$idProduct."',
                                '".$note."',
                                '".$hashQuote."'
                            )";
        if($mysqli->query($sql)){ 
            return true;
        } else {
            return false;
        } 
    }
    
    public function insertQuotevsCostumer($hash,$hashQuote,$mysqli){
        $sql = "insert into quotesvscostumers(hashCostumer,
                                    hashQuote)
                            values(
                                '".$hash."',
                                '".$hashQuote."'
                            )";
        if($mysqli->query($sql)){ 
            return true;
        } else {
            return false;
        } 
    }
    public function insertCostumer($email,$name,$lastname,$phone,$address,$dni,$hash,$mysqli){
        
        $sql = "insert into costumers(name,
                                    lastname,email, address, phone, dni, hash)
                            values(
                                '".$name."',
                                '".$lastname."',
                                '".$email."',
                                '".$address."',
                                '".$phone."',
                                    '".$dni."',
                                '".$hash."'  
                            )";
        if($mysqli->query($sql)){ 
            return true;
        } else {
            return false;
        }
    }
}
if(isset($_POST['action'])){
    switch ($_POST['action']) {
        case 'datosCotizar':
            require_once '../../config/conexion.php';
            require_once '../../email/cotizacion.php';
            $Result = Array();
            $data=Array();
            $respQuote = false;
            $emailSend = !empty($_POST['email'])?filter_var(addslashes($_POST['email']), FILTER_SANITIZE_EMAIL):'';
            $name = !empty($_POST['name'])?filter_var(addslashes($_POST['name']), FILTER_SANITIZE_STRING):'';
            $lastname = !empty($_POST['lastname'])?filter_var(addslashes($_POST['lastname']), FILTER_SANITIZE_STRING):'';
            $note = !empty($_POST['note'])?filter_var(addslashes($_POST['note']), FILTER_SANITIZE_STRING):'';
            $amount = !empty($_POST['amount'])?filter_var(addslashes($_POST['amount']), FILTER_SANITIZE_STRING):'';
            $phone = !empty($_POST['phone'])?filter_var(addslashes($_POST['phone']), FILTER_SANITIZE_STRING):'';
            $address = !empty($_POST['address'])?filter_var(addslashes($_POST['address']), FILTER_SANITIZE_STRING):'';
            $dni = !empty($_POST['dni'])?filter_var(addslashes($_POST['dni']), FILTER_SANITIZE_STRING):'';
            $idProduct = !empty($_POST['idProduct'])?filter_var(addslashes($_POST['idProduct']), FILTER_SANITIZE_NUMBER_INT):'';
            $product = !empty($_POST['product'])?filter_var(addslashes($_POST['product']), FILTER_SANITIZE_STRING):'';
            $hash = uniqid('', true);
            if($emailSend&&$name&&$phone){
               $quote = new quotesController();
               $respQuote = $quote->insertCostumer($emailSend,$name,$lastname,$phone,$address,$dni,$hash,$mysqli);
               if($respQuote){
                   if($hash&&$amount&&$idProduct){
                       $hashQuote = uniqid('', true);
                       $respQuote = $quote->insertQuote($note,$amount,$idProduct,$hashQuote,$mysqli);
                       if($respQuote){
                                if($hash&&$hashQuote){
                                    $respQuote = $quote->insertQuotevsCostumer($hash,$hashQuote,$mysqli);
                                    if($respQuote){
                                        $email = new cotizacion();
                                        $data[]=Array(
                                         "ID Product"=>$idProduct,
                                         "Product"=>$product,
                                         "Amount"=>$amount,
                                          "Note"=>$note
                                        );
                                        $respEmail = $email->sendEmailQuote($name.' '.$lastname,$emailSend,$hashQuote,$data);
                                        $respEmail = $email->sendEmailQuoteToBusiness($name.' '.$lastname,$emailSend,$hashQuote,$data,$dni,$address,$phone);
                                        $Result['status']=true;
                                        $Result['msn']='Data saved successfull';
                                    } else {
                                        $Result['status']=false;
                                        $Result['msn']='Missing params, process incomplete, please contact the administrator2';
                                    }
                                }
                            } else {
                                $Result['status']=false;
                                $Result['msn']='There was an error entering data, please contact the administrator';
                            }
                   } else {
                       $Result['status']=false;
                       $Result['msn']='Missing params, process incomplete, please contact the administrator1';
                   } 
               } else {
                   $Result['status']=false;
                   $Result['msn']='There was an error entering data, please contact the administrator';
               }

            } else {
                $Result['status']=false;
                $Result['msn']='Missing params, try again';
            }
                 header('Content-Type: application/json');
                 echo json_encode($Result);

            break;

        default:
            break;
    }
}

