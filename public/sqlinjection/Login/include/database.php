<?php
$server = "localhost";
$database = "testdb";
$username = "root";
$password = "";

if (!mysql_connect($server , $username , $password)) {
 	exit('Error in connecting');
 } 
 if (!mysql_select_db($database)) {
 	exit('Error in connecting to database');
 }
 ?>