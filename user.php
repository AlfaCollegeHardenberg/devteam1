<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];
    $username = $_SESSION['username'];
} else {
    header('Location: index.php');
    die();
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Secret User Page</title>
</head>
<body>
  <?php
	require_once('header.php');

?>


<section>
    
    <a class="link3" href="">
    	<div id="voortgangknop">
        </div>
    </a>
            
    <div id="pag1blok1">
        <h1 class="titel">Welkom!</h1>
        <p>Op deze website kun je al je voortgang zien van jouw vakken. 
        	Klik op de grote knop waar "voortgang" op staat om jou progressie te bekijken.
        </p>
        
            

    </div> 
    
    <div id="pag1img1">
    
    </div>
    
</section>

<?php
	require_once ('footer.php');
?>

</body>
</html>




<?php
/*
Welcome, <?php echo $username; ?>. You are logged in. Your user ID is <?php echo $userId; ?><br />
    
<form action="index.php">
    <input type="submit" value="LOG ME OUT!!!" />
</form>
*/
?>
