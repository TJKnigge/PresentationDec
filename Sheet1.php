<html>
    <head>
        
        <link rel = "stylesheet" type = "text/css" href="StyleSheet.css">
         
        <script>
                function login(){
                    document.location="Login.php";
                    
                }
        
        
                var modal = document.getElementById('myModal');

                var btn = document.getElementById("login");

                var span = document.getElementsByClassName("close")[0];

                btn.onclick = function() {
                    modal.style.display = "block";
                }

                span.onclick = function() {
                    modal.style.display = "none";
                }

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
        
        </script>
        
   
    </head>
    <body>
       
        <button id="login">Open Modal</button>

    <div id="myModal" class="modal"></div>
             
        <div id = "form">
            <form method="POST" > 
<!--                action="login.php">-->
        <ul>
                    <li><a class="active" href="#home">Home</a></li>
                    <li><a href="#nextpage">Next page</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li style="float:right"><a href="#logout">Logout</a></li>
                    <li style="float:right"><a href="#regiter">Registert</a></li>
                    <li style="float:right"><a id="login" onclick="login()" href="#login" >Login</a></li>
                </ul>
            
            </form>   
        </div>
        
            <div class="background" id="background">
                <div class="transbox" id="transbox">
                    <p> Toen ik nog kleding voor de kinderen maakte, zag ik vaak prachtige quilts in de patroonbladen staan.<br><br>
                        Ik besloot dat ik er ooit een zou gaan maken en bewaarde vele patronen voor als ik meer tijd zou hebben. 
                        De eerste quilt werd voor mijn oudste dochter en al gauw volgden er meer, want ieder kind wilde een eigen quilt hebben.<br><br>
                        Ik ging op quiltles en genoot er van; al die kleuren en mogelijkheden, verschillende vormen en patronen hielden mij vaak bezig.
                        Zeker vijftien quilts (mini quilts niet meegerekend) en verschillende kussens verder kwam er een dimensie bij; 
                        mijn vader was gestorven en van al zijn overhemden maakte ik en heel persoonlijk kussen.
                        Het gaf veel vreugde om voor iemand iets van waarde te maken. <br><br>
                        Zo ontstond het idee om ook herinneringquilts/kussens te gaan maken van de kleding die een dierbare gedragen heeft.<br><br>
                        Naast het maken van ‘gewone ’quilts wil ik voor mensen die kleding hebben liggen waar zij 
                        herinneringen mee hebben of een speciale band mee voelen graag iets betekenen door de 
                        gebruikte kleding te verwerken in een kussen of quilt.
                    </p>
                                    
                </div>
            </div>
        
    </body>
</html>

 

 

<?php


