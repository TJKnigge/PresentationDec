
<?php

function showHeader(){
        $returnString = <<<HEADSTRING
        <html>
            <head>
                
                <link rel = "stylesheet" type = "text/css" href = "StyleSheet.css">
                
                <script>
                function logout(){
                    document.location="Logout.php";
   
                }
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
        
//     $hostname = 'localhost';       
//    $databasenaam = 'phpzwollegen2';
//    $username = 'phpzwollegen1';
//    $password = 'itphtoren';
    
        $conn = mysqli_connect($hostname, $username, $password, $databasenaam);
                
        if (!$conn){
            die("DB failed to connect" . mysqli_error($conn));

        }
        
          
?>
        

    

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
            <li><a class="active" href="index.php">Home</a></li>
            <li><a href="Sheet2.php">Next page</a></li>
            <li><a href="#contact">Contact</a></li>
            <li style="float:right"><a id="logout" href="Logout.php">Logout</a></li>
            <li style="float:right"><a href="Register.php">Regiter</a></li>
            <li style="float:right"><a onclick="login()"  id="login" href="#login" >Login</a></li>
        </ul>
            
            
            
            </form>   
         </div>

<?php

        echo showFooter();
?>

