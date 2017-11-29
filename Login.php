<?php

        include 'General.php';
        echo showHeader();
?>


            <div id = "form">
            <form method="POST" > 
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

        
        
        $username = stripcslashes($username);  //oorsproklijk
        $password = stripcslashes($password);   //oorsproklijk
//        $username = mysqli_real_escape_string($username);
//        $password = mysqli_real_escape_string($password);
        
        
        
        $sql="select * FROM `users` WHERE `username`='$username' and `password`= '$password'"; //oorsproklijk
                
//        $result= mysqli_query($conn, $sql);      
//               or die("Failed to connect to DB" . mysqli_error());
       
        $result= mysqli_query($conn, $sql);
        $count= mysqli_num_rows($result);
        
        if($count==1){
           
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            }
        
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "<div style='text-align:center'><h4>Login success full! Welcome " .  $row['username']. "</h4></div>";
                header('Location: Sheet1.php');
           
       } else {
            echo "<div style='text-align:center'><h4>Sorry, you are not in our database " . $username . "!</h4></div>";

            echo "<div style='text-align:center'><h4>Please register as a new user</h4></div>";
           
       }
            
        
//        $row= mysqli_fetch_array($result);
//        if($row['username'] == $username && $row['password'] == $password){
//
//           echo "<div style='text-align:center'><h4>Login success full! Welcome " .  $row['username']. "</h4></div>";
//           header('Location: Sheet1.php');
//           
//       } else {
//            echo "<div style='text-align:center'><h4>Sorry, you are not in our database " . $username . "!</h4></div>";
//
//            echo "<div style='text-align:center'><h4>Please register as a new user</h4></div>";
//           
//       }
}
