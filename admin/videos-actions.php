<?php 
require_once '../config/conexion.php';
if(isset($_POST['action'])){
    if($_POST['action']=="add"){
        //get values
        $titulo = addslashes($_POST['titulo']);
        $video = addslashes($_POST['video']);
        //insert
        $sql = "insert into videos(titulo,video)
                            values(
                                '".$titulo."',
								'".$video."'
                            )";
        if($mysqli->query($sql)){ 
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