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
    window.open('prospectos.php?ok', '_self');
</script>
<?php
            }else{
?>
<script>
    window.open('prospectos.php?err', '_self');
</script>
<?php
            }
        } else {
?>
<script>
    window.open('prospectos.php?err', '_self');
</script>
<?php
        }
    } //Edit
    if ($_POST['action'] == "edit") {
        //get values
        $Nombre    = (!empty($_POST['Nombre'])) ? addslashes($_POST['Nombre']): '';
        $Email     = (!empty($_POST['Email'])) ? addslashes($_POST['Email']): '';
        $Telefono  = (!empty($_POST['Telefono'])) ? addslashes($_POST['Telefono']): '';
        $Estado    = (!empty($_POST['Estado'])) ? addslashes($_POST['Estado']): '';
        $provincia = (!empty($_POST['provincia'])) ? addslashes($_POST['provincia']): '';
        $canton    = (!empty($_POST['canton'])) ? addslashes($_POST['canton']): '';
        $distrito  = (!empty($_POST['distrito'])) ? addslashes($_POST['distrito']): '';
        $Direccion = (!empty($_POST['Direccion'])) ? addslashes($_POST['Direccion']): '';
        $id        = (!empty($_POST['id'])) ? (int)addslashes($_POST['id']): 0;

        if(!empty($id)){
            $sql = "UPDATE prospectos SET
                `Nombre`    = '" . $Nombre . "',
                `Email`     = '" . $Email . "',
                `Telefono`  = '" . $Telefono . "',
                `Provincia` = '" . $provincia . "',
                `Canton`    = '" . $canton . "',
                `Distrito`  = '" . $distrito . "',
                `Direccion` = '" . $Direccion . "',
                `Estado`    = '" . $Estado . "'
                where ID    = "  . $id;
            if ($mysqli->query($sql)) {
                $idgen = $id;
    
                $archivo = $_FILES['archivo']['name'];
                if(!empty($archivo)){
                    $tipo = $_FILES['archivo']['type'];
                    $tamano = $_FILES['archivo']['size'];
                    $temp = $_FILES['archivo']['tmp_name'];
                    if ((strpos($tipo, "pdf") === false || strpos($tipo, "docx") === false) && ($tamano > 2921440)) {
                        $errorimg = true;
                    } else {
                        $nombrefinal = time() . $archivo;
                        if (move_uploaded_file($temp, '../assets/files/' . $nombrefinal)){
                            chmod('../assets/files/' . $nombrefinal, 0777);
                            $sqlima = "UPDATE prospectos set NombreArchivo = '" . $nombrefinal . "' WHERE ID = " . $idgen;
                            $mysqli->query($sqlima);
                        } else {
                            $errorimg = true;
                        }
                    }
                }
?>
<script>
    window.open('prospectos.php?ok', '_self');
</script>
<?php
            }
        } else {
?>
<script>
    window.open('prospectos.php?err', '_self');
</script>
<?php
        }
    } //EDIT
}
$mysqli->close();
?>