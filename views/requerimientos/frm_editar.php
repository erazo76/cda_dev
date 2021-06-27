<?php

include("../../lib/validar_session.php");

ValidaSession("../login");
//VerificarAdmin($_SESSION['rolx']);

?>

<?php include("../layouts/constantes.php")?>
<?php include_once("../layouts/cabezera.php") ?>

<div class="message"></div>

<form id="form" role="form" enctype="multipart/form-data">

<div  class="row">

			<div class="col-md-4">
				<div class="box-header with-border" tabindex="-1">
					 	<h3 class="box-title">Entrega Nro: <label id="n_accion"></label></h3>
				</div><!-- /.box-header -->
		  		<div class="box box-primary">
				  		<input type="hidden" id="idea" value="<?php echo intval($_GET["record"]); ?>">
						<input type="hidden" id="distribuidora" value="<?php echo intval($_SESSION['distribuidora']); ?>">
						<input type="hidden" id="region">
						<input type="hidden" id="lata" value=6.12>
						<input type="hidden" id="longa" value=-67.39>
						<input type="hidden" id="ideado">
						<input type="hidden" id="trans" value=0>
						<input type="hidden" id="aloja" value=0>
						<input type="hidden" id="arutaval" value=0>
						<input type="hidden" id="apircval" value=0>

						<div class="box-body">

						 	<div class="form-group-sm">
							  <label for="fecha1">Fecha </label> 	   
					          <input class="form-control bbb" id="fecha1" data-date-format="dd-mm-yyyy" placeholder="dia-mes-año" type="text" onpaste="return false" disabled="true">
							</div>

							<div class="form-group-sm">
								<label>Departamento</label>
								<select name="depar" id="departamento" class="form-control bbb" tabindex="1" >
								<option></option>
								</select>
							</div>

							<div class="form-group-sm">
								<label>Municipio</label>
								<select name="munir" id="municipio" class="form-control bbb" tabindex="2" >
								<option></option>
								</select>
							</div>

							<div class="form-group-sm">
								<label>Centro Poblado</label>
								<select id="cpoblado" class="form-control bbb" tabindex="3">
								<option></option>
								</select>
							</div>

							<!--<div class="form-group-sm">
								<label >Dirección</label>
							
								<div class = "input-group">

									<span class="input-group-btn">
										<select id="a_primario" class="btn-sm"  tabindex="4"  >
											<option value="0">Avenida</option>
											<option value="1">Calle</option>
											<option value="2">Carrera</option>
											<option value="3">Vereda</option>
											<option value="4">Callejón</option>
											<option value="5">Carretera</option>
											<option value="6">Autopista</option>
										</select>
									</span>
										<input type="text" id="acceso1" class="form-control bbb" placeholder="Principal"  onpaste="return false" tabindex="5" onkeypress="return esacceso1(event);" onblur="alsalir(this.id)">
									
								</div>

								<div class="input-group">
									<span class="input-group-addon"><span class="fa fa-slack"></span></span>
									<input type="text" id="acceso2" class="form-control bbb" placeholder="Secundario"  onpaste="return false" tabindex="6" onkeypress="return esacceso1(event);" onblur="alsalir(this.id)">
									<span class="input-group-btn" tabindex="-1" style="width:0px;"></span>
									<span class="input-group-addon"><span class="fa fa-minus"></span></span>
									<span><input type="text" id="num_dir" class="form-control bbb" placeholder="Numero"  onpaste="return false" tabindex="7" onkeypress="return esnumdir(event);" onblur="alsalir(this.id)">
										
								</div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_acceso1' class="aaa"><p></p></div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_acceso2' class="aaa"><p></p></div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_num_dir' class="aaa"><p></p></div>
							</div>

							<div class="form-group-sm">
									<label >Referencia</label>
										<div class = "input-group">
											<span class="input-group-btn">
												<select id="a_referencia" class="btn-sm"  tabindex="8"  >
													<option value="0">Al lado</option>
													<option value="1">Cerca</option>
													<option value="2">Frente</option>
													<option value="3">Diagonal</option>
													<option value="4">Detras</option>
													<option value="5">Via</option>
													<option value="6">Dentro</option>
												</select>
											</span>
											<input type="text" class="form-control bbb" id="referencia" placeholder="Ingrese una referencia"  onpaste="return false" tabindex="9" onkeypress="return esreferencia(event);" onblur="alsalir(this.id)">
										</div>
										<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_referencia' class="aaa"><p></p></div>
							</div>-->	

						</div>

						<!--<div class="box-body">

							<div class="form-group-sm">
								<label>Asignado por:</label>
								<input type="text" class="form-control bbb" id="rt_nombre2" value="<?php echo($_SESSION['nombresx']); ?>"  onpaste="return false"  onblur="alsalir(this.id)"  autocomplete="off" disabled="true">
							</div>
						</div>-->
						<div class="box-footer">
						</div>

				</div>

			</div>

		  	<div class="col-md-4">
	
		 		<div class="box-header with-border">
					<h3 class="box-title">Beneficiario</h3>
				</div><!-- /.box-header -->	

				<div class="box box-primary">

					<div class="box-body">
						<label>Nombre(s) y Apellido(s)</label>
						<div class="form-group-sm">
							<input type="text" class="form-control bbb" id="rt_nombre1" placeholder="Ingrese Nombre(s) y Apelido(s)"  onpaste="return false" tabindex="10" onkeypress="return esnombre2(event);"  onblur="alsalir(this.id)"  autocomplete="off" >
						</div>
						<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_rt_nombre1' class="aaa"><p></p></div>
			
						<div class="form-group-sm">
							<label >Documento de Identidad</label>
								<div class = "input-group">

									<span class="input-group-btn">
										<select id="rt_tdoc" class="btn-sm"  tabindex="11"  >
											<option value="0">CC</option>
											<option value="1">CE</option>
											<option value="2">PA</option>
										</select>
									</span>

									<input type="text" class="form-control bbb" id="rt_num_doc" placeholder="Ingrese el numero del documento"  onpaste="return false" tabindex="12" onkeypress="return escedula1(event);" onblur="alsalira(this.id)" autocomplete="off" >
								</div>
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_rt_num_doc' class="aaa"><p></p></div>
						</div>	

						<div class="form-group-sm">
							<label for="tele1">Teléfono de contacto</label>
							<input type="text" class="form-control bbb" id="tele1" placeholder="Ingrese un número telefónico"  onpaste="return false" tabindex="13" onkeypress="return estele1(event);" onblur="alsalir2(this.id)" autocomplete="off" >
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_tele1' class="aaa"></div>
						</div>

							<div id="confirma_telefono">
								<ul><li id="conf_tel" style="color:#fff;text-align:center" ></li></ul>
							</div>

						<div class="form-group-sm">
							<label for="correo1">Correo electrónico</label>
							<input type="text" class="form-control bbb" id="correo1" placeholder="Ingrese un correo electrónico"  onpaste="return false" tabindex="14" onkeypress="return escorreo1(event);" onblur="alsalir2(this.id)" autocomplete="off" >
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_correo1' class="aaa"></div>
						</div>

							<div id="confirma_correo">
								<ul><li id="conf_cor" style="color:#fff;text-align:center" ></li></ul>
							</div>
									
						<!--<div class="box-body dataTables_wrapper form-inline dt-bootstrap" width="100%" style="width: 100%">
						<label for="tabla">Unidades de negocio</label>
								<table id="tabla" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>Id</th>										
											<th>Unidad</th>
											<th>Marca</th>
											<th>Modelo</th>
											<th>Serial</th>											
											<th>Observaciones</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
						</div>
				
						<div class="box-footer">
							<button id="agregar" type="button" class="btn btn-primary sm" tabindex="15"><i class="fa fa-fw fa-plus"></i>Agregar</button>
							<button id="quitar" type="button" class="btn btn-danger sm pull-right"><i class="fa fa-fw fa-minus"></i>Quitar</button>
						</div>-->
					</div>	
						
				</div><!-- /.box -->

			</div>

			<div class="col-md-4">
				<div class="box-header with-border">
					<h3 class="box-title">Entrega</h3>
				</div><!-- /.box-header -->
				
				<div class="box box-primary">

					<div class="box-body">

						<div class="form-group-sm">	
							<label for="fecha2">Fecha de entrega</label>
							<input class="form-control bbb" id="fecha2" data-date-format="dd-mm-yyyy" placeholder="dia-mes-año" type="text" onpaste="return false" tabindex="16" >
						</div>									

						<!--<label>Entregado por:</label>
							<div class="form-group">
								<input type="text" class="form-control ddd" id="rn_nombre1" placeholder="Ingrese Nombres(s) y Apellido(s)"  onpaste="return false" tabindex="17" onkeypress="return esnombre3(event);"  onblur="alsalir(this.id)" autocomplete="off" disabled>
							</div>
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_rn_nombre1' class="aaa"><p></p></div>

							<div class="form-group-sm">
								<label >Documento de Identidad</label>
									<div class = "input-group">

										<span class="input-group-btn">
											<select id="rn_tdoc" class="btn-sm"  tabindex="18"  disabled>
												<option value="0">CC</option>
												<option value="1">CE</option>
												<option value="2">PA</option>
											</select>
										</span>

										<input type="text" class="form-control ddd" id="rn_num_doc" placeholder="Ingrese el numero del documento"  onpaste="return false" tabindex="19" onkeypress="return escedula2(event);" onblur="alsalira(this.id)" disabled>
									</div>
									<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_rn_num_doc' class="aaa"><p></p></div>
							</div>	

							<div class="form-group-sm">
							<label for="tele2">Teléfono de contacto</label>
							<input type="text" class="form-control ddd" id="tele2" placeholder="Ingrese un número telefónico"  onpaste="return false" tabindex="20" onkeypress="return estele2(event);" onblur="alsalir2(this.id)" autocomplete="off" disabled>
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_tele2' class="aaa"></div>
							</div>

								<div id="confirma_telefono2">
									<ul><li id="conf_tel2" style="color:#fff;text-align:center" ></li></ul>
								</div>

							<div class="form-group-sm">
							<label for="correo2">Correo electrónico</label>
							<input type="text" class="form-control ddd" id="correo2" placeholder="Ingrese un correo electrónico"  onpaste="return false" tabindex="21" onkeypress="return escorreo2(event);" onblur="alsalir2(this.id)" autocomplete="off" disabled>
							<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_correo2' class="aaa"></div>
							</div>

							<div id="confirma_correo2">
								<ul><li id="conf_cor2" style="color:#fff;text-align:center" ></li></ul>
							</div>-->							
						<br>
						<label id="prueba">Soportes Adjuntos </label> 
						<div class="form-group-sm pull-right">							
							<button id="agregar" type="button" class="btn btn-success btn-xs " tabindex="15"><i class="fa fa-fw fa-plus"></i></button>
							<button id="anex" type="button" class="btn btn-primary btn-xs " tabindex="22" ><i class="fa fa-fw fa-eye" ></i></button>
							<button id="quitar" type="button" class="btn btn-danger btn-xs "><i class="fa fa-fw fa-trash"></i></button><br>						
							<!--<ul class="list-group" style="height: 130px;overflow:auto;" id="ul_adj"></ul>-->							
						</div>	

						<div class="box-body dataTables_wrapper form-inline dt-bootstrap" width="100%" style="width: 100%">
						<!--<label for="tabla">Soportes adjuntos</label>-->
								<table id="tabla" class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>Id</th>										
											<th>Anexo</th>
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
						</div>						

					</div>

					<div class="box-footer">
					<button id="exit" type="button" class="btn btn-primary pull-left "  ><i class="fa fa-fw fa-reply"></i>Regresar</button>
					<button id="save" type="button" class="btn btn-success pull-right" tabindex="23"><i class="fa fa-fw fa-save"></i>Guardar</button>					
					<!--<button id="cancelar" type="button" class="btn btn-primary" tabindex="-1"><i class="fa fa-fw fa-times"></i>Cancelar</button>-->
					</div>			

				</div><!-- /.box-body -->	
				
			</div>
	</div>
