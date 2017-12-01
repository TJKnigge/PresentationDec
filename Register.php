<?php

    include 'General.php';
     echo showHeader();
?>

        <div id = "form">
           
            <h4> <font color="black">Welkome, hier kunt u uw gegevens invullen</h4>
            <form> 
<!--                action="login_session.php">-->
        
                Username:<br><input type="nwuser" id="nwuser" name="nwuser" placeholder="nieuwe gebruiker" required><br>
                Password:<br><input type="password" id="nwpassw" name="nwpassw" placeholder="wachtwoord" required><br>
                Achternaam:<br><input type="surnm" id="surnm" name="surnm" placeholder="achternaam" required><br>
                Straatnaam:<br><input type="street" id="street" name="street" placeholder="straatnaam" required><br>
                Huisnummer:<br><input type="hnr" id="nwpassw" name="hnr" placeholder="huisnummer" required><br>
                Postcode:<br><input type="zip" id="nwpassw" name="zip" placeholder="postcode" required><br>
                Woonplaats:<br><input type="adress" id="nwpassw" name="adress" placeholder="woonplaats" required><br>
                Email address:<br><input type="email" id="email" name="email" placeholder="john@voorbeeld.tst" required ><br>
            
            <p>
                <button class="primary" id="submit" value="submit" > Submit </button>
                
             
            </form>   
        </div>


<?php

//    include 'General.php';
//     echo showHeader();

     
     if (isset($_REQUEST)& !empty($_REQUEST)){
         
         $username= $_REQUEST['nwuser'];
         $pasword= $_REQUEST['nwpassw'];
         $achternaam= $_REQUEST['surnm'];
         $straat= $_REQUEST['street'];
         $huisnr= $_REQUEST['hnr'];
         $postcode= $_REQUEST['zip'];
         $adres= $_REQUEST['adress'];
         $email= $_REQUEST['email'];
         
          
         $sql= "INSERT INTO `tjk_users` (`username`, `password`, `achternaam`, `straat`, `huisnr`, `postcode`, `adres`, `email`) VALUES ('$username', '$pasword', '$achternaam', '$straat', '$huisnr', '$postcode', '$adres', '$email')";
                         
         $result= mysqli_query($conn, $sql)
                    or die("Failed to connect to DB" . mysqli_error());
         
         if($result){
             
             echo "Bedankt voor het invullen van uw gegevens " . $username;
         }else{
             echo "Sorry, probeer het nog eens";
         }
     }
?>

<?php

        echo showFooter();
?>
