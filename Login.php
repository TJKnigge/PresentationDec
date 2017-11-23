<?php

https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal (popups)
    session_start();

?>

<html>
    <head>
        
        <link rel = "stylesheet" type = "text/css" href="StyleSheet.css">
            
        <script>
                
        
        </script>
        
        
    </head>
    <body>
       
            <div id = "form">
            <form method="POST" > 
<!--                action="login_session.php">-->
                <h4> <font color="black">Please enter username and password</h4>
                    <p>
                        Username:<input type="text" id="user" name="user" placeholder="user" required>
                    </p>
                    <p>
                        Password:<input type="password" id="passw" name="passw" placeholder="passw" required>
                    </p>
                    <p>
                    <button type="submit" id="btn" value="login" > Login </button>
                    </p>
          
            </form>   
        </div> 
        
        
    </body>
</html>

