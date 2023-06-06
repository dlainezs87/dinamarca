<?php include("open.php");?>
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">FAQ</h1>
                    <p class="mb-4">Edit</p>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    <?php 
                    require_once '../config/conexion.php';
                    $id = (int)$_GET['id'];
                    if($id>0){
                        $sql = "select * from faq where id = " . $id;
                        $query = $mysqli->query($sql);
                        $row = mysqli_fetch_assoc($query);
                    ?>
                    
                        <div class="card-body">
                        <form id="add" method="post" action="faq-actions.php"  enctype="multipart/form-data">
                           
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="text" required class="form-control" value="<?php echo ($row['titulo'])?>" id="titulo" name="titulo" placeholder="">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Text:</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $row['descripcion']?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Category:</label>
                                <input type="text" required class="form-control" value="<?php echo ($row['categoria'])?>" id="categoria" name="categoria" placeholder="">
                            </div>


                            <button type="submit" class="btn btn-primary">Edit</button>
                            <a href="faq.php" class="btn btn-secondary">Back</a>
                            <input type="hidden" name="action" id="action" value="edit">
                            <input type="hidden" name="id" id="id" value="<?php echo $id;?>">
                            </form>
                        </div>
                    </div>
                <?php 
                $mysqli->close();
                    }else{ 
                        ?><script>window.open('faq.php','_self');</script><?php 
                    }
                include("footer.php");?>