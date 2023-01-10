<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql66.unoeuro.com');
define('DB_USERNAME', 'nele_hansenberg_dk');
define('DB_PASSWORD', 'DmtEdyb92xB4w6zp3cna');
define('DB_NAME', 'nele_hansenberg_dk_db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>