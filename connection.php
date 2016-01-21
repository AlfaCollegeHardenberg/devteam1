<?php

$dbCon = mysql_connect("mysql22469-devteam1.groundctrl.nl", "root", "IDAxli17288");
    mysql_select_db("loopjijalbij");

if ($dbCon->connect_error) {
    die("Connection failed": . $dbCon->connect_error);
}
echo "Connected succesfully";


//if($dbCon == false){
//    echo ("Probeer opnieuw");
//}
?>