<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'laptop';
$sql=mysqli_connect($host,$username)or die('not connected to database'); 
mysqli_select_db($sql,$dbname)or die('not connected to database');
?>
