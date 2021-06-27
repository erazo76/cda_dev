<?php
require_once '../models/Msolicitude.php';
require_once '../models/Mregione.php';


	$result = array();

	$ejecafe = Msolicitude::find_by_sql("SELECT sum(costo_total) as tot_cos from msolicitudes WHERE status=1 AND mregiones_id=1;");
	$centro_o = Msolicitude::find_by_sql("SELECT sum(costo_total) as tot_cos from msolicitudes WHERE status=1 AND mregiones_id=2;");
	$caribe = Msolicitude::find_by_sql("SELECT sum(costo_total) as tot_cos from msolicitudes WHERE status=1 AND mregiones_id=3;");
	$llano = Msolicitude::find_by_sql("SELECT sum(costo_total) as tot_cos from msolicitudes WHERE status=1 AND mregiones_id=4;");
	$centro_s = Msolicitude::find_by_sql("SELECT sum(costo_total) as tot_cos from msolicitudes WHERE status=1 AND mregiones_id=5;");
	$pacifico = Msolicitude::find_by_sql("SELECT sum(costo_total) as tot_cos from msolicitudes WHERE status=1 AND mregiones_id=6;");
	
	$region = Mregione::find_by_sql("SELECT id,nombre from mregiones WHERE status=1;");
	$items = 0;

    if($ejecafe !=null){
		foreach($ejecafe as $r1){
		  if($r1->tot_cos==null){
			$reg1=0;
		  }else{
		  $reg1 = $r1->tot_cos;      
		  }
		}        
	}
	
	if($centro_o !=null){
		foreach($centro_o as $r2){
		  if($r2->tot_cos==null){
			$reg2=0;
		  }else{
		  $reg2 = $r2->tot_cos;      
		  }
		}        
	}

	if($caribe !=null){
		foreach($caribe as $r3){
		  if($r3->tot_cos==null){
			$reg3=0;
		  }else{
		  $reg3 = $r3->tot_cos;      
		  }
		}        
	}

	if($llano !=null){
		foreach($llano as $r4){
		  if($r4->tot_cos==null){
			$reg4=0;
		  }else{
		  $reg4 = $r4->tot_cos;      
		  }
		}        
	}

	if($centro_s !=null){
		foreach($centro_s as $r5){
		  if($r5->tot_cos==null){
			$reg5=0;
		  }else{
		  $reg5 = $r5->tot_cos;      
		  }
		}        
	}

	if($pacifico !=null){
		foreach($pacifico as $r6){
		  if($r6->tot_cos==null){
			$reg6=0;
		  }else{
		  $reg6 = $r6->tot_cos;      
		  }
		}        
	}
		
	foreach ($region as &$rg) {
			switch ($rg->id){
				case 1: $val = floatval($reg1);
						$nom = $rg->nombre;				
				break;
				case 2: $val = floatval($reg2);
						$nom = $rg->nombre;				
				break;
				case 3: $val = floatval($reg3);
						$nom = $rg->nombre;				
				break;
				case 4: $val = floatval($reg4);
						$nom = $rg->nombre;				
				break;
				case 5: $val = floatval($reg5);
						$nom = $rg->nombre;				
				break;
				case 6: $val = floatval($reg6);
						$nom = $rg->nombre;				
				break;

			}
			array_push($result,array(   
				"valor"=>$val,
				"region"=>$nom		
			));	
	}	

//echo($data);exit();
	//print_r(json_encode($result));
	echo json_encode($result);
?>