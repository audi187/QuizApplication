<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        
        <form action="grades/gate_grade.php" method="post" id="quiz">
        
            <ol>
            
                <li>
                     
                   
                    <p> 
Entomology is the science that studies </p>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A)Behavior of human beings</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B.)Insects</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C)The origin and history of technical and scientific terms</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D)The formation of rocks</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p> 
Grand Central Terminal, Park Avenue, New York is the world's 
</p>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A)Largest Railway station.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B)Highest Railway Station    </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C)Longest Railway Station   </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D)None of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p> 
Eritrea, which became the 182nd member of the UN in 1993, is in the continent of</p>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A)Asia</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B)Africa.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C)Europe</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D)Australia</label>
                    </div>
                
                </li>
                
                <li>
                    
                    
                    
                    <p> 
Garampani sanctuary is located at</p>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A)Junagarh, Gujarat</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B)Diphu, Assam.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C)Kohima, Nagaland</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D)Gangtok. Sikkim</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>     
Hitler party which came into power in 1933 is known as </p>
                    
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A)Labour Party</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)Nazi Party</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C)Ku-Klux-Klan </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D)Democratic Party</label>
                    </div>
                
                </li>

                 <li>
                
                    <p>     
For which of the following disciplines is Nobel Prize awarded?</p>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A)Physics and Chemistry</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B)Physiology or Medicine</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C)Literature, Peace and Economics</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">D)All of the above.</label>
                    </div
                
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