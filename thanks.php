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
$dsn = 'mysql:dbname=phpkiso;host=localhost';
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

$nickname= htmlspecialchars($nickname);
$email= htmlspecialchars($email);
$goiken= htmlspecialchars($goiken);

print $nickname;
print '様<br />';
print 'ご意見ありがとうございました<br />';
print '頂いたご意見『';
print $goiken;
print '』<br />';
print $email;
print 'にメールを送りましたのでご確認ください。';

$dbh =null;
}
catch (Exception $e)
{
	print 'ただいま障害により大変ご迷惑をおかけしております。';
}
?>



</body>
</html>

