<?php
    session_start();

    include_once("connection.php");

    if(isset($_POST['name_first']) && isset($_POST['name_last'])) {
        if($_POST['name_first'] != "" && $_POST['name_last'] != ""){
            $first = $_POST['name_first'];
            $last = $_POST['name_last'];
            $sql_store = "INSERT into names (first, last) VALUES ('$first', '$last')";
            $sql = mysql_query($sql_store, $dbCon) or die(mysql_error());
        } else{
        echo "You need to enter data in both boxes!";
        }
    } else{
        echo "You need to enter data in both boxes!";
    }
?> 

<?php
    if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];
    $username = $_SESSION['username'];
} else {
    header('Location: index.php');
    die();
}


require_once('header.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Name Storage</title>
</head>
<body>
    
    <div id="pag3blok1">
        
    <h1>Name Storage</h1>
    <form action="formpagina.php" method="POST">
        <input type="text" name="name_first" value="" placeholder="First Name">
        <input type="text" name="name_last" value="" placeholder="Last Name">
        <input type="submit" name="submit" value="Submit">
    </form>
        
    </div>
</body>
</html>

<?php
	require_once ('footer.php');
?>