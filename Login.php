<?php

https://www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal (popups)
    session_start();
    include 'General.php';
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
<?php


    

    if (isset($_POST)& !empty($_POST)){
                
       
    
        $username=$_POST['user'];
        $password=$_POST['passw'];

        $username = stripcslashes($username);
        $password = stripcslashes($password);
//        $username = mysqli_real_escape_string($username);
//        $password = mysqli_real_escape_string($password);
        
        
        
        $sql="select * FROM `users` WHERE `username`='$username' and `password`= '$password'";
        
        $result= mysqli_query($conn, $sql)
               or die("Failed to connect to DB" . mysqli_error());

        $row= mysqli_fetch_array($result);
        if($row['username'] == $username && $row['password'] == $password){
           echo "<div style='text-align:center'><h4>Login success full! Welcome " . $row['username']. "</h4></div>";
          
           
       } else {
            echo "<div style='text-align:center'><h4>Sorry, you are not in our database " . $username . "!</h4></div>";

            echo "<div style='text-align:center'><h4>Please register as a new user</h4></div>";
           
       }
       
        
        
      }
      
?>
