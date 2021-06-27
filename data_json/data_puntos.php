<?php

require_once '../models/Maliado.php';

session_start();
$dist=intval($_SESSION['distribuidora']);

$consulta='';

if($_SESSION['rolx']== 2 || $_SESSION['rolx']== 4 ){

  $consulta='';

}else{

  $consulta='WHERE mdistribuidoras_id='.$dist;

}

       @$data = Maliado::find_by_sql("SELECT row_to_json(fc)
          FROM ( SELECT 'FeatureCollection' As type, array_to_json(array_agg(f)) As features
          FROM (SELECT 'Feature' As type
          , ST_AsGeoJSON(lg.geom)::json As geometry
          , row_to_json(lp) As properties
          FROM maliados As lg
          INNER JOIN (SELECT id, nombre,msegmento_id,cajas_t,mestado_id FROM maliados $consulta) As lp
          ON lg.id = lp.id ) As f ) As fc;");

      if($data !=null){

        
        foreach ($data as $rs) {
          $resp=$rs->row_to_json;
        }

      }
    echo $resp;
?>