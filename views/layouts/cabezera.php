<!DOCTYPE html>
<html>
  <head>
		<style type="text/css">
			.multiselect-container {
				width: 100% !important;
			}
		</style>
	<?php
    //----------------------------------------------------------------
	     echo $constante["tipo_documento"];
    //----------------------------------------------------------------
	 ?>
    <title><?php echo $constante["titulo_pag"];?></title>
    <?php
	//----------------------------------------------------------------
 	     echo $constante["favi_ico"];
	//----------------------------------------------------------------
 	     echo $constante["meta_viewport"];
	//----------------------------------------------------------------
	//--------- Se imprimien los CSS ---------------------------------
	//----------------------------------------------------------------
 	     echo $constante["css_bootstrap"];
 	     echo $constante["css_iconos"];
 	     echo $constante["css_iconos2"];
 	     echo $constante["css_datatable"];
 	     echo $constante["css_tema"];
		  echo $constante["css_skyn"];
		  
	//----------------------------------------------------------------
	//-- Se imprimente las etiquetas html de escape para validar el --
	//-- Soporte de IExploer de HTML5                               --
	//----------------------------------------------------------------
    ?>
    <!--[if lt IE 9]>
    <?php
	//----------------------------------------------------------------
 	     echo $constante["js_cb1"];
		 echo $constante["js_cb2"];
	//----------------------------------------------------------------
    ?>
    <![endif]-->


	<?php
	//----------------------------------------------------------------
	//-- SE IMPRIMEN LOS JS PARA ARMAR TODA LA PAGINA               --
	//-- ESTAN DEFINIDOS EN EL ARCHIVO CONSTANTES.PHP               --
	//----------------------------------------------------------------
 	     echo $constante["js_jq"];
		 echo $constante["js_boo"];
	     echo $constante["js_lte"];
	     echo $constante["js_datatable"];
		 echo $constante["js_boo_datatable"];

	//----------------------------------------------------------------
    ?>

		<script Language="JavaScript">
			if(history.forward(1)){
			history.replace(history.forward(1));
			}
		</script>

  </head>

  <body class="skin-red sidebar-mini">
    <div class="wrapper">
	<?php //      <!-- Main Header -->?>
      <header class="main-header">
    <?php
	//----------------------------------------------------------------
	//-- Logotipo superior izquierdo                                --
	//----------------------------------------------------------------
                include_once("logotipo.php");
	//----------------------------------------------------------------
	//-- Barra de Navegacion Superior                               --
	//----------------------------------------------------------------
                include_once("barra_navegacion_superior.php");
	//----------------------------------------------------------------
	?>
      </header>
      <aside class="main-sidebar ">
        <section class="sidebar">
 <?php
	//----------------------------------------------------------------
	//-- Datos del Usuario que esta en Linea                        --
	//----------------------------------------------------------------
                include_once("datos_usuario.php");
	//----------------------------------------------------------------
	//-- Buscador Superior Izquierdo                                --
	//----------------------------------------------------------------
               // include_once("buscador.php");
	//----------------------------------------------------------------
	//-- Menu Lateral Izquierdo                                     --
	//----------------------------------------------------------------
                include_once("menu_lateral_izquierdo.php");
	//----------------------------------------------------------------
	
	?>
        </section>

      </aside>

      <div id="content-wrapper" class="content-wrapper">
	<?php
	    // <!-- Content Header (Page header) -->
		//----------------------------------------------------------------

		
		//-- Barra de Ubicacion de donde esta el Usuario en el Sistema  --
		//----------------------------------------------------------------
        //      include_once("ubicacion_sistema.php");
		//----------------------------------------------------------------
		//<!-- Main content -->
	?>
        <section class="content">
