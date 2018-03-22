<?php
if(isset($_POST['submit_btn'])) 
{
	$to=$_POST['email'];

$message=
'Quiz:	'.$_POST['event'].'<br />
Subject:	'."Challenge".'<br />
Email:	'.$_POST['email'].'';

    require "phpmailer/class.phpmailer.php"; //include phpmailer class
      
    // Instantiate Class  
    $mail = new PHPMailer();  
      
    // Set up SMTP  
    $mail->IsSMTP();                // Sets up a SMTP connection  
    $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
    $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
    $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
    $mail->Port = 465;  //Gmail SMTP port
    $mail->Encoding = '7bit';
    
    // Authentication  
    $mail->Username   = "2015aditya.bhatia@ves.ac.in"; // Your full Gmail address
    $mail->Password   = "Adityanexus5"; // Your Gmail password
      
    // Compose
    $mail->SetFrom($_POST['email']);
    $mail->AddReplyTo($_POST['email']);
    $mail->Subject = "Challenge";      // Subject (which isn't required)  
    $mail->MsgHTML($message);
 
    // Send To  
    $mail->AddAddress($to, "Recipient Name"); // Where to send it - Recipient
    $result = $mail->Send();		// Send!  
	$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	unset($mail);

}
?>
<html>
<head>
  <title>Contact Form</title>
</head>
<body>
					
		<div style="margin: 100px auto 0;width: 300px;">
			<h3>Contact Form</h3>
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
  <input type="email" name="email" class="required"/>
<input type="submit" name="submit_btn"/>
			</form>
			
		</div>
					
</body>
</html>