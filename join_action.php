﻿<!DOCTYPE html>
<html>
<head>
<title>BeerPong | 세상의 모든 맥주</title>
<link rel="stylesheet" href="beerpong.css?after" type="text/css"/>
<link href="http://fonts.googleapis.com/earlyaccess/notosanskr.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
$id=$_POST['my_id'];
$pw=$_POST['my_password'];
$pwc=$_POST['my_password2'];
$name=$_POST['my_name'];
$email=$_POST['my_mail'];
$smell=$_POST['stars1'];
$look=$_POST['stars2'];
$taste=$_POST['stars3'];

if($pw!=$pwc){
	echo "<script> alert('비밀번호와 비밀번호 확인이 서로 다릅니다.');</script>";
	echo "<script> location.href='join.html' </script>";
	exit();
}
if($id==NULL|| $pw==NULL|| $name==NULL|| $email==NULL|| $smell==NULL|| $look==NULL|| $taste==NULL){
	echo "<script> alert('빈칸을 모두 채워주세요.');</script>";
	echo "<script> location.href='join.html' </script>";
	exit();
}
elseif(strlen($pw)<4||strlen($pw)>10){
	echo "<script> alert('비밀번호를 4자이상 10자이하로 입력해주세요.');</script>";
	echo "<script> location.href='join.html' </script>";
	exit();
}
$mysqli=mysqli_connect("localhost", "root","1234", "beerpong");
$check ="SELECT * FROM Customers WHERE Customer_ID='$id'";
$result=$mysqli->query($check);
$num=mysqli_num_rows($result);
if($num==1){
	echo "<script> alert('중복된 id입니다.');</script>";
	echo "<script> location.href='join.html' </script>";
	exit();
}
$password=md5($pw);
$query="INSERT INTO Customers (Customer_ID, Customer_PW, Customer_Name, Customer_Email, Taste_Sugar, Taste_Sour, Taste_Flavor) VALUES('".$id."', '".$password."', '".$name."', '".$email."', '".$smell."', '".$look."', '".$taste."')";
$signup=mysqli_query($mysqli, $query);
if($signup){
	echo "<script> alert('회원가입 완료');</script>";
	echo "<script> location.href='home.php' </script>";
}
?>
</body>
</html>
