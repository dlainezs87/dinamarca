<?php 
include("config/conexion.php");
$sql = "select * FROM servicios WHERE status = 'Activo' order by id ASC";
$query = $mysqli->query($sql);
$cont = 0;
?>

  <!-- doctor section -->

  <div style="background:url('images/hero-pages-products.png');background-size:cover;
    background-repeat:no-repeat;background-position:center;" class="hero-pages">
    <div class="container  ">
      <div class="row">
        <div class="col-md-12">
          <h1 style="text-align:center; color:white;padding-top:80px;">Productos de Audiología | Clínica Dinamarca</h1>
          <p style="width:60%; margin:0 auto; text-align:center; color:white;font-size:18px;">Somos especialistas en salud auditiva, tenemos el audífono adecuado para su estilo de vida.
El grado de pérdida auditiva, los requisitos de destreza y las preocupaciones estéticas son solo 
algunas de las variables que analizaremos al elegir el estilo de audífono más adecuado para usted</p>
        </div>
      </div>
    </div>
  </div>

  <section style="background:transparent;" class="doctor_section layout_padding">

    <div class="container">
      <div class="heading_container">
        <h2 style="color:black;text-align:left;">
          Nuestros Productos
        </h2>
      </div><br>

      <div id="myBtnContainer">
        <button class="filter-btn active" onclick="filterSelection('all')"> Todos</button>
        <button class="filter-btn" onclick="filterSelection('audifonos')"> Audífonos</button>
        <button class="filter-btn" onclick="filterSelection('accesorios')"> Accesorios</button>
        <button class="filter-btn" onclick="filterSelection('implantes')"> Sistemas implantables</button>
        <button class="filter-btn" onclick="filterSelection('audiologico')"> Equipo Audiológico</button>
      </div>

      <div class="row">
        <?php  
            while($row = $query->fetch_assoc()){ 
        ?>
        <div class="col-sm-6 col-lg-4 mx-auto column <?=$row['categoria']?>">
         <div class="box">
            <div class="img-box">
              <a href="<?=base_url?>?pag=pdp&&id=<?=$row['id']?>"><img src="<?=base_url?>assets/imagenes/<?=$row['imagen']?>" alt=""></a>
            </div>
            <div class="detail-box">
              <h5 style="font-weight:bolder;">
                <?=$row['titulo']?>
              </h5>
              <p class="">
                 <?=$row['descripcion']?>
              </p>
              <a style="color:black;font-weight:bolder;" href="<?=base_url?>?pag=pdp&&id=<?=$row['id']?>">Cotizar producto <i style="color:#76BD41;" class="fas fa-angle-double-right"></i></a>
            </div>
          </div>
        </div>
        <?php
        }
        ?>
      <!-- END GRID -->
      </div>
    </div>
  </section>

  <!-- end doctor section -->

  