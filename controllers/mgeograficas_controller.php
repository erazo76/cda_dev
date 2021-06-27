<?php
require_once '../models/Mregione.php';
require_once '../models/Mdepartamento.php';
require_once '../models/Mmunicol.php';
require_once '../models/Mcpoblado.php';
require_once '../models/Mdistribuidora.php';
require_once '../models/Mrequerimiento.php';

date_default_timezone_set('America/Bogota');

@$action = ($_POST["action"]);
@$id = ($_POST["id"]);
@$record = ($_POST["record"]);
/***********************************/
@$nombre = ($_POST["nombre"]);
@$distribuidora = ($_POST["distribuidora"]);
@$departamento = ($_POST["departamento"]);
@$municipio = ($_POST["municipio"]);
@$cpoblado = ($_POST["cpoblado"]);

/**********************************/

switch ($action){

    case 'get_departamentos':

        @$data = Mdepartamento::find('all');

      if($data !=null){
               $resp = '<option value="0" disabled selected>Seleccione un Departamento</option>';
            foreach($data as $rs){
              $resp .= '<option value="'.$rs->cdd.'">'.$rs->cdd.'-'.$rs->nombre.'</option>';
              $resp .= '<hidden>';
            }

       }

         echo $resp;
    break;

#******************************************************************************
    case 'get_municipios':

        @$data = Mmunicol::find('all',array('conditions' => array('mdepartamentos_cdd=?',$departamento)));

      if($data !=null){
               $resp = '<option value="0" disabled selected>Seleccione un Municipio</option>';
            foreach($data as $rs){
              $resp .= '<option value="'.$rs->cdd.'">'.$rs->cdd.'-'.$rs->nombre.'</option>';
              $resp .= '<hidden>';
            }

       }else{
        $resp = '<option value="0">No hay municipios asignados</option>';
       }

         echo $resp;
    break;

#******************************************************************************
    case 'get_parroquias':

        @$data = Mcpoblado::find('all',array('conditions' => array('mmunicols_cdd=?',$municipio)));

      if($data !=null){
               $resp = '<option value="0" disabled selected>Seleccione un centro poblado</option>';
            foreach($data as $rs){
              $resp .= '<option value="'.$rs->cdd.'">'.$rs->cdd.'-'.$rs->nombre.'</option>';
              $resp .= '<hidden>';
            }

       }else{
        $resp = '<option value="0">No hay centros poblados asignados</option>';
       }

         echo $resp;
    break;

    #******************************************************************************

    case 'get_departamentos_e':

      @$data = Mdepartamento::find('all',array('conditions' => array('cdd=?',intval($departamento))));
//print_r($data);exit();
      if($data !=null){
          
          foreach($data as $rs){
         
             $resp = $rs->cdd.'-'.$rs->nombre;
          }  

      }else{
             $resp = "No hay departamentos asignados";
      }

       echo $resp;
  break;

#******************************************************************************

    case 'get_municipios_e':

        @$data = Mmunicol::find('all',array('conditions' => array('cdd=?',intval($municipio))));

        if($data !=null){
            
            foreach($data as $rs){
              $resp = $rs->cdd.'-'.$rs->nombre;
            }  

        }else{
               $resp = 'No hay municipios asignados';
        }

         echo $resp;
    break;

#******************************************************************************

    case 'get_cpoblado_e':

        @$data = Mcpoblado::find('all',array('conditions' => array('cdd=?',intval($cpoblado))));

          if($data !=null){

            foreach($data as $rs){            
              $resp = $rs->cdd.'-'.$rs->nombre;        
            }               
          }else{
               $resp = 'No hay centros poblados asignados';
          }

         echo $resp;
    break;

 ##############################################################################

 case 'get_departamentos_f':
  @$data = Mdepartamento::find('all');
  @$data2 = Mdepartamento::find('all',array('conditions' => array('cdd=?',intval($departamento))));

    foreach($data2 as $rl){
      @$sel=$rl->cdd;
    }

  
    @$resp="";
  if($data !=null){
      
    foreach($data as $rs){
      if($sel == $rs->cdd){
          $resp.= '<option value="'.$rs->cdd.'"selected>'.$rs->nombre.'</option>';
          
      }else{
          $resp.= '<option value="'.$rs->cdd.'">'.$rs->nombre.'</option>';
          
      }    
    } 
    $resp .= '<hidden>';
    //printf($resp);exit(); 
  }else{
         $resp= 0;
  }

   echo $resp;
break;

#******************************************************************************

case 'get_municipios_f':
    @$data = Mmunicol::find('all',array('conditions' => array('mdepartamentos_cdd=?',$departamento)));
    @$data2 = Mmunicol::find('all',array('conditions' => array('cdd=?',intval($municipio))));
   
    @$resp="";
   
    if($data2 !=null){
      foreach($data2 as $rl){
            @$sel=$rl->cdd;
      }

        foreach($data as $rs){
          if($sel==$rs->cdd){
              $resp.= '<option value="'.$rs->cdd.'"selected>'.$rs->nombre.'</option>';
              
          }else{
              $resp.= '<option value="'.$rs->cdd.'">'.$rs->nombre.'</option>';
              
          }    
        }  
        $resp.= '<hidden>';
    }else{
         $resp.= '<option value="">No hay municipios asignados</option>';
    }

     echo $resp;
break;

#******************************************************************************

case 'get_cpoblado_f':

    @$data = Mcpoblado::find('all',array('conditions' => array('mmunicols_cdd=?',$municipio)));
    @$data2 = Mcpoblado::find('all',array('conditions' => array('cdd=?',intval($cpoblado))));
    @$resp="";
    if($data2 !=null){
      foreach($data2 as $rl){
            $sel=$rl->cdd;
      }

        foreach($data as $rs){
          if($sel==$rs->cdd){
              $resp.= '<option value="'.$rs->cdd.'"selected>'.$rs->nombre.'</option>';
              
          }else{
              $resp.= '<option value="'.$rs->cdd.'">'.$rs->nombre.'</option>';
              
          }    
        }  
        $resp .= '<hidden>';             
    }else{
        $resp = '<option value="0">No hay centros poblados asignados</option>';
    }

     echo $resp;
break;

#******************************************************************************

    case 'get_ciudad':
        
    
      @$geomun=Mmunicipio::find('all',array('conditions' => array('id=?',$municipio)));
      @$geopar=Mparroquia::find('all',array('conditions' => array('id=?',$parroquia)));
      

    //print_r($geomun);
   // print_r($geopar);exit();
        foreach ($geomun as $gm) {

                @$idmuni=$gm->id_dpt;
                @$idestado=$gm->idestados;
                  if(strlen($idestado)==1){
                     $idestado= "0".$idestado;
                  }
                  if(strlen($idmuni)==1){
                     $idmuni= "0".$idmuni;
                  }
                foreach ($geopar as $gp) {
                  @$idparro=$gp->id_dpt;
                    if(strlen($idparro)==1){
                       $idparro= "0".$idparro;
                    } 

                    if($idestado=="02"){//caso especial AMAZONAS sin parroquias
                      @$apoblado=$idestado.$idmuni."00";
                    }else{
                      @$apoblado=$idestado.$idmuni.$idparro;
                    }               
                  
                }  
//echo $apoblado;exit();
        }

         @$data = Mpoblado::find_by_sql("SELECT gid,nombre FROM mpoblados WHERE cod_parr='".$apoblado."' ORDER BY id DESC;");
      //print_r($data);exit();
      if($data !=null){
               $resp = '<option value="" disabled selected>Indique un centro poblado</option>';
            foreach($data as $rs){
              $resp .= '<option value="'.$rs->gid.'">'.strtoupper($rs->nombre).'</option>';
              $resp .= '<hidden>';

            }

       }else{

                $resp = '<option value="" disabled selected>Indique un centro poblado</option>';
                  foreach($geopar as $prp){
                    $resp .= '<option value="'.$prp->id.'">'.strtoupper($prp->nombres).'</option>';
                    $resp .= '<hidden>';

                  }


             //$resp = '<option value="" disabled selected>No hay centros poblados asignados </option>';

            
       }

        echo $resp;
   
    break;

#******************************************************************************
    case 'get_coordenadas':

        @$data = Mpoblado::find_by_sql("SELECT gid,nombre,ST_YMax(geom) AS lata,ST_XMax(geom) AS longa FROM mpoblados WHERE gid='$ciudad';");

      if($data !=null){

            foreach($data as $rs){
            //echo($rs->tipos);exit();
                    
                      $resp = array(
                              "lata"=>$rs->lata,
                              "longa"=>$rs->longa
                              );        
            }
                      
       }else{
                      $resp = array(
                              "lata"=>6.12,
                              "longa"=>-67.39
                              );  
       }

         echo json_encode($resp);
    break;
#******************************************************************************    

    case 'get_geojson':

       @$data = Maliado::find_by_sql("SELECT row_to_json(fc)
          FROM ( SELECT 'FeatureCollection' As type, array_to_json(array_agg(f)) As features
          FROM (SELECT 'Feature' As type
          , ST_AsGeoJSON(lg.geom)::json As geometry
          , row_to_json(lp) As properties
          FROM maliados As lg
          INNER JOIN (SELECT id, nombre FROM maliados where id=97) As lp
          ON lg.id = lp.id ) As f ) As fc;");

      if($data !=null){

        
        foreach ($data as $rs) {
          $resp=$rs->row_to_json;
        }

      }
    echo $resp;
    break;
#******************************************************************************      

}//end switch
?>


