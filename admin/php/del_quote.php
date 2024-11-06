<?php
include "../../config.php";
if (isset($_GET["quote_id"])) {
    $id = $_GET["quote_id"];
    $query = "DELETE FROM `quot` where quot_id=$id";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location:../quote.php");
    } else {
        die("Counldn't Deleted!");
    }
}
?>