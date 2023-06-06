<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Equipo</h1>
                    <p class="mb-4">Agregar nuevo</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                        <form id="add" method="post" action="equipos-actions.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre:</label>
                                <input type="text" required class="form-control" id="nombre" name="nombre" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Cargo:</label>
                                <input type="text" required class="form-control" id="cargo" name="cargo" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Descripción:</label>
                                <textarea class="form-control" name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Imagen: * Recomendado: 600 x 600px</label>
                                <input class="form-control" name="imagen" id="imagen" type="file"/>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook:</label>
                                <input type="text"  class="form-control" id="fb" name="fb" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Instagram:</label>
                                <input type="text"  class="form-control" id="insta" name="insta" placeholder="">
</div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Linkedin:</label>
                                <input type="text"  class="form-control" id="linkedin" name="linkedin" placeholder="">
</div>
                          

                        
                            
                            <button type="submit" class="btn btn-primary">Agregar</button>
                            <a  href="equipos.php" type="submit" class="btn btn-secondary">Regresar</a>
                            <input type="hidden" name="action" id="action" value="add">
                           
                            </form>
                        </div>
                    </div>

                    <script>  
                CKEDITOR.replace('descripcion'); 
                 
            </script>

 <?php include("footer.php");?>