</form>

<!-- Modal 1 -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
<form id="form" role="form" enctype="multipart/form-data" >
  <div class="modal-dialog modal-lm">
    <div class="modal-content">
      <div class="modal-body">
        <div class="contenido-modal">
         <h4 class="modal-title" id="myModalLabel1">Asignación para entrega de unidades</h4>
			<div class="message1"></div>
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">

					<div class="box-header with-border"></div><!-- /.box-header -->
					<!-- form start -->
					  <div class="box-body">

							<div class="form-group-sm">
								<label>Unidad de negocio</label>								
								<select name="a_equipo" id="a_equipo" class="form-control bbb" tabindex="100">
								<option></option>								
								</select>
							</div>
							<div class="form-group-sm">
								<label>Marca</label>
								<input type="text"  class="form-control" id="a_marca"    onpaste="return false" disabled>
							</div>
							<div class="form-group-sm">
								<label>Modelo</label>
								<input type="text"  class="form-control" id="a_modelo"    onpaste="return false" disabled>
							</div>

							<div class="form-group-sm">
								<label>Serial</label>
								<input type="text"  class="form-control" id="a_serial"  placeholder="Indique el serial del equipo" tabindex="200" onpaste="return false">
								<div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_a_serial' class="aaa"><p></p></div>
							</div>

							<div class="form-group-sm">
							  <label>Observaciones</label>
							  <textarea class="form-control" id="a_obs" rows="4" placeholder="Redacte un resumen de características"  onpaste="return false" onkeypress="return esdobs(event);"  onblur="alsalir(this.id);"  autocomplete="off" tabindex="300"></textarea>
  							  <div style="background-color:#F39C12;color:#fff;text-align:center" id='ms_a_obs' class="aaa"><p></p></div>
							</div>

					  </div><!-- /.box-body -->

				  </div><!-- /.box -->

				</div>
			</div>
							      <div class="modal-footer">
							      		<button id="close1" type="button" class="btn btn-success" tabindex="400"><i class="fa fa-fw fa-save"></i>Incluir</button>
							      		<button id="cancelar2" type="button" class="btn btn-primary  pull-right"><i class="fa fa-fw fa-times"></i>Cancelar</button>

							      </div>
        </div>
      </div>
    </div>
  </div>
</form>                   
</div>

<!-- Modal 3 -->
<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
<form id="form" role="form" enctype="multipart/form-data" >
  <div class="modal-dialog modal-lm">
    <div class="modal-content">
      <div class="modal-body">
        <div class="contenido-modal">
         <h4 class="modal-title" id="myModalLabel1">Soportes adjuntos</h4>
			<div class="message1"></div>
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
				  <!-- general form elements -->
				  <div class="box box-primary">

					<div class="box-header with-border"></div><!-- /.box-header -->
					<!-- form start -->
					  <div class="box-body">


						<div class="form-group">
							<img class="imgusr" alt="" src="#" id="file_url" width="100%" height="300%">
							
						</div>

						<div class="form-group">
							<label for="exampleInputFile">Adjuntar archivo  no mayor a 1 Mb.</label>
							<input type="file" id="InputFile" tabindex="900">
						</div>

					  </div><!-- /.box-body -->

				  </div><!-- /.box -->

				</div>
			</div>
							      <div class="modal-footer">
										<button id="close11" type="button" class="btn btn-success" ><i class="fa fa-fw fa-save"></i>Adjuntar</button>
										
							      		<button id="cancelar22" type="button" class="btn btn-primary  pull-right"><i class="fa fa-fw fa-times"></i>Cancelar</button>

							      </div>
        </div>
      </div>
    </div>
  </div>
</form>                   
</div>



<script language="JavaScript" src="../../plugins/maxLength/maxLength.js"></script>
<script type="text/javascript" src="../../plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../../plugins/datepicker/locales/bootstrap-datepicker.es.js" charset="UTF-8"></script>
<script src="../../plugins/unslider/unslider-min.js"></script>
<script type="text/javascript" src="../../js/bootstrap-multiselect.js"></script>
<script language="JavaScript" src="../../plugins/mask/jquery.mask.min.js"></script>
<script type="text/javascript" src="../../plugins/confirma/jquery-confirm.min.js"></script>
<script src="../../plugins/balloon/jquery.balloon.min.js"></script>
<script src="../../plugins/leaflet/leaflet.js"></script>
<script src="../../plugins/leaflet/leaflet.label.js"></script>

<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAq8g7WPAx_OtQaQNzYPvexnbbV50CDf0o" async defer></script>
<script src="../../plugins/leaflet/gmaps.js"></script>

<script src="../../plugins/leaflet/Leaflet.GoogleMutant.js"></script>-->

<script src="../../plugins/select3/bootstrap-select.min.js"></script>
<script src="../../plugins/select3/i18n/defaults-es_ES.min.js"></script>

<link rel="stylesheet" href="../../plugins/confirma/jquery-confirm.min.css" type="text/css"/>
<link rel="stylesheet" href="../../css/style_format_pass.css" type="text/css"/>
<link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css" type="text/css"/>
<link rel="stylesheet" href="../../plugins/unslider/unslider.css">
<link rel="stylesheet" href="../../plugins/leaflet/leaflet.css"/>

<link rel="stylesheet" href="../../plugins/select3/bootstrap-select.min.css">

 <script type="text/javascript">

