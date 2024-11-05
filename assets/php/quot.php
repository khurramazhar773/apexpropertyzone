<?php
include '../../config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['quot_name'];
    $phone = $_POST['quot_phone'];
    $service = $_POST['quot_services'];
    $city = $_POST['quot_city'];
    $propertyType = $_POST['propertyType'];
    $message = $_POST['quot_message'];
    // Seller Specific Fields
    $title = $_POST['quot_property_title'];
    $adress = $_POST['quot_address'];
    $area = $_POST['quot_area'];
    $price = $_POST['seller_price'];
    $propertyAge = $_POST['property_age'];
    $beds = $_POST['bedroom'];
    $furnished = $_POST['furnished'];
    // Buyer Specific Fields
    $buyArea = $_POST['buy_area'];
    $buyPrice = $_POST['buy_price'];


    $main_sql = "INSERT INTO `quot` (`name`, `phone`, `quot_service`, `city`, `property_type`, `message`) VALUES ('$name', '$phone', '$service', '$city', '$propertyType', '$message')";
    $main_result = $conn->query($main_sql);

    $quot = $conn->insert_id;

    if ($service === "sell") {
        $sell_sql = "INSERT INTO `sell_quot` (`quot_id`, `title`, `address`, `area_sq`, `price`, `property_age`, `bedroom`, `furnishing`) VALUES ('$quot', '$title', '$adress', '$area', '$price', '$propertyAge', '$beds', '$furnished')";
        $sell_result = $conn->query($sell_sql);
        if ($sell_result) {
            echo "<script>alert('Request submitted successfully!');</script>";
            echo "<script>window.location.href = '../../index.php'</script>";
        }
    } elseif ($service === "buy") {
        $sell_sql = "INSERT INTO `buy_quot` (`quot_id`, `area`, `price`) VALUES ('$quot', '$buyArea', '$buyPrice')";
        $sell_result = $conn->query($sell_sql);
        if ($sell_result) {
            echo "<script>alert('Request submitted successfully!');</script>";
            echo "<script> window.location.href = '../../index.php';</script>";
        }
    } else {
        echo "<script>alert('Request submitted successfully!');</script>";
        echo "<script> window.location.href = '../../index.php';</script>";
    }
}



?>