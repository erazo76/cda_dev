<?php

include("../../lib/validar_session.php");

ValidaSession("../login");
//VerificarAdmin($_SESSION['rolx']);

?>
<?php include("../layouts/constantes.php")?>
<?php include_once("../layouts/cabezera.php") ?>

<div class="message"></div>
<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Usuarios</h3>
				</div><!-- /.box-header -->
				<div class="box-body dataTables_wrapper form-inline dt-bootstrap" width="100%" style="width: 100%">
						<table id="tabla" class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>#ID</th>
									<th>Usuario</th>
									<th>Nombre y Apellido</th>
									<th>Correo</th>
									<th>Perfil</th>		
								</tr>
							</thead>
							<tbody>
							</tbody>
							<tfoot>
								<tr>
									<th>#ID</th>
									<th>Usuario</th>
									<th>Nombre y Apellido</th>
									<th>Correo</th>
									<th>Perfil</th>									
								</tr>
							</tfoot>
						</table>
				</div>
				<div class="box-footer">
					<button id="add" class="btn btn-primary" type="button"><i class="fa fa-fw fa-plus"></i> Agregar</button>
					<button id="edit" class="btn btn-primary" type="button"><i class="fa fa-fw fa-pencil"></i> Editar</button>
					<button id="delete" class="btn btn-primary" type="button"><i class="fa fa-fw fa-trash-o"></i> Eliminar</button>
				</div>
			</div>
		</div>
</div>



<script type="text/javascript" src="../../plugins/confirma/jquery-confirm.min.js"></script>
<link rel="stylesheet" href="../../plugins/confirma/jquery-confirm.min.css" type="text/css"/>
 <script type="text/javascript">
	$(document).ready(function() {

			var table = $('#tabla').dataTable({
				  "ajax": {
					"url": "../../data_json/data_musuarios",
					"dataSrc": ""
				  },
				  "scrollX": true,
				  "columns": [
						{ "data": "cid" },
						{ "data": "username" },
						{ "data": "name" },
						{ "data": "email" },
						{ "data": "descripcion" }						
					],
					 "order": [[ 0, "asc" ]]
			});

			$('#tabla tbody').on( 'click', 'tr', function () {

				if ( $(this).hasClass('selected') ) {
					$(this).removeClass('selected');
				}
				else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			} );

			$('#tabla tbody').on( 'dblclick', 'tr', function () {

					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');

				var value= table.$('tr.selected').children('td:first').text();

				if(!value){

						$.confirm({
						    title: '¡Seleccione el registro a editar !', // hides the title.
						    cancelButton: false, // hides the cancel button.
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success',
						    content: false// hides content block.
						});

				}else{

					$(location).attr('href','frm_editar?record='+value);

				}


			} );


			$("#add" ).click(function() {
				$(location).attr('href','frm_registrar');
			});

			$('#edit').click( function () {
				var value= table.$('tr.selected').children('td:first').text();
				if(!value){

						$.confirm({
						    title: '¡Seleccione un registro!', // hides the title.
						    cancelButton: false, // hides the cancel button.
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success',
						    content: false// hides content block.
						});

				}else{



					$(location).attr('href','frm_editar?record='+value);

				}
			} );

			$('#delete').click( function () {
				var value= table.$('tr.selected').children('td:first').text();
				if(!value){
						$.confirm({
						    title: '¡Seleccione el registro a eliminar !', // hides the title.
						    cancelButton: false, // hides the cancel button.
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success',
						    content: false// hides content block.
						});
				}else{

						$.confirm({

								    title: '¿Desea eliminar este registro?!',
								    content:false,
								    confirmButton: 'Si',
								    cancelButton: 'No',
								    confirmButtonClass: 'btn-primary',
		    						    cancelButtonClass: 'btn-success',

						    		confirm: function(){

										$.post( "../../controllers/musuarios_controller", { action: "delete",record:value}).done(function( data ) {
											$(".message").html(data);
											window.setTimeout('location.reload()', 3000);
										});
											    			

									},
								 	cancel: function(){

									}
						});

				}
			});

	});

</script>


<?php include_once("../layouts/pie.php") ?>
