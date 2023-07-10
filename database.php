<?php

$db_server = "localhost"; //localhost
$db_user = "id21016454_onurkucukoz"; //root
$db_pass = "Uk_145300";
$db_name = "id21016454_boxwebsitedb"; //businessdb
$conn = "";


try {
    $conn = mysqli_connect(
        $db_server,
        $db_user,
        $db_pass,
        $db_name
    );
} catch (mysqli_sql_exception) {
    echo "Could not connect";
}
