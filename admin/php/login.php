<?php
session_start();
include '../../config.php';

if(isset($_POST['username']) && isset($_POST['password'])){
    $uName = $_POST['username'];
    $password = $_POST['password'];

    $log_sql = "SELECT * FROM `admin_users`";
    $log_result = $conn->query($log_sql);

    $user = $log_result->fetch_assoc();

    if($user['username'] === $uName && $user['password'] === $password){
        $_SESSION['user_id'] = $user['id'];
        header("location: ../index.php");
    }else{
        header("location: ../login.php");
    }

}
?>
