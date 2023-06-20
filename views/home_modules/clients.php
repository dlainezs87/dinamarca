<!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center ">
        <h2 style="padding-top:50px;">
          Grandes historias de pacientes
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <?php
          include("config/conexion.php");
          $sql = "select * from testimonios order by id ASC";
          $query = $mysqli->query($sql);
          $i=1;
          while($row = $query->fetch_assoc()){
          ?>
          <div class="carousel-item <?php echo ($i==1)? 'active': ' '; ?>">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="<?=base_url?>/assets/testimonios/<?=$row['imagen']?>" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <h6>
                        <?=$row['nombre']?>
                      </h6>
                    </div>
                    <p>
                      <?=$row['descripcion']?>
                    </p>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
            $i++;
            }
          ?>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->