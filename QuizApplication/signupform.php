
<!DOCTYPE html>
<!-- saved from url=(0081)file:///C:/Users/shaunak/Downloads/drive-download-20170306T175614Z-001/index.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Jquery validate</title>
    <link rel="stylesheet" href="./Jquery validate_files/style.css">
    <script src="./Jquery validate_files/jquery-3.1.1.min.js.download" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="./Jquery validate_files/jquery.validate.min.js.download"></script>
    <link href="./Jquery validate_files/css" rel="stylesheet">
</head>

<body>
    <div class="container" style="color:black">
        <form class="form" action="signup.php" id="signupForm" method="post" autocomplete="off" novalidate="novalidate">
            <div class="title">
                <h1>Sign up Form</h1></div>
            <div class="form-content">
                <div class="form-group">

                    <input type="text" id="firstname" name="firstname" placeholder="First name">
                </div>
                <div class="form-group">

                    <input type="text" name="lastname" id="lastname" placeholder="Last name">
                </div>
                <div class="form-group">

                    <input type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">

                    <input type="password" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">

                    <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <span class="label"><label for="agree">I agree to the terms and conditions</label></span>
                    <input type="checkbox" name="agree" value="">
                </div>
                <button type="submit" name="button">Submit</button>
            </div>


        </form>
    </div>


    <script src="./Jquery validate_files/script.js.download">
    </script>



</body></html>