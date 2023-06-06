<?php 

require_once '../config/conexion.php';
if(isset($_POST['action'])){
    if($_POST['action']=="add"){
        //get values
        $titulo = addslashes($_POST['titulo']);
        $contenido = addslashes($_POST['contenido']);
        $fecha = date("Y-m-d");
        $autor = addslashes($_POST['autor']);

        //insert
        $sql = "insert into blogs(titulo,
                                    contenido,
                                    fecha,
                                    autor)
                            values(
                                '".$titulo."',
                                '".$contenido."',
                                '".$fecha."',
                                '".$autor."'
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
                    if (move_uploaded_file($temp, '../assets/blogs/'.$nombrefinal)) {
                        chmod('../assets/blogs/'.$nombrefinal, 0777);
                        $sqlima = "update blogs set imagen = '".$nombrefinal."' where id = " . $idgen;
                        $mysqli->query($sqlima);
                    }else {
                        $errorimg = true;
                    }
                }
           }
           ?><script> window.open('blogs.php?ok','_self');</script><?php


        }else{ 
            ?><script> window.open('blogs.php?err','_self');</script><?php
        }
    }//ADD
    if($_POST['action']=="edit"){
        //get values
        $titulo = addslashes($_POST['titulo']);
        $contenido = addslashes($_POST['contenido']);
        $autor = addslashes($_POST['autor']);
        $id = (int)addslashes($_POST['id']);
        //insert
        $sql = "update blogs set 
                        titulo = '".$titulo."',
                        contenido = '".$contenido."',
                        autor = '".$autor."'
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
                    if (move_uploaded_file($temp, '../assets/blogs/'.$nombrefinal)) {
                        chmod('../assets/blogs/'.$nombrefinal, 0777);
                        $sqlima = "update blogs set imagen = '".$nombrefinal."' where id = " . $idgen;
                        $mysqli->query($sqlima);
                    }else {
                        $errorimg = true;
                    }
                }
           }
           ?><script> window.open('blogs.php?ok','_self');</script><?php
        }else{ 
            ?><script> window.open('blogs.php?err','_self');</script><?php
        }
    }//EDIT
}
if(isset($_GET['del'])){ 


    $sql = "delete from blogs where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('blogs.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('blogs.php?err','_self');</script><?php
     }
}//DELETE

$mysqli->close();
?>