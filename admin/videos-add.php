<?php include("open.php");?>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Videos</h1>
                    <p class="mb-4">Add new</p>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                    
                        <div class="card-body">
                        <form id="add" method="post" action="videos-actions.php" enctype="multipart/form-data">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Name:</label>
                                <input type="text" required class="form-control" id="titulo" name="titulo" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Video:</label>
                                <input class="form-control" name="file_video" id="file_video" type="file"/>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>

                            <a  href="videos.php" type="submit" class="btn btn-secondary">Back</a>

                            <input type="hidden" name="action" id="action" value="add">
                           
                            </form>
                        </div>
                    </div>

                  

 <?php include("footer.php");?>