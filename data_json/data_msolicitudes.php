<?php
require_once '../models/Msolicitude.php';
require_once '../models/Mdepartamento.php';
require_once '../models/Mmunicol.php';
require_once '../models/Musuario.php';
session_start();
//$toca=0;
	//muestra toda la data
		$data = Msolicitude::find_by_sql("SELECT id,cid,nombre,mdepartamentos_id,mmunicipios_id,fecha2,rt_nombre1,rt_apellido1,updated,created,user_create,user_modify,rn_nombre1,rn_apellido1,completado FROM Msolicitudes WHERE status=1 order by id desc;");

		$result = array();
	
		$items = 0;
		foreach ($data as &$rs) {
	
			$data2=Mdepartamento::find_by_sql("SELECT nombre FROM mdepartamentos WHERE cdd =".$rs->mdepartamentos_id." AND status=1 order by id desc;");
			foreach ($data2 as &$rt) {
	
				$dep=$rt->nombre;
	
			}
	
			$data4=Musuario::find_by_sql("SELECT name FROM musuarios WHERE id =".$rs->user_create." AND status=1 order by id desc;");
			foreach ($data4 as &$rto) {
	
				$usercreated=$rto->name;
			}
			
			if($rs->user_modify != null){
				$data5=Musuario::find_by_sql("SELECT name FROM musuarios WHERE id =".$rs->user_modify." AND status=1 order by id desc;");
			
					foreach ($data5 as &$rto2) {
	
						$userupdate=$rto2->name;
					}
			}else{
				$userupdate='No modificado';
			}
	
			$data3=Mmunicol::find_by_sql("SELECT nombre FROM mmunicols WHERE cdd =".$rs->mmunicipios_id." AND status=1 order by id desc;");
			
			if($data3 != null){
				foreach ($data3 as &$rq) {
	
					$mun=$rq->nombre;
	
				}
			}else{
				
					$mun='No Asignado';
			}
	

			
			$responsable=$rs->rt_nombre1.' '.$rs->rt_apellido1;
			
			if($rs->rn_nombre1 != null){
				$resp_aprob=$rs->rn_nombre1.' '.$rs->rn_apellido1;
			}else{
				$resp_aprob='Por aprobar';
			}
	
			$updated=$rs->updated;
			
			if($rs->updated != null){
				$updated=$rs->updated->format("d-m-Y");
			}else{
				$updated='No modificado';
			}
	
			array_push($result,array(
							
								"id"=>$rs->id,
								"nombre"=>$rs->nombre,
								"departamento"=>$dep,
								"municipio"=>$mun,
								"fecha"=>$rs->fecha2->format("d-m-Y"),
								"responsable"=>$responsable,
								"created"=>$rs->created->format("d-m-Y"), 
								"usercreate"=>$usercreated, 
								"updated"=>$updated, 
								"userupdate"=>$userupdate, 
								"resp_aprob"=>$resp_aprob, 
								"aprobado"=>$rs->completado																
	
			 ));
			 
			$items++;
		}

	print_r(json_encode($result));
?>