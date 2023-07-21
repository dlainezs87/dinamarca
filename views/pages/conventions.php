<!----------------Section conventions------------->

<?php
?>
<div style="background:url('images/hero-pages-convenio.png');background-size:cover;
    background-repeat:no-repeat;background-position:center;" class="hero-pages">
    <div class="container  ">
      <div class="row">
        <div class="col-md-12">
          <h1 style="text-align:center; color:white;padding-top:80px;">Convenios</h1>
          <p style="width:60%; margin:0 auto; text-align:center; color:white;font-size:18px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
      </div>
    </div>
  </div>
<section id="galerias">
    <div class="container">
        <div class="row">
                <?php 
                include("config/conexion.php");
                $sql = "select * from convenios order by id DESC";
                $query = $mysqli->query($sql);
                while($row = $query->fetch_assoc()){
                ?>
                <div class="col-lg-4 mx-auto mt-5">
                        <div style="padding:30px;box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.16);-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.16);-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.16);border-radius: 10px;">
                            <div style="width:60%;margin:0 auto;padding-bottom:20px;">
	                            <a href="<?=base_url?>?pag=convention-detail&&id=<?=$row['id']?>"><img style="width:100%;" src="assets/convenios/<?php echo ($row['imagen']);?>"></a>
                            </div>
                            <div class="text-center">
                            	<h5 style="font-weight:bolder;">
                                    <?php echo ($row['titulo']);?>
                                </h5>
                            </div>
                        </div>
                </div>
                <?php 
                }
                ?>
		</div>
    </div>
    <div style="margin:50px"></div>
</section>

