<?php
/**
 * Access from index.php:
 */
if(!defined("_access")) {
	die("Error: You don't have permission to access here...");
}

$routes = array(
	0 => array(
			"pattern"	  => "/^muestras/",
			"application" => "default",
			"controller"  => "default",
			"method"	  => "muestras",
			"params"	  => array()
		),
	1 => array(
			"pattern"	  => "/^impresiones/",
			"application" => "default",
			"controller"  => "default",
			"method"	  => "works",
			"params"	  => array()
		),
	2 => array(
			"pattern"	  => "/^lenguajes/",
			"application" => "default",
			"controller"  => "default",
			"method"	  => "lenguajes",
			"params"	  => array()
		),
);
