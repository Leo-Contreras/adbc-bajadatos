<?php
$server   = "localhost";
$username = "root";
$password = "Adbc@2023#Mysql-BD";
$database = "adbc_gob";

$con = new mysqli($server, $username, $password, $database);
$con->set_charset("utf8");
if ($con->connect_error) {
    die('error'.$con->connect_error);
}
?>