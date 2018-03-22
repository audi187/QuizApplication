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
        
        <form action="grades/neet_grade.php" method="post" id="quiz">
        
            <ol>
            
                <li>
                     
                    <p>  A person holding a rifle (mass of person and rifle
together is 100 kg) stands on a smooth surface and
fires 10 shots horizontally, in 5 s. Each bullet has a
mass of 10 g with a muzzle velocity of 800 ms–1. The
final velocity acquired by the person and the
average force exerted on the person are</p>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A)–1.6 ms–1; 8 N </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B)–0.08 ms–1; 16 N</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C)–0.8 ms–1; 8 N</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D)–1.6 ms–1; 16 N</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>The radius of a planet is twice the radius of earth.
Both have almost equal average mass-densities. If
VP and VE are escape velocities of the planet and the
earth, respectively, then</p>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A)VE = 1.5VP</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) VP = 1.5VE< </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C)VP = 2V</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D)VE = 3VP</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>The outer electronic configuration of Gd (At. No. 64)</p>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) 4 f 4 5 d5 6 s1 </label>
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
                   
                    <p>Why is a capsule advantageous to a bacterium?</p>
                    
                    <p></p>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A)It allows the bacterium to attach to the surface</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B)It protects the bacterium from desiccation</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C) It provides means of locomotion</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D)It allows bacterium to "hide" from host's
immune system </label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>Which of the following statements about enzymes is
wrong?</p>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Enzymes require optimum pH and temperature
for maximum activity </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)Enzymes are denatured at high temperatures </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C).Enzymes are mostly proteins but some are
lipids also.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D). Enzymes are highly specific</label>
                    </div>
                
                </li>

                 <li>
                
                    <p>The incorrect statement regarding the element Ununseptium is:</p>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A) It belongs to group of halogens. </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B)It belongs to 7th period of periodic table: </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C)It is a radioactive element</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">It is a strong metal.</label>
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