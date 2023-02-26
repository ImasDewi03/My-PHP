<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "data_saya";

return ew PDO("mysql:host=$host;dbname=$database", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
));
<?