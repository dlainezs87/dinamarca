<!-- map section -->


<style>
	#SpeechBubble {
		position: absolute;
		transform-origin: 0% 100%;
		text-align: center;
		background-color: white;
		color: black;
		border-radius: 10px;
		width: 200px;
		padding: 10px;
		left: 10px;
		top: -135px;
		transform: scale(0);
		animation-fill-mode: forwards;
	}

	#SpeechBubble::before {
		content: "";
		display: block;
		width: 0;
		position: absolute;
		bottom: -25px;
		left: 5px;
		border-style: solid;
		border-width: 15px;
		border-color: white transparent transparent white;
		transform: rotate(10deg);
	}

	#SpeechBubble2 {
		position: absolute;
		transform-origin: 0% 100%;
		text-align: center;
		background-color: white;
		color: black;
		border-radius: 10px;
		width: 200px;
		padding: 10px;
		left: 20px;
		top: -135px;
		transform: scale(0);
		animation-fill-mode: forwards;
		z-index: 1000;
	}

	#SpeechBubble2::before {
		content: "";
		display: block;
		width: 0;
		position: absolute;
		bottom: -25px;
		left: 5px;
		border-style: solid;
		border-width: 15px;
		border-color: white transparent transparent white;
		transform: rotate(10deg);
	}

	#SpeechBubble3 {
		position: absolute;
		transform-origin: 0% 100%;
		text-align: center;
		background-color: white;
		color: black;
		border-radius: 10px;
		width: 200px;
		padding: 10px;
		left: 20px;
		top: -135px;
		transform: scale(0);
		animation-fill-mode: forwards;
		z-index: 1000;
	}

	#SpeechBubble3::before {
		content: "";
		display: block;
		width: 0;
		position: absolute;
		bottom: -25px;
		left: 5px;
		border-style: solid;
		border-width: 15px;
		border-color: white transparent transparent white;
		transform: rotate(10deg);
	}

	#SpeechBubble4 {
		position: absolute;
		transform-origin: 0% 100%;
		text-align: center;
		background-color: white;
		color: black;
		border-radius: 10px;
		width: 200px;
		padding: 10px;
		left: 20px;
		top: -135px;
		transform: scale(0);
		animation-fill-mode: forwards;
		z-index: 1000;
	}

	#SpeechBubble4::before {
		content: "";
		display: block;
		width: 0;
		position: absolute;
		bottom: -25px;
		left: 5px;
		border-style: solid;
		border-width: 15px;
		border-color: white transparent transparent white;
		transform: rotate(10deg);
	}

	#SpeechBubble5 {
		position: absolute;
		transform-origin: 0% 100%;
		text-align: center;
		background-color: white;
		color: black;
		border-radius: 10px;
		width: 200px;
		padding: 10px;
		left: 20px;
		top: -135px;
		transform: scale(0);
		animation-fill-mode: forwards;
		z-index: 1000;
	}

	#SpeechBubble5::before {
		content: "";
		display: block;
		width: 0;
		position: absolute;
		bottom: -25px;
		left: 5px;
		border-style: solid;
		border-width: 15px;
		border-color: white transparent transparent white;
		transform: rotate(10deg);
	}

	@keyframes expand-bounce {
		0% {
			transform: scale(0);
		}

		50% {
			transform: scale(1.25);
		}

		100% {
			transform: scale(1);
		}
	}


	@keyframes shrink {
		0% {
			transform: scale(1);
		}

		100% {
			transform: scale(0);
		}
	}
