<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Projects</h1>

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

                    <p class="mb-4">Add, edit or delete.</p>
                    <a class="btn btn-primary mb-4" href="galerias-add.php">Add new</a>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
                                    <thead>
                                        <tr>
                                        <th class="col-2">Image</th>
                                            <th class="col-5">Title</th>
                                            <th class="col-2">Status</th>
                                            <th class="col-2 text-center">Action</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require_once'../config/conexion.php';
                                        $sql = "select * from galerias order by id DESC";
                                        $query = $mysqli->query($sql);
                                        while($row = $query->fetch_assoc()){
                                        ?>
                                        <tr>
                                        <td><img src="../assets/galerias/<?php echo $row['imagen']?>" width="50px" alt="ilearn"></td>
                                        <td><?php echo $row['titulo']?></td>
                                       <td><?=$row['status']=='Activo'?'Activated':'Deactivated'?></td>  
                                        <td class="text-center">
                                            <a href="imagenes.php?galeria=<?php echo $row['id']?>"><i class="fa-solid fa-images"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                                            <a href="galerias-edit.php?id=<?php echo $row['id']?>"><i class="fas fa-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                                            <a href="galerias-actions.php?del=true&id=<?php echo $row['id']?>" onclick="return confirm('Do you want to continue? It will be permanently deleted')"><i class="fas fa-trash-alt"></i></a>
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