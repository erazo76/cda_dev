<?php
require_once '../models/Msolicitude.php';
require_once '../models/Mdepartamento.php';



	$result = array();

	$depa = Mdepartamento::find_by_sql("SELECT id,nombre,cdd from mdepartamentos WHERE status=1;");

	$cont = 1;

	foreach ($depa as &$dp) {
		
		$alf = Msolicitude::find_by_sql("SELECT mdepartamentos_id, sum(costo_total) as tot_cos from msolicitudes WHERE status=1 AND mdepartamentos_id=".$dp->cdd."GROUP BY mdepartamentos_id;");
		

	    if($alf !=null){
			foreach($alf as $r1){
			  if($r1->tot_cos==null){
				$reg = 0;
			  }else{
			  	$reg = $r1->tot_cos;      
			  }		
			  
			  $nom=$dp->nombre;		
			  $val=floatval($reg);
			  
				  array_push($result,array(   
					  "valor"=>$val,
					  "departamento"=>$nom		
				  ));	
			  
			}  
		}else{

			$nom=$dp->nombre;		
			$val=0;
			
				array_push($result,array(   
					"valor"=>$val,
					"departamento"=>$nom		
				));	

		}

		$cont = $cont + 1;		
	}	

//echo($data);exit();
	//print_r(json_encode($result));
	echo json_encode($result);
?>