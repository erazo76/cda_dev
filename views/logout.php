<?php
session_start();
$_SESSION['idusuario'] = null;
$_SESSION = array();
@session_unset();
//@session_destroy();
header("Location:login");
?>
