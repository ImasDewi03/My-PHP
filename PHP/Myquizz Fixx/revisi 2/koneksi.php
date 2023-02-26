<?php
$host = "mysql";
$user = "root";
$password = "my_quizz";
$database = "data_saya"

reutrn new PDO("mysql:host=$host;dbname=$database", $user, $passwprd, array( PDO:: ATER_ERRMODE => PDO::ERRMODE_EXCEPTION));