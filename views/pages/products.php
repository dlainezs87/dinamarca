<?php 
include("config/conexion.php");
$sql = "select * FROM servicios WHERE status = 'Activo' order by id ASC";
$query = $mysqli->query($sql);
$cont = 0;
?>

  <!-- doctor section -->

  <section style="background:transparent;" class="doctor_section layout_padding">

    <div class="container">
      <div class="heading_container">
        <h2 style="color:black;text-align:left;">
          Nuestros Productos
        </h2>
        <p style="color:black;text-align:left;">
          Incilint sapiente illo quo praesentium officiis laudantium nostrum, ad adipisci cupiditate sit, quisquam aliquid. Officiis laudantium fuga ad voluptas aspernatur error fugiat quos facilis saepe quas fugit, beatae id quisquam.
        </p>
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
              <img src="<?=base_url?>assets/imagenes/<?=$row['imagen']?>" alt="">
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

  