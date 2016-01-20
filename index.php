<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();

if($_POST['submit']) {
    include_once("connection.php");
    $username = strip_tags($_POST['username']);
    $password = strip_tags($_POST['password']);
    
    $sql = "SELECT id, username, password FROM members WHERE username = '$username' AND activated = '1' LIMIT 1";
    $query = mysql_query($sql, $dbCon);
    
    if ($query) {
        $row = mysql_fetch_row($query);
        $userId = $row[0];
        $dbUsername = $row[1];
        $dbPassword = $row[2];
    }
    
    if ($username == $dbUsername && $password == $dbPassword) {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $userId;
        header('Location: user.php');
    } else {
        echo "De gebruikersnaam of het wachtwoord is foutief!";
    }
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP/MySQL Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
    <div id="wrapper">
        <div id="loginheader">
        
        </div>
        <div id="loginblok1">
            <br /><br />
            <h1 class="kleurtekst">Inloggen</h1>
                <form id="inlogformulier" method="post" action="index.php">
                    <label class="kleurtekst">Gebruikersnaam</label><br />
                <input type="text" placeholder="Username" name="username" /><br />
                    <label class="kleurtekst">Wachtwoord</label><br />
                <input type="password" placeholder="Password" name="password" /><br />
                <input type="submit" name="submit" value="Log In" />

            </form>    
        </div>
        <div id="footerlogin">
            ToWiKa@gmail.com
        </div>
</div>
</body>
</html>