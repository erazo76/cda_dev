<?php

//print_r($_SESSION);

@$id_sesion = $_SESSION['idsessionx'];
@$rol = $_SESSION['rolx'];

if(!empty($id_sesion) && ($rol==4 )){//privilegios del programador



	echo '<ul class="sidebar-menu">';

		echo ' <li class="header">MENU</li>';
		echo ' <li class="treeview"><a href="#"><i class="fa fa-cog fa-lg"></i> <span>Procesos</span> <i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu">';
		//echo '<li><a href="../inventarios/"><i class="fa fa-cubes"></i> <span>Unidades</span></a></li>';	
		//echo '<li><a href="../requerimientos/"><i class="fa fa-certificate "></i> <span>Entregas</span></a></li>';
		echo '<li><a href="../solicitudes/"><i class="fa fa-certificate "></i> <span>Requerimientos</span></a></li>';
		echo '<li><a href="../solicitudes/dashboard"><i class="fa fa-bar-chart"></i> <span>Informes</span></a></li>';
			//echo '<li><a href="../mapa/"><i class="fa fa-link"></i> <span>Geolocalización</span></a></li>';
		echo '</ul>';
		echo '</li>';

		echo ' <li class="treeview"><a href="#"><i class="fa fa-wrench fa-lg"></i> <span>Administrador</span> <i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu">';

			echo '<li><a href="../usuarios/"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>';
			//echo '<li><a href="../segmentos/"><i class="fa fa-link"></i> <span>Segmentos</span></a></li>';
			//echo '<li><a href="../territorios/"><i class="fa fa-flag"></i> <span>Territorios</span></a></li>';
			//echo '<li><a href="../regiones/"><i class="fa fa-globe"></i> <span>Regiones</span></a></li>';
			//echo '<li><a href="../distribuidoras/"><i class="fa fa-truck"></i> <span>Departamentos</span></a></li>';
			//echo '<li><a href="../grupos/"><i class="fa fa-bookmark"></i> <span>Dependencias</span></a></li>';

		echo '</ul>';
		echo '</li>';

	echo '</ul>';

	

}


if(!empty($id_sesion) && ($rol == 1)){//privilegios de administrador

	echo '<ul class="sidebar-menu">';
		echo ' <li class="header">MENU</li>';
		echo ' <li class="treeview"><a href="#"><i class="fa fa-wrench fa-lg"></i> <span>Administrador</span> <i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu">';
			echo '<li><a href="../usuarios/"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>';
			//echo '<li><a href="../grupos/"><i class="fa fa-bookmark"></i> <span>Dependencias</span></a></li>';
			//echo '<li><a href="../regiones/"><i class="fa fa-globe"></i> <span>Regiones</span></a></li>';
			//echo '<li><a href="../distribuidoras/"><i class="fa fa-truck"></i> <span>Departamentos</span></a></li>';
			echo '</ul>';
		echo '</li>';
	
	echo '</ul>';

}

if(!empty($id_sesion) && ($rol==3)){ //privilegios de responsable

	echo '<ul class="sidebar-menu">';

		echo ' <li class="header">MENU</li>';
		echo ' <li class="treeview"><a href="#"><i class="fa fa-link"></i> <span>Procesos</span> <i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu">';
			//echo '<li><a href="../aliados/"><i class="fa fa-link"></i> <span>Registro de Aliado Comercial</span></a></li>';
			//echo '<li><a href="../requerimientos/"><i class="fa fa-certificate "></i> <span>Entregas</span></a></li>';
			echo '<li><a href="../solicitudes/"><i class="fa fa-certificate "></i> <span>Requerimientos</span></a></li>';
			//echo '<li><a href="../mapa/"><i class="fa fa-link"></i> <span>Geolocalización</span></a></li>';
		echo '</ul>';
		echo '</li>';



	echo '</ul>';

}

if(!empty($id_sesion) && (($rol==2 ))){//privilegios de usurio

	echo '<ul class="sidebar-menu">';

		echo ' <li class="header">MENU</li>';
		echo ' <li class="treeview"><a href="#"><i class="fa fa-cog fa-lg"></i> <span>Procesos</span> <i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu">';
		    //echo '<li><a href="../inventarios/"><i class="fa fa-cubes"></i> <span>Unidades</span></a></li>';
		  //  echo '<li><a href="../requerimientos/"><i class="fa fa-certificate "></i> <span>Entregas</span></a></li>';
			echo '<li><a href="../solicitudes/"><i class="fa fa-certificate "></i> <span>Requerimientos</span></a></li>';
			echo '<li><a href="../solicitudes/dashboard"><i class="fa fa-bar-chart"></i> <span>Informes</span></a></li>';
			//echo '<li><a href="../aliados/"><i class="fa fa-cogs "></i> <span>Registro de Aliado Comercial</span></a></li>';
			//echo '<li><a href="../mapa/"><i class="fa fa-link"></i> <span>Geolocalización</span></a></li>';
			//echo '<li><a href="../reportes/"><i class="fa fa-link"></i> <span>Reportes</span></a></li>';
		echo '</ul>';
		echo '</li>';

		echo ' <li class="treeview"><a href="#"><i class="fa fa-wrench fa-lg"></i> <span>Administrador</span> <i class="fa fa-angle-left pull-right"></i></a><ul class="treeview-menu">';

		//	echo '<li><a href="../segmentos/"><i class="fa fa-link"></i> <span>Segmentos</span></a></li>';
		//	echo '<li><a href="../territorios/"><i class="fa fa-flag"></i> <span>Territorios</span></a></li>';
		//	echo '<li><a href="../regiones/"><i class="fa fa-globe"></i> <span>Regiones</span></a></li>';
		//	echo '<li><a href="../distribuidoras/"><i class="fa fa-truck"></i> <span>Distribuidoras</span></a></li>';
		//	echo '<li><a href="../marcas/"><i class="fa fa-bookmark"></i> <span>Marcas</span></a></li>';
			echo '<li><a href="../usuarios/"><i class="fa fa-users"></i> <span>Usuarios</span></a></li>';
		//	echo '<li><a href="../grupos/"><i class="fa fa-bookmark"></i> <span>Dependencias</span></a></li>';
		echo '</ul>';
		echo '</li>';

	echo '</ul>';

}



?>

<script type="text/javascript">

	$(document).ready(function() {

		/*$('li').click(function() {
		      $("li.active").removeClass("active");
		      $(this).addClass('active');
		});*/

			$(function(){
			var current_page_URL = location.href;
			$( "a" ).each(function() {
				if ($(this).attr("href") !== "#") {
				var target_URL = $(this).prop("href");
				if (target_URL == current_page_URL) {
					$('li.active').removeClass('active');
					$(this).parent('li').addClass('active');
					return false;
				}
				}
			});
			});

});

 </script>