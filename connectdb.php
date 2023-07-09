<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'visitors';

$con = mysqli_connect($db_host,$db_user,$db_password,$db_name)
or
die("Error connecting to the database");

//echo "<h1><b>Successfully connected to users database<b></h1><br>";
?>