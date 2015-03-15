<?php
$config = require_once dirname(dirname(dirname(dirname(__FILE__)))) .
						DIRECTORY_SEPARATOR . "Conf" . 
						DIRECTORY_SEPARATOR . "Admin" . 
						DIRECTORY_SEPARATOR . "config.php";
return $config;