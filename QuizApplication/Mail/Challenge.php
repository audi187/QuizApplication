<?php
include 'dbh.php';
  session_start();

if(isset($_POST['submit_btn'])) 
{
	$to=$_POST['mail'];
    $email=$_SESSION['email'];
    switch($_POST['event'])
{
case 'G.R.E':$score=$_SESSION['gre'];
break;
case 'G.A.T.E':$score=$_SESSION['gate'];
break;
case 'C.M.A.T':$score=$_SESSION['cmat'];
break;
case 'G.M.A.T':$score=$_SESSION['gmat'];
break;
case 'J.E.E':$score=$_SESSION['jee'];
break;
case 'C.E.T':$score=$_SESSION['cet'];
break;
case 'N.E.E.T':$score=$_SESSION['neet'];
break;
case 'C.A.T':$score=$_SESSION['cat'];
break;
default:echo "Error";
}

$sql="SELECT *FROM users where email='$email' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);

$message='Your Friend score:'.$score.' '.$row[1].' has challenged you for '.$_POST['event'].'<br />Click on link <a href="http://localhost:8080/Wpproject2/wphome.html">www.quizchallenge.com</a>';

    require "phpmailer/class.phpmailer.php"; 
      
    
    $mail = new PHPMailer();  
      
  
    $mail->IsSMTP();             
    $mail->SMTPAuth = true;            
    $mail->SMTPSecure = "ssl";       
    $mail->Host = "smtp.gmail.com"; 
    $mail->Port = 465;  
    $mail->Encoding = '7bit';
    
    
    $mail->Username   = "2015aditya.bhatia@ves.ac.in"; 
    $mail->Password   = "Adityanexus5"; 
      
    
    $mail->SetFrom($_POST['mail']);
    $mail->AddReplyTo($_POST['mail']);
    $mail->Subject = "Challenge";       
    $mail->MsgHTML($message);
 
    
    $mail->AddAddress($to, "Recipient Name"); 
    $result = $mail->Send();		
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);

}
?>
<html>
<head>
<link href="../style.css" rel="stylesheet" type="text/css">
  <title>Challenge a Friend</title>
</head>
<body style="background-image: url(../images/back-11.jpeg) ;">
<div class="head" >
  <header>Quiz challenge</header>
</div>

<div class="menu">
  
  
  
</div>

					<div>
<nav>
<a href='wphome.php' >Home</a>

<a href="#" >Contact us</a>


</nav>
  </div>
		<div style="margin: 0px auto 0;width: 300px; background-repeat: no-repeat;">
			<h3 style="font-size: 10px; margin-top: 0px">Challenge a Friend</h3>
      <h4 style="margin-top: 200px";>Competitive Exams</h4>
			<form name="form1" id="form1" action="" method="post">
					<select name="event"> 
<option value="G.R.E">G.R.E</option>
  <option value="G.A.T.E">G.A.T.E</option>
  <option value="C.M.A.T">C.M.A.T</option>
  <option value="G.M.A.T">G.M.A.T</option>
  <option value="J.E.E">J.E.E</option>
  <option value="C.E.T">C.E.T</option>
  <option value="N.E.E.T">N.E.E.T</option>
  <option value="C.A.T">C.A.T</option>
  </select>

  <label>Enter the friend's E-mail ID</label>
  <input type="email" name="mail" class="required"/>
<input type="submit" name="submit_btn"/>
<h4>Subject Exams</h4>
			</form>
			<form name="form2"  id='form2' action="" method="post">
       <select name="event1"> 
<option value="Geometry">Geometry</option>
  <option value="History">History</option>
  <option value="Geography">Geography</option>
  <option value="Grammar">Grammar</option>
  <option value="World Affairs">World Affairs</option>
  <option value="G.K.">G.K.</option>
  <option value="English">English</option>
  <option value="Science">Science</option>
  </select>
  <label>Enter the friend's E-mail ID</label>
  <input type="email" name="email1" class="required"/>
<input type="submit" name="submit_btn1"/>
      </form>
      <?php
if(isset($_POST['submit_btn1'])) 
{
  $to=$_POST['email1'];

$message=
'Quiz:  '.$_POST['event1'].'<br />
Subject:  '."Challenge".'<br />
Email:  '.$_POST['email1'].'';

    require "phpmailer/class.phpmailer.php"; 
      
      
    $mail = new PHPMailer();  
      
    
    $mail->IsSMTP();                
    $mail->SMTPAuth = true;             
    $mail->SMTPSecure = "ssl";        
    $mail->Host = "smtp.gmail.com";  
    $mail->Port = 465;  
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "2015aditya.bhatia@ves.ac.in";
    $mail->Password   = "Adityanexus5"; 
      
    // Compose
    $mail->SetFrom($_POST['email1']);
    $mail->AddReplyTo($_POST['email1']);
    $mail->Subject = "Challenge";      
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress($to, "Recipient Name"); 
    $result = $mail->Send();      
  $message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
  unset($mail);

}
?>
		</div>
					
</body>
</html>