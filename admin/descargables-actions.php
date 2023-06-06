<?php 

include("conn.php");


if($_POST['action']=="add"){
    

    //get values
    $titulo = addslashes($_POST['titulo']);
    $descripcion = addslashes($_POST['descripcion']);
    $fecha = date("Y-m-d H:i:s");


    //insert
    $sql = "insert into descargables(titulo,
                                descripcion,
                                fecha)
                            values(
                                '".$titulo."',
                                '".$descripcion."',
                                '".$fecha."'
                            )";

                                     
    if($mysqli->query($sql)){ 
        $idgen = $mysqli->insert_id;

                        
       $archivo = $_FILES['archivo']['name'];
       if (isset($archivo) && $archivo != "") {
           $tipo = $_FILES['archivo']['type'];
           $tamano = $_FILES['archivo']['size'];
           $temp = $_FILES['archivo']['tmp_name'];
           if (!((strpos($tipo, "pdf") || strpos($tipo, "doc") || strpos($tipo, "docx") || strpos($tipo, "xls") || strpos($tipo, "ppt") || strpos($tipo, "pptx") || strpos($tipo, "xlsx")) && ($tamano < 200000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                if (move_uploaded_file($temp, '../assets/descargables/'.$nombrefinal)) {
                    chmod('../assets/descargables/'.$nombrefinal, 0777);
                    $sqlima = "update descargables set archivo = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }

       $archivo = $_FILES['imagen']['name'];
       if (isset($archivo) && $archivo != "") {
           $tipo = $_FILES['imagen']['type'];
           $tamano = $_FILES['imagen']['size'];
           $temp = $_FILES['imagen']['tmp_name'];
           if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                
                if (move_uploaded_file($temp, '../assets/descargables/'.$nombrefinal)) {
                    chmod('../assets/descargables/'.$nombrefinal, 0777);
                    $sqlima = "update descargables set imagen = '".$nombrefinal."' where id = " . $idgen;
                    
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }

      

       
       ?><script> window.open('descargables.php?ok','_self');</script><?php
       
       
    }else{ 
        ?><script> window.open('descargables.php?err','_self');</script><?php
    }

}//ADD


if($_POST['action']=="edit"){
    

    //get values
    $titulo = addslashes($_POST['titulo']);
    $fecha = date("Y-m-d H:i:s");
    $descripcion = addslashes($_POST['descripcion']);
    $id = (int)addslashes($_POST['id']);

    //insert
    $sql = "update descargables set 
                    titulo = '".$titulo."',
                    descripcion = '".$descripcion."',
                    fecha = '".$fecha."'
                    where id = " . $id;


    if($mysqli->query($sql)){ 
        $idgen = $id;

                        
       $archivo = $_FILES['archivo']['name'];
       if (isset($archivo) && $archivo != "") {
           $tipo = $_FILES['archivo']['type'];
           $tamano = $_FILES['archivo']['size'];
           $temp = $_FILES['archivo']['tmp_name'];
           if (!((strpos($tipo, "pdf") || strpos($tipo, "doc") || strpos($tipo, "docx") || strpos($tipo, "xls") || strpos($tipo, "ppt") || strpos($tipo, "pptx") || strpos($tipo, "xlsx")) && ($tamano < 200000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                if (move_uploaded_file($temp, '../assets/descargables/'.$nombrefinal)) {
                    chmod('../assets/descargables/'.$nombrefinal, 0777);
                    $sqlima = "update descargables set archivo = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }

       $archivo = $_FILES['imagen']['name'];
       if (isset($archivo) && $archivo != "") {
           $tipo = $_FILES['imagen']['type'];
           $tamano = $_FILES['imagen']['size'];
           $temp = $_FILES['imagen']['tmp_name'];
           if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                
                if (move_uploaded_file($temp, '../assets/descargables/'.$nombrefinal)) {
                    chmod('../assets/descargables/'.$nombrefinal, 0777);
                    $sqlima = "update descargables set imagen = '".$nombrefinal."' where id = " . $idgen;
                    
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('descargables.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('descargables.php?err','_self');</script><?php
    }

}//EDIT


if(isset($_GET['del'])){ 


    $sql = "delete from descargables where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('descargables.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('descargables.php?err','_self');</script><?php
     }

}//DELETE

$mysqli->close();
?>