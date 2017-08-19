<!doctype html>
<html>
<head>
<? require_once('frameMySQL.php') ?>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?
	
	$test = new queryDB;
	echo($test->numberArticles('articles'));
	
?>
<body>
</body>
</html>