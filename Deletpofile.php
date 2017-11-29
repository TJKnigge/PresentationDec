<?php

   
    include 'General.php';
     echo showHeader();
     
     
     
    
     

        $sql = "DELETE FROM `users` WHERE id=3";

        if($row['username'] !== $username && $row['password'] !== $password){
           echo "<div style='text-align:center'><h4>U mag deze bewerking niet doen" ;
             }elseif (mysqli_query($conn, $sql)) {
               echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
        }

