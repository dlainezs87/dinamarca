<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Convenios</h1>
                    <p class="mb-4">Add New</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                        <form id="add" method="post" action="conventions-actions.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="text" required class="form-control" id="titulo" name="titulo" placeholder="">
                            </div>

                      
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description:</label>
                                <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image: * Recommend: 600 x 600px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>

                           
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a  href="blogs.php" type="submit" class="btn btn-secondary">Back</a>
                            <input type="hidden" name="action" id="action" value="add">
                           
                            </form>
                        </div>
                    </div>

                    <script>  
                 
            </script>

 <?php include("footer.php");?>