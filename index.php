<?php

$config = dirname(__FILE__).'/config.php';
require $config;

//Autoload function
function __autoload($class) {
	require dirname(__FILE__)."/libs/".$class.".php";
}

$page = new main_file();