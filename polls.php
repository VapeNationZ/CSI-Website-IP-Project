<?php 

if(isset($_POST['submit'])) {
   
$president       = $_POST['president'];
$treasurer       = $_POST['treasurer'];
$food            = $_POST['food'];
$venue            = $_POST['venue'];
$event            = $_POST['event'];
    
$connection = mysqli_connect('localhost', 'root', '', 'register');    
    
    if($connection) {
    
    header("Location: polls_submit.html");
    
    } else {
    
    die("Database connection failed");
    
    }
    
    $president  = mysqli_real_escape_string($connection, $president);
    $treasurer  = mysqli_real_escape_string($connection, $treasurer);
    $food = mysqli_real_escape_string($connection, $food);
    $venue = mysqli_real_escape_string($connection, $venue);
    $event = mysqli_real_escape_string($connection, $event);
    
    
    $query  = "INSERT INTO polls(president,treasurer,food,venue,event)";
    $query .= "VALUES ('$president','$treasurer','$food','$venue','$event')";
     
    $result = mysqli_query($connection,$query);
    
    
    if(!$result)  {
        
        die('Query FAILED' . mysqli_error());
    }
    
    
}


?>
