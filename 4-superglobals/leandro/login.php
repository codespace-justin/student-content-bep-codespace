<?php

    session_start();

    if (isset($_SESSION['submit'])) {

        // echo "Welcome " . $_POST['name'] . " " . $_POST['lastname']; 
        echo "Welcome " . $_SESSION['name'] . " " . $_SESSION['lastname']; 
    
    } else {
        echo "error 500";
    }


?>