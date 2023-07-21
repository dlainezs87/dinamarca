<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Features</h1>

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
                    No se agregó el registro, vuelva a intentarlo.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php } 
                    if(isset($_GET['err_data'])){ 
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    No fue posible eliminar el elemento debido a que tiene datos asociados.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php } ?>

                    <p class="mb-4">Agregar, editar o borrar</p>
                    <a class="btn btn-primary mb-4" href="features-add.php">Agregar Nuevo</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
                                    <thead>
                                        <tr>
                                            <th class="col-4">Description</th>
                                            <th class="col-3">Order</th>
                                            <th class="col-4">Status</th>
                                            <th class="col-2 text-center">Actions</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once '../config/conexion.php';
                                        $sql = "select * from features order by id DESC";
                                        $query = $mysqli->query($sql);
                                        while($row = $query->fetch_assoc()){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['description']?></td>
                                            <td><?php echo $row['position']?></td>
                                            <td><?=$row['status']=='Activo'?'Activated':'Deactivated'?></td>  
                                        <td class="text-center">
                                            <a href="features-edit.php?id=<?php echo $row['id']?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                                            <a href="features-actions.php?del=true&id=<?php echo $row['id']?>" onclick="return confirm('Do you want to continue? It will be permanently deleted')"><i class="fas fa-trash-alt"></i></a>
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

                <?php include("footer.php");?>