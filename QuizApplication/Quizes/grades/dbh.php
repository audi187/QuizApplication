<?php
$conn=mysqli_connect('127.0.0.1' ,'root','', 'quiz_challenge');
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
?>