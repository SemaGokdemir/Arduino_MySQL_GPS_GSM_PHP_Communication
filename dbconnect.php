

<?php
$MyUsername = "goksema";  // kullanıcı adı
$MyPassword = "198718S!";  // sifre
$MyHostname = "178.62.217.16";

$dbh = mysql_pconnect($MyHostname , $MyUsername, $MyPassword);
$selected = mysql_select_db("gps",$dbh);
?>


