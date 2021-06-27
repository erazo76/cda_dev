<?php

include("../../lib/validar_session.php");

ValidaSession("../login");

//VerificarAdmin($_SESSION['rolx']);

?>
<?php include("../layouts/constantes.php")?>
<?php include_once("../layouts/cabezera.php") ?>
	<div class="message"></div>
	<div class="row">
		<!-- left column -->
		<form id="form" role="form" enctype="multipart/form-data">

		<input type="hidden" id="action" value="changepassword">

		<div class="col-md-6">
		  <!-- general form elements -->
		  <div class="box box-primary">

			<div class="box-header with-border">
			  <h3 class="box-title">Datos del usuario</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			  <div class="box-body">
				<div class="form-group">
				  <label for="usuario">Usuario</label>
				  <input type="text" class="form-control" id="usuario" readonly="readonly">
				</div>
				<div class="form-group">
					<label>Rol</label>
					<input type="text" class="form-control" id="nombrerol" readonly="readonly">
				</div>
				<div class="form-group">
				  <label for="password1">Contraseña</label>
				  <input type="password" class="form-control" id="password1" placeholder="Password" autocomplete="new-password">
				</div>
				<div class="form-group">
				  <label for="password2">Confirmar contraseña</label>
				  <input type="password" class="form-control" id="password2" placeholder="Password" autocomplete="new-password">
				</div>
			  </div><!-- /.box-body -->
			  <div class="box-footer">
				<button id="save" type="button" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Actualizar contraseña</button>
				<button id="exit" type="button" class="btn btn-primary"><i class="fa fa-fw fa-reply"></i> Regresar</button>
			  </div>






		<div id="pswd_info">
		<h4>La contraseña debe cumplir los siguientes requisitos:</h4>
		<ul>
			<li id="letter" class="invalid">Al menos <strong>una letra</strong></li>
			<li id="capital" class="invalid">Al menos <strong>una letra mayúscula</strong></li>
			<li id="number" class="invalid">Al menos <strong>un número</strong></li>
			<li id="length" class="invalid">Longitud de almenos <strong>8 caracteres</strong></li>
			<li id="especial" class="invalid">Uso de caracteres especiales<strong> @ # $ %</strong></li>
		</ul>
		</div>
		<div id="pswd_confirm_info">
			<ul><li id="compare" class="invalid">La nueva clave y la clave de confirmación deben ser iguales</strong></li></ul>
		</div>

		  </div><!-- /.box -->
		</div>

		<div class="col-md-6">
		  <!-- general form elements -->
		  <div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title">Datos adicionales</h3>
			</div><!-- /.box-header -->
			<!-- form start -->
			  <div class="box-body">
				<div class="form-group">
				  <label for="nombre">Nombre y Apellido</label>
				  <input type="text" class="form-control" id="nombre" readonly="readonly">
				</div>
				<div class="form-group">
				  <label for="email">Email</label>
				  <input type="email" class="form-control" id="email" readonly="readonly">
				</div>
				<div class="form-group">
					<label>Imagen del usuario</label>
					</br>
					    <img class="imgusr" alt="" src="#" id="file_url" width="120" height="150">
				</div>
		  </div><!-- /.box -->
		</div>

		</form>
	</div>

<link rel="stylesheet" href="../../css/style_format_pass.css" type="text/css"/>
<script type="text/javascript">
$(document).ready(function() {

		//cargar datos del formulario ********************************************************************
		$.post("../../controllers/musuarios_controller", { action: "find_perfil"}).done(function( data ) {

			var parsedJson = $.parseJSON(data);

			$("#usuario").val(parsedJson.usuario);
			$("#nombrerol").val(parsedJson.nombrerol);
			$("#nombre").val(parsedJson.nombre);
			$("#email").val(parsedJson.email);

		if(parsedJson.imagen != null){	
			$('.imgusr').attr('src','../../dist/img/fotos_usuarios/'+parsedJson.imagen);
		}else{
			$('.imgusr').attr('src','../../dist/img/fotos_usuarios/no_user.png');
		}	
		},"json");

		//**********************************************************************************************

		//** enviar los datos al controlador ***********************************************************

		$("#save" ).click(function() {

			var formData = new FormData();
			formData.append('action', $("#action").val());
			formData.append('password1', $("#password1").val());
			formData.append('password2', $("#password2").val());

			$.ajax({
				url: "../../controllers/musuarios_controller",
				type: "POST",
				data: formData,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data)
				{
					$(".message").html(data);
				}
			});

		});
		// ********************************************************************************************

		//salir del formulario *****************************************
		$("#exit" ).click(function() {
			$(location).attr('href','../inicio/');
		});
		//**************************************************************


/******************************************************************************/
		$('#password1').keyup(function() {
			// set password variable
			var pswd = $(this).val();
			//validate the length
		if ( pswd.length < 8 ) {
			$('#length').removeClass('valid').addClass('invalid');
		} else {
			$('#length').removeClass('invalid').addClass('valid');
		}
		//validate letter
		if ( pswd.match(/[A-z]/) ) {
			$('#letter').removeClass('invalid').addClass('valid');
		} else {
			$('#letter').removeClass('valid').addClass('invalid');
		}

		//validate capital letter
		if ( pswd.match(/[A-Z]/) ) {
			$('#capital').removeClass('invalid').addClass('valid');
		} else {
			$('#capital').removeClass('valid').addClass('invalid');
		}

		//validate number
		if ( pswd.match(/\d/) ) {
			$('#number').removeClass('invalid').addClass('valid');
		} else {
			$('#number').removeClass('valid').addClass('invalid');
		}

		//validate caracteres especiales
		if ( pswd.match(/[@#$%]/) ) {
			$('#especial').removeClass('invalid').addClass('valid');
		} else {
			$('#especial').removeClass('valid').addClass('invalid');
		}


		}).focus(function() {
			$('#pswd_info').show();
		}).blur(function() {
			$('#pswd_info').hide();
		});

		$('#password2').keyup(function() {
			var pw3 = $(this).val();
			var pswd = $("#password2").val();

			if(pswd === pw3){

				 $('#compare').removeClass('invalid').addClass('valid');
			}else{
			   $('#compare').removeClass('valid').addClass('invalid');
			}
		}).focus(function() {
			$('#pswd_confirm_info').show();
		}).blur(function() {
			$('#pswd_confirm_info').hide();
		});

/********************************************************************/




	});
</script>
 <?php include_once("../layouts/pie.php") ?>
