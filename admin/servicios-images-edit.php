<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Images</h1>
                    <p class="mb-4">Edit</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                    <?php 
                    require_once '../config/conexion.php';
                    $id = (int)$_GET['id'];
                    if($id>0){
                        $sql = "select * from imagenesservicios where id = " . $id;
                        $query = $mysqli->query($sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>
                    
                        <div class="card-body">
                        <form id="add" method="post" action="servicios-images-actions.php"  enctype="multipart/form-data">
                           
                        
                        <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="text" required class="form-control" value="<?php echo $row['titulo']?>" id="titulo" name="titulo" placeholder="">
                            </div>
<div class="form-group">
                                <label for="exampleInputEmail1">Product:</label>
                                <select name="idProduct" class="form-select form-control" id="idProduct">
        
      
                          <?php
                                        require_once '../config/conexion.php';
                                        $sql = "select * from servicios order by id DESC";
                                        $query = $mysqli->query($sql);
                                        while($rowGaleria = $query->fetch_assoc()){
                                            if($row['idProduct']==$rowGaleria['id']){
                                        ?>
                                    <option selected="selected" value="<?=$rowGaleria['id']?>"><?= $rowGaleria['titulo']?></option>
                                        <?php 
                                            } else {
                                                ?>
                                <option  value="<?=$rowGaleria['id']?>"><?= $rowGaleria['titulo']?></option>

                                                    <?php
                                            }
                                        }//while
                                       ?>
        </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status:</label>
                                <select name="status" class="form-select form-control" id="idProduct">
                                    
                                    <option <?=$row['status']=='Activo'?'selected':''?> value="Activo">Activated</option>
                                    <option <?=$row['status']=='Desactivo'?'selected':''?>  value="Desactivo">Deactivated</option>
                         </select>
                            </div>
            

                        
                            <?php
                            if($row['imagen']!=""){?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Current Image:</label>
                                <img src="../assets/imagenes/<?php echo $row['imagen']?>" width="100px" alt="Img blog">
                            </div>
                            <?php } ?>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image: </label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>

                       


       
                            
                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="servicios-images.php?id=<?=(int)$_GET['id']?>" class="btn btn-secondary">Back</a>
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
                        ?><script>window.open('servicios-images.php','_self');</script>
                            
                            <?php 
                    }

                    
                include("footer.php");?>