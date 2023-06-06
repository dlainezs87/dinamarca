<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Features</h1>
                    <p class="mb-4">Add New</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                        <form id="add" method="post" action="features-actions.php" enctype="multipart/form-data">


                            <div class="form-group">
                                <label for="exampleInputEmail1">Description:</label>
                                <input type="text" required class="form-control" id="description" name="description" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Order:</label>
                                <input type="number" required class="form-control" id="order" name="order" placeholder="">
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a  href="features.php" type="submit" class="btn btn-secondary">Back</a>
                            <input type="hidden" name="action" id="action" value="add">
                           
                            </form>
                        </div>
                    </div>

                    <script>  
                CKEDITOR.replace('contenido'); 
                 
            </script>

 <?php include("footer.php");?>