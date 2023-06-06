<!----------------Section videos------------->

<?php
?>
<section id="galerias" style="padding-top:50px;">
    <div class="container">
    <div class="heading_container">
        <h2>Videos</h2>
    </div>
     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <div class="row">
                <?php 
                include("config/conexion.php");
                $sql = "select * from videos order by id DESC";
                $query = $mysqli->query($sql);
                while($row = $query->fetch_assoc()){
                ?>
                <div class="col-lg-4 mx-auto">
                        <div class="blog-one__single">
                            <div class="blog-one__image" style="width: 100%;">
	                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $row['video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div><!-- /.blog-one__image -->
                            <div class="blog-one__content text-center">
                            	<p style="font-weight:bolder;" class="blog-one__titles"><?php echo ($row['titulo']);?></p>
                                <!-- /.blog-one__title -->
                            </div><!-- /.blog-one__content -->
                        </div><!-- /.blog-one__single -->
                </div><!-- /.col-lg-4 -->
                    <?php }//while ?>
		</div><!-- /.row -->
    </div>
</section>

