<?php
include '../../config.php';

if (isset($_GET['delete_id'])) {

    $id = $_GET["delete_id"];
    $query = "delete from `booking` where booking_id = $id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location:../booking.php");
    } else {
        die(mysqli_error($connect));
    }

} else {
    echo "Can't be deleted.";
}
?>