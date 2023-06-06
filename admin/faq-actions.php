<?php 
require_once '../config/conexion.php';
if(isset($_POST['action'])){
    if($_POST['action']=="add"){
        //get values
        $titulo = addslashes($_POST['titulo']);
        $descripcion = addslashes($_POST['descripcion']);
        $categoria = addslashes($_POST['categoria']);
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
        $titulo = addslashes($_POST['titulo']);
        $descripcion = addslashes($_POST['descripcion']);
        $categoria = addslashes($_POST['categoria']);
        $id = (int)addslashes($_POST['id']);
        //insert
        $sql = "update faq set 
                        titulo = '".$titulo."',
                        descripcion = '".$descripcion."',
                        categoria = '".$categoria."'
                        where id = " . $id;
        if($mysqli->query($sql)){ 
           ?><script> window.open('faq.php?ok','_self');</script><?php
        }else{ 
            ?><script> window.open('faq.php?err','_self');</script><?php
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