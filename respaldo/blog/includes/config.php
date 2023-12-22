<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'Adbc@2023#Mysql-BD');
define('DB_NAME','adbc_gob');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>