<?php 
require_once '../config/conexion.php';
if(isset($_POST['action'])){
    if($_POST['action']=="add"){
        //get values
        $titulo = addslashes($_POST['titulo']);
        $video = addslashes($_POST['video']);
        //insert
        $sql = "insert into videos(titulo)
                            values(
                                '".$titulo."'
                            )";
        if($mysqli->query($sql)){ 
            $idgen = $mysqli->insert_id;
           $archivo = $_FILES['file_video']['name'];
           if (isset($archivo) && $archivo != "") {
               $tipo = $_FILES['file_video']['type'];
               $tamano = $_FILES['file_video']['size'];
               $temp = $_FILES['file_video']['tmp_name'];
               $nombrefinal = $archivo;

                    if (move_uploaded_file($temp, '../assets/videos/'.$nombrefinal)) {
                        chmod('../assets/videos/'.$nombrefinal, 0777);
                        $sqlima = "update videos set video = '".$nombrefinal."' where id = " . $idgen;

                        $mysqli->query($sqlima);
                    }else {
                        $errorimg = true;
                    }
                
           }
           ?><script> window.open('videos.php?ok','_self');</script><?php


        }else{ 
            ?><script> window.open('videos.php?err','_self');</script><?php
        }
    }//ADD
    if($_POST['action']=="edit"){
        //get values
        $titulo = addslashes($_POST['titulo']);
        $video = addslashes($_POST['video']);
        $id = (int)addslashes($_POST['id']);
        //insert
        $sql = "update videos set 
                        titulo = '".$titulo."',
                        video = '".$video."'
                        where id = " . $id;
        if($mysqli->query($sql)){ 
           ?><script> window.open('videos.php?ok','_self');</script><?php
        }else{ 
            ?><script> window.open('videos.php?err','_self');</script><?php
        }
    }//EDIT
}

if(isset($_GET['del'])){ 
    $sql = "delete from videos where id = " . (int)$_GET['id'];
    if($mysqli->query($sql)){ 
        ?><script> window.open('videos.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('videos.php?err','_self');</script><?php
     }
}//DELETE

$mysqli->close();
?>