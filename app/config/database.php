<?php

class DATABASE_CONFIG {

	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'root',
		'database' => 'crossfit',
		'prefix' => '',
	);
    
    var $default_prod = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'mysql.icadev.com',
		'login' => 'icadev_crossfit',
		'password' => '89bits',
		'database' => 'icadev_crossfit',
		'prefix' => '',
	);

	var $test = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => 'root',
		'database' => 'test_crossfit',
		'prefix' => '',
	);
    
    function __construct() {
        //print $_SERVER['SERVER_NAME'];
        if ($_SERVER['SERVER_NAME'] == 'crossfit.icadev.com') {
            $this->default = $this->default_prod;
        }
    }
}
