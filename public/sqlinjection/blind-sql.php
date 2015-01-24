<?php
require_once 'inc/connection.php';
require 'inc/blind_sql_template.php';
$query = "SELECT * FROM users WHERE id=" . $_GET['id'] . " LIMIT 0, 1";
dbQuery($query);
?>