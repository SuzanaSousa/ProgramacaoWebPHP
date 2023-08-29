<?php
require_once("config_inc.php") ;
$dsn = "msql:host=$servername;dbname=$dbnome;charset=UTF8";
//$DNS2 = "pgsql:host="
$conn = new PDO($dsn,$username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

//UNSET($CONN);
?>