<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>MVC</title>
</head>

<body>
<?
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	
	
	
	define('ROOT', dirname(__FILE__));
	require_once(ROOT.'/components/router.php');
	
	
	$begin = new Router;
	$begin->run();
	
	
?>




</body>
</html>