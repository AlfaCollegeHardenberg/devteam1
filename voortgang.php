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

                  <!-- TABEL BOVENSTE RIJ START HIER -->
                  <tr>
                    <!-- TABEL NAAM -->
                    <td>
                      <?php 
                        $query = "SELECT * FROM voortgangs_tabellen WHERE id = 1";
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

                  # RIJ VAN VAK1 TM VAK5 BEGINT HIER

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<tr> <td>';
                        echo $row['result_vak_1'];
                        echo '</tr> </td>';
                      }
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
                    <!-- TABEL BOVENSTE RIJ STOPT HIER -->
                    <!-- TABEL LINKSE RIJ START HIER -->
                    <!-- DIT IS DE TABEL VAN KLAS MET ID 2 (PICT4V2A)-->
                  <?php
                      $query = "SELECT * FROM klassen_ict";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<tr> <td>';
                        echo $row['leerling_naam'];
                        echo '</td> </tr>';
                      }
                  ?>
                    <!-- TABEL LINKSE RIJ STOPT HIER -->

  
                <?php
                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_2'];
                        echo '</td> </tr>';
                      }

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_3'];
                        echo '</td> </tr>';
                      }

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_4'];
                        echo '</td> </tr>';
                      }

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_5'];
                        echo '</td> </tr>';
                      }
                  /*# RIJ VAN VAK 6 TM VAK 10 BEGINT HIER

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_6'];
                        echo '</td> </tr>';
                      }
                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_7'];
                        echo '</td> </tr>';
                      }
                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_8'];
                        echo '</td> </tr>';
                      }
                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_9'];
                        echo '</td> </tr>';
                      }
                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_10'];
                        echo '</td> </tr>';
                      }
                  # VAK 11 TM VAK 15 BEGINT HIER

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_11'];
                        echo '</td> </tr>';
                      }

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_12'];
                        echo '</td> </tr>';
                      }
                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_13'];
                        echo '</td> </tr>';
                      }
                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_14'];
                        echo '</td> </tr>';
                      }
                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_15'];
                        echo '</td> </tr>';
                      }

                  # VAK 16 TM VAK 20 BEGINT HIER

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_16'];
                        echo '</td> </tr>';
                      }

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_17'];
                        echo '</td> </tr>';
                      }

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_18'];
                        echo '</td> </tr>';
                      }

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_19'];
                        echo '</td> </tr>';
                      }

                      $query = "SELECT * FROM voortgangs_resultaten";
                      $result = mysql_query($query, $dbCon);
                      while ($row = mysql_fetch_assoc($result)) {
                        echo '<td> <tr>';
                        echo $row['result_vak_20'];
                        echo '</td> </tr>';
                      }
                  */?>


                  <!--
                  <tr>
                    <td>
                      <?php /*
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
                          echo $row['leerling_naam']; */
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
                -->
                </table>
        
   <!-- <?php/*
        $query = "SELECT * FROM klassen";
        $result = mysql_query($query, $dbCon);
        echo '<select>';
        while ($row = mysql_fetch_assoc($result)) {
            echo '<option value="">'.$row['opleiding'] .' - ' .$row['klas_naam'].'</option>';
        }
        echo '</select>';*/
?>-->
       
            
    </div>
    
    <div id="pag2blok3">
        <a class="link3" href="formpagina.php">Informatie invoegen</a>
    </div>

    
</section>

<?php
	require_once ('footer.php');
?>