$(document).ready(function() {

	document.getElementById("anex").disabled=false;
	/*$.post( "../../controllers/mdetalles_controller", { action: "search_act_delete"}).done(function( data ) {},"json");
	$.post( "../../controllers/mvictimas_controller", { action: "search_act_delete"}).done(function( data ) {},"json");
	$.post( "../../controllers/madjuntos_controller", { action: "search_act_delete"}).done(function( data ) {},"json");

	$.post( "../../controllers/mrequerimientos_controller", { action: "contar_id"}).done(function( data ) {
		var parsedJson = $.parseJSON(data);
		var numstring=parsedJson.toString();
		var res = numstring.padStart(4, 0);
//alert(parsedJson);
		$("#n_accion").val( res );
		$("#ideado").val( numstring );
	},"json");

	$.post( "../../controllers/mdetalles_controller", { action: "sumar_costo"}).done(function( data ) {
		var parsedJson = $.parseJSON(data);
		var cos_tot=parsedJson;
		$("#totalite").val( cos_tot );
	},"json");*/

		$("#izquierda").css("display", "none");

// para consultar y cargar los datos geograficos ***********************************************************

		$.post( "../../controllers/mgeograficas_controller", { action: "get_departamentos"}).done(function( data ) {
				$("#departamento" ).html( data );
		
		});

		$.post( "../../controllers/mgeograficas_controller", { action: "get_municipios"}).done(function( data ) {
			 $("#municipio" ).html( data );

		});

		$.post( "../../controllers/mgeograficas_controller", { action: "get_parroquias"}).done(function( data ) {
			 $("#cpoblado" ).html( data );

		});	

		$('#departamento').change(function(event) {
			
			
			$("#depa" ).val($('select[name="depar"] option:selected').text());
			$("#depa2" ).val($('select[name="depar"] option:selected').text());
				
				$.post( "../../controllers/mgeograficas_controller", { action: "get_municipios",departamento: $("#departamento").val()}).done(function( data ) {
					 $("#municipio" ).html( data );

				});

				$.post( "../../controllers/mgeograficas_controller", { action: "get_parroquias"}).done(function( data ) {
					 $("#cpoblado" ).html( data );

				});	

				$.post( "../../controllers/mregiones_controller", { action: "get_regi",departamento:$("#departamento").val()}).done(function( data ) {
					 var parsedJson = $.parseJSON(data);
					
					 $("#region").val( parsedJson );	
		
					alert($("#region").val());

				});				
				
		});


		$('#municipio').change(function(event) {
			$("#muni2" ).val($('select[name="munir"] option:selected').text());
				$.post( "../../controllers/mgeograficas_controller", { action: "get_parroquias",municipio: $("#municipio").val()}).done(function( data ) {
					 $("#cpoblado" ).html( data );

				});

				$.post( "../../controllers/mgeograficas_controller", { action: "get_parroquias"}).done(function( data ) {
					 $("#cpoblado" ).html( data );

				});	

		});


	$.post( "../../controllers/mrequerimientos_controller", { action: "search_a",record:<?php echo intval($_GET["record"]); ?>}).done(function( data ) {
		
		var parsedJson = $.parseJSON(data);

		var idd=parsedJson.id.toString();

		$("#n_accion").text(idd.padStart(4, 0));
	
		$("#fecha1").val(parsedJson.fecha1);
		$("#fecha2").val(parsedJson.fecha2);

		var bdep =parsedJson.departamento;
		var bmun =parsedJson.municipio;
		var bcpo =parsedJson.cpoblado;

		$.post( "../../controllers/mgeograficas_controller", { action: "get_departamentos_f",departamento:bdep}).done(function( data ) {
			
			$("#departamento").html(data);
			$("#depa" ).val( $("#departamento option:selected").text());

		});	

		$.post( "../../controllers/mgeograficas_controller", { action: "get_municipios_f",departamento:bdep,municipio: bmun}).done(function( data ) {
			
			$("#municipio").html(data);

		});
		
		$.post( "../../controllers/mgeograficas_controller", {action: "get_cpoblado_f",municipio: bmun,cpoblado: bcpo}).done(function( data ) {

			$("#cpoblado").html(data);

		});	
	
		$("#a_primario").val(parsedJson.a_primario);
		$("#acceso1").val(parsedJson.acceso1);
		$("#acceso2").val(parsedJson.acceso2);
		$("#num_dir").val(parsedJson.num_dir);
		$("#a_referencia").val(parsedJson.a_referencia);
		$("#referencia").val(parsedJson.referencia);

		$("#rt_nombre1").val(parsedJson.rt_nombre1);
		$("#rt_nombre2").val(parsedJson.rt_nombre2);

		$("#rt_tdoc").val(parsedJson.rt_tdoc);
		$("#rt_num_doc").val(parsedJson.rt_num_doc);
		$("#tele1").val(parsedJson.tele1);
		$("#correo1").val(parsedJson.correo1);


	},"json");	

});




//MASCARAS DE VALIDACION ########################################

$('.pesos').mask('#.##0,00', {reverse: true});

$('#tele1').mask('A00-000-0000', {

    	translation: {

    		 'A': {

        			pattern: /[03]/, optional: false

     		        }

    	  },

    	

  });

  $('#tele3').mask('A00-000-0000', {

translation: {

	 'A': {

			pattern: /[03]/, optional: false

			 }

  },



});

$('#tele2').mask('A000-000-0000', {

    	translation: {

    		 'A': {

        			pattern: /[0]/, optional: true

     		        }

    	  },

    	

  });


var tick=0;

$("#derecha" ).click(function() {

	if(tick==0){

		var cont_alert =$('.bbb').filter(function() { return $(this).val() == ""; }).size();
		//var cont_alert = $('.aaa p:contains("") ').size();
//alert(cont_alert);
			document.getElementById('derecha').disabled = true;
			$("#derecha").css("display", "none");
		//if(cont_alert!=0){
			if(cont_alert > 30){	
			//alert('existen campos vacios');

						$.confirm({
						    title: '¡existen campos vacios !', // hides the title.
						    cancelButton: false, // hides the cancel button.
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success',
						    content: false// hides content block.
						});			

		}else{

			
			$('.base').unslider('animate:1');
			tick=1;
			document.getElementById('izquierda').disabled = false;
			$("#izquierda").css("display", "block");
			

			setTimeout(function() {
				document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
			}, 800);

		}

	}else if(tick==1){

		var cont_alert3 =$('.ccc').filter(function() { return $(this).val() == ""; }).size();
		//var cont_alert = $('.aaa p:contains("") ').size();

		//if(cont_alert3!=0){
			if(cont_alert3 > 50){
						$.confirm({
						    title: '¡existen campos vacios !', // hides the title.
						    cancelButton: false, // hides the cancel button.
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success',
						    content: false// hides content block.
						});	

		}else{

			//$('.base').unslider('animate:2');
			
			//tick=2;
			document.getElementById('derecha').disabled = false;
			$("#derecha").css("display", "block");
			setTimeout(function() {
				document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
			}, 800);			

		}

	}

});

