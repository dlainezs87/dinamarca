<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Brands</h1>
                    <p class="mb-4">Edit</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php 
                    require_once '../config/conexion.php';
                    $id = (int)$_GET['id'];
                    if($id>0){
                        $sql = "select * from brands where id = " . $id;
                        $query = $mysqli->query($sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>
                    
                        <div class="card-body">
                        <form id="add" method="post" action="brands-actions.php"  enctype="multipart/form-data">
                           
                        
                        <div class="form-group">
                                <label for="exampleInputEmail1">link:</label>
                                <input type="text" required class="form-control" value="<?php echo $row['link']?>" id="link" name="link" placeholder="">
                            </div>

            

                        
                            <?php
                            if($row['imagen']!=""){?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Current image:</label>
                                <img src="../assets/brands/<?php echo $row['imagen']?>" width="100px" alt="Img brand">
                            </div>
                            <?php } ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image: * Recommended 600 x 600px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="brands.php" class="btn btn-secondary">Back</a>
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
                        ?><script>window.open('brands.php','_self');</script><?php 
                    }

                    
                include("footer.php");?>