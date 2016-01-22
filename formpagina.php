<?php
    session_start();

    include_once("connection.php");

    if(isset($_POST['tabel_naam']) && isset($_POST['vak1'])) {
        if($_POST['tabel_naam'] != "" && $_POST['vak1'] != ""){
            $first = $_POST['tabel_naam'];
            $last = $_POST['vak1'];
            $sql_store = "INSERT INTO voortgangs_tabellen (tabel_naam, vak1) VALUES (NULL, '$tabel_naam', '$vak1')";
            $sql = mysql_query($sql_store, $dbCon) or die(mysql_error());
        } else{
        echo "You need to enter data in both boxes!";
        }
    } else{
        echo "You need to enter data in both boxes!";
    }
?> 

<!DOCTYPE html>
<html>
<head>
    <title>Name Storage</title>
</head>
<body>
    <h1>Name Storage</h1>
    <form action="index.php" method="POST">
        <input type="text" name="tabel_naam" value="" placeholder="Tabel_Naam">
        <input type="text" name="vak1" value="" placeholder="Vak1">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>