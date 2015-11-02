<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn,$user,$password);

$dbh->query('SET NAMES UTF-8');

$sql = 'SELECT	* FROM anketo WHERE 1';
$stmt =$dbh->prepare($sql);
$stmt->execute();

$dbh = null;
?>

</body>
</html>
