<?php
$id = $_GET['id'];
$sql = "select * from blogs where id = " . $id;
$query = $mysqli->query($sql);
$row = $query->fetch_assoc();

?>

<section>
    <div class="container-fluid">
        <div class="row">
                <div class='col-xl-8 col-md-12'>
                    <div class='col-lg-12 mx-auto mt-5'> 
                        <img class='img-fluid' src="<?=base_url?>/assets/blogs/<?=$row['imagen']?>" alt="alt"/>
                    </div>
                    <div class='col-lg-12 mx-auto mt-3'>
                        <h1 style="font-weight:bolder;"><?=$row['titulo']?></h1>
                        <h5 style='color:gray'>&nbsp;<?=$row['fecha']?></h5>
                        <div style="margin-top:20px"><?=$row['contenido']?></div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 mt-5">
                    <div style="width:100%;height:auto;background:#f8f8f8;padding: 30px;">
                        <div style="border-bottom:1px solid black;margin-bottom:20px;">
                            <h3>Noticias Recientes</h3>
                        </div>
                        <?php
                        $sqlAll = "select * from blogs order by id DESC LIMIT 10";
                            $queryAll = $mysqli->query($sqlAll);
                            while($row = $queryAll->fetch_assoc()){
                        ?>
                        <a style="color:black;" href="<?=base_url?>?pag=post&&id=<?=$row['id']?>">
                            <h6 style="font-weight:bolder;"><i class="fa fa-clock-o"></i> <?=$row['titulo']?></h6>
                        </a>
                        <p style="font-size:14px;"><?=$row['fecha']?></p>
                        <?php
                        }
                        $mysqli -> close();
                        ?>
                  </div>
               </div>
        </div>
    </div>        
</section>

