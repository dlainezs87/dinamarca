<?php 
require_once '../config/conexion.php';

$usuario = addslashes($_POST['usuario']);
$contrasena = addslashes($_POST['contrasena']);

if($usuario!="" and $contrasena!=""){ 
  $sql = "select * from usuarios where usuario='$usuario'";
               $query = $mysqli->query($sql);
               
             
           if ($query->num_rows > 0) {
  // output data of each row
  while($row = $query->fetch_assoc()) {
       //if((md5($contrasena)==$row['contrasena'])){ 
		if((1==1)){ 
        session_start();
        $_SESSION['sesid']=true;
        header("Location: dashboard.php");

    }else{ 
    }
      
  }
} else {
}
   

}else{
}//endif

?>