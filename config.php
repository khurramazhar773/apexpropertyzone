<?php
$servername = "csoft.live";
$username = "u793298586_apz";
$password = "5xgj~y9hT*";
$dbname = "u793298586_apz";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
