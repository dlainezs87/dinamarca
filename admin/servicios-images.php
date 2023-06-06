<?php include("open.php");

require_once '../config/conexion.php';
 
   if(isset($_GET['id'])){
                        $product=$_GET['id'];
                        $sql = "select * from servicios where id=$product order by id DESC";
 $query = $mysqli->query($sql);
if ($query->num_rows > 0) {
  // output data of each row
  while($row = $query->fetch_assoc()) {
?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Images of Product: <?=$row['titulo']?></h1>

                    <?php 
  }
}
                    if(isset($_GET['ok'])){ 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Successfully
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
                    <?php } 
                  
                    ?>

                    <p class="mb-4">Add, edit or delete.</p>
                    <a class="btn btn-primary mb-4" href="servicios-images-add.php?idProduct=<?=$product?>">Add new</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
                                    <thead>
                                        <tr>
                                        <th class="col-2">Image</th>
                                            <th class="col-4">Title</th>
                                            <th class="col-4">Status</th>
                                            <th class="col-2 text-center">Actions</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once '../config/conexion.php';
                                        $sql = "select * from imagenesservicios where idProduct=$product order by id DESC";
                                        $query = $mysqli->query($sql);
                                        while($row = $query->fetch_assoc()){
                                        ?>
                                        <tr>
                                        <td><img src="../assets/imagenes/<?php echo $row['imagen']?>" width="50px" alt="ilearn"></td>
                                            <td><?php echo $row['titulo']?></td>
                                          <td><?=$row['status']=='Activo'?'Activated':'Deactivated'?></td>  
                                        <td class="text-center">
                                            <a href="servicios-images-edit.php?id=<?php echo $row['id']?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                                            <a href="servicios-images-actions.php?del=true&id=<?php echo $row['id']?>&&idProduct=<?=$product?>" onclick="return confirm('Do you want to continue? It will be permanently deleted')"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                          
                                        </tr>
                                        <?php 
                                        }//while
                                        $mysqli->close();?>
                                        
                                    </tbody>
                                </table>
                                                    <a class="btn btn-secondary mb-4" href="servicios.php">Back</a>

                            </div>
                        </div>
                    </div>

                    <?php }
                    include("footer.php");?>