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
        
    <?php
        $query = "SELECT * FROM klassen";
        $result = query($dbCon, $query);
        echo '<select>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<option value="">'.$row['opleiding'] .' - ' .$row['klas_naam'].'</option>';
        }
        echo '</select>';
?>
        
            
    </div>

    
</section>

<?php
	require_once ('footer.php');
?>
