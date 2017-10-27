<?php
session_start();
ob_start();
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	define('ROOT', dirname(__FILE__));
	require(ROOT.'/components/Router.php');
	
	$begin = new Router;
	$begin->start();
