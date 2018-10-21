<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">

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
        .sponsors {
            margin: 5em 10em;
            text-align: center;
        }
        .sponsor {
            margin: 2em 0em;
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
    <header>
        <h1>Sponsors of CSI-IT 2018</h1>
        <h2>CSI-IT is proudly sponsored by the institutes below. Each logo is clickable and links through to the sponsor's own website</h2>
    </header>
    <div role="main">
        <div class="sponsors">
            <a href="https://www.endeavorcareers.com/"><img class="sponsor" src="images/Endeavor.jpg" alt="endeavor"></a>
            <a href="http://vidyalankar.org/"><img class="sponsor" src="images/logo-1.png" alt="vidyalankar"></a>
            <a href="https://www.time4education.com/"><img class="sponsor" src="images/Time-Logo.jpg" alt="time"></a>
        </div>
    </div>
    <footer>
        <small>Follow us at!</small>
        <div class="social-networks" style="text-align: center">
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
        <small>Made by IT #VNLNOG</small>
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