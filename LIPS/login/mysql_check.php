<?php
    $server_add = "localhost";
    $server_id = "root";
    $server_pw = "";
    $server_db = "lips_skateboard";

    $conn = new mysqli($server_add, $server_id, $server_pw, $server_db);
    if ($conn -> connect_error) {
        echo "Mysql Error.\n :". $conn -> connect_error;
    } else {
        echo "Succese";
    }
?>