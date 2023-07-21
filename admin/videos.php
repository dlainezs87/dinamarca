<?php include("open.php");?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Videos</h1>

<?php 
if(isset($_GET['ok'])){ 
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
Proceso realizado con éxito
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<?php } ?>

<?php 
if(isset($_GET['err'])){ 
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
The action wasn't completed, please try again
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<?php } ?>

<p class="mb-4">Agregar, editar o borrar</p>
<a class="btn btn-primary mb-4" href="videos-add.php">Agregar Nuevo</a>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="10">
                <thead>
                    <tr>
                        <th class="col-10">T&iacute;tulo</th>
                        <th class="col-2 text-center">Acciones</th>   
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once '../config/conexion.php';
                    $sql = "select * from videos order by id DESC";
                    $query = $mysqli->query($sql);
                    while($row = $query->fetch_assoc()){
                    ?>
                    <tr>    
                        <td><?php echo ($row['titulo'])?></td>
                    <td class="text-center">
                        <a href="videos-edit.php?id=<?php echo $row['id']?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="videos-actions.php?del=true&id=<?php echo $row['id']?>" onclick="return confirm('Do you want to continue? It will be permanently deleted')"><i class="fas fa-trash-alt"></i></a>
                    </td>
                        
                    </tr>
                    <?php 
                    }//while
                    $mysqli->close();?>
                    
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
<?php include("footer.php");?>