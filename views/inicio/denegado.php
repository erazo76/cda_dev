<?php
include("../../lib/validar_session.php");
ValidaSession("../login");

include("../layouts/constantes.php");
include_once("../layouts/cabezera.php");
echo '
<div class="row">
	<div class="col-xs-6">
		<img alt="Negado" src="../../dist/img/negado.jpg">
	</div>
</div>';
include_once("../layouts/pie.php"); 

?>  
   
