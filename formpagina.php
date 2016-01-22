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


require_once('header.php');
require_once('connection.php');
?>

<section>
    <div id="pag3blok1">
        
        <form>
            Klas:
          <input type="text" name="klas">
            <br>
            Vak: 
          <input type="text" name="vak">
            <br><br>
             Vak1:  
          <input type="text" name="vak1">
            <br>
             Vak2:
          <input type="text" name="vak2">
            <br>
             Vak3:
          <input type="text" name="vak3">
            <br><br>
          <input type="submit" value="Submit">
        </form> 

    </div>

    
</section>

<?php
	require_once ('footer.php');
?>