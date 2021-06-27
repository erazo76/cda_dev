<?php
function sanitize($input) {

      $textoLimpio = preg_replace('([^A-Za-z0-9])', '', $input);
      return $textoLimpio;

}
/* *******  ejemplo de uso***************
$_GET = sanitize($_GET);
$_POST = sanitize($_POST);
$cadena_final = sanitize($cadena_original);
* 
* */
?>
