<?php

$dbCon = mysql_connect("mysql22469-devteam1.groundctrl.nl", "root", "IDAxli17288");
    mysql_select_db("loopjijalbij");

if($dbCon == false){
    echo ("Probeer opnieuw");
}
?>