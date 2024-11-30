<?php
$host = 'localhost';
$user = 'root'; 
$password = ''; 
$database = 'stranica';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Povezivanje s bazom nije uspjelo: " . $conn->connect_error);
}
?>