<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Convenios</h1>
                    <p class="mb-4">Edit</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php 
                    require_once '../config/conexion.php';
                    $id = (int)$_GET['id'];
                    if($id>0){
                        $sql = "select * from convenios where id = " . $id;
                        $query = $mysqli->query($sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>
                    
                        <div class="card-body">
                        <form id="add" method="post" action="conventions-actions.php"  enctype="multipart/form-data">
                           
                        
                        <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="text" required class="form-control" value="<?php echo $row['titulo']?>" id="titulo" name="titulo" placeholder="">
                            </div>


                         
                            <div class="form-group">
                                <label for="exampleInputEmail1">Content:</label>
                                <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"><?php echo $row['contenido']?></textarea>
                            </div>

            

                        
                            <?php
                            if($row['imagen']!=""){?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Current image:</label>
                                <img src="../assets/convenios/<?php echo $row['imagen']?>" width="100px" alt="Img blog">
                            </div>
                            <?php } ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image: * Recommended 600 x 600px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>
       
                            
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="conventions.php" class="btn btn-secondary">Back</a>
                            <input type="hidden" name="action" id="action" value="edit">
                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                            </form>
                        </div>
                    </div>

                    <script>  
                 
            </script>

                <?php 
                $mysqli->close();
                    }else{ 
                        ?><script>window.open('blogs.php','_self');</script><?php 
                    }

                    
                include("footer.php");?>