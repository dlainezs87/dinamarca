<!-- product section -->

<?php 
include("config/conexion.php");
$sql = "select * FROM servicios WHERE status = 'Activo' order by id ASC";
$query = $mysqli->query($sql);
$cont = 0;
?>

<style>
  .MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
  .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
  .MultiCarousel .MultiCarousel-inner .item { float: left;}
  .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; margin:10px; background:white; color:#666;box-shadow: 0px 0px 22px -6px rgba(0,0,0,0.15);
-webkit-box-shadow: 0px 0px 22px -6px rgba(0,0,0,0.15);
-moz-box-shadow: 0px 0px 22px -6px rgba(0,0,0,0.15);}
  .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:0px;top:calc(50% - 20px); }
  .MultiCarousel .leftLst { left:0; }
  .MultiCarousel .rightLst { right:0; }
  .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:rgba(0, 0, 0, 0.7); }
</style>

<section>    
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="heading_container">
          <h3 style="color:black;padding:50px 0 30px 0">
            Productos Destacados
          </h3>
        </div>
        <div class="MultiCarousel" data-items="1,3,5,6" data-slide="1" id="MultiCarousel"  data-interval="1000">
                <div class="MultiCarousel-inner">
                    <?php  
                      while($row = $query->fetch_assoc()){ 
                    ?>
                    <div class="item">
                        <div style="max-height:720px;" class="pad15">
                            <a href="<?=base_url?>?pag=pdp&&id=<?=$row['id']?>"><img style="width:100%;" src="<?=base_url?>assets/imagenes/<?=$row['imagen']?>"></a>
                            <h5 style="padding-top:10px;font-weight:bolder;"><?=$row['titulo']?></h5>
                            <p style="padding:20px;"><?=$row['descripcion']?></p>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <button style="padding: 0.975rem 0.75rem;background-color:rgba(0, 0, 0, 0.7);" class="btn btn-primary leftLst"><i style="font-size:24px;color:white;" class="fas fa-angle-left"></i></button>
                <button style="padding: 0.975rem 0.75rem;background-color:rgba(0, 0, 0, 0.7);" class="btn btn-primary rightLst"><i style="font-size:24px;color:white;" class="fas fa-angle-right"></i></button>
        </div>
      </div> 
    </div>
  </div>
</section>
<!-- end product section -->

