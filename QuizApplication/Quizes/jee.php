<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="quizstyle.css" />
	<link rel="stylesheet" href="../countcss/jquery.countdown.css">

<style type="text/css">
#defaultCountdown { width: 240px; height: 45px; }
</style>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/jquery.plugin.min.js"></script>
<script src="../js/jquery.countdown.js"></script>

<script>
$(function () {
	var austDay = new Date();
	austDay.setMinutes(austDay.getMinutes() + 2);
	console.log(austDay);
	$('#defaultCountdown').countdown({until: austDay, format: 'HMs'});
	$('#year').text(austDay.getFullYear());
});
</script>
<div id="status"></div>
<script>countDown(10,"status");</script>


<script type="text/javascript"> 
      $(document).ready( function() {
        $('#deletesuccess').delay(120000).fadeOut();
      });
    </script>

</head>

<body>
	<div id="defaultCountdown" style="float:right;/* position: inherit; */position: fixed;margin-left: 1100px;" ></div>
	<div id="page-wrap">

		<h1>Name Quiz</h1>
        <h2 style=" font-family: cursive; font-size: 20px;">Note: "Submit" button in the bottom will automatically disappear after the timer countdown stops</h2>
		
		<form action="grades/jee_grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                     
                    <p>Ten litre of water per second is lifted from well through 20 m
and delivered with a velocity of 10m/s, then the power of the motor is:</p>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A)1.5KW</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B)2.5kW</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C)3.5kW</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D)4.5kW</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>Bernoulli’s equation is applicable to points:</p>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) In a steadily flowing liquid</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B)In a straight line perpendicular to a stream line</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C)In any viscous liquid.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D)None of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>The outer electronic configuration of Gd (At. No. 64)
is:</p>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A)  4 f 4 5 d5 6 s1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) 4 f 5 5 d4 6 s1 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C)4 f 7 5 d1 6 s2</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D)4 f 3 5 d5 6 s2</label>
                    </div>
                
                </li>
                
                <li>
                   
                    <p>For an irreversible reaction A ----> 2B, the rate is increased by four times when the concentration of A is doubled. The incorrect statement about this reaction is:</p>
                
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) It is a second order reaction.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) The unit of the specific rate, k is L mol-1 s-1. </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) Half life is independent of initial concentration of A </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Half life is inversely related to the initial concentration of A. </label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>The number of arrangements of the letters BANANA in which the two N'S do not appear adjacantly</p>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A)40</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)60</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C)80</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D)100</label>
                    </div>
                
                </li>

                 <li>
                
                    <p>The area cut off from a parabola by any double ordinate is k times the corresponding rectangle contained by that double ordinate and its distance  from the vertex, then k is:</p>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A)2/3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B)1/3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C)3/2</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D)1</label>
                    </div>
                
                </li>
            
            </ol>
            <div id="deletesuccess">
            <input type="submit" value="Submit Quiz"  />
		    </div>
		</form>
	
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