<?php include("open.php");?>

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Productos</h1>

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
    La acci&oacute;n no pudo ser completada. Intente de nuevo
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <?php } ?>

    <p class="mb-4">Agregar, editar o borrar</p>
    <a class="btn btn-primary mb-4" href="servicios-add.php">+ Agregar Nuevo</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
    
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="myTable" width="100%" cellspacing="10">
                    <thead>
                        <tr>
                            <th class="col-5">Titulo</th>
                            <th class="col-3">Imagen</th>
                            <th class="col-2">Estado</th>
                            <th class="col-2 text-center">Acciones</th>   
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once '../config/conexion.php';
                        $sql = "select * from servicios order by id DESC";
                        $query = $mysqli->query($sql);
                        while($row = $query->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['titulo']?></td>
                            <td><img src="../assets/imagenes/<?=$row['imagen']?>" width='90'height='60' alt="alt"/></td>
                        <td><?=$row['status']=='Activo'?'Activated':'Deactivated'?></td>  
                            <td class="text-center">
                            <a href="servicios-images.php?id=<?php echo $row['id']?>"><i class="fa-solid fa-images"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="servicios-features.php?id=<?php echo $row['id']?>&&description=<?php echo $row['titulo']?>"><i class="fa-solid fa-list-check"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="servicios-edit.php?id=<?php echo $row['id']?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href="servicios-actions.php?del=true&id=<?php echo $row['id']?>" onclick="return confirm('Do you want to continue? It will be permanently deleted')"><i class="fas fa-trash-alt"></i></a>
                        
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