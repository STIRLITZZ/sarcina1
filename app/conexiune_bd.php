<?php
$server = "172.28.0.2";
$username = "root";
$password = "12345";
$database = "formmmm";

$conexiune = mysqli_connect($server, $username, $password, $database);

if (!$conexiune) {
    die("Conexiune eșuată: " . mysqli_connect_error());
}
?>