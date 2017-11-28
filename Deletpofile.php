<?php

    include 'Login.php';
    include 'General.php';
     echo showHeader();
     
     
     
    
     
    // sql to delete a record
        $sql = "DELETE FROM MyGuests WHERE id=3";

        if($row['username'] !== $username && $row['password'] !== $password){
           echo "<div style='text-align:center'><h4>Jij mag deze bewerking niet doen" ;
             }elseif (mysqli_query($conn, $sql)) {
               echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
        }

