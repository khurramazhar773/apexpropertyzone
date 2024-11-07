<?php
include "../config.php";
    $select_query = "select * from `user_sub`";
    $result_query = mysqli_query($conn, $select_query);
    $count_cart_items = mysqli_num_rows($result_query);
echo $count_cart_items;
?>