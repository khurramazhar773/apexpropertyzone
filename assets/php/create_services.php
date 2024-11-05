<?php
include "../../config.php";
if (isset($_POST['submit'])) {
    $service_name = $_POST['name'];
    $service_desc = $_POST['description'];
    $service_icon = $_POST['icon'];

    // Accessing Images
    $service_bg_img = $_FILES['serv_bg_image']['name'];
    $temp_image = $_FILES['serv_bg_image']['tmp_name'];
    $size_image = $_FILES['serv_bg_image']['size'];
    $type_image = $_FILES['serv_bg_image']['type'];

    // Sanitize input to prevent SQL injection
    $service_name = mysqli_real_escape_string($conn, $service_name);
    $service_desc = mysqli_real_escape_string($conn, $service_desc);
    $service_icon = mysqli_real_escape_string($conn, $service_icon);

    // Insert query
    $query = "INSERT INTO `service` (`service_name`, `service_desc`, `service_logo`, `service_bg`) VALUES ('$service_name', '$service_desc', '$service_icon', '$service_bg_img')";

    // Execute the query
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Check if the upload was successful
        move_uploaded_file($temp_image, '../../admin/images/' . $service_bg_img);
        header("location:../../admin/crea_service.php");
    } else {
        echo "Service hasn't been inserted: " . mysqli_error($conn);
    }
}
?>