$("#izquierda" ).click(function() {

	if(tick==1){
		
		$('.base').unslider('animate:0');
		tick=0;
		document.getElementById('izquierda').disabled = true;
		$("#izquierda").css("display", "none");
		document.getElementById('derecha').disabled = false;
		$("#derecha").css("display", "block");
		setTimeout(function() {
			document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
		}, 800);

	}else if(tick==2){
		
		$('.base').unslider('animate:1');
		tick=1;
		document.getElementById('derecha').disabled = false;
		$("#derecha").css("display", "block");
		setTimeout(function() {
			document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
		}, 800);

	}

});


		$('#tele1').keyup(function() {
			// set password variable
			var telefo = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar1",telefono:telefo}).done(function( data ) {
			 $("#conf_tel").html( data );

			});

		}).focus(function() {
			$('#confirma_telefono').show();
		}).blur(function() {
			$('#confirma_telefono').hide();
		});

		$('#tele2').keyup(function() {
			// set password variable
			var telefo = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar2",telefono:telefo}).done(function( data ) {
			 $("#conf_tel2").html( data );

			});

		}).focus(function() {
			$('#confirma_telefono2').show();
		}).blur(function() {
			$('#confirma_telefono2').hide();
		});


		$('#tele3').keyup(function() {
			// set password variable
			var telefo = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar22",telefono:telefo}).done(function( data ) {
			 $("#conf_tel3").html( data );

			});

		}).focus(function() {
			$('#confirma_telefono3').show();
		}).blur(function() {
			$('#confirma_telefono3').hide();
		});



		$('#propietario').keyup(function() {
			// set password variable
			var nombreso = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar4",nombre:nombreso}).done(function( data ) {
			 $("#conf_nom").html( data );

			});

		}).focus(function() {
			$('#confirma_nombre ').show();
		}).blur(function() {
			$('#confirma_nombre').hide();
		});

		$('#correo1').keyup(function() {
			// set password variable
			var corre = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar3",correo:corre}).done(function( data ) {
			 $("#conf_cor").html( data );

			});

		}).focus(function() {
			$('#confirma_correo').show();
		}).blur(function() {
			$('#confirma_correo').hide();
		});

		$('#correo2').keyup(function() {
			// set password variable
			var corre = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar5",correo:corre}).done(function( data ) {
			 $("#conf_cor2").html( data );

			});

		}).focus(function() {
			$('#confirma_correo2').show();
		}).blur(function() {
			$('#confirma_correo2').hide();
		});		


		$('#correo3').keyup(function() {
			// set password variable
			var corre = $(this).val();

			$.post( "../../controllers/validaciones", { action: "validar55",correo:corre}).done(function( data ) {
			 $("#conf_cor3").html( data );

			});

		}).focus(function() {
			$('#confirma_correo3').show();
		}).blur(function() {
			$('#confirma_correo3').hide();
		});		


		$('.base').unslider({

			keys: false,
			nav: false,
			arrows: false

		});


		//$("#fecha1").datepicker("setDate", new Date());
		
		$('#fecha2').datepicker({
			
    		todayBtn: false,
		    todayHighlight: true,
		    autoclose: true,
			language: 'es',
			showOnFocus: true

		});

		$('#fecha3').datepicker({
			startDate: '+0d',
    		todayBtn: false,
		    todayHighlight: true,
		    autoclose: true,
			language: 'es',
			showOnFocus: true

		});


		$('#f_ida').datepicker({
			startDate: '+0d',
    		todayBtn: false,
		    todayHighlight: true,
		    autoclose: true,
			language: 'es',
			showOnFocus: true

		});

		$('#f_vuelta').datepicker({
			startDate: '+0d',
    		todayBtn: false,
		    todayHighlight: true,
		    autoclose: true,
			language: 'es',
			showOnFocus: true

		});

		$('#f_aloja').datepicker({
			startDate: '+0d',
    		todayBtn: false,
		    todayHighlight: true,
		    autoclose: true,
			language: 'es',
			showOnFocus: true

		});
	
		$("#InputFile").change(function(){
		    readURL(this);
		});

		$('#guardia1').on('focus', function() {
			$('#pertenencia').focus();
				var cont_alert2 =$('.bbb').filter(function() { return $(this).val() == ""; }).size();
				//var cont_alert = $('.aaa p:contains("") ').size();
		//alert(cont_alert2);
				//if(cont_alert2!=0){
					if(cont_alert2  > 30 ){
						
						$.confirm({
						    title: '¡existen campos vacios !', // hides the title.
						    cancelButton: false, // hides the cancel button.
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success',
						    content: false// hides content block.
						});						

				}else{

					$('.base').unslider('animate:1');

					

				    setTimeout(function() {
				
						document.getElementById('izquierda').disabled = false;
						$("#izquierda").css("display", "block");
						document.getElementById('derecha').disabled = true;
						$("#derecha").css("display", "none");
				    	tick=1;
						$('#guardia78').focus();
						//document.getElementById("tipo1").focus();
						document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
				    }, 800);					

				}	

		});


		$('.guardia77').on('focus', function() {
				$('#idaccion').focus();
		});

		$('#jump1').on('focus', function() {
				$('#agregar2').focus();
		});

		$('#jump2').on('focus', function() {
				$('#t_trans').focus();
		});
		
		$('#jump3').on('focus', function() {
				$('#agregar').focus();
		});

		$('.guardia79').on('focus', function() {
				$('#entidad').focus();
		});

		$('.guardia80').on('focus', function() {
			$('#tipo2').dropdown('toggle');
		});

		$('.guardia81').on('focus', function() {
			$('#guardia2').dropdown('toggle');
		});

		$('#guardia2').on('focus', function() {
				$('#entidad' ).focus();
				var cont_alert4 =$('.ccc').filter(function() { return $(this).val() == ""; }).size();
				//var cont_alert = $('.aaa p:contains("") ').size();

				//if(cont_alert4!=0){
					if(cont_alert4 >50){
						$.confirm({
						    title: '¡existen campos vacios !', // hides the title.
						    cancelButton: false, // hides the cancel button.
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success',
						    content: false// hides content block.
						});	

				}else{


					//$('.base').unslider('animate:2');
				    setTimeout(function() {

						
				    	$('#prueba').focus();
				    	document.getElementById('derecha').disabled = true;
						$("#derecha").css("display", "none");
				    	tick=2;
						document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
				    }, 800);					

				}

		});

		

		$('#t_trans').multiselect({

			enableClickableOptGroups: true,
			enableCollapsibleOptGroups: false,
			onChange: function(element, checked, option) {
				var selecto=(element.val());
				if(checked === true) {

					//if(selecto==0){$('#ta_dido').css('display','block');}
				//	if(selecto==1){$('#tm_dido').css('display','block');}
				//	if(selecto==2){$('#tu_dido').css('display','block');}

				}else if(checked === false){

					if(selecto==0){$('#ta_dido').css('display','none');}
					if(selecto==1){$('#tm_dido').css('display','none');}
					if(selecto==2){$('#tu_dido').css('display','none');}

				}

			},
			maxHeight: 180,
			inheritClass: true,
			nonSelectedText: 'Seleccione tipo de transporte',
			buttonWidth: '100%'

		});


		
		$('#tipo1').on('change', function () {

     		var selectVal = $("#tipo1 option:selected").val();
			
			 if(selectVal==8){
				//alert(selectVal);
				$("#otro1a").css("display", "block");
				
				$("#otro1").focus();

			}else{

				$("#otro1a").css("display", "none");		
				$("#otro1").val("");

			}
		});

		$('#activity').on('change', function () {

			var selectVal = $("#activity option:selected").val();

			if(selectVal==0){

					$("#actv_1").css("display", "block");
					$("#actv_2").css("display", "none");
					$("#actv_3").css("display", "none");

			}else if(selectVal==1){

				    $("#actv_1").css("display", "none");
					$("#actv_2").css("display", "block");
					$("#actv_3").css("display", "none");

			}else{

					$("#actv_1").css("display", "none");
					$("#actv_2").css("display", "none");
					$("#actv_3").css("display", "block");

			}
		
		});

		$("#exit" ).click(function() {

			setTimeout(function(){

				$(location).attr('href','../requerimientos/');

			}, 1000);			
			
		});

		// ********************************************************************************************

		$("#a_tra" ).click(function(){

			if($('#transporte').prop('checked')== true && $('#t_trans option:selected').length==0){
				
				$.alert({
						    title: 'Debe indicar al menos un tipo de transporte!',
						    content: false,
						    confirmButton: true, // hides the confirm button.
						    closeIcon: false,
						    confirmButton: 'cerrar',
						    confirmButtonClass: 'btn-success'
						});
			}else{
				$('.base').unslider('animate:2');
				document.getElementById('izquierda').disabled = true;
				$("#izquierda").css("display", "none");
			}

		});

		$("#t_ocul" ).click(function(){

			$.confirm({
						    title: '¡Esta acción borrará los datos no registrados!.¿Desea continuar?',
						    content:false,
						    confirmButton: 'Si',
						    cancelButton: 'No',
						    confirmButtonClass: 'btn-primary',
    						    cancelButtonClass: 'btn-success',

						    confirm: function(){
								$('.base').unslider('animate:1');
								document.getElementById('izquierda').disabled = false;
								$("#izquierda").css("display", "block");
								$('#ta_dido').css('display','none');
								$('#tm_dido').css('display','none');
								$('#tu_dido').css('display','none');
								document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
								$('#t_trans').multiselect('deselect', ['0']);
								$('#t_trans').multiselect('deselect', ['1']);
								$('#t_trans').multiselect('deselect', ['2']);
							},

						    cancel: function(){

							}
			});	
		});


		$("#t_ocu2" ).click(function(){
			$.confirm({
						    title: '¡Esta acción borrará los datos no registrados!.¿Desea continuar?',
						    content:false,
						    confirmButton: 'Si',
						    cancelButton: 'No',
						    confirmButtonClass: 'btn-primary',
    						    cancelButtonClass: 'btn-success',

						    confirm: function(){
								$('.base').unslider('animate:1');
								document.getElementById('izquierda').disabled = false;
								$("#izquierda").css("display", "block");
								$('#ta_dido').css('display','none');
								$('#tm_dido').css('display','none');
								$('#tu_dido').css('display','none');
								document.body.scrollIntoView({behavior: 'smooth', block: 'start'});
								$('#t_trans').multiselect('deselect', ['0']);
								$('#t_trans').multiselect('deselect', ['1']);
								$('#t_trans').multiselect('deselect', ['2']);
							},

						    cancel: function(){

							}
			});	

		});

		$("#transporte") .change(function() {

			if( $('#transporte').prop('checked')== true ) {

				$("#msg_trans").val("Requiere transporte");
				$("#trans").val(1);
				$("#noveo").css("display", "block");
				//document.getElementById("a_tra").disabled=false;
				$("#t_oculto").css("display", "block");
				
				

			}else{

				$("#msg_trans").val("No requiere transporte");
				$("#trans").val(0);
				$("#noveo").css("display", "none");
				$('#t_trans').multiselect('deselect', ['0']);
				$('#t_trans').multiselect('deselect', ['1']);
				$('#t_trans').multiselect('deselect', ['2']);
				$("#t_oculto").css("display", "none");
					if ($('#alojamiento').prop('checked')== true){	
						//document.getElementById("a_tra").disabled=false;
						
						
					}else{
						//document.getElementById("a_tra").disabled=true;
						
					}

			}


		});

		$("#alojamiento") .change(function() {

			if( $('#alojamiento').prop('checked')== true ) {

				$("#msg_aloja").val("Requiere alojamiento");
				$("#aloja").val(1);
				//document.getElementById("a_tra").disabled=false;
				$("#a_oculto").css("display", "block");
				$(".t_ocu1").css("display", "none");
			}else{ 

				$("#msg_aloja").val("No requiere alojamiento");
				$("#aloja").val(0);				
				$("#a_oculto").css("display", "none");
					if ($('#transporte').prop('checked')== true ){		
					//	document.getElementById("a_tra").disabled=false;
						
					}else{
						//document.getElementById("a_tra").disabled=true;
						
					}
				$(".t_ocu1").css("display", "block");	
			}

		});

		

		$("#aruta" ).change(function() {

			if( $('#aruta').prop('checked')== true ) {

			   	document.getElementById("afase").disabled = false;
				   $("#arutaval").val(1);  

			}else{

			 	document.getElementById("afase").disabled = true;
				 $("#afase").val("");
				 $("#arutaval").val(0); 
			}

		});

		$("#apirc" ).change(function() {

			if( $('#apirc').prop('checked')== true ) {

				document.getElementById("amedida").disabled = false;
				$("#idacc").css("display", "block");
				$(".guardia79").css("display", "none");		
				$("#apircval").val(1); 	
			}else{

				document.getElementById("amedida").disabled = true;
				$("#idacc").css("display", "none");	
				$(".guardia79").css("display", "block");	
				$("#idaccion").val("");
				$("#amedida").val("");
				$("#apircval").val(0);  
				
			}
			
		});


		$("#a_propio" ).change(function() {

			if( $('#a_propio').prop('checked')== true ) {

			   	 $("#lab_propio").val(1);
			   	 $('#modal1').modal({backdrop: 'static',keyboard: false});
			   	
			}else{

			 	$("#lab_propio").val(0);
			}

		});
	
		//setTimeout(function() {	
			var identico2 = <?php echo intval($_GET["record"]); ?>;
							var table = $('#tabla').dataTable({
										  	
											  //"destroy": true,
	
											  "ajax": {
												"url": "../../data_json/data_mequipos?este="+identico2,
												"dataSrc": ""
											  },
											  "scrollX": true,
											  "scrollY": "120px",
											  "columns": [
												{ "data": "id" },	
												{ "data": "anexo" }													
													
												],
												"aoColumnDefs": [
												{
													"width": "20px",
													"aTargets": [0]
												}
											],
											//"order": [[ 0, "asc" ]],
											"bPaginate": false,
											"info":     false,
											"bFilter": false,
											"fnDrawCallback": function () {
													var rows = this.fnGetData();
													
													if ( rows.length === 0 ) {
														document.getElementById("anex").disabled=true;
													}
											}
	
											  //"aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }]
										});
	
	
								$('#tabla tbody').on( 'click', 'tr', function () {
	
									if ( $(this).hasClass('selected') ) {
										$(this).removeClass('selected');
									}
									else {
										table.$('tr.selected').removeClass('selected');
										$(this).addClass('selected');
									}
								});
		//}, 3000);

							var table2 = $('#tabla2').dataTable({
										  	
											  //"destroy": true,
	
											  "ajax": {
												"url": "../../data_json/data_mvictimas",
												"dataSrc": ""
											  },
											  "fnRowCallback": function(nRow, mData, iDisplayIndex ) {

														$('td:eq(0)', nRow).css('opacity','0');

														return nRow;
														},
											  "scrollX": true,
											  "scrollY": "130px",
											  "columns": [
													{ "data": "id" },
													{ "data": "nombre" },
													{ "data": "documento" },
													{ "data": "correo" },
													{ "data": "telefono" }
													
												],
											//"order": [[ 0, "asc" ]],
											"bPaginate": false,
											"info":     false,
											"bFilter": false
	
											  //"aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }]
										});
	
	
								$('#tabla2 tbody').on( 'click', 'tr', function () {
	
									if ( $(this).hasClass('selected') ) {
										$(this).removeClass('selected');
									}
									else {
										table.$('tr.selected').removeClass('selected');
										$(this).addClass('selected');
									}
								});


								var table5 = $('#tabla5').dataTable({
										  	
											  //"destroy": true,
	
											  "ajax": {
												"url": "../../data_json/data_mtransportes",
												"dataSrc": ""
											  },
											  "fnRowCallback": function(nRow, mData, iDisplayIndex ) {

														$('td:eq(0)', nRow).css('opacity','0');

														return nRow;
														},
											  "scrollX": true,
											  "scrollY": "130px",
											  "columns": [			
													{ "data": "id" },
													{ "data": "nombre" },
													{ "data": "documento" },
													{ "data": "telefono" },
													{ "data": "correo" },
													{ "data": "departamento" },
													{ "data": "municipio" },
													{ "data": "aerea" },
													{ "data": "c_aerea" },
													{ "data": "terflu" },
													{ "data": "c_terflu" },
													{ "data": "turba" },
													{ "data": "c_turba" },
													{ "data": "alojam" },
													{ "data": "c_alojam" }													
												],
											//"order": [[ 0, "asc" ]],
											"bPaginate": false,
											"info":     false,
											"bFilter": false
	
											  //"aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }]
										});
	
	
								$('#tabla5 tbody').on( 'click', 'tr', function () {
	
									if ( $(this).hasClass('selected') ) {
										$(this).removeClass('selected');
									}
									else {
										table.$('tr.selected').removeClass('selected');
										$(this).addClass('selected');
									}
								});



		$("#close1").click(function() {

				$.post( "../../controllers/mdetalles_controller", {

					action: "temporal",
					tipo: $('#d_tipo').val(),
					concepto: $('#d_concepto').val(),
					cantidad: $('#d_cantidad').val(),
					medida: $('#d_medida').val(),
					costo: $('#d_costo').val(),
					observaciones: $('#d_obs').val()

				}).done(function(data){

					var parsedJson = $.parseJSON(data);
					$(".message1").html(parsedJson.mensaje);

					if(parsedJson.resultado != 'error'){

						
					    setTimeout(function(){

							$("#d_tipo").val(null);
							$("#d_concepto").val(null);
							$("#d_cantidad").val(null);
							$("#d_medida").val(null);
							$("#d_obs").val(null);
							$("#d_costo").val(null);

							$('#tabla').DataTable().ajax.reload();
 							$(".alert").alert('close');
					      	$('#modal1').modal('toggle');
							$("#agregar").focus();

							$.post( "../../controllers/mdetalles_controller", { action: "sumar_costo"}).done(function( data ) {
								var parsedJson = $.parseJSON(data);
								var cos_tot=parsedJson;
								$("#totalite").val( cos_tot );
							},"json");

					    }, 3000);

					}else{

					}

				},"json");
		    //$('#activo').focus();

		});

		$(".t_guarda1").click(function() {

					$.post( "../../controllers/mtransportes_controller", {

						action: "temporal",
						nomb_p: $('#nomb_p').val(),
						t_doc_p: $('#t_doc_p').val(),
						num_doc_p: $('#num_doc_p').val(),
						tele5: $('#tele5').val(),
						depa2: $('#depa2').val(),
						muni2: $('#muni2').val(),

						r_aereo: $('#r_aereo').val(),
						f_ida: $('#f_ida').val(),
						h_ida: $('#h_ida').val(),
						f_vuelta: $('#f_vuelta').val(),
						h_vuelta: $('#h_vuelta').val(),
						a_ida: $('#a_ida').val(),
						a_vuelta: $('#a_vuelta').val(),
						a_total: $('#a_total').val(),

						r_terrestre: $('#r_terrestre').val(),						
						r_ida: $('#r_ida').val(),						
						r_vuelta: $('#r_vuelta').val(),						
						r_total: $('#r_total').val(),	

						u_terrestre: $('#u_terrestre').val(),
						u_ida: $('#u_ida').val(),						
						u_vuelta: $('#u_vuelta').val(),						
						u_total: $('#u_total').val(),

						f_aloja: $('#f_aloja').val(),						
						n_aloja: $('#n_aloja').val(),						
						aloja_total: $('#aloja_total').val()
						

					}).done(function(data){

						var parsedJson = $.parseJSON(data);
						$(".message").html(parsedJson.mensaje);

						if(parsedJson.resultado != 'error'){

							
							setTimeout(function(){

								$('#nomb_p').val(null);
								$('#t_doc_p').val(0);
								$('#num_doc_p').val(null);
								$('#tele5').val(null);

								$('#r_aereo').val(null);
								$('#f_ida').val(null);
								$('#h_ida').val(null);
								$('#f_vuelta').val(null);
								$('#h_vuelta').val(null);
								$('#a_ida').val(0);
								$('#a_vuelta').val(0);
								$('#a_total').val(0);

								$('#r_terrestre').val(null);						
								$('#r_ida').val(0);						
								$('#r_vuelta').val(0);						
								$('#r_total').val(0);	

								$('#u_terrestre').val(null);
								$('#u_ida').val(0);						
								$('#u_vuelta').val(0);						
								$('#u_total').val(0);

								$('#f_aloja').val(null);						
								$('#n_aloja').val(0);						
								$('#aloja_total').val(0);

								$('#tabla5').DataTable().ajax.reload();
								$(".alert").alert('close');
								$("#nomb_p").focus();

							}, 2000);

						}else{

						}

					},"json");
					//$('#activo').focus();

		});	


		$("#close2").click(function() {

			$.post( "../../controllers/mvictimas_controller", {

				action: "temporal",
				nombre2: $('#nombre2').val(),
				t_doc2: $('#t_doc2').val(),
				num_doc2: $('#num_doc2').val(),
				tele3: $('#tele3').val(),
				correo3: $('#correo3').val()

			}).done(function(data){

				var parsedJson = $.parseJSON(data);
				$(".message1").html(parsedJson.mensaje);

				if(parsedJson.resultado != 'error'){

					
					setTimeout(function(){

						$("#nombre2").val(null);
						$("#t_doc2").val(0);
						$("#num_doc2").val(null);
						$("#tele3").val(null);
						$("#correo3").val(null);

						$('#tabla2').DataTable().ajax.reload();
						$(".alert").alert('close');
						$('#modal2').modal('toggle');
						$("#agregar2").focus();

					}, 3000);

				}else{

				}

			},"json");
			//$('#activo').focus();

		});	

		$("#close11").click(function() {
			var mio = <?php echo intval($_GET["record"]); ?>;
			//alert(mio);
			var formData = new FormData();
			formData.append('file', $('input[type=file]')[0].files[0]);
			formData.append('action', 'temporal');
			formData.append('idea', mio);

			$.ajax({
				url: "../../controllers/madjuntos_controller",
				type: "POST",
				data: formData,
				contentType: false,
				cache: false,
				processData:false,
				success: function(data)
				{
						
					$(".message1").html(data);

							$('#modal3').scrollTop(0);
								
							setTimeout(function(){ 

								$("#InputFile").val(null);
								$("#file_url").attr('src', '');

								$(".alert").alert('close');
								$('#modal3').modal('toggle');
								$("#anex").focus();

							}, 2500);

				}
			});

			setTimeout(function(){
				$('#tabla').DataTable().ajax.reload();
				
			}, 3000);

		});		

  /*######################################### CREAR LISTA DE DOCUMENTOS CARGADAS EN BD #############################*/
  
		var guarda = $("#idea").val();
		$.post( "../../controllers/madjuntos_controller", { action: "contar_id2",guarda:guarda}).done(function( data ) {

			var parsedJson = $.parseJSON(data);
			$('#ul_adj li').remove();
			parsedJson.forEach(function(parsedJson, index) {
				var imagen =parsedJson.imagen;
				//alert(imagen);
				
				$('#ul_adj').append('<li class="list-group-item">'+imagen+'</li>');

			});	

		},"json");

			$('#quitar').click( function () {

				var value= table.$('tr.selected').children('td:first').text();
				//alert(value);
				if(!value){

						$.alert({
							title: '!Seleccione el archivo a eliminar!',
							content: false,
							confirmButton: true, // hides the confirm button.
							closeIcon: false,
							confirmButton: 'cerrar',
							confirmButtonClass: 'btn-success'
						});

				}else{

						$.confirm({

									title: '¿Desea eliminar este archivo del listado?!',
									content:false,
									confirmButton: 'Si',
									cancelButton: 'No',
									confirmButtonClass: 'btn-primary',
										cancelButtonClass: 'btn-success',

									confirm: function(){

										$.post( "../../controllers/madjuntos_controller", {action:"delete",record:value}).done(function( data ) {
											//$(".message").html(data);
											var parsedJson = $.parseJSON(data);
											$(".message").html(parsedJson.mensaje);

											setTimeout(function(){
												$('#tabla').DataTable().ajax.reload();
											}, 3000);
										});		

									},

									cancel: function(){

									}
						});

				}
				});		

			$('#quitar2').click( function () {

				var value2= table2.$('tr.selected').children('td:first').text();
				//alert(value);
				if(!value2){

						$.alert({
							title: '!Seleccione el participante a retirar!',
							content: false,
							confirmButton: true, // hides the confirm button.
							closeIcon: false,
							confirmButton: 'cerrar',
							confirmButtonClass: 'btn-success'
						});

				}else{

						$.confirm({

									title: '¿Desea retirar a este participante?!',
									content:false,
									confirmButton: 'Si',
									cancelButton: 'No',
									confirmButtonClass: 'btn-primary',
										cancelButtonClass: 'btn-success',

									confirm: function(){

										$.post( "../../controllers/mvictimas_controller", {action:"delete",record:value2}).done(function( data ) {
											//$(".message").html(data);
											var parsedJson = $.parseJSON(data);
											$(".message").html(parsedJson.mensaje);

											setTimeout(function(){

												$(".alert").alert('close');
												//$('#tabla').dataTable();
												

														$.post( "../../controllers/mvictimas_controller", { action: "search_act"}).done(function( data ) {
																
																var parsedJson = $.parseJSON(data);

																		if(parsedJson == 'si'){
																		
																			$('#tabla2').DataTable().ajax.reload();

																		}else{

																			$('#tabla2').DataTable().ajax.reload();
																		}

														},"json");	

											}, 3000);
										});		

									},

									cancel: function(){

									}
						});

				}
			});		


		$("#cancelar2").click(function() {

			$('#modal1').modal('toggle');
			$("#alojamiento").focus();

			$("#d_tipo").val(null);
			$("#d_concepto").val(null);
			$("#d_cantidad").val(null);
			$("#d_medida").val(null);
			$("#d_costo").val(null);
			$("#d_obs").val(null);

		});

		$("#cancelar22").click(function() {

			$('#modal3').modal('toggle');
			$("#InputFile").val(null);
			$("#file_url").attr('src', '');
			$("#anex").focus();

		});

		$("#cancelar3").click(function() {

			$('#modal2').modal('toggle');
			$("#agregar2").focus();

			$("#nombre2").val(null);
			$("#t_doc2").val(0);
			$("#num_doc2").val(null);
			$("#tele3").val(null);
			$("#correo3").val(null);

		});


		const formatterPeso = new Intl.NumberFormat('es-CO', {
			style: 'currency',
			currency: 'COP',
			minimumFractionDigits: 0
    	 });

		$("#agregar").click(function() {
			$('#modal3').modal({backdrop: 'static',keyboard: false});	
			
		});


		$("#agregar2").click(function() {
			$('#modal2').modal({backdrop: 'static',keyboard: false});
			
		});

		$("#anex").click(function() {
			//$('#modal3').modal({backdrop: 'static',keyboard: false});
			$(location).attr('href','frm_adjuntados?record='+$("#idea").val()+'&origin=2');
			
		});



