<?php
include 'General.php';
echo showHeader();

if ($_SESSION['loggedin'] != true) {
       echo 'not logged in';
       header("Location: login.php");
       
   }
    
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




<?php

echo showFooter();
?>
<!--
https://www.w3schools.com/css/tryit.asp?filename=trycss_zindex
https://www.w3schools.com/howto/howto_css_modal_images.asp-->
