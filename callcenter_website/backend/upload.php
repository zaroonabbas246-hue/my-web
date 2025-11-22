<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];

    // Sanitize email
    $email = $conn->real_escape_string($email);

    $sql = "INSERT INTO cvs (email) VALUES ('$email')";
    if($conn->query($sql) === TRUE){
        echo "<p style='color:green;'>Email uploaded successfully!</p>";
    } else {
        echo "<p style='color:red;'>Database error: " . $conn->error . "</p>";
    }
}
?>
