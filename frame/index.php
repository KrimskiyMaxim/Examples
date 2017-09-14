<!doctype html>
<html>
<head>
<? require_once('frameMySQL.php') ?>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>
<?
	
	$test = new queryDB;
	$result = ($test->searchResult('articles', 'title', '6', false));
	echo($result['title']);
	echo('<br> done');
	
	
?>
<body>
</body>
</html>