<?php 

require_once '../config/conexion.php';
if(isset($_POST['action'])){
    if($_POST['action']=="add"){
        //get values
        $titulo = addslashes($_POST['titulo']);
        $contenido = addslashes($_POST['contenido']);
        //insert
        $sql = "insert into convenios(titulo,
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
                    if (move_uploaded_file($temp, '../assets/convenios/'.$nombrefinal)) {
                        chmod('../assets/convenios/'.$nombrefinal, 0777);
                        $sqlima = "update convenios set imagen = '".$nombrefinal."' where id = " . $idgen;
                        $mysqli->query($sqlima);
                    }else {
                        $errorimg = true;
                    }
                }
           }
           ?><script> window.open('conventions.php?ok','_self');</script><?php


        }else{ 
            ?><script> window.open('conventions.php?err','_self');</script><?php
        }
    }//ADD
    if($_POST['action']=="edit"){
        //get values
        $titulo = addslashes($_POST['titulo']);
        $contenido = addslashes($_POST['contenido']);
        //insert
        $sql = "update convenios set 
                        titulo = '".$titulo."',
                        descripcion = '".$contenido;


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
                    if (move_uploaded_file($temp, '../assets/convenios/'.$nombrefinal)) {
                        chmod('../assets/convenios/'.$nombrefinal, 0777);
                        $sqlima = "update convenios set imagen = '".$nombrefinal."' where id = " . $idgen;
                        $mysqli->query($sqlima);
                    }else {
                        $errorimg = true;
                    }
                }
           }
           ?><script> window.open('conventions.php?ok','_self');</script><?php
        }else{ 
            ?><script> window.open('conventions.php?err','_self');</script><?php
        }
    }//EDIT
}
if(isset($_GET['del'])){ 


    $sql = "delete from convenios where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('conventions.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('conventions.php?err','_self');</script><?php
     }
}//DELETE

$mysqli->close();
?>