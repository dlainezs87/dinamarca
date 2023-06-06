<?php 

require_once '../config/conexion.php';


if($_POST['action']=="add"){
    

    //get values
    $nombre = addslashes($_POST['nombre']);
    $cargo = addslashes($_POST['cargo']);
    $descripcion = addslashes($_POST['descripcion']);
    $fb = addslashes($_POST['fb']);
    $insta = addslashes($_POST['insta']);
    $linkedin = addslashes($_POST['linkedin']);

    //insert
    $sql = "insert into equipos(nombre,
                                cargo,
                                descripcion,
                                fb,
                                insta,
                                linkedin)
                        values(
                            '".$nombre."',
                            '".$cargo."',
                            '".$descripcion."',
                            '".$fb."',
                            '".$insta."',
                            '".$linkedin."'
                        )";

                                     

    if($mysqli->query($sql)){ 
        $idgen = $mysqli->insert_id;

                        
       $archivo = $_FILES['imagen']['name'];
       if (isset($archivo) && $archivo != "") {
           $tipo = $_FILES['imagen']['type'];
           $tamano = $_FILES['imagen']['size'];
           $temp = $_FILES['imagen']['tmp_name'];
           if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                if (move_uploaded_file($temp, '../assets/equipos/'.$nombrefinal)) {
                    chmod('../assets/equipos/'.$nombrefinal, 0777);
                    $sqlima = "update equipos set imagen = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('equipos.php?ok','_self');</script><?php
       
       
    }else{ 
        ?><script> window.open('equipos.php?err','_self');</script><?php
    }

}//ADD


if($_POST['action']=="edit"){
    

    //get values
    $nombre = addslashes($_POST['nombre']);
    $cargo = addslashes($_POST['cargo']);
    $descripcion = addslashes($_POST['descripcion']);
    $fb = addslashes($_POST['fb']);
    $insta = addslashes($_POST['insta']);
    $linkedin = addslashes($_POST['linkedin']);
    $id = (int)addslashes($_POST['id']);

    //insert
    $sql = "update equipos set 
                    nombre = '".$nombre."',
                    cargo = '".$cargo."',
                    descripcion = '".$descripcion."',
                    fb = '".$fb."',
                    insta = '".$insta."',
                    linkedin = '".$linkedin."'
                    where id = " . $id;


    if($mysqli->query($sql)){ 
        $idgen = $id;

                        
       $archivo = $_FILES['imagen']['name'];
       if (isset($archivo) && $archivo != "") {
           $tipo = $_FILES['imagen']['type'];
           $tamano = $_FILES['imagen']['size'];
           $temp = $_FILES['imagen']['tmp_name'];
           if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
               $errorimg = true;
            }else {
                $nombrefinal = $idgen.$archivo;
                if (move_uploaded_file($temp, '../assets/equipos/'.$nombrefinal)) {
                    chmod('../assets/equipos/'.$nombrefinal, 0777);
                    $sqlima = "update equipos set imagen = '".$nombrefinal."' where id = " . $idgen;
                    $mysqli->query($sqlima);
                }else {
                    $errorimg = true;
                }
            }
       }
       ?><script> window.open('equipos.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('equipos.php?err','_self');</script><?php
    }

}//EDIT


if(isset($_GET['del'])){ 


    $sql = "delete from equipos where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('equipos.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('equipos.php?err','_self');</script><?php
     }

}//DELETE

$mysqli->close();
?>