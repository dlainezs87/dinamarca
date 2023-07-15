<?php
class Prospecto{
    public function saveCandidateData($Data){
        include("conn.php");
        $Nombre   = (isset($Data['nombre'])) ? filter_var($Data['nombre'], FILTER_SANITIZE_STRING): '';
        $Email    = (isset($Data['email'])) ? filter_var($Data['email'], FILTER_SANITIZE_STRING): '';
        $Telefono = (isset($Data['telefono'])) ? filter_var($Data['telefono'], FILTER_SANITIZE_STRING): '';
        $Filename = (isset($Data['filename'])) ? filter_var($Data['filename'], FILTER_SANITIZE_STRING): '';
    
        if(!empty($Nombre) && !empty($Email) && !empty($Telefono)){
            $sql = "insert into prospectos(
                        Nombre,
                        Email,
                        Telefono,
                        NombreArchivo
                    )values(
                        '".$Nombre."',
                        '".$Email."',
                        '".$Telefono."',
                        '".$Filename."'
                    )";
            if(!$mysqli->query($sql)){
                return false;
            }
        }

        return true;
    }
}
?>