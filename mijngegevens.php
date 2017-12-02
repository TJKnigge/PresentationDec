<?php
include 'General.php';
echo showHeader();






    $query= "SELECT * FROM `tjk_users` WHERE `username` = '$user' ";

        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            echo "<table style='margin-top: 100px; margin-left: 600px'><tr><th>ID</th><th>Name</th><th>Achternaam</th>"
            . "<th>Straat</th><th>Huisnr.</th><th>Postcode</th><th>Adres</th><th>email</th></tr>";
           
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td> ".$row["achternaam"]."</td><td> ".$row["straat"]."</td>"
                        . "<td> ".$row["huisnr"]."</td><td> ".$row["postcode"]."</td><td> ".$row["adres"]."</td><td> ".$row["email"]."</td></tr>";
            }
            echo "</table>";
        } 

echo showFooter();
?>
