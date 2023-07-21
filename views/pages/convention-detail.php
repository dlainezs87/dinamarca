<!----------------Section conventions detail------------->
<?php
$id = $_GET['id'];
$sql = "select * from convenios where id = " . $id;
$query = $mysqli->query($sql);
$row = $query->fetch_assoc();
?>

<div style="background:url('images/hero-pages-convenio.png');background-size:cover;
    background-repeat:no-repeat;background-position:center;" class="hero-pages">
    <div class="container  ">
      <div class="row">
        <div class="col-md-12">
          <h1 style="text-align:center; color:white;padding-top:130px;">Detalle del Convenio</h1>
          <p style="width:60%; margin:0 auto; text-align:center; color:white;font-size:18px;"></p>
        </div>
      </div>
    </div>
  </div>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <div style="width:300px;margin:0 auto;"><img src="assets/convenios/<?php echo ($row['imagen']);?>"></div>
                <br><h3 style="text-align:center;"><?php echo ($row['titulo']);?></h3><br>

                <p style="text-align:center;font-size:14px;">
                    <?php echo ($row['descripcion']);?>
                </p>
            </div>
        </div>
    </div>
</section>

