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
    <title>Loopjijalbij?</title>
</head>
<body>
  <?php
	require_once('header.php');

?>


<section>
    
            <div id="pag2blok1">
            
                <table style="width:100%">
                  <tr>
                    <td>Jill</td>
                    <td>Smith</td> 
                    <td>50</td>
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>Jackson</td> 
                    <td>94</td>
                  </tr>
                </table>
            
            </div>
    
</section>

<?php
	require_once ('footer.php');
?>

</body>
</html>
