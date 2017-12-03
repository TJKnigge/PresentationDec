<?php
include 'General.php';
echo showHeader();

if ($_SESSION['loggedin'] != true) {
       echo 'not logged in';
       header("Location: login.php");
       
   }
    
    $user=$_SESSION['username'];
    
//    if (isset($_REQUEST['username']) and ( $_REQUEST['username'] == '$user')) {     
//
//    } elseif (isset($_REQUEST['subject'])) {

        $sql = "DELETE FROM `tjk_users` WHERE `username` = '$user' ";

        $result = $conn->query($sql);

        $conn->close();

        header("Location: logout.php");

//    }
  
?>