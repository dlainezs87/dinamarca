<?php include("open.php");
$productName = isset($_GET['description'])?$_GET['description']:'';
?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Product Features for <?=$productName?></h1>

                    <?php 
                    if(isset($_GET['ok'])){ 
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Successfull
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php } ?>

                    <?php 
                    if(isset($_GET['err'])){ 
                    ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    There is an error, please try again
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <?php } ?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="10">
                                    <thead>
                                        <tr>
                                            <th class="col-4">Feature</th>
                                            <th class="col-4">Description</th>
                                            <th class="col-2 text-center">Actions</th>   
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $featuresSelected = Array();
                                        $idProduct  ='';
                                        if(isset($_GET['id'])){
                                            $idProduct = $_GET['id'];
                                        }
                                        require_once '../config/conexion.php';
                                        $sql = "select svf.id, f.description as feature,svf.description from serviciosvsfeatures svf INNER JOIN features f ON f.id=svf.idFeature where svf.status ='Activo' AND idServicio = $idProduct";
                                        $query = $mysqli->query($sql);
                                        while($row = $query->fetch_assoc()){
                                            $featuresSelected[]=$row['feature'];
                                        ?>
                                        <tr>
                                            <td><?php echo $row['feature']?></td>
                                            <td><?php echo $row['description']?></td>
                                        <td class="text-center">
                                            <a href="servicios-features-actions.php?del=true&id=<?php echo $row['id']?>&&idProduct=<?=$idProduct?> " onclick="return confirm('Desea continuar? Se eliminará el registro permanetemente')"><i class="fas fa-trash-alt"></i></a>
                                        </td>
                                          
                                        </tr>
                                        <?php 
                                        }//while
                                        ?>
                                        
                                    </tbody>
                                </table>
                                <div style="width:90%">
                                    <form id="add" method="post" action="servicios-features-actions.php" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-6">
                                    <input type="hidden" name="idProduct" value="<?=$idProduct?>">
                                <label for="exampleInputEmail1">Feature:</label>
                                <select name="idFeature" class="form-select form-control" id="idFeature">
        
      
                          <?php
                         
                                        require_once '../config/conexion.php';
                                        $sql = "select * from features order by id DESC";
                                        $query = $mysqli->query($sql);
                                        while($row = $query->fetch_assoc()){
                                            $selectedValue = false;
                                            foreach($featuresSelected as $featuresSelectedValues){
                                                if($featuresSelectedValues==$row['description']){
                                                    $selectedValue = true;
                                                } 
                                            }
                                            if(!$selectedValue){
                                        ?>
                                    <option selected value="<?=$row['id']?>"><?= $row['description']?></option>
                                        <?php 
                                        }
                                        }//while
                                        $mysqli->close();?>
        </select>
                            </div>
                                    <div class="form-group col-6">
                                <label for="exampleInputEmail1">Description:</label>
                                <input type="text" required class="form-control" id="description" name="description" placeholder="">
                            </div>
                                </div>
                                    <button type="submit" class="btn btn-primary">Add</button>
                            <a  href="servicios.php" type="submit" class="btn btn-secondary">Back</a>
                            <input type="hidden" name="action" id="action" value="add">
                                    </form>
                                    </div>
                            </div>
                        </div>
                    </div>

                <?php include("footer.php");?>
