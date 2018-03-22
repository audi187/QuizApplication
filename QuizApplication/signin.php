<?php
include 'dbh.php';
session_start();

$email =$_POST['email'];
$_SESSION['email']=$email;
$password =$_POST['password'];
$sql ="SELECT * FROM users WHERE email='$email' AND password='$password'";
$result=mysqli_query($conn,$sql);
if(!$row=mysqli_fetch_assoc($result)){
echo 'Incorrect username or password !';
} else header("location:wphome.php");


 ?>
