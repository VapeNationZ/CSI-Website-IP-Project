<?php

session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: login_back.php"); // Redirecting To Home Page
}
?>