</style>
<section class="doctor_section layout_padding">
	<div class="container">
		<div class="heading_container heading_center">
			<h2 style="color:black;">
				Clínicas de la audición
			</h2>
			<p style="color:black;" class="col-md-10 mx-auto px-0">
				Incilint sapiente illo quo praesentium officiis laudantium nostrum, ad adipisci cupiditate sit, quisquam aliquid. Officiis laudantium fuga ad voluptas aspernatur error fugiat quos facilis saepe quas fugit, beatae id quisquam.
			</p>
		</div>
		<div class="row">
			<div class="col-sm-6 col-lg-8 mx-auto">
				<div class="">
					<div class="map-container">
						<img src="images/cr.png">
						<div id="sj" class="point sj tippy" data-toggle="collapse" data-target="#collapseOne" title="">
							<i style="font-size:32px;color:#76BD41;z-index:500;" class="fas fa-map-marker-alt"></i>
							<!--<div id="SpeechBubble">
								<p style="font-size:9px;padding-top:10px;">
									<span style="font-size:12px;font-weight:bolder;">San Jose</span><br>
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</p>
							</div>-->
						</div>
						<div id="pt" class="point pt tippy" data-toggle="collapse" data-target="#collapseTwo" title="">
							<i style="font-size:32px;color:#76BD41;z-index:500;" class="fas fa-map-marker-alt"></i>
							<!--<div id="SpeechBubble2">
								<p style="font-size:9px;padding-top:10px;">
									<span style="font-size:12px;font-weight:bolder;">Puntarenas</span><br>
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</p>
							</div>-->
						</div>
						<div id="gu" class="point gu tippy" data-toggle="collapse" data-target="#collapseThree" title="">
							<i style="font-size:32px;color:#76BD41;z-index:500;" class="fas fa-map-marker-alt"></i>
							<!--<div id="SpeechBubble3">
								<p style="font-size:9px;padding-top:10px;">
									<span style="font-size:12px;font-weight:bolder;">Guanacaste</span><br>
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</p>
							</div>-->
						</div>
						<div id="ala" class="point ala tippy" data-toggle="collapse" data-target="#collapseFour" title="">
							<i style="font-size:32px;color:#76BD41;z-index:500;" class="fas fa-map-marker-alt"></i>
							<!--<div id="SpeechBubble4">
								<p style="font-size:9px;padding-top:10px;">
									<span style="font-size:12px;font-weight:bolder;">Alajuela</span><br>
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</p>
							</div>-->
						</div>
						<div id="her" class="point her tippy" data-toggle="collapse" data-target="#collapseFive" title="">
							<i style="font-size:32px;color:#76BD41;z-index:500;" class="fas fa-map-marker-alt"></i>
							<!--<div id="SpeechBubble5">
								<p style="font-size:9px;padding-top:10px;">
									<span style="font-size:12px;font-weight:bolder;">Heredia</span><br>
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</p>
							</div>-->
						</div>
					</div>
				</div>
			</div>
			<!--<div class="col-sm-6 col-lg-4 mx-auto">
				<div class="box">
					<div class="accordion" id="accordionExample">
						<div class="card z-depth-0 bordered">
							<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										San José
									</button>
								</h5>
							</div>
							<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
									wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
									eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
									assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
									nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
									farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
									labore sustainable.
								</div>
							</div>
						</div>
						<div class="card z-depth-0 bordered">
							<div class="card-header" id="headingTwo">
								<h5 class="mb-0">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Puntarenas
									</button>
								</h5>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
									wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
									eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
									assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
									nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
									farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
									labore sustainable.
								</div>
							</div>
						</div>
						<div class="card z-depth-0 bordered">
							<div class="card-header" id="headingThree">
								<h5 class="mb-0">
									<button style="color:black;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
										Guanacaste
									</button>
								</h5>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
									wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
									eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
									assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
									nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
									farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
									labore sustainable.
								</div>
							</div>
						</div>
						<div class="card z-depth-0 bordered">
							<div class="card-header" id="headingFour">
								<h5 class="mb-0">
									<button style="color:black;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										Alajuela
									</button>
								</h5>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
									wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
									eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
									assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
									nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
									farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
									labore sustainable.
								</div>
							</div>
						</div>
						<div class="card z-depth-0 bordered">
							<div class="card-header" id="headingFive">
								<h5 class="mb-0">
									<button style="color:black;" class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										Heredia
									</button>
								</h5>
							</div>
							<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
									wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
									eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
									assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
									nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
									farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
									labore sustainable.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
		</div>
	</div>
	 <div class="products-btn-box">
        <a href="<?=base_url?>?pag=mapa">
            Localice su Clínica
        </a>
     </div>
	
	<!-- contact section -->
	<div id="contact" class="contact_section layout_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="heading_container">
						<h2 style="color:black;">
							¡Enviar un mensaje!
						</h2>
						<p style="color:black;">
							Todas sus consultas o dudas son importantes para nosotros.
							Déjenos su información y con gusto nos pondremos en
							contacto lo antes posible.
						</p>
					</div>
					<div class="form_container contact-form">
						<form id="formInfo" method="POST">
							<div class="form-row">
								<div class="col-lg-6">
									<div>
										<input name="name" type="text" id="form3Example1" placeholder="Nombre:" required />
									</div> required
								</div>
								<div class="col-lg-6">
									<div>
										<input name="phone" type="number" id="form3Example1" type="text" placeholder="Teléfono:" required />
									</div>
								</div>
							</div>
							<div>
								<input name="email" type="email" id="form3Example1" type="email" placeholder="Email:" required />
							</div>
							<div>
								<input name="message" type="text" id="form3Example1" type="text" class="message-box" placeholder="Mensaje:" required />
							</div>
							<div class="btn_box">
								<button id="enviarInfo" type="submit">
									ENVIAR MENSAJE
								</button>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div style="width:90%;margin:0 auto;padding-top:20px;"><img style="width:100%;" src="images/world.png"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact section -->
