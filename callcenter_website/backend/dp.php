<?php
$servername = "localhost";
$username = "root";
// change as per your setup
$password = "";
$dbname = "callcenter";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
