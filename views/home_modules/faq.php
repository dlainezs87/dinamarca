<!--faq section-->
<section>
	<div class="heading_container heading_center">
        <h2 style="color:black;padding-bottom:30px;">
          Preguntas Frecuentes
        </h2>
    </div>    
	<div class="container">
		<div class="row">
			<div class="col">
				<div class="accordion" id="accordionExample">
				<?php
			  	 
	             include("config/conexion.php");
	             $sql = "select * from faq order by id DESC";
	             $query = $mysqli->query($sql);
	       		 $i=1;

	             while($row = $query->fetch_assoc()){
	            ?>
	              <div class="card z-depth-0 bordered">
	                <div class="card-header" id="heading<?=$row['id']?>">
	                  <h5 class="mb-0">
	                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>"
	                      aria-expanded="true" aria-controls="collapseOne">
	                     <?=$row['titulo']?>
	                    </button>
	                  </h5>
	                </div>
	                <div id="collapse<?php echo $i; ?>" class="collapse <?php echo ($i==1)? 'show': ' '; ?>" aria-labelledby="headingOne"
	                  data-parent="#accordionExample">
	                  <div class="card-body">
	                    <?=$row['descripcion']?>
	                  </div>
	                </div>
	              </div>
	              <?php
	              $i++; 
				  }
                  ?>
	            </div>
			</div>
		</div>
	</div>
</section>
<!--end faq section-->