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
                    <td>
                      <?php 
                        $query = "SELECT vak1 FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        var_dump($result);
                      ?>
                    </td>
                    <td>Vakje1</td> 
                    <td>Vakje2</td>
                    <td>Vakje3</td>
                    <td>2</td> 
                    <td>3</td>
                    <td>1</td>
                    <td>2asfdasdfs</td> 
                    <td>3</td>
                    <td>1</td>
                    <td>2asfsdaf</td> 
                    <td>3</td>
                    <td>1</td>
                    <td>asdfsdaf2</td> 
                    <td>3</td>
                    <td>asfsdaf1</td>
                    <td>2</td> 
                    <td>3</td>
                    <td>1</td>
                    <td>2</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <td>1afdsafasd</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1safsdafdsf</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                    <tr>
                    <td>1</td>
                  </tr>
                </table>
        
    <?php
        $query = "SELECT * FROM klassen";
        $result = mysql_query($query, $dbCon);
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
