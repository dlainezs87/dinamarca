<?php 

require_once '../config/conexion.php';

if(isset($_POST['action'])){
    if($_POST['action']=="add"){
        //get values
        $titulo = addslashes($_POST['titulo']);
        $descripcion = $_POST['descripcion'];
        //insert
        $sql = "insert into galerias(titulo,descripcion)
                            values(
                                '".$titulo."','".$descripcion."'
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

                    if (move_uploaded_file($temp, '../assets/galerias/'.$nombrefinal)) {
                        chmod('../assets/galerias/'.$nombrefinal, 0777);
                        $sqlima = "update galerias set imagen = '".$nombrefinal."' where id = " . $idgen;

                        $mysqli->query($sqlima);
                    }else {
                        $errorimg = true;
                    }
                }
           }
           ?><script> window.open('galerias.php?ok','_self');</script><?php


        }else{ 
            ?><script> window.open('galerias.php?err','_self');</script><?php
        }

    }//ADD
    if($_POST['action']=="edit"){
        //get values
        $titulo = addslashes($_POST['titulo']);
        $descripcion = addslashes($_POST['descripcion']);
        $status = addslashes($_POST['status']);
        $id = (int)addslashes($_POST['id']);
        //insert
        $sql = "update galerias set 
                        titulo = '".$titulo."',descripcion = '".$descripcion."',status = '".$status."'
                        where id = " . $id;
        if($mysqli->query($sql)){ 
            $idgen = $id;
           $archivo = $_FILES['imagen']['name'];
           if (isset($archivo) && $archivo != "") {
               $tipo = $_FILES['imagen']['type'];
               $tamano = $_FILES['imagen']['size'];
               $temp = $_FILES['imagen']['tmp_name'];
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 200000000))) {              
                   $errorimg = true;
                }else {
                    $nombrefinal = $idgen.$archivo;
                    if (move_uploaded_file($temp, '../assets/galerias/'.$nombrefinal)) {
                        chmod('../assets/galerias/'.$nombrefinal, 0777);
                        $sqlima = "update galerias set imagen = '".$nombrefinal."' where id = " . $idgen;
                        $mysqli->query($sqlima);
                    }else {
                        $errorimg = true;
                    }
                }
           }
           ?><script> window.open('galerias.php?ok','_self');</script><?php
        }else{ 
            ?><script> window.open('galerias.php?err','_self');</script><?php
        }

    }//EDIT

}
if(isset($_GET['del'])){ 
    $sql = "delete from galerias where id = " . (int)$_GET['id'];
    if($mysqli->query($sql)){ 
        ?><script> window.open('galerias.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('galerias.php?err','_self');</script><?php
     }
}//DELETE

$mysqli->close();
?>