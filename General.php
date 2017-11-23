
<html>
    <head>
        <meta charset="UTF-8">
        <title>PresentationDec</title>
          
        <link rel = "stylesheet" type = "text/css" href="StyleSheet.css">
        
        <style>
          body  {
                    background-image: url(Naamloos2.jpg);
                    display:block;
                    width: 100%;
                    height: 100%;
                    position: fixed; left: 0; top: 0;
                    background-repeat: no-repeat;
                    background-size: cover;
          }  
            
        </style>
        
        
      
          
        
        
    </head>
    <body>
       
        <header> Fabric forms  
            <br>  
        <a class= "Quilts"> Quilts with love</a> </header>        

        
    </body>
</html>


<?php

$hostname = 'localhost';       
    $databasenaam = 'prsentdec';
    $username = 'root';
    $password = '';
        
        
        $conn = mysqli_connect($hostname, $username, $password, $databasenaam);
                
        if (!$conn){
            die("DB failed to connect" . mysqli_error($conn));

        }