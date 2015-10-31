<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP基礎</title>
</head>
<body>

<?php
$nickname=$_POST['nickname'];
$email=$_POST['email'];
$goiken=$_POST['goiken'];

print $nickname;
print '様<br />';
print 'ご意見ありがとうございました<br />';
print '頂いたご意見『';
print $goiken;
print '』<br />';
print $email;
print 'にメールを送りましたのでご確認ください。';
?>



</body>
</html>

