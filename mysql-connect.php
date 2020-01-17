<?php
DEFINE('DB_USER','root');
DEFINE('DB_PASSWORD','password');
DEFINE('DB_HOST','localhost');
DEFINE('DB_NAME','fuelwebapplication');

$dbc = @mysqli_connect(DB_HOST,DB_USER,"",DB_NAME)
OR die('COULD NOT CONNECT TO MYSQL '.mysqli_connect_error());

 ?>
