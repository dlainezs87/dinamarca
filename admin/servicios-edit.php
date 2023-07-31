<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Productos</h1>
                    <p class="mb-4">Editar datos </p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php 
                    error_reporting(0);
                    require_once '../config/conexion.php';
                    $id = (int)$_GET['id'];
                    if($id>0){
                        $sql = "select * from servicios where id = " . $id;
                        $query = $mysqli->query($sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>
                    
                        <div class="card-body">
                        <form id="add" method="post" action="servicios-actions.php"  enctype="multipart/form-data">
                           
                        
                        <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="text" required class="form-control" value="<?php echo $row['titulo']?>" id="titulo" name="titulo" placeholder="">
                            </div>

                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description:</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $row['descripcion']?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Categoria:</label><br>
                                <div class="col-3 form-group">
                                    <select class="form-select form-control" id="categoria" name="categoria">
                                        <option value="">Seleccione una opci&oacute;n</option>
                                        <option value="audifonos">Audífonos</option>
                                        <option value="accesorios" selected>Accesorios</option>
                                        <option value="implantes" selected>Implantes</option>
                                        <option value="audiologico" selected>Audiológicos</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Status:</label>
                                <select name="status" class="form-select form-control" id="idProduct">
                                    
                                    <option <?=$row['status']=='Activo'?'selected':''?> value="Activo">Activated</option>
                                    <option <?=$row['status']=='Desactivo'?'selected':''?>  value="Desactivo">Deactivated</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <?php 
                                $sql = "select * from servicios where id = " . $id;
                                $query = $mysqli->query($sql);
                                while($row = $query->fetch_assoc()){ 
                                ?>
                                <label>This product is in the state: <?=$row['destacado']?></label><br>
                                
                                <label for="cars">You want to highlight this product?:</label>
                                <select name="destacado" id="destacado">
                                  <option value="featured">Yes</option>
                                  <option value="no_featured">No</option>
                                </select>
                            </div>

                        
                            <?php
                            if($row['imagen']!=""){?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Current:</label>
                                <img src="../assets/imagenes/<?php echo $row['imagen']?>" width="100px" alt="Img blog">
                            </div>
                            <?php }
					}?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image: * Recommend 960 x 599px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>

                       

       
                            
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="servicios.php" class="btn btn-secondary">Back</a>
                            <input type="hidden" name="action" id="action" value="edit">
                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                            </form>
                        </div>
                    </div>

                    <script>  
                //CKEDITOR.replace('descripcion'); 
                 
            </script>

                <?php 
                $mysqli->close();
                    }else{ 
                        ?><script>window.open('servicios.php','_self');</script><?php 
                    }

                    
                include("footer.php");?>