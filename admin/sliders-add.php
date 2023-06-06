<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Sliders</h1>
                    <p class="mb-4">Add New</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                        <form id="add" method="post" action="sliders-actions.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name:</label>
                                <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title:</label>
                                <input type="text" required class="form-control" id="titulo" name="titulo" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Text: *Max 35 words</label>
                                <textarea class="form-control" id="texto" name="texto" value="<?php echo $row['texto']?>"  cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Action button:</label>
                                <input type="text" required class="form-control" id="button" name="button" placeholder="">
                            </div>

                             <div class="form-group">
                                <label for="exampleInputEmail1">Image: * Recommended: 1280 x 600px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>


                          

                        
                            
                            <button type="submit" class="btn btn-primary">Agregar</button>
                            <a  href="sliders.php" type="submit" class="btn btn-secondary">Regresar</a>
                            <input type="hidden" name="action" id="action" value="add">
                           
                            </form>
                        </div>
                    </div>

                    <script>  
                CKEDITOR.replace('contenido'); 
                 
            </script>

 <?php include("footer.php");?>