// para consultar y cargar los segmentos ***********************************************************
		$.post( "../../controllers/msegmentos_controller", { action: "get_segmentos"}).done(function( data ) {
			 $("#segmento" ).html( data );

		});

// para consultar y cargar los territorios ***********************************************************

//alert($('#distribuidora').val());
		$.post( "../../controllers/mterritorios_controller", { action: "get_territorios",modulo: $("#zona").val(),distribuidora: $("#distribuidora").val()}).done(function( data ) {
			 $("#territorio_g" ).html( data );

		});

		$('#zona').change(function(event) {
			
					$.post( "../../controllers/mterritorios_controller", { action: "get_territorios",modulo: $("#zona").val(),distribuidora: $("#distribuidora").val()}).done(function( data ) {
					 $("#territorio_g" ).html( data );

				});
		});

		$.post( "../../controllers/mterritorios_controller", { action: "get_gterritorios",distribuidoras: $("#distribuidora").val()}).done(function( data ) {
			 $("#territorio" ).html( data );

		});

		$.post( "../../controllers/grupos_controller", { action: "get_marcas"}).done(function( data ) {
			 $("#grupo" ).html( data );

		});

		/*$.post( "../../controllers/mdistribuidoras_controller", { action: "get_distri"}).done(function( data ) {
			 $("#distribuidora" ).html( data );

		});*/

		/*$.post( "../../controllers/mregiones_controller", { action: "get_regi",departamento:$("#departamento").val()}).done(function( data ) {
			 $("#region" ).html( data );
				alert( $("#region" ).val());
		});*/

		//** enviar los datos al controlador ***********************************************************
		$("#save").click(function() {
				//alert($("#t_trans").val());
				
				$.post( "../../controllers/mrequerimientos_controller", {

					action: "add_edit",
					id:	$("#idea").val(),				
					fecha1: $("#fecha1").val(),
					departamento: $("#departamento").val(),
					municipio: $("#municipio").val(),
					cpoblado: $("#cpoblado").val(),

					a_primario: $("#a_primario").val(),
					acceso1: $("#acceso1").val(),
					acceso2: $("#acceso2").val(),
					num_dir: $("#num_dir").val(),
					a_referencia: $("#a_referencia").val(),
					referencia: $("#referencia").val(),

					rt_nombre1: $("#rt_nombre1").val(),
					rt_nombre2: $("#rt_nombre2").val(),

					rt_tdoc: $("#rt_tdoc").val(),
					rt_num_doc: $("#rt_num_doc").val(),
					tele1: $("#tele1").val(),
					correo1: $("#correo1").val(),

					rn_nombre1: $("#rn_nombre1").val(),
					rn_tdoc: $("#rn_tdoc").val(),
					rn_num_doc: $("#rn_num_doc").val(),
					tele2: $("#tele2").val(),
					correo2: $("#correo2").val(),					
					fecha2: $("#fecha2").val()

				}).done(function(data){

					var parsedJson = $.parseJSON(data);
					$(".message").html(parsedJson.mensaje);

					if(parsedJson.resultado != 'error'){
				
					    	setTimeout(function(){

								$(location).attr('href','index');

					        }, 1500);

					}

				},"json");

		});//end save


