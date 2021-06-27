<?php
require_once '../models/Musuario.php';
	$result = array();
	@$data = Vusuario::find_by_sql("select cid,username,name,email,descripcion,mroles_id from vusuarios;");
	$items = 0;
	foreach ($data as &$rs) {

		@$ema=$rs->email;
		@$rolet=$rs->mroles_id;		

		if($rolet==1 || $rolet==4){

				$nomper='SOPORTE';

			}

		if($ema==''){

			$ema='SIN CORREO';

		}

		array_push($result,array(   "cid"=>$rs->cid,
		                            "username"=>$rs->username,
		                            "name"=>strtoupper($rs->name),
		                            "email"=>strtoupper($ema),
		                            "descripcion"=>$rs->descripcion		                            
		                         ));
		$items++;
	}

	print_r(json_encode($result));
?>
