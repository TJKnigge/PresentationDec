<?php

        include 'General.php';
        echo showHeader();
        
        
        
        
        if($_SESSION['loggedin'] != true){
            echo 'not logged in';
            header("Location: login.php");
            exit;
        }
       
        
        
        
        
?>
   

        <h3>Aplicatie patronen</h3>
        <label class="container">Keuze 1
            <input type="checkbox" id="one" name="one">
            <span class="checkmark"></span>
        </label>
        <label class="container">Keuze 2
            <input type="checkbox" id="two" name="two">
            <span class="checkmark"></span>
        </label>
        <label class="container">Keuze 3
            <input type="checkbox" id="three" name="three">
            <span class="checkmark"></span>
        </label>
        <label class="container">Keuze 4
            <input type="checkbox" id="four" name="four">
            <span class="checkmark"></span>
        </label>



