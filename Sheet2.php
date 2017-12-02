<?php
include 'General.php';
echo showHeader();


    
    $user=$_SESSION['username'];
 
    echo $user
?>


        <script>
               function btclient() {
                 var x = document.getElementById("client");
                    x = location.href = "mijngegevens.php";
                    
               }
     
        </script>




<form method="POST">
      <div class="row">  
    <div class="selectbtn">
            <a class= "top-txt"><h3>Formaat Quilt</h3></a>
            <select name="cnt" size="1" maxlength="20"  size="15" class="select">
                 <option value=" "> </option>
                 <option value="the Netherlands">Kussen</option>
                 <option value="Germany">mini</option>
                 <option value="Belgium">normaal</option>
                 
            </select>
        </div> 
      </div>      

    <div class="row">
        <div class="radio_div">
            <a class= "txt"><h3>Soort Quilt</h3></a>
                <input type="radio" name="Herdenkingsquilt" id="Herdenkingsquilt" value="Herdenkingsquilt"> Herdenkingsquilt<br>
                <input type="radio" name="Standaard quilt" id="Standaard" quilt value="Standaard quilt"> Standaard quilt<br>
        </div>       
    </div>
    
    <div class="row">
        <div class="container_div">
            <a class= "txt"><h3>Aplicatie patronen</h3></a>
                <label class="container">Keuze 1
                    <input type="checkbox" id="one" name="one">
                    <span class="checkmark"></span>
                </label>
            <br><br>
                <label class="container">Keuze 2
                    <input type="checkbox" id="two" name="two">
                    <span class="checkmark"></span>
                </label>
            <br><br>
                <label class="container">Keuze 3
                    <input type="checkbox" id="three" name="three">
                    <span class="checkmark"></span>
                </label>
            <br><br>
                <label class="container">Keuze 4
                    <input type="checkbox" id="four" name="four">
                    <span class="checkmark"></span>
                </label>
            <br><br>
        </div>
    </div>
        
         <button class="primary" id="submit" value="submit" > Bevestig Keuze </button>
         
         <button type="button" onclick="btclient()" id="client">Toon mijn gegevens</button>
         
         
</form>

<!--<form>
    <div class="row">
        <div class="col-xs-8">
            <div style="padding-top: 200px; padding-right:1000px;">
            <textarea class= "txt" id="txt">Aplicatie patronen</textarea>
                <a class= "txt"><h3>Aplicatie patronen</h3></a>
                <label class="container">Keuze 1
                    <input type="checkbox" id="one" name="one">
                    <span class="checkmark"></span>
                </label>
                <br><br>
                <label class="container">Keuze 2
                    <input type="checkbox" id="two" name="two">
                    <span class="checkmark"></span>
                </label>
                <br><br>
                <label class="container">Keuze 3
                    <input type="checkbox" id="three" name="three">
                    <span class="checkmark"></span>
                </label>
                <br><br>
                <label class="container">Keuze 4
                    <input type="checkbox" id="four" name="four">
                    <span class="checkmark"></span>
                </label>
                <br><br>
            </div>
          
        
            <div class="selectbtn">
                <a class= "top-txt"><h3>Formaat Quilt</h3></a>
                <select name="cnt" size="1" maxlength="20"  size="15" class="select">
                    <option value=" "> </option>
                    <option value="kussen">Kussen</option>
                    <option value="mini">mini</option>
                    <option value="normaal">normaal</option>
                </select>
            </div>   
        </div>   
    </div>



</form>-->


<?php

//    $query= "SELECT * FROM `tjk_users` WHERE `username` = '$user' ";
//
//        $result = $conn->query($query);
//
//        if ($result->num_rows > 0) {
//            echo "<table style='margin-top: 100px; margin-left: 600px'><tr><th>ID</th><th>Name</th><th>Achternaam</th>"
//            . "<th>Straat</th><th>Huisnr.</th><th>Postcode</th><th>Adres</th><th>email</th></tr>";
//           
//            while($row = $result->fetch_assoc()) {
//                echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td> ".$row["achternaam"]."</td><td> ".$row["straat"]."</td>"
//                        . "<td> ".$row["huisnr"]."</td><td> ".$row["postcode"]."</td><td> ".$row["adres"]."</td><td> ".$row["email"]."</td></tr>";
//            }
//            echo "</table>";
//        } 

echo showFooter();
?>
<!--
https://www.w3schools.com/css/tryit.asp?filename=trycss_zindex
https://www.w3schools.com/howto/howto_css_modal_images.asp-->
