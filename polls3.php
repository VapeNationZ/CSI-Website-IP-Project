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

         body {
             width: 100%;
         }

         img.sponsor {
             width: 50%;
         }

         * {
             box-sizing: border-box
         }

         /* Slideshow container */
         .slideshow-container {
             max-width: 1000px;
             position: relative;
             margin: auto;
         }

         /* Hide the images by default */
         .mySlides {
             display: none;
         }

         /* Next & previous buttons */
         .prev,
         .next {
             cursor: pointer;
             position: absolute;
             top: 50%;
             width: auto;
             margin-top: -22px;
             padding: 16px;
             color: white;
             font-weight: bold;
             font-size: 18px;
             transition: 0.6s ease;
             border-radius: 0 3px 3px 0;
         }

         /* Position the "next button" to the right */
         .next {
             right: 0;
             border-radius: 3px 0 0 3px;
         }

         /* On hover, add a black background color with a little bit see-through */
         .prev:hover,
         .next:hover {
             background-color: rgba(0, 0, 0, 0.8);
         }

         /* Caption text */
         .text {
             color: #f2f2f2;
             font-size: 15px;
             padding: 8px 12px;
             position: absolute;
             bottom: 8px;
             width: 100%;
             text-align: center;
         }

         /* Number text (1/3 etc) */
         .numbertext {
             color: #f2f2f2;
             font-size: 12px;
             padding: 8px 12px;
             position: absolute;
             top: 0;
         }

         /* The dots/bullets/indicators */
         .dot {
             cursor: pointer;
             height: 15px;
             width: 15px;
             margin: 0 2px;
             background-color: #bbb;
             border-radius: 50%;
             display: inline-block;
             transition: background-color 0.6s ease;
         }

         .active,
         .dot:hover {
             background-color: #717171;
         }

         /* Fading animation */
         .fade {
             -webkit-animation-name: fade;
             -webkit-animation-duration: 5s;
             -webkit-animation-delay: 0.25s;
             animation-name: fade;
             animation-duration: 20s;
             animation-delay: 0.25s;
         }

         @-webkit-keyframes fade {
             from {
                 opacity: .8
             }

             to {
                 opacity: 1
             }
         }

         @keyframes fade {
             from {
                 opacity: .8
             }

             to {
                 opacity: 1
             }
         }

     </style>
 </head>

 <body>
     <nav class="topnav" id="myTopnav">
         <a>TechNext</a>
        <a href="login.php">HOME</a>
        <a href="Events.php">EVENTS</a>
        <a href="Students.php">STUDENTS</a>
        <a href="sponsors.php">SPONSORS</a>
        <a href="ContactUs1.php">CONTACT US</a>
        <a href="aboutus.php">ABOUT US</a>
        <a href="logout.php">LOGOUT</a>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
     </nav>
     <div class="main">
         <!DOCTYPE html>
   <html>
    <head>
        <title>Polls Table</title>
    </head>
    <body>
        <table>
           <tr>
            <th>President</th>
            <th>Treasurer</th>
            <th>Food</th>
            <th>Venue</th>
            <th>Event</th>
            </tr>
            <?php
            $conn = mysqli_connect('localhost', 'root', '', 'register'); 
            
            
            $sql = "SELECT president, treasurer, food, venue, event from polls";
            $result = $conn-> query($sql);
            
            if ($result-> num_rows > 0){
                while ($row = $result-> fetch_assoc()){
                    echo "<tr><td>". $row["president"]."</td><td>". $row["treasurer"]."</td><td>". $row["food"]."</td><td>". $row["venue"]."</td><td>". $row["event"]."</td></tr>";
                }
                echo "</table>";
            }
            $conn -> close();
            ?>
        </table>
    </body>
</html>


         </div>
         <br>

            
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

             var slideIndex = 0;
             showSlides();

             function showSlides() {
                 var i;
                 var slides = document.getElementsByClassName("mySlides");
                 var dots = document.getElementsByClassName("dot");
                 for (i = 0; i < slides.length; i++) {
                     slides[i].style.display = "none";
                 }
                 slideIndex++;
                 if (slideIndex > slides.length) {
                     slideIndex = 1
                 }
                 for (i = 0; i < dots.length; i++) {
                     dots[i].className = dots[i].className.replace(" active", "");
                 }
                 slides[slideIndex - 1].style.display = "block";
                 dots[slideIndex - 1].className += " active";
                 setTimeout(showSlides, 5000); // Change image every 2 seconds
             }

         </script>
 </body>

 </html>