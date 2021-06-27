<?php

//include("../../lib/validar_session.php");
include("../../lib/validar_session.php");
ValidaSession("../login");
//VerificarAdmin($_SESSION['rolx']);

?>

<?php include("../layouts/constantes.php")?>
<?php include_once("../layouts/cabezera.php") ?>

<div class="message"></div>

<form id="form" role="form" enctype="multipart/form-data">

		<input type="hidden" id="distribuidora" value="<?php echo intval($_SESSION['distribuidora']); ?>">
		<input type="hidden" id="region" value="<?php echo intval($_SESSION['region']); ?>">
		<input type="hidden" id="idea" value="<?php echo intval($_GET["record"]); ?>">
		
	<div class="col-md-1">
		<div class="flotante">
			<br>
			<button id="volver" class="btn btn-primary oculto-impresion" type="button" style="width:60px;height:60px;font-size:x-large;"><i  class="fa fa-fw   fa-mail-reply"></i></button>
		</div>
	</div>

<div class="row">
	
 	<div class="col-md-12">
	
		<div class="box-header with-border" tabindex="-1">
			<h3 class="box-title">DOCUMENTOS ANEXOS</h3>
		</div> <!--/.box-header	-->			
			
		<div class="box box-primary" >

			<div class="box-body" >	

				<div class="form-group-sm">
					<div id="docum"></div>	
				</div>

			</div>

		</div>	
	
 	</div>	

</div>

</form>





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
<script src="../../plugins/select3/bootstrap-select.min.js"></script>
<script src="../../plugins/select3/i18n/defaults-es_ES.min.js"></script>
<script src="../../plugins/bootstrap_toggle/bootstrap-toggle.min.js"></script>


<link rel="stylesheet" href="../../plugins/confirma/jquery-confirm.min.css" type="text/css"/>
<link rel="stylesheet" href="../../css/style_format_pass.css" type="text/css"/>
<link rel="stylesheet" href="../../plugins/datepicker/datepicker3.css" type="text/css"/>
<link rel="stylesheet" href="../../plugins/unslider/unslider.css">
<link rel="stylesheet" href="../../plugins/leaflet/leaflet.css"/>
<link rel="stylesheet" href="../../css/reportes.css"  type="text/css" media="all"/>
<link rel="stylesheet" href="../../plugins/select3/bootstrap-select.min.css">
<link rel="stylesheet" href="../../plugins/bootstrap_toggle/bootstrap-toggle.min.css">



<script type="text/javascript">

	$(document).ready(function() {

		var desh=<?php echo $_SESSION['rolx'];  ?>;//verifica el rol del usuario

		if (desh==2 || desh==4){ //si el rol del usuario es SUPERVISOR... o programador
			
		}else{
			
		}


//#########################################INSERTAR LOS DIVS CON LA COSNSULA DE ADJUNTOS ##################################

		$.post( "../../controllers/madjuntos_controller", { action: "search",record:<?php echo intval($_GET["record"]); ?>}).done(function( data ) {

			var parsedJson = $.parseJSON(data);
				
			
				parsedJson.forEach(function(parsedJson, index) {
					//console.log("indice " + index + " | tipo " + parsedJson.tipo + " concepto: " + parsedJson.concepto + " cantidad: " + parsedJson.cantidad + " medida: " + parsedJson.medida + " observaciones: " + parsedJson.observaciones)
				
					var imagen =parsedJson.imagen;
					
						if(imagen != null && index > 0){

							$('#docum').append('<iframe src="../../dist/img/adjuntos/'+imagen+'"  width="100%" height="480px"></iframe>');	

						}else{

							$('#docum').append('<iframe src="../../dist/img/adjuntos/'+imagen+'"  width="100%"  height="480px"></iframe>');	
							//$('#docum').append('<div class="col-auto bg-danger p-5 text-center">NO HAY ARCHIVOS ADJUNTOS!!</div>');	
						
						}	

				});

		});	

//##############################INSERTAR LOS DIVS CON LA COSNSULA DE  LA TABLA DETALLES ###############################################


/*
		['image/jpg', 'application/pdf']

$('#print').click( function () {

		setTimeout(function () { 
			window.print(); 
		}, 500);
		
	});	*/


	$("#volver").click(function() {
			var origin=<?php echo intval($_GET["origin"]); ?>;
		if(origin==1){
			$(location).attr('href','frm_ver?record='+$("#idea").val());
		}else{
			$(location).attr('href','frm_editar?record='+$("#idea").val());
		}

	});

});	


if (window.matchMedia("(min-width: 200px) and (max-width: 370px)").matches) {

		$("#pr1").css({"width": "100%", "overflow": "auto"});
		$("#pr2").css({"width": "216mm", "height": "100%"});
		//$("#print").css("display","none");
		$(".flotante").css("opacity","0.8");

} else {


}



//################################################################### GUARDAR APROBACON ###############################################
			/*$('#print').balloon({ 
				html: true, 
					position: 'right',
					contents: 'IMPRIMIR' ,
							
						css: {
					fontSize: 12,
					fontWeight: 'bold',
					backgroundColor: '#3366cc',
					color: '#fff'
				} 
			});*/

			$('#volver').balloon({ 
				html: true, 
					position: 'right',
					contents: 'REGRESAR' ,
							
						css: {
					fontSize: 12,
					fontWeight: 'bold',
					backgroundColor: '#3366cc',
					color: '#fff'
				} 
			});

			$('.carousel').carousel({
				interval: false,
				wrap:true
			});

</script>
<?php include_once("../layouts/pie.php") ?>