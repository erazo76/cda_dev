<?php
require_once '../php-activerecord/ActiveRecord.php';

// initialize ActiveRecord
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('../models/');
    //$cfg->set_connections(array('development' => 'pgsql://postgres:postgres@127.0.0.1/censo_dev2'));
    $cfg->set_connections(array('development' => 'pgsql://postgres:postgres@127.0.0.1/cda_dev'));
 	//$cfg->set_connections(array('development' => 'pgsql://gerazo:13264983@130.11.151.202/censo_dev'));
	// you can change the default connection with the below
    //$cfg->set_default_connection('production');
});

//ActiveRecord\Config::Config::instance();
?>
