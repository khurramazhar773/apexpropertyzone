<?php

include '../../config.php';

if (isset($_POST['submit'])){
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $services = $_POST['services'];
    $message = $_POST['message'];

    
    $con_sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `service`, `message`) VALUES ('$userName', '$email', '$phone', '$services', '$message')";
    $con_result = $conn->query($con_sql);

    if($con_result){
        header('location: ../../contact.html');
    }

}else{
    echo "Form not submit";
}

?>