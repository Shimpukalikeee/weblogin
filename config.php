<?php 
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'james');
define('DB_PASSWORD', 'delatorre');
define('DB_NAME', 'itc127-malabon-2025');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
    die("ERROR could not connect: " . mysqli_connect_error());
}

date_default_timezone_set('Asia/Manila');
?>