//################################  VALIDACIONES############################################



//############################################################################

function cajas_obj(){

	var totales=document.getElementById('caja_t').value;
	var propias=document.getElementById('caja_p').value;
	var objetivo= totales-propias;

	document.getElementById('caja_o').value=objetivo;
}


function menor(){
	var totales2=document.getElementById('caja_t').value;
	var propias2=document.getElementById('caja_p').value;

		if(propias2 <= totales2){


		}else{

			document.getElementById('ms_caja_p').innerHTML = 'Debe ser menor o igual a "Total de Cajas"';

		}
}
//################################  VALIDACIONES  ############################################

          //****longitud de campos********************************************

	$(function(){

		$('#tele3').maxLength(15);

		$("#nombre").maxLength(200);
		$("#acceso1").maxLength(100);
		$("#acceso2").maxLength(100);
		$("#num_dir").maxLength(10);		
		$("#referencia").maxLength(100);
		$("#rt_nombre1").maxLength(100);
		$("#rt_nombre2").maxLength(100);
		$("#rt_apellido1").maxLength(100);
		$("#rt_apellido2").maxLength(100);		
		$("#rt_num_doc").maxLength(20);
		$("#tele1").maxLength(15);
		$("#correo1").maxLength(150);		
		$("#otro1").maxLength(100);
		$("#rn_nombre1").maxLength(100);
		$("#rn_nombre2").maxLength(100);
		$("#rn_apellido1").maxLength(100);
		$("#rn_apellido2").maxLength(100);
		$("#rn_num_doc").maxLength(20);
		$("#tele2").maxLength(15);
		$("#correo2").maxLength(150);
		$("#afase").maxLength(100);
		$("#amedida").maxLength(100);
		$("#idaccion").maxLength(100);
		$("#entidad").maxLength(100);
		$("#num_vic").maxLength(5);
		$("#descripcion").maxLength(200);
		$("#d_concepto").maxLength(150);
		$("#d_cantidad").maxLength(8);
		$("#d_costo").maxLength(15);
		$("#d_obs").maxLength(200);
		$("#num_doc2").maxLength(20);
		$("#correo3").maxLength(150);
		$("#nombre2").maxLength(100);

	});

            function alsaliro4(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 4){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 4 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsaliro(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 5){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 5 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsalira(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 7){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 7 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsalira2(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 9){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 9 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsalira3(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 9){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 9 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsalir(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 2){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 2 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

            function alsalir2(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 12){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 12 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

             function alsalir3(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 12){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 13 caractéres';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }

              function alsalir4(e){
               var caso1=document.getElementById(e).value;
                if(caso1.length < 1){
                   	document.getElementById('ms_'+ e).innerHTML = 'Debe escribir al menos 1 número';
                }else{
                   document.getElementById('ms_'+ e).innerHTML = '';
                }
            }



function esnombre(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_nombre').style.display = 'block';
                       	document.getElementById("ms_nombre").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_nombre").innerHTML = '';
                       	return patron.test(n);

                    }

}

function esrazon(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_razon').style.display = 'block';
                       	document.getElementById("ms_razon").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_razon").innerHTML = '';
                       	return patron.test(n);

                    }

}

function escedula1(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[0-9]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_rt_num_doc').style.display = 'block';
                       	document.getElementById("ms_rt_num_doc").innerHTML = 'Use solo números';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_rt_num_doc").innerHTML = '';
                       	return patron.test(n);

                    }

}

function escedula2(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[0-9]$/;
	n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_rn_num_doc').style.display = 'block';
					   document.getElementById("ms_rn_num_doc").innerHTML = 'Use solo números';
						return patron.test(n);

				}else{

					   document.getElementById("ms_rn_num_doc").innerHTML = '';
					   return patron.test(n);

				}

}

function escedula3(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[0-9]$/;
		n = String.fromCharCode(k);

					if(patron.test(n)==''){

						document.getElementById('ms_num_doc2').style.display = 'block';
						document.getElementById("ms_num_doc2").innerHTML = 'Use solo números';
							return patron.test(n);

					}else{

						document.getElementById("ms_num_doc2").innerHTML = '';
						return patron.test(n);

					}

}

function esacceso1(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ ]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_acceso1').style.display = 'block';
                       	document.getElementById("ms_acceso1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_acceso1").innerHTML = '';
                       	return patron.test(n);

                    }

}


function esacceso2(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ ]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_acceso2').style.display = 'block';
                       	document.getElementById("ms_acceso2").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_acceso2").innerHTML = '';
                       	return patron.test(n);

                    }

}

