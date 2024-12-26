<?php 

$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "tmsfpcloud.mysql.database.azure.com", "tmsfpcloud", "Qwerty12345", "tms_db", 3306, MYSQLI_CLIENT_SSL);
