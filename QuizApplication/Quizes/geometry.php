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
        
        <form action="grades/gate_grade.php" method="post" id="quiz">
        
            <ol>
            
                <li>
                     
                   
                    <p>A Polygon with 5 sides is called </p>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A)Hexagon</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B)Pentagon</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C)Octagon</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D)Trapezoid </label>
                    </div>
                
                </li>
                
                <li>
                
                    <p> The number of triangles in an octagon.
</p>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A)326</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B)120 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) 56 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D)Cannot be determined</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>. What is the circum radius of a triangle whose sides are 7, 24 and 25 respectively</p>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A)18</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B)12.5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C)12</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D)14</label>
                    </div>
                
                </li>
                
                <li>
                    
                    
                    
                    <p>7.   What is the measure of in radius of the triangle whose sides are 24, 7 and 25?</p>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A)12.5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B)3</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C)6</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D)None of these</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>1.   A person had a rectangular-shaped garden with sides of lengths 16 feet and 9 feet. The garden was changed into a square design with the same area as the original rectangular-shaped garden. How many feet in length are each of the sides of the new square-shaped garden?</p>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A)7 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)9 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C)5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D)7(5)^1/2</label>
                    </div>
                
                </li>

                 <li>
                
                    <p>2.   A rectangular box with a base 2 inches by 6 inches is 10 inches tall and holds 12 ounces of breakfast cereal. The manufacturer wants to use a new box with a base 3 inches by 5 inches. How many inches tall should the new box be in order to hold exactly the same volume as the original box? (Note: The volume of a rectangular box may be calculated by multiplying the area of the base by the height of the box.)</p>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A) 8</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B)9</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C)10.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">11</label>
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