function esreferencia(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_referencia').style.display = 'block';
                       	document.getElementById("ms_referencia").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_referencia").innerHTML = '';
                       	return patron.test(n);

                    }

}



function estele1(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /[0-9\-\(\)]/;
	n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_tele1').style.display = 'block';
					   document.getElementById("ms_tele1").innerHTML = 'Use solo números y "-"';
						return patron.test(n);

				}else{

					   document.getElementById("ms_tele1").innerHTML = '';
					   return patron.test(n);

				}

}

function esnumdir(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /[0-9]/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_num_dir').style.display = 'block';
                       	document.getElementById("ms_num_dir").innerHTML = 'Use solo números';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_num_dir").innerHTML = '';
                       	return patron.test(n);

                    }

}

function estele2(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /[0-9\-\(\)]/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_tele2').style.display = 'block';
                       	document.getElementById("ms_tele2").innerHTML = 'Use solo números y "-"';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_tele2").innerHTML = '';
                       	return patron.test(n);

                    }

}

function estele3(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /[0-9\-\(\)]/;
		n = String.fromCharCode(k);

						if(patron.test(n)==''){

							document.getElementById('ms_tele3').style.display = 'block';
							document.getElementById("ms_tele3").innerHTML = 'Use solo números y "-"';
								return patron.test(n);

						}else{

							document.getElementById("ms_tele3").innerHTML = '';
							return patron.test(n);

						}

}

function escorreo1(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /[A-ZÑ0-9\_\-\.\+\@\ ]/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_correo1').style.display = 'block';
                       	document.getElementById("ms_correo1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_correo1").innerHTML = '';
                       	return patron.test(n);

                    }

}

