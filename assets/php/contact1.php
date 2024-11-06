<?php

include '../../config.php';

if (isset($_POST['submit'])){
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    // $services = $_POST['services'];
    $message = $_POST['message'];

    
    $con_sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `message`) VALUES ('$userName', '$email', '$phone', '$message')";
    $con_result = $conn->query($con_sql);

    if($con_result){
        header('location: ../../index.php');
    }

}else{
    echo "Form not submit";
}

?>