<?php 

require_once '../config/conexion.php';
if(isset($_POST['action'])){

if($_POST['action']=="add"){
    
  
    //get values
    $titulo = addslashes($_POST['titulo']);

$idGaleria=(int)addslashes($_POST['idGaleria']);

    //insert
    $sql = "insert into imagenes(titulo,idGaleria)
                        values(
                            '".$titulo."','".$idGaleria."'
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
                    $sqlima = "update imagenes set imagen = '".$nombrefinal."' where id = " . $idgen;
                    
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('imagenes.php?galeria=<?=$idGaleria?>&ok','_self');</script><?php
       
       
    }else{ 
        ?><script> window.open('imagenes.php?galeria=<?=$idGaleria?>&err','_self');</script><?php
    }

}//ADD


if($_POST['action']=="edit"){
        $titulo = addslashes($_POST['titulo']);

$idGaleria=(int)addslashes($_POST['idGaleria']);
$status = addslashes($_POST['status']);
    $id = (int)addslashes($_POST['id']);

    //insert
    $sql = "update imagenes set 
                    titulo = '".$titulo."',idGaleria = '".$idGaleria."',status = '".$status."'
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
                    $sqlima = "update imagenes set imagen = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('imagenes.php?galeria=<?=$idGaleria?>&ok','_self');</script><?php
    }else{ 
        ?><script> window.open('imagenes.php?galeria=<?=$idGaleria?>&err','_self');</script><?php
    }

}//EDIT

}// FIN ISSET ACTION

if(isset($_GET['del'])){ 


    $sql = "delete from imagenes where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('imagenes.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('imagenes.php?err','_self');</script><?php
     }

}//DELETE

$mysqli->close();
?>