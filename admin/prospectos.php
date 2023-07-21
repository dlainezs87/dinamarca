<?php include("open.php"); ?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Informaci&oacute;n de Prospectos</h1>

<?php
if (isset($_GET['ok'])) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Proceso realizado con &eacute;xito
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>

<?php
if (isset($_GET['err'])) {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        No se proces&oacute; el registro, vuelva a intentarlo.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php } ?>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="10">
                <thead>
                    <tr>
                        <th class="col-2">Nombre</th>
                        <th class="col-2">Email</th>
                        <th class="col-2">Tel&eacute;fono</th>
                        <th class="col-2">Envi&oacute; CV?</th>
                        <th class="col-2 text-center">Ver</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include("conn.php");
                    $sql = "SELECT * FROM prospectos order by Nombre ASC";
                    $query = $mysqli->query($sql);
                    while ($row = $query->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row['Nombre'] ?></td>
                            <td><?php echo $row['Email'] ?></td>
                            <td><?php echo $row['Telefono'] ?></td>
                            <td><?php echo (!empty($row['NombreArchivo'])) ? 'S': 'N' ?></td>
                            <td class="text-center">
                                <a href="prospecto-edit.php?id=<?php echo $row['ID'] ?>"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php
                        }
                        
                        $mysqli->close(); 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
$(document).ready( function () {
    var table = new DataTable('#myTable', {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json',
        },
    });
});
</script>
<?php include("footer.php"); ?>