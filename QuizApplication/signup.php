<?php
session_start();


include 'dbh.php';
if(isset($_POST['button']))
{
$conn=mysqli_connect('127.0.0.1' ,'root','', 'quiz_challenge');
if(!$conn){
    die("Connection failed:".mysqli_connect_error());
}
$first =mysqli_real_escape_string($conn, $_POST['firstname']);
$last =$_POST['lastname'];
$password =$_POST['password'];
$email =$_POST['email'];
$sql ="INSERT INTO users(first,last,email,password)
 VALUES ('$first','$last','$email','$password')";
$result=mysqli_query($conn,$sql);

}
header("Refresh: 3;url=wphome.html");
 ?>
