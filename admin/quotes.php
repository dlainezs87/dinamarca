<?php include("open.php");?>

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Cotizaciones</h1>

<?php 
if(isset($_GET['ok'])){ 
?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
Proceso realizado con éxito
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<?php } ?>

<?php 
if(isset($_GET['err'])){ 
?>
<div class="alert alert-danger alert-dismissible fade show" role="alert">
Esta acci&oacute;n no pudo ejecutarse correctamente. Por favor, int&eacute;nte de nuevo.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<?php } ?>

<p class="mb-4">Editar Cotizaci&oacute;n.</p>


<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="10">
                <thead>
                    <tr>
                        <th class="col-2">ID Producto</th>
                        <th class="col-2 text-center">Producto</th> 
                        <th class="col-2">Fecha</th>
                        <th class="col-2">Estado</th>
                        <th class="col-2 text-center">Monto</th> 
                        <th class="col-2 text-center">Notas</th> 
                        <th class="col-2 text-center">Cliente</th> 
                        <th class="col-2 text-center">Contacto</th> 
                        <th class="col-2 text-center">Acciones</th> 
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once '../config/conexion.php';
                    $sql = "select q.status, q.id, q.amount, q.idProduct,q.note,q.date, c.name,c.lastname, c.email,c.phone, s.titulo as product from quotes q INNER JOIN quotesvscostumers qc ON q.hashQuote=qc.hashQuote INNER JOIN costumers c ON qc.hashCostumer=c.hash LEFT JOIN servicios s ON q.idProduct = s.id order by q.id DESC";
                    $query = $mysqli->query($sql);
                    while($row = $query->fetch_assoc()){
                    ?>
                    <tr>    
                        <td><?=$row['idProduct']?></td>
                        <td><?=$row['product']?></td>
                        <td><?=$row['date']?></td>
                        <td><?=$row['status']?></td>
                        <td><?=$row['amount']?></td>
                        <td><?=$row['note']?></td>
                        <td><?=$row['name']." ".$row['lastname']?></td>
                        <td><?=$row['email']." / ".$row['phone']?></td>
                    <td class="text-center">
                        <a onclick="cambiarEstado(<?=$row['id']?>,'<?=$row['status']?>')" style="cursor:pointer;" ><i class="fas fa-edit"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp;
                    </td>
                        
                    </tr>
                    <?php 
                    }//while
                    $mysqli->close();?>
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
function cambiarEstado(code,idEstado){
(async () => {
const { value: status } = await Swal.fire({
  title: 'Select an option',
  input: 'select',
  inputOptions: {
    'Pending': 'Pending',
    'Rejected': 'Rejected',
    'Completed':'Completed'
  },
  inputPlaceholder: 'Seleccione una opción',
  showCancelButton: true,
  inputValue:idEstado,
  inputValidator: (value) => {
    return new Promise((resolve) => {
        resolve()
    })
  }
})

if (status) {
    let parameters = {
        "action":"edit",
        "code":code,
        "status":status
    }
              $.ajax({
                url: "quotes-actions.php",
                type: "POST",
                datatype: "html",
                data: parameters,
                success: function (resp) {
                    
                    
                    if (resp) {
                        Swal.fire('Quote updated', '', 'success');
                        window.setTimeout(function () {
                            window.location.href = "quotes.php"
                        }, 3000);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: response.msn,
                            footer: '',

                        })
                    }
                }


            })//fin 
}

})();
}
$(document).ready( function () {
    var table = new DataTable('#myTable', {
        language: {
            url: '//cdn.datatables.net/plug-ins/1.13.5/i18n/es-ES.json',
        },
    });
});
</script>
<?php include("footer.php");?>