<?php
$id = $_GET['id'];
$sql = "select * from servicios where id = " . $id;
$query = $mysqli->query($sql);
$row = $query->fetch_assoc();
?>

<style>
        /*change img on hover*/
        #overlay_img {
            background: rgba(0, 0, 0, 0.9);
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            display: none;
            text-align: center;
            overflow-y: auto;
        }

        #overlay_img img {
            width: 70vw;
            position: absolute;
            transform: translate(-50%, -50%);

            left: 50%;
            top: 50%;
            margin: 0 auto;
        }

     
        #main-img:hover {
            cursor: pointer;
        }

        #main-img img {
            width: 100%;
        }

        #change_img_on_hover .thumb {
            padding: 10px !important;
        }

        #change_img_on_hover .thumb img {
            width: 100%;

        }

        .thumb:hover {
            cursor: pointer;
        }
    </style>

<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12">
						<div style="width:100%;height:auto;margin-top:50px;">
							<div id="main-img" >
								<?php
                                             $path = '';
				             include("config/conexion.php");
				             $sql = "select * from servicios where id = '".$id."' order by id ASC LIMIT 1";
				             $query = $mysqli->query($sql);

				             while($row = $query->fetch_assoc()){
                                                 $path ="assets/imagenes/".$row['imagen'];  
				            ?>
                                                           
                        	<img class="main-img" src="assets/imagenes/<?=$row['imagen']?>">
                        	<?php
							}
							?>
                    </div>
						</div>
					</div>
				</div>
				<div style="margin-top:20px;"></div>
				<div class="row mx-auto my-auto">
	            <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
	                <div class="carousel-inner w-100" role="listbox">
	                	
	                		<div class="slider">
						      <div class="slider__wrapper">
						      	<?php
					             include("config/conexion.php");
					             $sql = "select * from imagenesservicios where idProduct = '".$id."' order by id ASC";
					             $query = $mysqli->query($sql);
					       
					             while($row = $query->fetch_assoc()){
					            ?>
						        <div class="slider__item">
						        		<img style="width:100%;cursor:pointer;" src="<?=base_url?>assets/imagenes/<?=$row['imagen']?>" bigsrc="<?=base_url?>assets/imagenes/<?=$row['imagen']?>" class="imgs" id="the_id">
								</div>
						        <?php
			                	}
								?>
						      </div>
						      <a class="slider__control slider__control_left" href="#" role="button"></a>
						      <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
						    </div>
	            </div>
	        </div>
			</div>
			</div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-6 col-12">
	                 <form method="post" action="./?pag=quotes">
							<?php
		            		$sqlAll = "select * from servicios order by id ASC ";
		                	$queryAll = $mysqli->query($sqlAll);
	               
							while($row = $queryAll->fetch_assoc()){
							if($row['id']==$id){
							?>
							<h2 style="padding-top:50px;font-weight:bolder;"><?=$row['titulo']?></h2>
							<p style="font-size:12px"><?=$row['descripcion']?></p>
							<div class="form-outline">
	                                                    <input type="hidden" name="product" value="<?=$row['titulo']?>">
	                                                    <input type="hidden" name="id" value="<?=$row['id']?>">
							  <input type="number" id="form12" name="amount" class="form-control" placeholder="Cantidad (Solo números)" />
							</div>
							<div style="padding-top:15px;" class="form-group purple-border">
							  <textarea class="form-control" name="note" id="exampleFormControlTextarea4" rows="3" placeholder="Notas"></textarea>
							</div>
							<?php
							}
							}
							?>
							<!-- Cotizacion button -->
					  		<button style="background-color:#2c52a2;border-radius:0px;width:40%;font-family:'Montserrat';" type="submit" class="btn btn-primary btn-block mb-4">Cotizar producto
							</button>
	                    </form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div style="margin:30px;"></div>

