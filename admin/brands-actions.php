<?php 

require_once '../config/conexion.php';
if(isset($_POST['action'])){
    if($_POST['action']=="add"){
        //get values
        $name = addslashes($_POST['link']);
        //insert
        $sql = "insert into brands(link)
                            values(
                                '".$name."'
                               
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
                    if (move_uploaded_file($temp, '../assets/brands/'.$nombrefinal)) {
                        chmod('../assets/brands/'.$nombrefinal, 0777);
                        $sqlima = "update brands set imagen = '".$nombrefinal."' where id = " . $idgen;
                        $mysqli->query($sqlima);
                    }else {
                        $errorimg = true;
                    }
                }
           }
           ?><script> window.open('brands.php?ok','_self');</script><?php


        }else{ 
            ?><script>window.open('brands.php?err','_self');</script><?php
        }
    }//ADD
    if($_POST['action']=="edit"){
        //get values
        $name = addslashes($_POST['name']);
        $id = (int)addslashes($_POST['id']);
        //insert
        $sql = "update brands set 
                        name = '".$name."'
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
                    if (move_uploaded_file($temp, '../assets/brands/'.$nombrefinal)) {
                        chmod('../assets/brands/'.$nombrefinal, 0777);
                        $sqlima = "update brands set imagen = '".$nombrefinal."' where id = " . $idgen;
                        $mysqli->query($sqlima);
                    }else {
                        $errorimg = true;
                    }
                }
           }
           ?><script> window.open('brands.php?ok','_self');</script><?php
        }else{ 
            ?><script> window.open('brands.php?err','_self');</script><?php
        }
    }//EDIT
}
if(isset($_GET['del'])){ 


    $sql = "delete from brands where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('brands.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('brands.php?err','_self');</script><?php
     }
}//DELETE

$mysqli->close();
?>