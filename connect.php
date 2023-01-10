<?php
$servername = "";
$ini = "";
$dbport = 3306;
if ($_SERVER['SERVER_ADDR'] != "::1") {
    $servername = "mysql66.unoeuro.com";
    $ini = parse_ini_file('secrets2.ini');
} else {
    $servername = "localhost";
    $ini = parse_ini_file('secrets.ini');
};



// Try connect
$conn = mysqli_connect($servername, $ini['db_user'], $ini['db_password'], $ini['db_name'], $dbport);

// Check 
if (!$conn) {
    die("Fejl: " . mysqli_connect_error());
}