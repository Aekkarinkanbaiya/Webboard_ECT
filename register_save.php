<?php 
$login=$_POST['login'];
$passowrd=$_POST['pwd'];
$name=$_POST['name'];
$gender=$_POST['gender'];
$email=$_POST['email'];

$conn=new PDO("mysql:host=localhost;dbname=ewbboard;charset=utf8","root","");

$sql="INSERT INTO user (login, password, name, gender, email, role)
 VALUES ('$login','$passowrd','$name','$gender','$email','m')";
$conn->exec($sql);
$conn=null;
?>