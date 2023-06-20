<?php 

require_once '../config/conexion.php';
if(isset($_POST['action'])){
    if($_POST['action']=="add"){
        //get values
        $titulo = addslashes($_POST['nombre']);
        $contenido = addslashes($_POST['descripcion']);
        //insert
        $sql = "insert into testimonios(nombre,
                                    descripcion
                                    )
                            values(
                                '".$titulo."',
                                '".$contenido."'
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
                    $nombrefinal = $archivo;
                    if (move_uploaded_file($temp, '../assets/testimonios/'.$nombrefinal)) {
                        chmod('../assets/testimonios/'.$nombrefinal, 0777);
                        $sqlima = "update testimonios set imagen = '".$nombrefinal."' where id = " . $idgen;
                        $mysqli->query($sqlima);
                    }else {
                        $errorimg = true;
                    }
                }
           }
           ?><script> window.open('testimony.php?ok','_self');</script><?php


        }else{ 
            ?><script> window.open('testimony.php?err','_self');</script><?php
        }
    }//ADD
    if($_POST['action']=="edit"){
        //get values
        $nombre = addslashes($_POST['nombre']);
        $descripcion = addslashes($_POST['descripcion']);
        //insert
        $sql = "update testimonios set 
                        nombre = '".$nombre."',
                        descripcion = '".$descripcion;


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
                    if (move_uploaded_file($temp, '../assets/testimonios/'.$nombrefinal)) {
                        chmod('../assets/testimonios/'.$nombrefinal, 0777);
                        $sqlima = "update testimonios set imagen = '".$nombrefinal."' where id = " . $idgen;
                        $mysqli->query($sqlima);
                    }else {
                        $errorimg = true;
                    }
                }
           }
           ?><script> window.open('testimony.php?ok','_self');</script><?php
        }else{ 
            ?><script> window.open('testimony.php?err','_self');</script><?php
        }
    }//EDIT
}
if(isset($_GET['del'])){ 


    $sql = "delete from testimonios where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('testimony.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('testimony.php?err','_self');</script><?php
     }
}//DELETE

$mysqli->close();
?>