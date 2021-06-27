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
				  <input type="text" class="form-control" id="usuario" placeholder="Ingrese el nickname o usuario" onkeypress="return esusuario(event);"  onblur="alsalir(this.id)" onpaste="return false" tabindex="1" autocomplete="new-text">
				  <div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_usuario' ></div>
				</div>

				<div class="form-group">
					<label>Rol</label>
					<select id="rol" class="form-control" tabindex="2">
					<option></option>
					</select>
				</div>

				<div class="form-group">
					<label for="distribuidora">Departamento</label>
					<select id="distribuidora" class="form-control" tabindex="3">
					<option></option>
					</select>
				</div>

				<div class="form-group">
				  <label for="password1">Contraseña</label>
				  <input type="password" class="form-control" id="password1" placeholder="Password" tabindex="4" autocomplete="new-password">
				</div>
				<div class="form-group">
				  <label for="password2">Confirmar contraseña</label>
				  <input type="password" class="form-control" id="password2" placeholder="Password" tabindex="5" autocomplete="new-password">
				</div>
				<input type="hidden" id="action" value="add">
			  </div><!-- /.box-body -->
			  <div class="box-footer">
				<button id="save" type="button" class="btn btn-primary" tabindex="9"><i class="fa fa-fw fa-save"></i> Guardar</button>
				<button id="exit" type="button" class="btn btn-primary" tabindex="10"><i class="fa fa-fw fa-reply"></i> Regresar</button>
			  </div>




		<div id="pswd_info">
		<h4>La contraseña debe cumplir los siguientes requisitos:</h4>
		<ul id="indicaciones">
			<li id="letter" class="invalid">Al menos <strong>una letra minúscula</strong></li>
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
				  <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del usuario" onkeypress="return esnombre(event);"  onblur="return esnombre2(this.value);" onpaste="return false" tabindex="6" autocomplete="new-text">
				  <div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_nombre' ></div>
				</div>
				<div class="form-group">
				  <label for="email">Email</label>
				  <input type="email" class="form-control" id="email" placeholder="indique un correo electrónico"  onkeypress="return esemail(event);" onblur="return esemail2(this.value);" onpaste="return false" tabindex="7" autocomplete="new-email">
				  <div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_email' ></div>
				  <!--<p id="ext_mail" style="color:#ec3f41;">@lacteoslosandes.gob.ve</p>-->
				</div>

				<div class="form-group">
					<img class="imgusr" alt="" src="#" id="file_url" width="120" height="150">
				</div>

				<div class="form-group">
				  <label for="exampleInputFile">Adjuntar imagen  no mayor a 100 Kb.</label>
				  <input type="file" id="InputFile" tabindex="8">
				</div>
		  </div><!-- /.box -->
		</div>

		</form>
	</div>
<link rel="stylesheet" href="../../css/style_format_pass.css" type="text/css"/>
 <script type="text/javascript">
	$(document).ready(function() {

		$('#ext_mail').hide();
		//***********************************************************
		$.post( "../../controllers/musuarios_controller", { action: "get_roles"}).done(function( data ) {
			 $("#rol" ).html( data );
		});
		// ***********************************************************************************************

		$.post( "../../controllers/musuarios_controller", { action: "get_distribuidoras"}).done(function( data ) {
			 $("#distribuidora" ).html( data );
		});

		$("#rol" ).click(function() {

			var role = $("#rol" ).val();

			if(role == 4 || role ==1){
				 $('label[for="password1"]').hide();
				 $('#password1').hide();
				 $('label[for="password2"]').hide();
				 $('#password2').hide();
				// $('#ext_mail').show();

				 $('label[for="distribuidora"]').hide();
				 $('#distribuidora').hide();
				  $('#distribuidora').val(1);


			}else if(role == 3){
				 $('label[for="password1"]').show();
				 $('#password1').show();
				 $('label[for="password2"]').show();
				 $('#password2').show();
				 //$('#ext_mail').hide();
				 $('label[for="distribuidora"]').show();
				 $('#distribuidora').show();

			}else{

				 $('label[for="password1"]').show();
				 $('#password1').show();
				 $('label[for="password2"]').show();
				 $('#password2').show();

				 $('label[for="distribuidora"]').hide();
				 $('#distribuidora').hide();
				 $('#distribuidora').val(9);
			}

		});

		$("#rol" ).change(function() {

			var role = $("#rol" ).val();

			if(role == 4 || role ==1){
				 $('label[for="password1"]').hide();
				 $('#password1').hide();
				 $('label[for="password2"]').hide();
				 $('#password2').hide();
				 //$('#ext_mail').show();

				 $('label[for="distribuidora"]').hide();
				 $('#distribuidora').hide();
				 $('#distribuidora').val(1);

			}else if(role == 3){
				 $('label[for="password1"]').show();
				 $('#password1').show();
				 $('label[for="password2"]').show();
				 $('#password2').show();
				// $('#ext_mail').hide();
				 $('label[for="distribuidora"]').show();
				 $('#distribuidora').show();

			}else{

				 $('label[for="password1"]').show();
				 $('#password1').show();
				 $('label[for="password2"]').show();
				 $('#password2').show();

				 $('label[for="distribuidora"]').hide();
				 $('#distribuidora').hide();
				 $('#distribuidora').val(9);

			}


		});


		//*************************************************************
		$("#save" ).click(function() {

			var formData = new FormData();
			formData.append('file', $('input[type=file]')[0].files[0]);
			formData.append('action', $("#action").val());
			formData.append('nombre', $("#nombre").val());
			formData.append('usuario', $("#usuario").val());
			formData.append('email', $("#email").val());
			formData.append('rol', $("#rol").val());
			formData.append('password1', $("#password1").val());
			formData.append('password2', $("#password2").val());
			formData.append('distribuidora', $("#distribuidora").val());

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

                    var apg= document.getElementById("tocon").value;


					if(apg==1){

						      setTimeout(function(){

							     $(location).attr('href','../usuarios/frm_registrar');

							    }, 3000);

				          }

				}
			});

		});
		// ********************************************************************************************
		$("#exit" ).click(function() {
			$(location).attr('href','../usuarios/');
		});
		//**************************************************************

		$("#InputFile").change(function(){
		    readURL(this);
		});



