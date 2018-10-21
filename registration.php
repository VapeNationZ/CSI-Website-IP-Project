<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Events</title>

    <!-- CSS TEMPLATES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/forms.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        label {
            display: block;
            padding: 1% 0%
        }
        input[type="submit"] {
            display: block;
        }
        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }
        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<nav class="topnav" id="myTopnav">
        <a class="#">CSI-IT</a>
        <a href="login.php">HOME</a>
        <a href="Events.php">EVENTS</a>
        <a href="Students.php">STUDENTS</a>
        <a href="sponsors.php">SPONSORS</a>
        <a href="ContactUs1.php">CONTACT US</a>
        <a href="logout.php">LOGOUT</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
    </nav>
    <div class="image-container" style="background-image:url(images/background.jpg); background-size: 100% 100%; width: 100%">
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $rno = stripslashes($_REQUEST['rno']);
		$rno = mysqli_real_escape_string($con,$rno);
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date, rno) VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$rno')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration Page</h1>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required >
<input type="text" name="rno" placeholder="roll no" required >
<input type="email" name="email" placeholder="Email" required >
<input type="password" name="password" placeholder="Password" required >
<input type="submit" name="submit" value="Register" style="color: black">
</form>
<br /><br />

</div>
<?php } ?>
<div class="clearfix" style="background-color: white; color: #613B70">
        <div class="twitter">
            <h2 style="font-weight: 500; text-align: center; line-height: 5em">About CSI</h2>
        </div>
        <div class="follow-twitter">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, sit, et. Repellat repudiandae aperiam illum, dolorum velit distinctio fuga ipsam nemo necessitatibus sunt sit voluptas cupiditate tenetur beatae corrupti quo.</p>
        </div>
    </div>
    <div class="countdown-timer" style="text-align: center; font-size: 36px; background-color: #B8A2DA;margin-bottom: 0px;padding: 2em 0em">
        <p id="countdown"></p>
        <p><a href="#">Countdown until next event...</a></p>
    </div>
    <div class="sponsors" style="height: auto;padding: 0% 5%; background-color: white; margin-top: 0px">
        <h3 style="text-align: center; padding: 2% 0%; color: #613B70">Our Sponsors</h3>
        <a href="https://www.endeavorcareers.com/"><img class="sponsor" src="images/Endeavor.jpg" alt="endeavor" width="400em"></a>
        <a href="http://vidyalankar.org/"><img class="sponsor" src="images/logo-1.png" alt="vidyalankar" width="400em"></a>
        <a href="https://www.time4education.com/"><img class="sponsor" src="images/Time-Logo.jpg" alt="time" width="400em"></a>
    </div>
    <div class="clearfix" style="background-color: #B8A2DA;margin-top: 0px;margin-bottom: 0px">
        <div class="twitter">
            <a class="twitter-timeline" data-height="300" data-link-color="#2B7BB9" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="follow-twitter">
            Follow us on twitter to stay updated about recent news and updates!<br>
            <a class="twitter-follow-button" data-size="large" href="https://twitter.com/TwitterDev" style="margin-top: 3%">
Follow @TwitterDev</a>
        </div>
    </div>
    <footer style="margin-top: 0px">
        <small>Follow us at!</small>
        <div class="social-networks" style="text-align: center">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
    </footer>
    <!-- /.container -->
    <!--SCRPITS-->
    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();
        // Update the count down every 1 second
        var x = setInterval(function() {
            // Get todays date and time
            var now = new Date().getTime();
            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            // Display the result in the element with id="demo"
            document.getElementById("countdown").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";
            // If the count down is finished, write some text
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
        // Get the modal
        var modal = document.getElementById('myModal');
        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");
        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];
        // When the user clicks the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }
        // When the user clicks on <span> (x), close the modal
        span.onclick  = function() {
            modal.style.display = "none";
        }
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>