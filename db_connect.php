<?php

$serverName = 'tmsfpcloud.mysql.database.azure.com';
$userName = 'tmsfpcloud';
$password = 'Qwerty12345';
$port = 3306;
$dbName = 'tms_db';

$con = mysqli_init();

if (!mysqli_real_connect($con, $serverName, $userName, $password, $port, $dbName)) {
  
    die("Koneksi gagal: " . mysqli_connect_error());
echo "Koneksi berhasil!";

mysqli_close($con);

?>
