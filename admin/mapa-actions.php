<?php

include("conn.php");
if (isset($_POST['action'])) {
    if ($_POST['action'] == "add") {
        //get values
        $principal = (!empty($_POST['principal'])) ? addslashes($_POST['principal']): '';
        $latitud   = (!empty($_POST['latitud'])) ? addslashes($_POST['latitud']): '';
        $longitud  = (!empty($_POST['longitud'])) ? addslashes($_POST['longitud']): '';
        $nombre    = (!empty($_POST['nombre'])) ? addslashes($_POST['nombre']): '';
        $provincia = (!empty($_POST['provincia'])) ? addslashes($_POST['provincia']): '';
        $canton    = (!empty($_POST['canton'])) ? addslashes($_POST['canton']): '';
        $texto     = (!empty($_POST['texto'])) ? addslashes($_POST['texto']): '';
        $encargado = (!empty($_POST['encargado'])) ? addslashes($_POST['encargado']): '';
        $telefono  = (!empty($_POST['telefono'])) ? addslashes($_POST['telefono']): '';
        $horario   = (!empty($_POST['horario'])) ? addslashes($_POST['horario']): '';
        $whatsapp  = (!empty($_POST['whatsapp'])) ? addslashes($_POST['whatsapp']): '';
        $url       = (!empty($_POST['url'])) ? addslashes($_POST['url']): '';
        $opcionesSeleccionadas = (!empty($_POST['servicios'])) ? $_POST['servicios']: [];

        if($provincia != 'Todas' || $canton != 'Todos'){
            $sql = "insert into mapa(
                `principal`,
                `latitud`,
                `longitud`,
                `nombre`,
                `provincia`,
                `canton`,
                `texto`,
                `encargado`,
                `telefono`,
                `horario`,
                `whatsapp`,
                `url`
                )values(
                    '" . $principal . "',
                    '" . $latitud . "',
                    '" . $longitud . "',
                    '" . $nombre . "',
                    '" . $provincia . "',
                    '" . $canton . "',
                    '" . $texto . "',
                    '" . $encargado . "',
                    '" . $telefono . "',
                    '" . $horario . "',
                    '" . $whatsapp . "',
                    '" . $url . "'
                )";
            if ($mysqli->query($sql)) {
                $idgen = $mysqli->insert_id;
                $archivo = $_FILES['imagen']['name'];
                if (isset($archivo) && $archivo != "") {
                    $tipo = $_FILES['imagen']['type'];
                    $tamano = $_FILES['imagen']['size'];
                    $temp = $_FILES['imagen']['tmp_name'];
                    if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
                        $errorimg = true;
                    } else {
                        $nombrefinal = $archivo;
                        if (move_uploaded_file($temp, '../images/mapa/' . $nombrefinal)) {
                            chmod('../images/mapa/' . $nombrefinal, 0777);
                            $sqlima = "update mapa set imagen = '" . $nombrefinal . "' where id = " . $idgen;
                            $mysqli->query($sqlima);
                        } else {
                            $errorimg = true;
                        }
                    }
                }

                if(count($opcionesSeleccionadas) > 0){
                    foreach ($opcionesSeleccionadas as $opcion){
                        $opcion = filter_var($opcion, FILTER_SANITIZE_NUMBER_INT);
                        $sql = "insert into serviciovsmapa(
                            `idMapa`,
                            `idServicio`
                            )values(
                                '" . $idgen . "',
                                '" . $opcion . "'
                            )";
                        if($mysqli->query($sql)) {
                        }
                    }
                }
?>
<script>
    window.open('mapa.php?ok', '_self');
</script>
<?php
            }else{
?>
<script>
    window.open('mapa.php?err', '_self');
</script>
<?php
            }
        } else {
?>
<script>
    window.open('mapa.php?err', '_self');
</script>
<?php
        }
    } //Edit
    if ($_POST['action'] == "edit") {
        //get values
        $principal = (!empty($_POST['principal'])) ? addslashes($_POST['principal']): '';
        $latitud   = (!empty($_POST['latitud'])) ? addslashes($_POST['latitud']): '';
        $longitud  = (!empty($_POST['longitud'])) ? addslashes($_POST['longitud']): '';
        $nombre    = (!empty($_POST['nombre'])) ? addslashes($_POST['nombre']): '';
        $provincia = (!empty($_POST['provincia'])) ? addslashes($_POST['provincia']): '';
        $canton    = (!empty($_POST['canton'])) ? addslashes($_POST['canton']): '';
        $texto     = (!empty($_POST['texto'])) ? addslashes($_POST['texto']): '';
        $encargado = (!empty($_POST['encargado'])) ? addslashes($_POST['encargado']): '';
        $telefono  = (!empty($_POST['telefono'])) ? addslashes($_POST['telefono']): '';
        $horario   = (!empty($_POST['horario'])) ? addslashes($_POST['horario']): '';
        $whatsapp  = (!empty($_POST['whatsapp'])) ? addslashes($_POST['whatsapp']): '';
        $url       = (!empty($_POST['url'])) ? addslashes($_POST['url']): '';
        $id        = (!empty($_POST['id'])) ? (int)addslashes($_POST['id']): 0;
        $opcionesSeleccionadas = (!empty($_POST['servicios'])) ? $_POST['servicios']: [];

        if(!empty($id)){
            if(count($opcionesSeleccionadas) > 0){
                $sql = "DELETE FROM serviciovsmapa WHERE idMapa = " . $id;
    
                if($mysqli->query($sql)){
                    foreach ($opcionesSeleccionadas as $opcion){
                        $opcion = filter_var($opcion, FILTER_SANITIZE_NUMBER_INT);
                        $sql = "insert into serviciovsmapa(
                            `idMapa`,
                            `idServicio`
                            )values(
                                '" . $id . "',
                                '" . $opcion . "'
                            )";
                        if($mysqli->query($sql)) {
                        }
                    }
                }
            }
    
            if($principal == 'Y'){
                //update if principal is true
                $sql1 = "update mapa set 
                `principal` = 'N'
                where id > 0";
                $mysqli->query($sql1);
            }
    
            $sql = "update mapa set 
                `principal` = '" . $principal . "',
                `latitud` = '"   . $latitud . "',
                `longitud` = '"  . $longitud . "',
                `nombre` = '"    . $nombre . "',
                `provincia` = '" . $provincia . "',
                `canton` = '"    . $canton . "',
                `texto` = '"     . $texto . "',
                `encargado` = '" . $encargado . "',
                `telefono` = '"  . $telefono . "',
                `horario` = '"   . $horario . "',
                `whatsapp` = '"  . $whatsapp . "',
                `url` = '"       . $url . "'
                where id = "     . $id;
            if ($mysqli->query($sql)) {
                $idgen = $id;
    
                $archivo = $_FILES['imagen']['name'];
                if (isset($archivo) && $archivo != "") {
                    $tipo = $_FILES['imagen']['type'];
                    $tamano = $_FILES['imagen']['size'];
                    $temp = $_FILES['imagen']['tmp_name'];
                    if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 20000000))) {
                        $errorimg = true;
                    } else {
                        $nombrefinal = $idgen . $archivo;
                        if (move_uploaded_file($temp, '../images/mapa/' . $nombrefinal)) {
                            chmod('../images/mapa/' . $nombrefinal, 0777);
                            $sqlima = "update mapa set imagen = '" . $nombrefinal . "' where id = " . $idgen;
                            $mysqli->query($sqlima);
                        } else {
                            $errorimg = true;
                        }
                    }
                }
?>
<script>
    window.open('mapa.php?ok', '_self');
</script>
<?php
            }
        } else {
?>
<script>
    window.open('mapa.php?err', '_self');
</script>
<?php
        }
    } //EDIT
}
if (isset($_GET['del'])) {
    $sql = "delete from mapa where id = " . (int)$_GET['id'];

    if ($mysqli->query($sql)) {
?>
<script>
    window.open('mapa.php?ok', '_self');
</script>
<?php
    } else {
?>
<script>
    window.open('mapa.php?err', '_self');
</script>
<?php
    }
} //DELETE
$mysqli->close();
?>