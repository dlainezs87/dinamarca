<?php 
require_once '../config/conexion.php';
if(isset($_POST['action'])){
    if($_POST['action']=="add"){
        //get values
        $titulo = addslashes($_POST['code']);
        $descripcion = addslashes($_POST['status']);
        //insert
        $sql = "insert into faq(titulo,
                                    descripcion,categoria)
                            values(
                                '".$titulo."',
                                '".$descripcion."',
                                '".$categoria."'
                            )";
        if($mysqli->query($sql)){ 
           ?><script> window.open('faq.php?ok','_self');</script><?php
        }else{ 
            ?><script> window.open('faq.php?err','_self');</script><?php
        }
    }//ADD
    if($_POST['action']=="edit"){
        //get values
        $code = addslashes($_POST['code']);
        $status = addslashes($_POST['status']);
        //insert
        $sql = "update quotes set 
                        status = '".$status."'
                        where id = " . $code;
        if($mysqli->query($sql)){ 
            echo true;
        }else{ 
         echo false;
        }
    }//EDIT
}

if(isset($_GET['del'])){ 
    $sql = "delete from faq where id = " . (int)$_GET['id'];
    if($mysqli->query($sql)){ 
        ?><script> window.open('faq.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('faq.php?err','_self');</script><?php
     }
}//DELETE

$mysqli->close();
?>