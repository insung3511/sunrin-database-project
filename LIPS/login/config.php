<?php
define('SERVER', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', "");
define('DBNAME', 'DB_project');

$mysqli = new mysqli(SERVER, USERNAME, PASSWORD, DBNAME);
if (mysqli_connect_errno()) {
    echo "Connect failed: " . mysqli_connect_error();
    exit;
}
?>