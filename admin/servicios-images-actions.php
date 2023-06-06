<?php 

require_once '../config/conexion.php';
if(isset($_POST['action'])){

if($_POST['action']=="add"){
    
  
    //get values
    $titulo = addslashes($_POST['titulo']);

$idProduct=(int)addslashes($_POST['idProduct']);

    //insert
    $sql = "insert into imagenesservicios(titulo,idProduct)
                        values(
                            '".$titulo."','".$idProduct."'
                        )";
    if($mysqli->query($sql)){ 
        $idgen = $mysqli->insert_id;
        
            
       $archivo = $_FILES['imagen']['name'];
       if (isset($archivo) && $archivo != "") {
           $tipo = $_FILES['imagen']['type'];
           $tamano = $_FILES['imagen']['size'];
           $temp = $_FILES['imagen']['tmp_name'];
           if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                
                if (move_uploaded_file($temp, '../assets/imagenes/'.$nombrefinal)) {
                    chmod('../assets/imagenes/'.$nombrefinal, 0777);
                    $sqlima = "update imagenesservicios set imagen = '".$nombrefinal."' where id = " . $idgen;
                    
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('servicios-images.php?id=<?=$idProduct?>&ok','_self');</script><?php
       
       
    }else{ 
        ?><script> window.open('servicios-images.php?id=<?=$idProduct?>&err','_self');</script><?php
    }

}//ADD


if($_POST['action']=="edit"){
        $titulo = addslashes($_POST['titulo']);

$idProduct=(int)addslashes($_POST['idProduct']);

    $id = (int)addslashes($_POST['id']);
     $status = addslashes($_POST['status']);

    //insert
    $sql = "update imagenesservicios set 
                    titulo = '".$titulo."',idProduct = '".$idProduct."',status = '". $status."' 
                    where id = " . $id;


    if($mysqli->query($sql)){ 
        $idgen = $id;

                        
       $archivo = $_FILES['imagen']['name'];
       if (isset($archivo) && $archivo != "") {
           $tipo = $_FILES['imagen']['type'];
           $tamano = $_FILES['imagen']['size'];
           $temp = $_FILES['imagen']['tmp_name'];
           if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                if (move_uploaded_file($temp, '../assets/imagenes/'.$nombrefinal)) {
                    chmod('../assets/imagenes/'.$nombrefinal, 0777);
                    $sqlima = "update imagenesservicios set imagen = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('servicios-images.php?id=<?=$idProduct?>&ok','_self');</script><?php
    }else{ 
        ?><script> window.open('servicios-images.php?id=<?=$idProduct?>&err','_self');</script><?php
    }

}//EDIT

}// FIN ISSET ACTION

if(isset($_GET['del'])){ 
    $idProduct=(int)addslashes($_GET['idProduct']);
?><script> window.open('servicios-images.php?id=<?=$idProduct?>&&ok','_self');</script><?php
 $sql = "delete from imagenesservicios where id = ". (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
      ?><script> window.open('servicios-images.php?id=<?=$idProduct?>&&ok','_self');</script><?php
     }else{ 
         ?><script> window.open('servicios-images.php?id=<?=$idProduct?>&&err','_self');</script><?php
     }

}//DELETE

$mysqli->close();
?>