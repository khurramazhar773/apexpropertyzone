<?php

include '../../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $message = $_POST['message'] ?? '';

    $con_sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `message`) VALUES ('$username', '$email', '$phone', '$message')";
    $con_result = $conn->query($con_sql);
    
    echo "Thank you, $username! Your message has been received.";
} else {
    echo "Invalid request method.";
}

?>