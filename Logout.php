<?php

session_start();

if(isset($_SESSION["username"]))
{
    session_destroy();
    echo "You have successfully logged out.";
    header("Location:LoadingLogout.php");
}
else
    echo "No session exists or session is expired. Please log in again";
?>