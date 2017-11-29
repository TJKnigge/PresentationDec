<?php

        include 'General.php';
        echo showHeader();
        
        
        
        
        if($_SESSION['loggedin'] != true){
            echo 'not logged in';
            header("Location: login.php");
            exit;
        }
        echo "ik ben er";