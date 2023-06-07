<?php
?>
<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class=" col-lg-12 col-md-12 col-12">
             <form style="width:80%;margin:0 auto;" id="formInfo">
                 <input name ="note" type="hidden" value="<?=isset($dataQuote['note'])?$dataQuote['note']:''?>">
                 <input name="amount" type="hidden" value="<?=isset($dataQuote['amount'])?$dataQuote['amount']:''?>">
                 <input name="idProduct" type="hidden" value="<?=isset($dataQuote['id'])?$dataQuote['id']:''?>">
                 <input name="product" type="hidden" value="<?=isset($dataQuote['product'])?$dataQuote['product']:''?>">

                <h4>Envianos tu cotización</h4>
                <hr class="padding-bottom-1x">
                <p style="text-align:left;">
                  Déjenos su información y con gusto nos pondremos en contacto lo antes posible.
                </p>
				
				  <!-- 2 column grid layout with text inputs for the first and last names -->
				  <div class="row mb-4">
				    <div class="col">
				      <div class="form-outline">
				        <input name="name" type="text" id="form3Example1" class="form-control" placeholder="Nombre:" />
				      </div>
				    </div>
                                      <div class="col">
				      <div class="form-outline">
				        <input name="lastname" type="text" id="form3Example1" class="form-control" placeholder="Apellido:" />
				      </div>
				    </div>
				    
				  </div>

				  <div class="row mb-4">
                                      <div class="col">
				      <div class="form-outline">
				        <input name="phone" type="text" id="form3Example2" class="form-control" placeholder="Teléfono"/>
				        
				      </div>
				    </div>
				    <div class="col">
				      <div class="form-outline">
				        <input name="email" type="email" id="form3Example1" class="form-control" placeholder="Email:" />
				      </div>
				    </div>
				    
				  </div>

				
				      <div class="form-outline mb-4">
				        <input name="address" type="text" id="form3Example2" class="form-control" placeholder="Dirección"/>
				      </div>
				 
				
                 <div class="row">
               <input name="action" type="hidden" value="datosCotizar">
              
            </div>
            
              <div class="">
                  <button id="enviarInfo" style="background-color:#2c52a2;border-radius:0px;width:40%;font-family:'Montserrat';" type="submit" class="btn btn-primary btn-block mb-4">Cotizar</button>

              </div>
           
            </form>
          </div>
        </div>
    </div>

<!--<script src="./assets/js/distribucion-cr.js"></script>
    <script src="./assets/js/formularioN.js"></script>-->
<script>
$( "#enviarInfo" ).on( "click", function( event ) {
  event.preventDefault();
 
  $.ajax({
    type : 'POST',
    url : './views/quotes/quotesController.php',
    data : $('#formInfo').serialize(),
     beforeSend:function(){
                Swal.fire({
                    title: 'Por favor, espere!',
                html: 'Procesando su mensaje',// add html attribute if you want or remove
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    didOpen: () => {
                      Swal.showLoading()
                    }
                  });
         $("#enviarInfo").prop('disabled', true);
            },
   success:function(datos){
       console.log(datos);
       let dat = datos;
            if(dat.status){
                          Swal.fire({
                                   icon: 'Mensaje enviado',
                                   title: dat.msn,
                                   text: 'Estaremos en contacto lo antes posible'
                                });
                    
               window.setTimeout(function () {
                        window.location.href = "./"
                        }, 3000);

            } else {
                Swal.fire({
                icon: 'error',
                title: dat.title,
                text: dat.msn
              })
            }
        } 
})
  //href="<?=base_url?>?pag=checkout&&step=shipping"
  
});
</script>