</section>

<script>
	$("#enviarInfo").on("click", function(event) {
		event.preventDefault();

		$.ajax({
			type: 'POST',
			url: './email/controllerForm.php',
			data: $('#formInfo').serialize(),
			beforeSend: function() {
				Swal.fire({
					title: 'Por favor, espere !',
					html: 'Procesando su mensaje', // add html attribute if you want or remove
					allowEscapeKey: false,
					allowOutsideClick: false,
					didOpen: () => {
						Swal.showLoading()
					}
				});
				$("#enviarInfo").prop('disabled', true);
			},
			success: function(datos) {
				console.log(datos);
				let dat = datos;
				if (dat.status) {
					Swal.fire({
						icon: 'Mensaje enviado',
						title: dat.msn,
						text: 'Estaremos en contacto lo antes posible'
					});

					window.setTimeout(function() {
						window.location.href = "./?pag=contact"
					}, 4000);

				} else {
					Swal.fire({
						icon: 'error',
						title: dat.title,
						text: dat.msn
					})
				}
			}
		})
		//href="<?= base_url ?>?pag=checkout&&step=shipping"

	});
</script>

<script type="text/javascript">
	var rectangle = $("#sj");
	var speechBubble = $("#SpeechBubble");

	rectangle.hover(
		function() {
			speechBubble.css({
				"animation-name": "expand-bounce",
				"animation-duration": "0.25s"
			});
		},
		function() {
			speechBubble.css({
				"animation-name": "shrink",
				"animation-duration": "0.1s"
			});
		}
	);

	var rectangle2 = $("#pt");
	var speechBubble2 = $("#SpeechBubble2");

	rectangle2.hover(
		function() {
			speechBubble2.css({
				"animation-name": "expand-bounce",
				"animation-duration": "0.25s"
			});
		},
		function() {
			speechBubble2.css({
				"animation-name": "shrink",
				"animation-duration": "0.1s"
			});
		}
	);

	var rectangle3 = $("#gu");
	var speechBubble3 = $("#SpeechBubble3");

	rectangle3.hover(
		function() {
			speechBubble3.css({
				"animation-name": "expand-bounce",
				"animation-duration": "0.25s"
			});
		},
		function() {
			speechBubble3.css({
				"animation-name": "shrink",
				"animation-duration": "0.1s"
			});
		}
	);

	var rectangle4 = $("#ala");
	var speechBubble4 = $("#SpeechBubble4");

	rectangle4.hover(
		function() {
			speechBubble4.css({
				"animation-name": "expand-bounce",
				"animation-duration": "0.25s"
			});
		},
		function() {
			speechBubble4.css({
				"animation-name": "shrink",
				"animation-duration": "0.1s"
			});
		}
	);

	var rectangle5 = $("#her");
	var speechBubble5 = $("#SpeechBubble5");

	rectangle5.hover(
		function() {
			speechBubble5.css({
				"animation-name": "expand-bounce",
				"animation-duration": "0.25s"
			});
		},
		function() {
			speechBubble5.css({
				"animation-name": "shrink",
				"animation-duration": "0.1s"
			});
		}
	);
</script>