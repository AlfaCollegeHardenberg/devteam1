<?php
    $servername = "localhost";
    $username = "root";
    $password = " ";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Geen verbinding: " . $conn->connect_error);
    }

    echo "Verbinding gemaakt";
?>




<!DOCTYPE html>
</html>
<head>
	<META content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<LINK href="stylesheet.css" rel="stylesheet" type="text/css" />
	<TITLE>LoopJijAlBij?</TITLE>
</head>
<body>
<div id="wrapper">

    <header>
    
    </header>
    
    <nav>
        
        <ul>
            <li class="link1"><a href="index.html">Home</a></li>
            <li class="link2"><a href="index.html">Inloggen</a></li>
        </ul>

    <!--Hier begint de inhoud van de website-->
        
    </nav>
    
        <section>
    
            <a class="link3" href=""><div id="voortgangknop">
                
                </div></a>
            
            <div id="pag1blok1">
                <h1 class="titel">Welkom!</h1>
                <p>Op deze website kun je al je voortgang zien van jouw vakken. Klik op de grote knop waar "voortgang" op staat om jou progressie te bekijken.</p>
            </div> 
            
            <div id="pag1img1">
            
            </div>
    
        </section>
    
    <!--Hier eindigt de inhoud van de website-->
    
    <footer>
        ToWiKa@gmail.com
    </footer>
</div>
</body>
</html>