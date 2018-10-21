<?php 

if(isset($_POST['submit'])) {
   
$name        = $_POST['name'];
$write1      = $_POST['write1'];
    
$connection = mysqli_connect('localhost', 'root', '', 'register');    
    
    if($connection) {
    
    header("Location: reviews_submit.html");
    
    } else {
    
    die("Database connection failed");
    
    }
    
    $name   = mysqli_real_escape_string($connection, $name);
    $write1 = mysqli_real_escape_string($connection, $write1);
    
    $query  = "INSERT INTO review(name,write1)";
    $query .= "VALUES ('$name','$write1')";
     
    $result = mysqli_query($connection,$query);
    
    
    if(!$result)  {
        
        die('Query FAILED' . mysqli_error());
    }
    
    
}


?>
