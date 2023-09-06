<div style="background:url('images/hero-pages.png');background-size:cover;
    background-repeat:no-repeat;background-position:center;" class="hero-pages">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align:center; color:white;padding-top:80px;">Trabaje con Nosotros | Cl&iacute;nica Dinamarca</h1>
                <p style="width:60%; margin:0 auto; text-align:center; color:white;font-size:18px;">
                ¡Únase a nuestro equipo en Cl&iacute;nica Dinamarca! 
                Ofrecemos un entorno de trabajo colaborativo y de apoyo, donde podrá continuar con el desarrollo de sus habilidades y crecer profesionalmente. 
                Nuestra clínica se destaca por utilizar tecnología de vanguardia y brindar una atención de calidad a nuestros pacientes.
                </p>
            </div>
        </div>
    </div>
</div>
<section>
	<div id="workwithus" class="contact_section layout_padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="heading_container">
						<h2 style="color:black;">
							¡Env&iacute;enos su informaci&oacute;n!
						</h2>
						<p style="color:black;">
                        Si está interesado en formar parte de nuestro equipo y le invitamos a enviar su curr&iacute;culum y completar el formulario de solicitud a continuaci&oacute;n.
						</p>
					</div>
					<div class="form_container contact-form">
						<form id="personalInfo" method="POST">
                            <input hidden name="action" value="add">
							<div class="form-row">
								<div class="col-lg-6">
									<div>
										<input name="name" type="text" id="name" placeholder="Nombre Completo:" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div>
										<input name="phone" id="phone" type="text" placeholder="Teléfono:" required />
									</div>
								</div>
							</div>
							<div>
								<input name="email" type="email" id="email" placeholder="Email:" required />
							</div>
                            <label style="font-size:12px;">(tamaño máximo permitido: 2mb)</label><br>
                            <div class="custom-input-file">
                                <input type="file" id="archivo" name="archivo" class="input-file" onchange="mostrarNombreArchivo()">
                                <label for="archivo" class="boton-archivo">Seleccionar archivo</label>
                                <p id="nombre-archivo"></p>
                            </div>                            
							<div class="btn_box">
								<button id="enviarInfo" type="submit">
									ENVIAR MENSAJE
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script>
    function mostrarNombreArchivo() {
        var input = document.getElementById('archivo');
        var nombreArchivo = input.files[0].name;
        var etiquetaNombreArchivo = document.getElementById('nombre-archivo');
        etiquetaNombreArchivo.textContent = nombreArchivo;
    }

    $("#personalInfo").submit(function(event) {
		event.preventDefault();

        var formData = new FormData(this);
		$.ajax({
			type: 'POST',
			url: './email/controllerwwu.php',
			data: formData,
            processData: false,
            contentType: false,
			beforeSend: function(){
				Swal.fire({
					title: 'Por favor, espere',
					html: 'Procesando su mensaje..',
					allowEscapeKey: false,
					allowOutsideClick: false,
					didOpen: () => {
						Swal.showLoading()
					}
				});
				$("#enviarInfo").prop('disabled', true);
			},
			success: function(datos){
				console.log(datos);
				let dat = datos;
				if (dat.status) {
					Swal.fire({
						icon: 'Mensaje enviado',
						title: dat.msn,
						text: 'Estaremos en contacto lo antes posible'
					});
                    window.setTimeout(function() {
						//window.location.href = "./?"
					}, 3000);
				} else {
					Swal.fire({
						icon: 'error',
						title: 'Lo sentimos',
						text: 'En estos momentos no podemos procesar su solicitud. Pero escríbanos a servicioalcliente@ clinicadinamarca.com para mayor información'
					});
                    window.setTimeout(function() {
						//window.location.href = "./?"
					}, 3000);
                }
			}
		})
	});
</script>