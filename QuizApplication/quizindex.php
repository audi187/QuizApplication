<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/quizstyle.css" />
    <script>
function countDown(secs,elem) {
    var element = document.getElementById(elem);
    element.innerHTML = '<a href="E:\xampp\htdocs\Wpproject\JqueryLogIn.html">Log now to submit</a>';
        clearTimeout(timer);
        element.innerHTML = '<h2>Countdown Complete!</h2>';
        element.innerHTML = 'Time over try another quiz';
    }
    secs--;
    var timer = setTimeout('countDown('+secs+',"'+elem+'")',6000);
}
</script>
<div id="status"></div>
<script>countDown(10,"status");</script>
</head>

<body>

	<div id="page-wrap">

		<h1>Final Quiz for Lip building</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                     <h2>Verbal</h2>
                    <p>Antonym:PALATABLE:</p>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A)culinary </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) odorous</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) unappetizing</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D)unflavored</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>Analogy:IMPREGNABLE : ASSAULT ::</p>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) invincible : control</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) inimitable : modification</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C)intractable : destruction</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) immutable : alteration</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>Sentence Completion: The remarkable fact that many inventions had their birth as toys suggests that people philosophize more freely when they know that their ---- leads to no ---- results.</p>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) cogitation ... trivial</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B)persistence ... satisfactory </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C)creativity ... measurable</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D) conjecture ... inconsequential</label>
                    </div>
                
                </li>
                
                <li>
                    <p>Comprehension<p>
                    <p>With the ascendance of Toni Morrison's literary star, it has become commonplace for critics to de-racialize her by saying that Morrison is not just a "Black woman writer," that she has moved beyond the limiting confines of race and gender to larger "universal" issues. Yet Morrison, a Nobel laureate with six highly acclaimed novels, bristles at having to choose between being a writer or a Black woman writer, and willingly accepts critical classification as the latter.

                    To call her simply a writer denies the key roles that Morrison's African-American roots and her Black female perspective have played in her work. For instance, many of Morrison's characters treat their dreams as "real," are nonplussed by visitations from dead ancestors, and generally experience intimate connections with beings whose existence isn't empirically verifiable. While critics might see Morrison's use of the supernatural as purely a literary device, Morrison herself explains, "That's simply the way the world was for me and the Black people I knew."

                    Just as her work has given voice to this little-remarked facet of African-American culture, it has affirmed the unique vantage point of the Black woman. "I really feel the range of emotion and perception I have had access to as a Black person and a female person are greater than that of people who are neither," says Morrison. "My world did not shrink because I was a Black female writer. It just got bigger."</p>
                    
                    <p>The author of the passage is chiefly concerned with:</p>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A)explaining Morrison's own viewpoint on the role of her race and gender in her novels</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) assessing the significance of the Black female perspective in the modern American novel.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) acknowledging Morrison's success in giving voice to unknown aspects of the African-American experience</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D)  explaining why being a writer and being a Black female writer are distinct critical classifications.</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>Morrison's use of the supernatural in her novels is mentioned by the author in order to explain:</p>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A)why some critics categorize her as a "writer" but not a "Black woman writer."</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)one of the universal themes that is woven throughout Morrison's novels.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C)the enormous critical acclaim Morrison's novels have received.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) one way in which Morrison's novels are rooted in her experience as an African-American woman.</label>
                    </div>
                
                </li>

                 <li>
                
                    <h4>Come on boy</h4>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A) CSS-Tricks</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B) CSS-Tricks</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C) CSS-Tricks</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D: CSS-Tricks</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit Quiz" />
		
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