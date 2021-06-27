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
		

<div class="row">

	<div class="col-md-1">
		<div class="flotante">
			<button id="print" class="btn btn-primary oculto-impresion " type="button" style="width:60px;height:60px;font-size:x-large;"><i class="fa fa-fw fa-print"></i></button>
			<button id="volver" class="btn btn-primary oculto-impresion" type="button" style="width:60px;height:60px;font-size:x-large;"><i  class="fa fa-fw   fa-mail-reply"></i></button>
		</div>
	</div>

	<div class="col-md-11" style="width:216mm; height:356mm;" id="pr1" >

		<div class="box-header with-border" tabindex="-1">
			<h3 class="box-title">FORMATO LISTADO DE PARTICIPANTES</h3>
		</div> <!--/.box-header	-->

		<div class="box box-primary" id="pr2">
			<div class="box-body " >
		
				<div class="contenedorw" id="printJS-form">
					
					<img src="../../dist/img/unidadvictimaslogo2018-2.png" alt="logo" class="caja1 logunivic bnn">
					
					<div class="caja1 tit_1 fro" style="color:#fff;">FORMATO LISTADO DE PARTICIPANTES</div>
					<div class="caja1 tit_1">PROCEDIMIENTO: ESTRATEGIAS DE REPARACIÓN INTEGRAL</div>
					<div class="caja1 tit_1">PROCESO: REPARACIÓN INTEGRAL</div>
					<div class="caja1 letrap cj16p">Código: 400.08.15-67</div>
					<div class="caja1 letrap cj16p">Versión: 04</div>
					<div class="caja1 letrap cj16p">Fecha: 14/02/2018</div>
					<div class="caja1 pg6_8 cj16p" >Página: 1 de 1</div>
					<div class="caja1 tit_2">CONTRATO No.  ____ de 2021</div>
					<div class="caja1 fgr">OBJETO DEL CONTRATO: </div>
					<div class="caja1 tit_3">Prestar sus servicios para apoyar la organización, administración y producción de las jornadas o acciones para la implementación de medidas de reparación integral a las víctimas del conflicto armado que le sean solicitadas por LA UNIDAD, de acuerdo con los requerimientos técnicos.</div>
					<div class="caja1 tit_2 faz" style="color:#fff !important;">LISTADO DE VICTIMAS PARTICIPANTES EN EL EVENTO</div>
					

					<div class="caja1 fgr pg1_3">NOMBRE DEL EVENTO:</div>
					<div class="caja1 pg3_8" id="nombre"></div>

					<div class="caja1 finito2 tit_2"></div>

					<div class="caja1 faz aiz" style="color:#fff !important;">N° EVENTO:</div><div class="caja1 cj24p" id="id"></div>
					<div class="caja1 fgr letrap">FECHA DE SOLICITUD:</div><div class="caja1 cj24p" id="fecha1"></div>
					<div class="caja1 fgr letrap">DIRECCION TERRITORIAL:</div><div class="caja1 cj24p pg6_8" id="dir_terri" style="line-height: 10px;"></div>

					<div class="caja1 tit_2 finito"></div>

				</div>	

				<div class="contenedorw">
					<div class="caja1 pg1_3 fgr" >NOMBRE Y APELLIDO</div>
					<div class="caja1 pg3_5 fgr " >Nro. DE DOCUMENTO</div>
					<div class="caja1 pg5_6 fgr" >TELÉFONO</div>
					<div class="caja1 pg6_8 fgr" >CORREO</div>
				</div>
				<div class="conten_gen" id="participantes"></div>

				<div class="contenedorx">
					<div class="caja1 tit_2 finito"></div>
					<div class="caja1 tit_2 faz" style="color:#fff !important;"></div>
					<div class="caja1 tit_2 finito"></div>	
					
				</div>
			 
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


		$.post( "../../controllers/msolicitudes_controller", { action: "search",record:<?php echo intval($_GET["record"]); ?>}).done(function( data ) {

		//alert(data);
			var parsedJson = $.parseJSON(data);

			var idd=parsedJson.id.toString();
			$("#id").html(idd.padStart(4, 0));

			$("#nombre").html(parsedJson.nombre);
			$("#fecha1").html(parsedJson.fecha1);

			var bdep =parsedJson.departamento;

			$.post( "../../controllers/mgeograficas_controller", { action: "get_departamentos_e",departamento:bdep}).done(function( data ) {

				$("#departamento" ).html( data );
				$("#dir_terri" ).html( data );
				

			});	



		});

//#########################################INSERTAR LOS DIVS CON LA COSNSULA DE  LA TABLA DETALLES#####################################

		$.post( "../../controllers/mvictimas_controller", { action: "search",record:<?php echo intval($_GET["record"]); ?>}).done(function( data ) {

			var parsedJson = $.parseJSON(data);

			
				parsedJson.forEach(function(parsedJson, index) {
					//console.log("indice " + index + " | tipo " + parsedJson.tipo + " concepto: " + parsedJson.concepto + " cantidad: " + parsedJson.cantidad + " medida: " + parsedJson.medida + " observaciones: " + parsedJson.observaciones)
				
					var nombre2 =parsedJson.nombre2;
					var t_doc =parsedJson.t_doc;
							switch (t_doc) {
								case 0:var med='CC';break;
								case 1:var med='CE';break;
								case 2:var med='PA';break;
							}
					var num_doc2 =parsedJson.num_doc2;
					var docu=med+'-'+num_doc2;		
					var tele3 =parsedJson.tele3;
					var correo3 =parsedJson.correo3;	
				if(nombre2 != null){
					$('#participantes').append('<div class="caja1 pg1_3 aiz" >'+nombre2+'</div><div class="caja1 pg3_5 p">'+docu+'</div><div class="caja1 pg5_6">'+tele3+'</div><div class="caja1 pg6_8 aiz">'+correo3+'</div>');
				}			
					

				});

		});	

//##############################INSERTAR LOS DIVS CON LA COSNSULA DE  LA TABLA DETALLES ###############################################

	$('#print').click( function () {

		setTimeout(function () { 
			window.print(); 
		}, 500);
		
	});	


	$("#volver").click(function() {
		$(location).attr('href','frm_reportar?record='+$("#idea").val());
	});

});	


if (window.matchMedia("(min-width: 200px) and (max-width: 370px)").matches) {

		$("#pr1").css({"width": "100%", "overflow": "auto"});
		$("#pr2").css({"width": "216mm", "height": "100%"});
		$("#print").css("display","none");
		$(".flotante").css("opacity","0.9");

} else {
	

}



//################################################################### GUARDAR APROBACON ###############################################
			$('#print').balloon({ 
				html: true, 
					position: 'right',
					contents: 'IMPRIMIR' ,
							
						css: {
					fontSize: 12,
					fontWeight: 'bold',
					backgroundColor: '#3366cc',
					color: '#fff'
				} 
			});

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
</script>
<?php include_once("../layouts/pie.php") ?>