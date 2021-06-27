<?php 
require_once '../config/conexion.php';


//######### incluir los modelos aqui ###################################
require_once '../models/Vw_distribuidore.php';
require_once '../models/Vw_cliente.php';
require_once '../models/Vw_nevera.php';


//######################################################################

@$action = $_POST['action'];
@$vista = $_POST['vista'];
//echo($vista);exit();
if($action == "obtener_interfaz"){


	switch ($vista) {
		
		case 'Vw_distribuidore':
		
			@$columns = Vw_distribuidore::table()->columns;
			
			@$n_filtros = Vw_distribuidore::first()->nro_filtros;
			
			generar_checkboxs_inputs($columns,$vista,$n_filtros);
				
			break;
			
		case 'Vw_cliente':
				
			@$columns = Vw_cliente::table()->columns;
			
			@$n_filtros = Vw_cliente::first()->nro_filtros;
			
			generar_checkboxs_inputs($columns,$vista,$n_filtros);

			break;
			
		case 'Vw_nevera':
		
			@$columns = Vw_nevera::table()->columns;
			
			@$n_filtros = Vw_nevera::first()->nro_filtros;
		
			generar_checkboxs_inputs($columns,$vista,$n_filtros);
		    		    
			break;
			
	}//end switch
	

}//end if



function generar_checkboxs_inputs($columns,$vista,$n_filtros){
	
	@$result = array();
	@$options_tag = "";
	@$inputs_tag = "";
	@$scr_tag = "";
	@$scr_tag3 = "";
	

	$indice = 0;
	
	foreach ($columns as $column) {
		
		
		if($column->name != 'nro_filtros'){
		
		   $options_tag .= "<div class='checkbox'><label><input type='checkbox' name='check_list[]' value=".$column->name." checked>".$column->name."</label></div>";
		
		}
		
		if($indice <= $n_filtros){
			
			$inputs_tag .= '<div class="form-group">';
			
			if ($column->raw_type == 'numeric' || $column->raw_type == 'date' || $column->raw_type == 'bigint'){
				
				$inputs_tag .= '<label>'.$column->name.' <span class="glyphicon glyphicon-resize-horizontal" aria-hidden="true"></span></label>';
			
			}else{
				
				$inputs_tag .= '<label>'.$column->name.'</label>';
				
			}

			@$dato = strtolower($column->name);
				if($vista == 'Vw_distribuidore'){
				  //@$data = Vw_distribuidore::find('all');
				  @$data = Vw_distribuidore::find_by_sql('select DISTINCT "'.$column->name.'" FROM vw_distribuidores');
				}else if($vista == 'Vw_nevera'){
				 // @$data = Vw_cliente::find('all');
				  @$data = Vw_nevera::find_by_sql('select DISTINCT "'.$column->name.'" FROM vw_neveras');
				}else{
				 // @$data = Vw_cliente::find('all');
				  @$data = Vw_cliente::find_by_sql('select DISTINCT "'.$column->name.'" FROM vw_clientes');
				}

		
		@$resp = "";

		$resp .= '<option value=""selected disabled>Indique dato a filtar</option>';

			foreach($data as $rs){
				 $cmp = $rs->$dato;
				 
				 $resp .= '<option value="'.$cmp.'">'.$cmp.'</option>';
				 $resp .= '<hidden>';
			}

			if ($column->raw_type == 'numeric' || $column->raw_type == 'date' || $column->raw_type == 'bigint'){

				$inputs_tag .= '<input class="form-control input-sm" type="text" name="filtro_'.$column->name.'#'.$column->raw_type.'" id="filtro_'.$column->name.'" >';
				$inputs_tag .= '</div>';

			}else{
				$inputs_tag .= '<select class="form-control input-sm" name="filtro_'.$column->name.'#'.$column->raw_type.'" id="filtro_'.$column->name.'" >';
				$inputs_tag .=$resp;
			}

				$inputs_tag .= '</select>';
				$inputs_tag .= '</div>';

		}//end if
		
		$indice++;
	}//end foreach

	$inputs_tag .= '<input type="hidden" name="vista_consultar" id="vista_consultar" value="'.$vista.'">';
	
	array_push($result,array("columnas"=>$options_tag,"filtros"=>$inputs_tag));

	echo json_encode($result);	
	
	
}

?>
