<?php

session_start();

    $hostname = 'localhost';       
    $databasenaam = 'prsentdec';
    $username = 'root';
    $password = '';
        
        
        $conn = mysqli_connect($hostname, $username, $password, $databasenaam);
                
        if (!$conn){
            die("DB failed to connect" . mysqli_error($conn));

        }
?>
        
<html>
    <head>
        <meta charset="UTF-8">
        <title>PresentationDec</title>
          
        <link rel = "stylesheet" type = "text/css" href="StyleSheet.css">
        <script>
                function login(){
                    document.location="Login.php";
                }
        
     
        </script>
               
    </head>
    <body>
       
        <header> Fabric forms ff  
            <br>  
        <a class= "subtxt"> Quilts with love</a> </header>        

        <div id = "form">
            <form method="POST" > 
<!--                action="login.php">-->
        <ul>
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#nextpage">Next page</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li style="float:right"><a href="#logout">Logout</a></li>
                    <li style="float:right"><a href="#regiter">Registert</a></li>
                    <li style="float:right"><a onclick="login()"  id="login" href="#login" >Login</a></li>
        </ul>
            
            
            
            </form>   
         </div>


