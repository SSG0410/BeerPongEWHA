<!DOCTYPE html>
<html>
<head>
<title>BeerPong | ������ ��� ����</title>
<link rel="stylesheet" href="beerpong.css?after" type="text/css"/>
<link href="http://fonts.googleapis.com/earlyaccess/notosanskr.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
$res=session_destroy();
if($res){
	echo "<script> location.href='home.php' </script>";
}
?>
</body>
</html>