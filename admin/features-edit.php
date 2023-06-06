<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Features</h1>
                    <p class="mb-4">Edit existing Features</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php 
                    require_once '../config/conexion.php';
                    $id = (int)$_GET['id'];
                    if($id>0){
                        $sql = "select * from features where id = " . $id;
                        $query = $mysqli->query($sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>
                    
                        <div class="card-body">
                        <form id="add" method="post" action="features-actions.php"  enctype="multipart/form-data">
                           
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description:</label>
                                <input type="text" required class="form-control" value="<?php echo $row['description']?>" id="description" name="description" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Order:</label>
                                <input type="number" required class="form-control" id="order" name="order" value="<?php echo $row['position']?>" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status:</label>
                                <select name="status" class="form-select form-control" id="idProduct">
                                    
                                    <option <?=$row['status']=='Activo'?'selected':''?> value="Activo">Activated</option>
                                    <option <?=$row['status']=='Desactivo'?'selected':''?>  value="Desactivo">Deactivated</option>
                         </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="faq.php" class="btn btn-secondary">Back</a>
                            <input type="hidden" name="action" id="action" value="edit">
                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                            </form>
                        </div>
                    </div>

                    <script>  
                CKEDITOR.replace('contenido'); 
                 
            </script>

                <?php 
                $mysqli->close();
                    }else{ 
                        ?><script>window.open('features.php','_self');</script><?php 
                    }

                    
                include("footer.php");?>
