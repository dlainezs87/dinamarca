<?php 
include("open.php"); 
include("../config/parameters.php"); 
?>

<h1 class="h3 mb-2 text-gray-800">Editar Informaci&oacute;n</h1>

<div class="card shadow mb-4">
    <?php
    include("conn.php");
    $id = (int)$_GET['id'];
    if ($id > 0) {
        $sql = "SELECT * FROM prospectos WHERE ID = " . $id;
        $query = $mysqli->query($sql);
        $row = mysqli_fetch_assoc($query);
    ?>
    <div class="card-body">
        <form id="edit" method="post" action="prospectos-actions.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-3 form-group">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" class="form-control" value="<?php echo $row['Nombre'] ?>" id="Nombre" name="Nombre" placeholder="Nombre">
                </div>
                <div class="col-3 form-group">
                    <label for="Email">Email:</label>
                    <input type="text" class="form-control" value="<?php echo $row['Email'] ?>" id="Email" name="Email" placeholder="Email:">
                </div>
                <div class="col-3 form-group">
                    <label for="Telefono">Tel&eacute;fono:</label>
                    <input type="text" class="form-control" value="<?php echo $row['Telefono'] ?>" id="Telefono" name="Telefono" placeholder="Telefono:">
                </div>
                <div class="col-3 form-group">
                    <label for="Estado">Estado:</label>
                    <select name="Estado" class="form-select form-control" id="Estado">
                    <?php 
                        $sql = "SELECT COLUMN_TYPE 
                        FROM information_schema.COLUMNS 
                        WHERE TABLE_NAME = 'prospectos' 
                          AND COLUMN_NAME = 'Estado';";
                        $query = $mysqli->query($sql);
                        $data = mysqli_fetch_assoc($query);
                        $dataEstados = str_replace('enum(', '', $data);
                        $dataEstados = str_replace(')', '', $dataEstados);
                        $dataEstados = str_replace("'", '', $dataEstados);
                        $dataEstados = implode(",", $dataEstados);
                        
                        $estados = explode(',', $dataEstados);
                        foreach($estados as $estado){
                    ?>
                    <option value="<?= $estado ?>" <?= ($row['Estado'] == $estado) ? 'selected': '' ?> ><?= $estado ?></option>
                    <?php } ?>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-3 form-group">
                    <label for="slt-provincias">Provincia</label>
                    <select id="slt-provincias" name="provincia" class="form-control width100"></select>
                    <input type="hidden" value="<?php echo $row['Provincia'] ?>" id="provinciaSelected">
                </div>
                <div class="col-3 form-group">
                    <label for="slt-cantones">Cant&oacute;n</label>
                    <select id="slt-cantones" name="canton" class="form-control width100">
                        <option value="Todos">Todos</option>
                    </select>
                    <input type="hidden" value="<?php echo $row['Canton'] ?>" id="cantonSelected">
                </div>
                <div class="col-3 form-group">
                    <label for="slt-distritos">Distrito</label>
                    <select id="slt-distritos" name="distrito" class="form-control width100">
                        <option value="Todos">Todos</option>
                    </select>
                    <input type="hidden" value="<?php echo $row['Distrito'] ?>" id="distritoSelected">
                </div>
                <div class="col-3 form-group">
                    <label for="Direccion">Direcci&oacute;n:</label>
                    <input type="text" class="form-control" value="<?php echo $row['Direccion'] ?>" id="Direccion" name="Direccion" placeholder="Direccion:">
                </div>
            </div>
            <div class="row">
                <div class="col-3 form-group">
                    <label for="imagen">Curriculo: * Tamaño Máximo: 2.5mb</label>
                    <input class="form-control" name="archivo" id="archivo" type="file" />
                </div>
                <?php
                    if(!empty($row['NombreArchivo'])){
                        $NombreArchivo = substr($row['NombreArchivo'], 10);
                ?>
                    <div class="col-3 form-group">
                        <label for="mapaImg">Curriculo Actual:</label>
                        <a href="../assets/files/<?= $row['NombreArchivo'] ?>" download class="form-control">
                            <span class="boton-descargar">
                                <i class="fa fa-file"></i> Descargar <?= $NombreArchivo ?>
                            </span>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="prospectos.php" class="btn btn-secondary">Back</a>
            <input type="hidden" name="action" id="action" value="edit">
            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        </form>
    </div>
</div>
<script src="./js/distribucion-cr.js"></script>
<script src="./js/formulario.js"></script>
<script>
    $(document).ready(function(){
        var provincia = $('#provinciaSelected').val();
        var canton = $('#cantonSelected').val();
        var distrito = $('#distritoSelected').val();
        $('#slt-provincias').val(provincia);
        
        const miElemento = $('#slt-provincias');
        miElemento.on('change', mostrarCantones(provincia));
        miElemento.trigger('change');
        $('#slt-cantones').val(canton);

        const Canton = $('#slt-cantones');
        Canton.on('change', mostrarDistritos(canton));
        Canton.trigger('change');
        $('#slt-distritos').val(distrito);
    });
</script>
<?php
        $mysqli->close();
    } else {
?><script>
        window.open('mapa.php', '_self');
    </script><?php
    }
include("footer.php"); ?>