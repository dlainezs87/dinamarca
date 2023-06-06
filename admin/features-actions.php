<?php 

require_once '../config/conexion.php';


if(isset($_POST['action'])&&$_POST['action']=="add"){
    

    //get values
    $description= addslashes($_POST['description']);
    $order = addslashes($_POST['order']);
    //insert
    $sql = "insert into features (description,
                                position)
                        values(
                            '".$description."',
                            '".$order."'
                        )";

                                     

    if($mysqli->query($sql)){ 
       

       ?><script> window.open('features.php?ok','_self');</script><?php
       
       
    }else{ 
        ?><script> window.open('features.php?err','_self');</script><?php
    }

}//ADD


if(isset($_POST['action'])&&$_POST['action']=="edit"){
    

    //get values
    $description = addslashes($_POST['description']);
    $order = addslashes($_POST['order']);
   $status = addslashes($_POST['status']);
    $id = (int)addslashes($_POST['id']);

    //insert
    $sql = "update features set 
                    description = '".$description."',
                    position = '".$order."',
                    status = '".$status."'
                    where id = " . $id;


    if($mysqli->query($sql)){ 
      
       ?><script> window.open('features.php?ok','_self');</script><?php
    }else{ 
        ?><script> window.open('features.php?err','_self');</script><?php
    }

}//EDIT


if(isset($_GET['del'])){ 
    $sql = "SELECT * from serviciosvsfeatures where idFeature =".(int)$_GET['id'];
    if(!$mysqli->query($sql)->num_rows){

    $sql = "delete from features where id = " . (int)$_GET['id'];
    
    if($mysqli->query($sql)){ 
        ?><script> window.open('features.php?ok','_self');</script><?php
     }else{ 
         ?><script> window.open('features.php?err','_self');</script><?php
     }
} else {
    ?><script> window.open('features.php?err_data','_self');</script><?php
}
}//DELETE

$mysqli->close();
?>

