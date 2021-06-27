<?php
require_once '../models/Mrequerimiento.php';
require_once '../models/Mdepartamento.php';
require_once '../models/Mmunicol.php';
require_once '../models/Musuario.php';
session_start();
//$toca=0;
	//muestra toda la data
		$data = Mrequerimiento::find_by_sql("SELECT id,cid,mdepartamentos_id,mmunicipios_id,fecha2,rt_nombre1,rt_nombre2,updated,created,user_create,user_modify,rn_nombre1,completado FROM mrequerimientos WHERE status=1 order by id desc;");

	$result = array();
	
	$items = 0;
	foreach ($data as &$rs) {

		$data2=Mdepartamento::find_by_sql("SELECT nombre FROM mdepartamentos WHERE cdd =".$rs->mdepartamentos_id." AND status=1 order by id desc;");
		foreach ($data2 as &$rt) {

			$dep=$rt->nombre;

		}

		$data3=Mmunicol::find_by_sql("SELECT nombre FROM mmunicols WHERE cdd =".$rs->mmunicipios_id." AND status=1 order by id desc;");
		
		if($data3 != null){
			foreach ($data3 as &$rq) {

				$mun=$rq->nombre;

			}
		}else{
			
				$mun='No Asignado';
		}
	
		if($rs->rn_nombre1 != null){
			$resp_aprob=$rs->rn_nombre1;
		}else{
			$resp_aprob='Entrega pendiente';
		}
		
		array_push($result,array(
						
		                           		 "id"=>$rs->id,		                           		 
		                           		 "departamento"=>$dep,
		                           		 "municipio"=>$mun,
		                           		 "fecha"=>$rs->fecha2->format("d-m-Y"),
										 "beneficiario"=>$rs->rt_nombre1,
										 "asignado"=>$rs->rt_nombre2, 
										 "despachado"=>$resp_aprob, 
										 "aprobado"=>$rs->completado
		                        		 

		                         ));
		$items++;
	}

	print_r(json_encode($result));
?>