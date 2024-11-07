<?php
include '../../config.php';

if (isset($_GET['delete_id'])) {

    $id = $_GET["delete_id"];
    $query = "delete from `user_sub` where user_id = $id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location:../subscribed_user.php");
    } else {
        die(mysqli_error($connect));
    }

} else {
    echo "Can't be deleted.";
}
?>