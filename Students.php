<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Students</title>

    <!-- CSS TEMPLATES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/forms.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    <header>
        <h1>Student Portal</h1>
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>
    </header>
    <div class="w3-row-padding" style="margin:0.1em">
        <div class="w3-third">
            <div style="background: url(images/vote.jpg) no-repeat; width: 100%; background-size: 100% 100%" class="w3-hover-shadow w3-center">
                <a href="polls.html">
                    <p style="text-decoration: none">VOTE!<br>Polls related to CSI-COUNCIL elections and Seminars.</p>
                </a>
            </div>
        </div>
        <div class="w3-third">
            <div style="background: url(images/reviews.jpg) no-repeat; width: 100%; background-size: 100% 100%" class="w3-hover-shadow w3-center">
                <a href="reviews_suggestions.html">
                    <p>REVIEWS AND SUGGESTIONS</p>
                </a>
            </div>
        </div>
        <div class="w3-third">
            <div style="background: url(images/magazine.jpg) no-repeat; width: 100%; background-size: 100% 100%" class="w3-hover-shadow w3-center">
                <a href="#">
                    <p>MAGAZINE<br>Get your creativity posted in the magazine. Submit articles for IT Magazine.</p>
                </a>
            </div>
        </div>
    </div>
    <footer>
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
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>