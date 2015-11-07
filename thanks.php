<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
try
{
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

$nickname= htmlspecialchars($nickname);
$email= htmlspecialchars($email);
$goiken= htmlspecialchars($goiken);

$dsn = 'mysql:dbname=phpkiso;host=localhost';
$user = 'root';
$password = '';
$dbh = new PDO($dsn, $user, $password);
$dbh-> query('SET NAMES utf8');
$sql = 'INSERT INTO anketo(nickname,email,goiken) VALUES(?,?,?)';
$stmt = $dbh -> prepare($sql);
$data[] = $nickname;
$data[] = $email;
$data[] = $goiken;
$stmt->execute($data);
$dbh = null;

print $nickname;
print '様<br />';
print 'ご意見ありがとうございました<br />';
print '頂いたご意見『';
print $goiken;
print '』<br />';
print $email;
print 'にメールを送りましたのでご確認ください。';

}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をおかけしております。';
}
?>

<br />
<a href="index.html">トップに戻る</a>


</body>
</html>
