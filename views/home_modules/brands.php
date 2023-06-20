<!-- brand section -->

<section>
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="heading_container heading_center ">
			        <h2 style="padding-top:50px;padding-bottom:20px;">
			          Trabajamos con marcas mundialmente reconocidas
			        </h2>
				</div>
				<p style="text-align:center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com</p>
				<div class="slider-brands">
					<div class="slide-track">
						<?php
			             include("config/conexion.php");
			             $sql = "select * from brands order by id ASC";
			             $query = $mysqli->query($sql);
			       		 $i=1;

			             while($row = $query->fetch_assoc()){
			            ?>
						<div class="slide">
							<a href="<?=$row['link']?>"><img src="<?=base_url?>/assets/brands/<?=$row['imagen']?>" height="150" width="150" alt="" /></a>
						</div>
						<?php
						}
						?>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
</section>
<!-- end brand section -->