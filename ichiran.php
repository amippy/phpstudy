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
while(1)
{
	$rec = $stmt ->fetch(PDO::FETCH_ASSOC);
	if($rec==false)
	{
	break;
	}
	print $rec['code'];
	print $rec['nickname'];
	print $rec['email'];
	print $rec['goiken'];
	print '<br />';
	}

$dbh = null;
?>
<br />
<a href ="menu.html">メニューに戻る</a>

</body>
</html>
