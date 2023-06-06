<?php 

require_once '../config/conexion.php';


if(isset($_POST['action'])&&$_POST['action']=="add"){
    

    //get values
    $idProduct= addslashes($_POST['idProduct']);
    $idFeature = addslashes($_POST['idFeature']);
    $description = addslashes($_POST['description']);
    //update last status
    $sql = "update serviciosvsfeatures set status = 'Desactivo' WHERE idFeature = ".$idFeature." AND idServicio =".$idProduct;
     $mysqli->query($sql);
//insert
    $sql = "insert into serviciosvsfeatures (idFeature,idServicio,
                                description)
                        values(
                            '".$idFeature."',
                            '".$idProduct."',
                            '".$description."'
                        )";

                                     

    if($mysqli->query($sql)){ 
       

       ?><script> window.open('servicios-features.php?id=<?=$idProduct?>&&ok','_self');</script><?php
       
       
    }else{ 
        ?><script> window.open('servicios-features.php?id=<?=$idProduct?>&&err','_self');</script><?php
    }

}//ADD


if(isset($_POST['action'])&&$_POST['action']=="edit"){
    

    //get values
    $titulo = addslashes($_POST['titulo']);
    $contenido = addslashes($_POST['contenido']);
   
    $id = (int)addslashes($_POST['id']);

    //insert
    $sql = "update faq set 
                    titulo = '".$titulo."',
                    descripcion = '".$contenido."'
                    where id = " . $id;


    if($mysqli->query($sql)){ 
      
       ?><script> window.open('faq.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('faq.php?err','_self');</script><?php
    }

}//EDIT


if(isset($_GET['del'])){ 
    $idProduct = $_GET['idProduct'];

    $sql = "delete from serviciosvsfeatures where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('servicios-features.php?id=<?=$idProduct?>&&ok','_self');</script><?php
     }else{ 
         ?><script> window.open('servicios-features.php?id=<?=$idProduct?>&&err','_self');</script><?php
     }

}//DELETE

$mysqli->close();
?>

