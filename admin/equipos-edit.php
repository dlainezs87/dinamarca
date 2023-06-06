<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipos</h1>
                    <p class="mb-4">Editar equipo existente</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php 
                    require_once '../config/conexion.php';
                    $id = (int)$_GET['id'];
                    if($id>0){
                        $sql = "select * from equipos where id = " . $id;
                        $query = $mysqli->query($sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>
                    
                        <div class="card-body">
                        <form id="add" method="post" action="equipos-actions.php"  enctype="multipart/form-data">
                           
                        
                        <div class="form-group">
                                <label for="exampleInputEmail1">Nombre:</label>
                                <input type="text" required class="form-control" value="<?php echo $row['nombre']?>" id="nombre" name="nombre" placeholder="">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Cargo:</label>
                                <input type="text" required class="form-control" value="<?php echo $row['cargo']?>" id="cargo" name="cargo" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripción:</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $row['descripcion']?></textarea>
                            </div>

            

                        
                            <?php
                            if($row['imagen']!=""){?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Actual:</label>
                                <img src="../assets/equipos/<?php echo $row['imagen']?>" width="100px" alt="Img blog">
                            </div>
                            <?php } ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen: * Recomendado 600 x 600px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook:</label>
                                <input type="text"  class="form-control" value="<?php echo $row['fb']?>" id="fb" name="fb" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Instagram:</label>
                                <input type="text"  class="form-control" value="<?php echo $row['insta']?>" id="insta" name="insta" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Linkedin:</label>
                                <input type="text"  class="form-control" value="<?php echo $row['linkedin']?>" id="linkedin" name="linkedin" placeholder="">
                            </div>


       
                            
                            <button type="submit" class="btn btn-primary">Editar</button>
                            <a href="equipos.php" class="btn btn-secondary">Regresar</a>
                            <input type="hidden" name="action" id="action" value="edit">
                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                            </form>
                        </div>
                    </div>

                    <script>  
                CKEDITOR.replace('descripcion'); 
                 
            </script>

                <?php 
                $mysqli->close();
                    }else{ 
                        ?><script>window.open('equipos.php','_self');</script><?php 
                    }

                    
                include("footer.php");?>