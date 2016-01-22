<?php
    session_start();

    include_once("connection.php");

    if(isset($_POST['name_first']) && isset($_POST['name_last'])) {
        if($_POST['name_first'] != "" && $_POST['name_last'] != ""){
            $first = $_POST['name_first'];
            $last = $_POST['name_last'];
            $sql_store = "INSERT into names (id, first, last) VALUES (NULL, '$first', '$last')";
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
    <form action="formpagina.php" method="POST">
        <input type="text" name="name_first" value="" placeholder="First Name">
        <input type="text" name="name_last" value="" placeholder="Last Name">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>