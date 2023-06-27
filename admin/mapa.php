<?php include("open.php"); ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Secci&oacute;n del Mapa</h1>

<?php
if (isset($_GET['ok'])) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Proceso realizado con éxito
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>

<?php
if (isset($_GET['err'])) {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        No se agregó el registro, vuelva a intentarlo.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>

<p class="mb-4">Add, edit or delete.</p>
<a class="btn btn-primary mb-4" href="mapa-add.php">Add New</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
                <thead>
                    <tr>
                        <th class="col-2">Nombre</th>
                        <th class="col-2">Principal</th>
                        <th class="col-2">Latitud</th>
                        <th class="col-2">Longitud</th>
                        <th class="col-2">Provincia</th>
                        <th class="col-2">Canton</th>
                        <th class="col-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("conn.php");
                    $sql = "select * from mapa order by Nombre ASC";
                    $query = $mysqli->query($sql);
                    while ($row = $query->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo  $row['nombre'] ?></td>
                            <td><?php echo ($row['principal'] == 'Y') ? 'Principal': 'Sucursal'; ?></td>
                            <td><?php echo  $row['latitud'] ?></td>
                            <td><?php echo  $row['longitud'] ?></td>
                            <td><?php echo  $row['provincia'] ?></td>
                            <td><?php echo  $row['canton'] ?></td>
                            <td class="text-center">
                                <a href="mapa-edit.php?id=<?php echo $row['id'] ?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                                <a href="mapa-actions.php?del=true&id=<?php echo $row['id'] ?>" onclick="return confirm('Do you want to continue? It will be permanently deleted')"><i class="fas fa-trash-alt"></i></a>
                            </td>

                        </tr>
                    <?php
                    } //while
                    $mysqli->close(); ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>