/******************************************************************************/
		$('#password1').keyup(function() {
			// set password variable
			var pswd = $(this).val();

			$.post( "../../controllers/validar_contrasena", { action: "validar",clave:pswd}).done(function( data ) {
			 $("#indicaciones").html( data );

			});

		}).focus(function() {
			$('#pswd_info').show();
		}).blur(function() {
			$('#pswd_info').hide();
		});


		$('#password2').keyup(function() {
			var pw3 = $(this).val();
			var pswd = $("#password2").val();

			if(pswd != ""){

				if(pswd === pw3){

					 $('#compare').removeClass('invalid').addClass('valid');
				}else{
				   $('#compare').removeClass('valid').addClass('invalid');
				}
			}
		}).focus(function() {
			$('#pswd_confirm_info').show();
		}).blur(function() {
			$('#pswd_confirm_info').hide();
		});

/********************************************************************/
	});

//############################################################################

            function esusuario(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;

		patron = /[A-Z0-9\\]/;
		n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_usuario').style.display = 'block';
                    	document.getElementById("ms_usuario").innerHTML = 'Utilice caractéres en mayuscula sin espacio !';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_usuario").innerHTML = '';
                       	return patron.test(n);

                    }

	}

//############################################################################

            function alsalir(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length > 0 && caso1.length < 5 ){
                   document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 5 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

//############################################################################

	function esnombre2(v) {
             		var caso2=document.getElementById('nombre').value;
             		if(caso2.length < 5){

            			document.getElementById('ms_nombre').innerHTML = 'Debe escribir al menos 5 caractéres';

             		}else{

                 		var texto2 = v.split(" ");
                 		var n_palabras = texto2.length;

                 		if(n_palabras >= 2 && n_palabras  <= 4 ){

                    			document.getElementById("ms_nombre").innerHTML = '';
                    			//document.getElementById("valido").value = '1';
                 		}else{
                 			document.getElementById("ms_nombre").innerHTML = 'Ingrese nombre(s) y apellido(s)';
                 			//document.getElementById("valido").value = '0';
                 		}
            		 }//end else
	}

//############################################################################

	        function esnombre(e) {

			    k = (document.all) ? e.keyCode : e.which;
			    if (k==8 || k==0 || k==13) return true;
			    patron = /[ÑA-Z\'\.\ ]/;

			    n = String.fromCharCode(k);
                    if(patron.test(n)==''){
                    	document.getElementById('ms_nombre').style.display = 'block';
                        document.getElementById("ms_nombre").innerHTML = 'Utilice solo letras mayusculas';
                        return patron.test(n);
                    }else{
                       document.getElementById("ms_nombre").innerHTML = '';
                       return patron.test(n);

                    }

			}

//############################################################################

	function esemail(e) {

		      k = (document.all) ? e.keyCode : e.which;
		      if (k==8 || k==0 || k==13) return true;
		      patron = /[a-z0-9\_\-\.\+\@\ ]/;
		      n = String.fromCharCode(k);

		         if(patron.test(n)==''){

		         	document.getElementById('ms_email').style.display = 'block';
		           	document.getElementById("ms_email").innerHTML = 'No utilice caractéres especiales ni en mayuscula';
		             return patron.test(n);

		         }else{

		            document.getElementById("ms_email").value = '';
		            return patron.test(n);

		         }
	}

//############################################################################

	function esemail2(v) {

	             patron = /^([a-z0-9_\.\-].{5,})+\@(([a-z])+\.)+(([a-z])+\.)+([a-z])+$/;

	             if(patron.test(v)){

	                   	document.getElementById("ms_email").innerHTML = '';

	             }else{

	                 	document.getElementById("ms_email").innerHTML = 'Ingrese un correo electrónico valido!';

	             }

	}

	//############################################################################

	function readURL(input) {

	    if (input.files && input.files[0]) {
	        var reader = new FileReader();

	        reader.onload = function (e) {
	            $('#file_url').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}

 </script>
 <?php include_once("../layouts/pie.php") ?>
