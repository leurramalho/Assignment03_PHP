<?php

    if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
        unset($_SESSION["fullname"]);
    } 
    else {
        session_start(); 
        
    }
    session_destroy();

    header("Location: index.php");
    exit();

?>