function escorreo2(e) {

k = (document.all) ? e.keyCode : e.which;
if (k==8 || k==0 || k==13) return true;
patron = /[A-ZÑ0-9\_\-\.\+\@\ ]/;
n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_correo2').style.display = 'block';
					   document.getElementById("ms_correo2").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
						return patron.test(n);

				}else{

					   document.getElementById("ms_correo2").innerHTML = '';
					   return patron.test(n);

				}

}

function escorreo3(e) {

k = (document.all) ? e.keyCode : e.which;
if (k==8 || k==0 || k==13) return true;
patron = /[A-ZÑ0-9\_\-\.\+\@\ ]/;
n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_correo3').style.display = 'block';
					   document.getElementById("ms_correo3").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
						return patron.test(n);

				}else{

					   document.getElementById("ms_correo3").innerHTML = '';
					   return patron.test(n);

				}

}

function esdescri(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_descripcion').style.display = 'block';
                       	document.getElementById("ms_descripcion").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_descripcion").innerHTML = '';
                       	return patron.test(n);

                    }

}

function esdobs(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

					if(patron.test(n)==''){

						document.getElementById('ms_d_obs').style.display = 'block';
						document.getElementById("ms_d_obs").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
							return patron.test(n);

					}else{

						document.getElementById("ms_d_obs").innerHTML = '';
						return patron.test(n);

					}

}

function esdconcepto(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[A-ZÑ0-9\ \.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_d_concepto').style.display = 'block';
                       	document.getElementById("ms_d_concepto").innerHTML = 'Use mayusculas y no incluya caractéres especiales ni espacios';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_d_concepto").innerHTML = '';
                       	return patron.test(n);

                    }

}

function esdcantidad(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[0-9]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_d_cantidad').style.display = 'block';
                       	document.getElementById("ms_d_cantidad").innerHTML = 'Use solo nuúmeros';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_d_cantidad").innerHTML = '';
                       	return patron.test(n);

                    }

}


function esdcantidad2(e) {

k = (document.all) ? e.keyCode : e.which;
if (k==8 || k==0 || k==13) return true;
patron = /^[0-9\.]$/;
n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_d_costo').style.display = 'block';
					   document.getElementById("ms_d_costo").innerHTML = 'Use solo nuúmeros y punto decimal';
						return patron.test(n);

				}else{

					   document.getElementById("ms_d_costo").innerHTML = '';
					   return patron.test(n);

				}

}


function esa_comodato(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[0-9\.\-]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_a_comodato').style.display = 'block';
                       	document.getElementById("ms_a_comodato").innerHTML = 'Use solo números y no incluya caractéres especiales ni espacios';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_a_comodato").innerHTML = '';
                       	return patron.test(n);

                    }

}


function sig_1(){

	var vuelta=document.getElementById("caja_p");
	vuelta.focus();

}



function sig_2(){

	var vuelta33=document.getElementById("aviso");
	vuelta33.focus();

}

//************************************************************************/

			function esnombre2(e) {

					k = (document.all) ? e.keyCode : e.which;
					if (k==8 || k==0 || k==13) return true;
					patron = /^[A-ZÑ0-9\ \.\-]$/;
					n = String.fromCharCode(k);

							if(patron.test(n)==''){

								document.getElementById('ms_rt_nombre1').style.display = 'block';
								document.getElementById("ms_rt_nombre1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
									return patron.test(n);

							}else{

								document.getElementById("ms_rt_nombre1").innerHTML = '';
								return patron.test(n);

							}

			}


//************************************************************************/

function esnombre4(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[A-ZÑ0-9\ \.\-]$/;
		n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_nombre2').style.display = 'block';
					document.getElementById("ms_nombre2").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
						return patron.test(n);

				}else{

					document.getElementById("ms_nombre2").innerHTML = '';
					return patron.test(n);

				}

}
//************************************************************************



			function esentidad(e) {

				k = (document.all) ? e.keyCode : e.which;
				if (k==8 || k==0 || k==13) return true;
				patron = /^[A-ZÑ0-9\ \.\-]$/;
				n = String.fromCharCode(k);

					if(patron.test(n)==''){

						document.getElementById('ms_entidad').style.display = 'block';
						document.getElementById("ms_entidad").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
							return patron.test(n);

					}else{

						document.getElementById("ms_entidad").innerHTML = '';
						return patron.test(n);

					}

			}


//************************************************************************/


function esvictimas(e) {

	k = (document.all) ? e.keyCode : e.which;
	if (k==8 || k==0 || k==13) return true;
	patron = /^[0-9]$/;
	n = String.fromCharCode(k);

                    if(patron.test(n)==''){

                    	document.getElementById('ms_num_vic').style.display = 'block';
                       	document.getElementById("ms_num_vic").innerHTML = 'Use solo números';
                        	return patron.test(n);

                    }else{

                       	document.getElementById("ms_num_vic").innerHTML = '';
                       	return patron.test(n);

                    }

}


//************************************************************************/

			function esnombre2(e) {

					k = (document.all) ? e.keyCode : e.which;
					if (k==8 || k==0 || k==13) return true;
					patron = /^[A-ZÑ0-9\ \.\-]$/;
					n = String.fromCharCode(k);

							if(patron.test(n)==''){

								document.getElementById('ms_rt_nombre1').style.display = 'block';
								document.getElementById("ms_rt_nombre1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
									return patron.test(n);

							}else{

								document.getElementById("ms_rt_nombre1").innerHTML = '';
								return patron.test(n);

							}

			}

//************************************************************************

			function esapellido1(e) {

				k = (document.all) ? e.keyCode : e.which;
				if (k==8 || k==0 || k==13) return true;
				patron = /^[A-ZÑ0-9\ \.\-]$/;
				n = String.fromCharCode(k);

					if(patron.test(n)==''){

						document.getElementById('ms_rt_apellido1').style.display = 'block';
						document.getElementById("ms_rt_apellido1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
							return patron.test(n);

					}else{

						document.getElementById("ms_rt_apellido1").innerHTML = '';
						return patron.test(n);

					}

			}

			//************************************************************************/

			function esnombre3(e) {

				k = (document.all) ? e.keyCode : e.which;
				if (k==8 || k==0 || k==13) return true;
				patron = /^[A-ZÑ0-9\ \.\-]$/;
				n = String.fromCharCode(k);

						if(patron.test(n)==''){

							document.getElementById('ms_rn_nombre1').style.display = 'block';
							document.getElementById("ms_rn_nombre1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
								return patron.test(n);

						}else{

							document.getElementById("ms_rn_nombre1").innerHTML = '';
							return patron.test(n);

						}

			}

//************************************************************************

		function esapellido2(e) {

				k = (document.all) ? e.keyCode : e.which;
				if (k==8 || k==0 || k==13) return true;
				patron = /^[A-ZÑ0-9\ \.\-]$/;
				n = String.fromCharCode(k);

				if(patron.test(n)==''){

					document.getElementById('ms_rn_apellido1').style.display = 'block';
					document.getElementById("ms_rn_apellido1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
						return patron.test(n);

				}else{

					document.getElementById("ms_rn_apellido1").innerHTML = '';
					return patron.test(n);

				}

		}
//************************************************************************
function esotro1(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[A-ZÑ0-9\ \.\-]$/;
		n = String.fromCharCode(k);

		if(patron.test(n)==''){

			document.getElementById('ms_otro1').style.display = 'block';
			document.getElementById("ms_otro1").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
				return patron.test(n);

		}else{

			document.getElementById("ms_otro1").innerHTML = '';
			return patron.test(n);

		}

}

//************************************************************************/
function esafase(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[A-ZÑ0-9\ \.\-]$/;
		n = String.fromCharCode(k);

		if(patron.test(n)==''){

			document.getElementById('ms_afase').style.display = 'block';
			document.getElementById("ms_afase").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
				return patron.test(n);

		}else{

			document.getElementById("ms_afase").innerHTML = '';
			return patron.test(n);

		}

}


//************************************************************************
function esamedida(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[A-ZÑ0-9\ \.\-]$/;
		n = String.fromCharCode(k);

		if(patron.test(n)==''){

			document.getElementById('ms_amedida').style.display = 'block';
			document.getElementById("ms_amedida").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
				return patron.test(n);

		}else{

			document.getElementById("ms_amedida").innerHTML = '';
			return patron.test(n);

		}

}
//************************************************************************/
function esidaccion(e) {

		k = (document.all) ? e.keyCode : e.which;
		if (k==8 || k==0 || k==13) return true;
		patron = /^[A-ZÑ0-9\ \.\-]$/;
		n = String.fromCharCode(k);

		if(patron.test(n)==''){

			document.getElementById('ms_idaccion').style.display = 'block';
			document.getElementById("ms_idaccion").innerHTML = 'Use mayusculas y no incluya caractéres especiales';
				return patron.test(n);

		}else{

			document.getElementById("ms_idaccion").innerHTML = '';
			return patron.test(n);

		}

}
//************************************************************************/

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