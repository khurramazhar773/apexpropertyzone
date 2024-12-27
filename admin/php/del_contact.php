<?php
include '../../config.php';

if (isset($_GET['delete_id'])) {

    $id = $_GET["delete_id"];
    $query = "delete from `contact` where id = $id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location:../contact.php");
    } else {
        die(mysqli_error($connect));
    }

} else {
    echo "Can't be deleted.";
}
?>