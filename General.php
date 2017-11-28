
<?php

function showHeader(){
        $returnString = <<<HEADSTRING
        <html>
            <head>
                <link rel = "stylesheet" type = "text/css" href = "StyleSheet.css">
                <script src="_appsojs.js">
                  
                function logout(){
                    document.location="Logout.php";
   
                </script>
            </head>
        <body>
       


HEADSTRING;
     return $returnString;
    }
function showFooter(){
    $returnString = "\t</body>\n";
    $returnString .= "</html>";
    return $returnString;
}



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
        

    
<!--        <meta charset="UTF-8">
        <title>PresentationDec</title>
          
        <link rel = "stylesheet" type = "text/css" href="StyleSheet.css">-->
        <script>
                function login(){
                    document.location="Login.php";
                }
        
     
        </script>
               
    
       
        <header> Fabric forms  
            <br>  
        <a class= "subtxt"> Quilts with love</a> </header>        

        <div id = "form">
            
            <form method="POST" > 
<!--                action="login.php">-->
        <ul>
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#nextpage">Next page</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li style="float:right"><a id="logout" href="#logout">Logout</a></li>
                    <li style="float:right"><a href="Register.php">Regiter</a></li>
                    <li style="float:right"><a onclick="login()"  id="login" href="#login" >Login</a></li>
        </ul>
            
            
            
            </form>   
         </div>


