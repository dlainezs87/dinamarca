<?php include("open.php");?>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <p style="margin-top: -20px;" class="mb-4">Bienvenido(a) a su sistema de administación.</p>

                    <!-- Content Row -->
                    <div class="row">

                     <?php require_once '../config/conexion.php';;?>

                 

                      

                        <!-- Pending Requests Card Example -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Cantidad de Blogs</div>
                                                <?php
                                            $sql = "select * from blogs";
                                            $query = $mysqli->query($sql);
                                            $cant = mysqli_num_rows($query);
                                            ?> 
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $cant;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <?php $mysqli->close();?>

                    </div>

                    <!-- Content Row -->

                   
<?php include("footer.php");?>