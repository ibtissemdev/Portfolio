<?php
session_start();




// remove all session variables
session_unset();

// destroy the session
session_destroy();


    header("location:identification.php");
    // echo "Identifiant ou mot de passe incorrect";





?>

