<?php

include('../../.env.local.php');
foreach ($envs as $env) {
    $DB_NAME = $env['DB_NAME'];
    $DB_USERNAME = $env['DB_USERNAME'];
    $DB_PASSWORD = $env['DB_PASSWORD'];
    $DB_HOST = $env['DB_HOST'];
}
$ConnectDatabase = mysql_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD);

$DbSelected = mysql_select_db($DB_NAME);

if (!$DbSelected) {
    die (mysql_error());
}



?>