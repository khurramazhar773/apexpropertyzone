<?php
include "../../config.php";
if(isset($_GET["delete_id"])){
    $id = $_GET["delete_id"];
    $query = "delete from `service` where service_id = $id";
    $result = mysqli_query($conn , $query);
    if($result){
        header("location:../../admin/service.php");
    }
    else{
        die(mysqli_error($connect));
    }
}
?>