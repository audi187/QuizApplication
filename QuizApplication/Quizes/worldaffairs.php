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
                     
                   
                    <p> 
Defence Metallurgical Research Laboratory (DMRL) has signed a Licensing Agreement for Transfer of Technology of High Nitrogen Steel (HNS) for armour applications with an organisation. Name it. </p>
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A)Jindal Stainless Limited.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B)    Tata Steels
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C)  Nippon Steels
</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D)POSCO </label>
                    </div>
                
                </li>
                
                <li>
                
                    <p> Who was appointed as the Prime Minister of South Korea recently?
</p>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A)Yim Jong-yong</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B)Jung Youn-kuk </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) Kim Byong-joon. </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D)Choi Soon-sil</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p> 
The Lok Sabha recently passed the Constitution (123rd Amendment) Bill, 2017. The Bill seeks to constitutional status to which of the following bodies?</p>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A)National Commission for Backward Classes.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B)National Human Rights Commision</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C)National Commision for woman</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">D)National Consumer Disputes Resressal Commision</label>
                    </div>
                
                </li>
                
                <li>
                    
                    
                    
                    <p> 
The Indian Academy of Highway Engineers signed an MoU with a University of this country to set up a centre of excellence</p>
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A)Poland</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B)Brazil</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C)Austrlia.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D)Norway</label>
                    </div>
                
                </li>
                
                <li>
                
                    <p>Name the Indian national and navy veteran who was sentenced to death by a military court of Pakistan.</p>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A)Ravindra Kaushik </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B)RN Kao </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C)Kashmir Singh</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D)Kulbhushan Jadhav.</label>
                    </div>
                
                </li>

                 <li>
                
                    <p>The Union Cabinet recently approved signing of Framework of Understanding on Cooperation in the Hydrocarbon Sector. The Framework is signed with which of the following countries?</p>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">A)Japan</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">B)Bangladesh.</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" />
                        <label for="question-6-answers-C">C)Sri-Lanka</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" />
                        <label for="question-6-answers-D">Maldives</label>
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