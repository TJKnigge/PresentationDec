<?php

        include 'General.php';
?>


       
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

        $sql="select * FROM `users` WHERE `username`='$username' and `password`= '$password'";
        
        $result= mysqli_query($conn, $sql)
               or die("Failed to connect to DB" . mysqli_error());

        $row= mysqli_fetch_array($result);
        if($row['username'] == $username && $row['password'] == $password){
           echo "<div style='text-align:center'><h4>Login success full! Welcome " .  $row['username']. "</h4></div>";
           readfile("Sheet1.php");
                    
       } else {
            echo "<div style='text-align:center'><h4>Sorry, you are not in our database " . $username . "!</h4></div>";

            echo "<div style='text-align:center'><h4>Please register as a new user</h4></div>";
           
       }
       
        
       
      }





