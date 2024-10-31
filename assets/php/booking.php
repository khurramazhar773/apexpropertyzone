<?php
include ('../../config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];
    $id =(int)$_POST['propertyid'];

    $sql = "INSERT INTO `booking` (`name`, `email`,`number`, `message`, `property_id`) VALUES ( '$name', '$email','$number', '$message','$id');";

	if ($conn->query($sql) === TRUE) {
        
        header('Location: ../../property.php');
        exit();
    } else {
        // Handle error
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>