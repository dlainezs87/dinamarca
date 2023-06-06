<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Images</h1>
                    <p class="mb-4">Add new</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                        <form id="add" method="post" action="imagenes-actions.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="text" required class="form-control" id="titulo" name="titulo" placeholder="">
                            </div>
                                <div class="form-group">
                                <label for="exampleInputEmail1">Proyect:</label>
                                <select name="idGaleria" class="form-select form-control" id="idGaleria">
        
      
                          <?php
                         
                                        require_once '../config/conexion.php';
                                        $sql = "select * from galerias order by id DESC";
                                        $query = $mysqli->query($sql);
                                        while($row = $query->fetch_assoc()){
                                             
                             
                                                    if(isset($_GET['idGaleria']) &&$_GET['idGaleria']==$row['id']){
                                        ?>
                                    
                                    <option selected value="<?=$row['id']?>"><?= $row['titulo']?></option>
                                        <?php 
                                             } else {
                                                 ?>
                                    <option  value="<?=$row['id']?>"><?= $row['titulo']?></option>
                                                     <?php
                                             }
                                        }//while
                                        $mysqli->close();?>
        </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen:</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>
           

                        
                            
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a  href="galerias.php" type="submit" class="btn btn-secondary">Back</a>
                            <input type="hidden" name="action" id="action" value="add">
                           
                            </form>
                        </div>
                    </div>
 

 <?php include("footer.php");?>