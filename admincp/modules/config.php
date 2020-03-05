<?php

$server = 'localhost';
$db = 'phucanh';
$username = 'root';
$password = '';
$conn = mysqli_connect($server, $username, $password, $db);
mysqli_select_db($conn, $db);

?>