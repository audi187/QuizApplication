<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>wpproj</title>
<link href="style.css" rel="stylesheet" type="text/css">
<?php
include 'dbh.php';
session_start();
$email=$_SESSION['email'];
$sql="SELECT *FROM users where email='$email' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
?>

</head>



<body>

<div class="head" >
  <header>Quiz challenge</header>
</div>
<div>
<nav>
<a href="#" >Home</a>
<a href="Mail/Challenge.php" >Challenge a Friend</a>
<a href="#" >Contact us</a>
<a href="Logout.php">Logout</a>
<a style="margin-left: 700px; font-size: 25px";href="#"><?php echo "Welcome: $row[1]";?></a>

</nav>
  </div>

<div class="menu">
  
  
  
</div>



<div class="sectone">
</div>

<div class="subsectone">
  
  <div class="fixed-size" id="b1" onclick="location.href='Quizes/gre.php'">G.R.E</a> <br></div>
  <div class="fixed-size" id="b2" onclick="location.href='Quizes/gate.php'">G.A.T.E <br></div>
  <div class="fixed-size" id="b3" onclick="location.href='Quizes/cmat.php'">C.M.A.T <br></div>
  <div class="fixed-size" id="b4" onclick="location.href='Quizes/gmat.php'">G.M.A.T <br></div>
  <div class="fixed-size" id="b5" onclick="location.href='Quizes/jee.php'">J.E.E <br></div>
  <div class="fixed-size" id="b6" onclick="location.href='Quizes/cet.php'">C.E.T <br></div>
  <div class="fixed-size" id="b7" onclick="location.href='Quizes/neet.php'">N.E.E.T <br></div>
  <div class="fixed-size" id="b8" onclick="location.href='Quizes/cat.php'">C.A.T <br></div>

</div>
<div class="par1">
  
</div>
<div class="subsecttwo">
  <div class="fixed-size" id="b9"  onclick="location.href='Quizes/geometry.php'">Geometry <br></div>
  <div class="fixed-size" id="b10" onclick="location.href='Quizes/history.php'">History <br></div>
  <div class="fixed-size" id="b11" onclick="location.href='Quizes/geography.php'">Geography <br></div>
  <div class="fixed-size" id="b12" onclick="location.href='Quizes/grammarphp'">Grammar <br></div>
  <div class="fixed-size" id="b13" onclick="location.href='Quizes/worldaffairs.php'">World Affairs <br></div>
  <div class="fixed-size" id="b14" onclick="location.href='Quizes/gk.php'">G.K <br></div>
  <div class="fixed-size" id="b15" onclick="location.href='Quizes/english.php'">English <br></div>
  <div class="fixed-size" id="b16" onclick="location.href='Quizes/science.php'">Science <br></div>
</div>
<div class="subsectthree">
  <div class="fixed-size" id="b17" onclick="location.href='Quizes/sports.php'">Sports <br> </div>
  <div class="fixed-size" id="b18" onclick="location.href='#'">Technology <br></div>
  <div class="fixed-size" id="b19" onclick="location.href='#'">Music <br></div>
  <div class="fixed-size" id="b20" onclick="location.href='#'">Cultures <br></div>
  <div class="fixed-size" id="b21" onclick="location.href='#'">Movies <br></div>
  <div class="fixed-size" id="b22" onclick="location.href='#'">Sitcoms <br></div>
  <div class="fixed-size"  id="b23" onclick="location.href='#'">Romcoms <br></div>
</div>
  
  
  

</body>
</html>

