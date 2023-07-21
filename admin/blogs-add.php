<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Blogs</h1>
                    <p class="mb-4">Agregar Nuevo</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                        <form id="add" method="post" action="blogs-actions.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="text" required class="form-control" id="titulo" name="titulo" placeholder="">
                            </div>

                      
                            <div class="form-group">
                                <label for="exampleInputEmail1">Content:</label>
                                <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Image: * Recommend: 600 x 600px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Autor:</label>
                                <input type="text"  class="form-control" id="autor" name="autor" placeholder="">
                            </div>
                  

                        
                            
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a  href="blogs.php" type="submit" class="btn btn-secondary">Back</a>
                            <input type="hidden" name="action" id="action" value="add">
                           
                            </form>
                        </div>
                    </div>

                    <script>  
                CKEDITOR.replace('contenido'); 
                 
            </script>

 <?php include("footer.php");?>