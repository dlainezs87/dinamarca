<?php 
include("open.php"); 
include("../config/parameters.php"); 
?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Mapa</h1>
<p class="mb-4">Editar</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <?php
    include("conn.php");
    $id = (int)$_GET['id'];
    if ($id > 0) {
        $sql = "select * from mapa where id = " . $id;
        $query = $mysqli->query($sql);
        $row = mysqli_fetch_assoc($query);
    ?>
        <div class="card-body">
            <form id="add" method="post" action="mapa-actions.php" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-4 form-group">
                        <label for="principal">Principal:</label>
                        <select name="principal" class="form-select form-control" id="principal">
                            <option value="-1">Seleccione una opci&oacute;n</option>
                            <option value="Y" <?php echo ($row['principal'] == 'Y') ? 'selected': '' ?>>Local Principal</option>
                            <option value="N" <?php echo ($row['principal'] == 'N') ? 'selected': '' ?>>Sucursal</option>
                        </select>
                    </div>
                    <div class="col-4 form-group">
                        <label for="slt-provincias">Provincia</label>
                        <select id="slt-provincias" name="provincia" class="form-control width100"></select>
                        <input type="hidden" value="<?php echo $row['provincia'] ?>" id="provinciaSelected">
                    </div>
                    <div class="col-4 form-group">
                        <label for="slt-cantones">Cantón</label>
                        <select id="slt-cantones" name="canton" class="form-control width100">
                            <option value="Todos">Todos</option>
                        </select>
                        <input type="hidden" value="<?php echo $row['canton'] ?>" id="cantonSelected">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" value="<?php echo $row['nombre'] ?>" id="nombre" name="nombre" placeholder="Nombre">
                    </div>
                    <div class="col-4 form-group">
                        <label for="latitud">Latitud:</label>
                        <input type="text" class="form-control" value="<?php echo $row['latitud'] ?>" id="latitud" name="latitud" placeholder="Latitud">
                    </div>
                    <div class="col-4 form-group">
                        <label for="longitud">Longitud:</label>
                        <input type="text" class="form-control" value="<?php echo $row['longitud'] ?>" id="longitud" name="longitud" placeholder="Longitud">
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 form-group">
                        <label for="texto">Texto:</label>
                        <input type="text" class="form-control" value="<?php echo $row['texto'] ?>" id="texto" name="texto" placeholder="Texto corto">
                    </div>
                        <?php
                            $arrServ = [];
                            include("conn.php");
                            $sql1 = "SELECT s.id
                                    FROM serviciovsmapa sm 
                                    LEFT JOIN mapa m ON (sm.idMapa = m.id) 
                                    LEFT JOIN servicios s ON (sm.idServicio = s.id) 
                                    WHERE m.id = " . $id;
                            $query1 = $mysqli->query($sql1);
                            while($rowSXM = $query1->fetch_assoc()){
                                array_push($arrServ, $rowSXM['id']);
                            }
                        ?>
                    <div class="col-4 form-group">
                        <label for="texto">Servicios: (ctrl + click)</label>
                        <select name="servicios[]" class="form-select form-control" id="servicios" multiple>
                        <?php
                            include("conn.php");
                            $sql = "select id, titulo from servicios order by titulo ASC";
                            $query = $mysqli->query($sql);
                            while($rowServicio = $query->fetch_assoc()){
                        ?>
                            <option value="<?=$rowServicio['id']?>" <?= (in_array($rowServicio['id'], $arrServ)) ? 'selected': '' ?> ><?= $rowServicio['titulo']?></option>
                        <?php 
                        ?>
                        <?php
                            }
                        ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen: * Recomendado: 128 x 128px</label>
                    <input class="form-control" name="imagen" id="imagen" type="file" />
                </div>
                <?php
                if ($row['imagen'] != "") { ?>
                    <div class="form-group">
                        <label for="mapaImg">Imagen Actual:</label>
                        <img src="<?= base_url ?>images/mapa/<?php echo $row['imagen'] ?>" width="100px" alt="Img Mapa" id="mapaImg">
                    </div>
                <?php } ?>
                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="mapa.php" class="btn btn-secondary">Back</a>
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
        $('#slt-provincias').val(provincia);
        
        const miElemento = $('#slt-provincias');

        miElemento.on('change', mostrarCantones(provincia));
        miElemento.trigger('change');

        $('#slt-cantones').val(canton);
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