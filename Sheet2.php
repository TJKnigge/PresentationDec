<?php
include 'General.php';
echo showHeader();




if ($_SESSION['loggedin'] != true) {
    echo 'not logged in';
    header("Location: login.php");
}
?>

<form>
    <div class="row">
        <div class="col-xs-8">
            <div style="padding-top: 200px; padding-right:1000px;">
            <!--<textarea class= "txt" id="txt">Aplicatie patronen</textarea>-->
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
</form>


<?php
echo showFooter();
?>

<!--https://www.w3schools.com/css/tryit.asp?filename=trycss_zindex
https://www.w3schools.com/howto/howto_css_modal_images.asp-->