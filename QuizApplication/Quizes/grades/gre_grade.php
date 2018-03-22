<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Final Quiz</h1>
		
        <?php
            session_start();

            $answer1 = isset($_POST['question-1-answers'])?$_POST['question-1-answers']:"NA";
            $answer2 = isset($_POST['question-2-answers'])?$_POST['question-2-answers']:"NA";
            $answer3 = isset($_POST['question-3-answers'])?$_POST['question-3-answers']:"NA";
            $answer4 = isset($_POST['question-4-answers'])?$_POST['question-4-answers']:"NA";
            $answer5 = isset($_POST['question-5-answers'])?$_POST['question-5-answers']:"NA";
            $answer6 = isset($_POST['question-6-answers'])?$_POST['question-6-answers']:"NA";
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "C") { $totalCorrect++; }
            if ($answer4 == "D") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            if ($answer6 == "D") { $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 6 correct</div>";
            $_SESSION['gre']=$totalCorrect;
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>