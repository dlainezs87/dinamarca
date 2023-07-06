<?php include("open.php"); ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Mapa</h1>
<p class="mb-4">Agregar Nuevo</p>


<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <form id="add" method="post" action="mapa-actions.php" enctype="multipart/form-data">
            <div class="row">
                <div class="col-4 form-group">
                    <label for="principal">Principal:</label>
                    <select name="principal" class="form-select form-control" id="principal">
                        <option value="-1">Seleccione una opci&oacute;n</option>
                        <option value="Y">Local Principal</option>
                        <option value="N" selected>Sucursal</option>
                    </select>
                </div>
                <div class="col-4 form-group">
					<label for="slt-provincias">Provincia</label>
					<select id="slt-provincias" name="provincia" class="form-control width100" required></select>
				</div>
				<div class="col-4 form-group">
					<label for="slt-cantones">Cantón</label>
					<select id="slt-cantones" name="canton" class="form-control width100">
						<option value="Todos">Todos</option>
					</select>
				</div>
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                </div>
                <div class="col-4 form-group">
                    <label for="latitud">Latitud:</label>
                    <input type="text" class="form-control" id="latitud" name="latitud" placeholder="Latitud">
                </div>
                <div class="col-4 form-group">
                    <label for="longitud">Longitud:</label>
                    <input type="text" class="form-control" id="longitud" name="longitud" placeholder="Longitud">
                </div>
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label for="encargado">Encargado:</label>
                    <input type="text" class="form-control" id="encargado" name="encargado" placeholder="Encargado:">
                </div>
                <div class="col-4 form-group">
                    <label for="telefono">Tel&eacute;fono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Tel&eacute;fono:">
                </div>
                <div class="col-4 form-group">
                    <label for="texto">Texto:</label>
                    <input type="text" class="form-control" id="texto" name="texto" placeholder="Texto corto">
                </div>
            </div>
            <div class="row">
                <div class="col-4 form-group">
                    <label for="texto">Servicios: (ctrl + click)</label>
                    <select name="servicios[]" class="form-select form-control" id="servicios" multiple>
                    <?php
                        include("conn.php");
                        $sql = "select id, titulo from servicios order by titulo ASC";
                        $query = $mysqli->query($sql);
                        while($rowServicio = $query->fetch_assoc()){
                    ?>
                        <option value="<?=$rowServicio['id']?>"><?= $rowServicio['titulo']?></option>
                    <?php 
                    ?>
                    <?php
                        }
                        $mysqli->close();
                    ?>
                    </select>
                </div>
                <div class="col-8 form-group">
                    <label for="horario">Horario:</label>
                    <input type="text" class="form-control" id="horario" name="horario" placeholder="Horario:">
                </div>
            </div>
            <div class="row">
                <div class="col form-group">
                    <label for="exampleInputEmail1">Image: * Recommend: 128 x 128px</label>
                    <input class="form-control" name="imagen" id="imagen" type="file" />
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
            <a href="mapa.php" type="submit" class="btn btn-secondary">Back</a>
            <input type="hidden" name="action" id="action" value="add">
        </form>
    </div>
</div>
<script src="./js/distribucion-cr.js"></script>
<script src="./js/formulario.js"></script>
<script>
    CKEDITOR.replace('contenido');
</script>

<?php include("footer.php"); ?>