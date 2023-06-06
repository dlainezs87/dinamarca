<?php 
$sqlFirst = "select * FROM blogs ORDER BY id ASC LIMIT 1";
$sql = "select * from blogs order by id ASC";
$queryFirst = $mysqli->query($sqlFirst);
$query = $mysqli->query($sql);
?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <?php while($row = $queryFirst->fetch_assoc()){?>
                        <div style="width:100%;height:400px;background:url('<?=base_url?>/assets/blogs/<?=$row['imagen']?>');margin-top:50px;background-size:cover;background-position:center;background-repeat:no-repeat;"></div>
                        <br><h3><?=$row['titulo']?></h3><br>
                        <h6><i class="far fa-calendar"></i> <?=$row['fecha']?></h6>
                        <p style="font-size:14px;">Autor: <?=$row['autor']?></p>
                        <div style="margin:20px 0 50px 0;">
                            <a style="color:black;font-weight:bolder;" href="<?=base_url?>?pag=post&&id=<?=$row['id']?>">Ver la noticia <i style="color:#76BD41;" class="fas fa-angle-double-right"></i></a>
                        </div>
                <?php 
                }
                ?>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col">
                        <div style="width:100%;height:auto;background:#f8f8f8;margin-top:50px;padding: 30px;">
                            <div style="border-bottom:1px solid black;margin-bottom:20px;">
                                <h3>Noticias Recientes</h3>
                            </div>
                            <?php while($row = $query->fetch_assoc()){?>
                                <a style="color:black;" href="<?=base_url?>?pag=post&&id=<?=$row['id']?>"><h6 style="font-weight:bolder;"><i class="fa fa-clock-o"></i> <?=$row['titulo']?></h6></a>
                                <p style="font-size:14px;"><?=$row['fecha']?></p>
                            <?php 
                            }
                            ?>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>