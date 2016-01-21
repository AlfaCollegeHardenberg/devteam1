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
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['tabel_naam'];
                      ?>
                    </td>
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak1'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak2'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak3'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak4'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak5'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak6'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak7'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak8'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak9'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak10'];
                      ?>
                    </td>  
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak11'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak12'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak13'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak14'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak15'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak16'];
                      ?>
                    </td>  
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak17'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak18'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak19'];
                      ?>
                    </td> 
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['vak20'];
                      ?>
                    </td>

                  </tr>

                  <tr>
                    <td>
                      <?php 
                        $query = "SELECT * FROM klassen_ict WHERE id = 1";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['leerling_naam'];
                      ?>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <?php 
                        $query = "SELECT * FROM klassen_ict WHERE id = 2";
                        $result = mysql_query($query, $dbCon);
                        $row = mysql_fetch_assoc($result);
                        echo $row['leerling_naam'];
                      ?>
                    </td>
                  </tr>

                    <tr>
                      <td> 
                        <?php 
                          $query = "SELECT * FROM klassen_ict WHERE id = 3";
                          $result = mysql_query($query, $dbCon);
                          $row = mysql_fetch_assoc($result);
                          echo $row['leerling_naam'];
                        ?>
                    </td>
                  </tr>

                    <tr>
                      <td>
                        <?php 
                          $query = "SELECT * FROM klassen_ict WHERE id = 4";
                          $result = mysql_query($query, $dbCon);
                          $row = mysql_fetch_assoc($result);
                          echo $row['leerling_naam'];
                        ?>
                      </td>
                  </tr>

                    <tr>
                      <td>                        
                        <?php 
                          $query = "SELECT * FROM klassen_ict WHERE id = 5";
                          $result = mysql_query($query, $dbCon);
                          $row = mysql_fetch_assoc($result);
                          echo $row['leerling_naam'];
                        ?>
                      </td>
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
<!--        
    <?php
        #$query = "SELECT * FROM klassen";
        #$result = mysql_query($query, $dbCon);
        #echo '<select>';
        #while ($row = mysql_fetch_assoc($result)) {
        #    echo '<option value="">'.$row['opleiding'] .' - ' .$row['klas_naam'].'</option>';
        #}
        #echo '</select>';
?>
-->        
            
    </div>

    
</section>

<?php
	require_once ('footer.php');
?>
