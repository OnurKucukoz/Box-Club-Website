<?php

$env = parse_ini_file(".env");

$db_server = $env['DB_HOST']; //localhost
$db_user =  $env['DB_USER']; //root
$db_pass = $env['DB_PASS'];
$db_name = $env['DB_NAME']; //businessdb
$conn = null;

try {
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name
    );
} catch (mysqli_sql_exception $e) {
    echo "Could not connect";
}

function getConn()
{
    global $conn;
    return  $conn;
}
