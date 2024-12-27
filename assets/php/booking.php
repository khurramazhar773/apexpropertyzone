<?php
include('../../config.php');

header('Content-Type: application/json');

// Check if all required fields are provided
if (isset($_POST['name'], $_POST['number'], $_POST['propertyid'])) {
    // Collect and sanitize form data
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
    $number = filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT);
    $propertyid = filter_var($_POST['propertyid'], FILTER_SANITIZE_STRING);
    $message = isset($_POST['message']) ? filter_var($_POST['message'], FILTER_SANITIZE_STRING) : '';

    // Insert data into the bookings table
    $stmt = $conn->prepare("INSERT INTO `booking` (name, email, number, property_id, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $name, $email, $number, $propertyid, $message);

    if ($stmt->execute()) {
        // Success response
        echo json_encode(["success" => true, "message" => "Booking successful."]);
    } else {
        // Failure response
        echo json_encode(["success" => false, "message" => "Failed to submit booking. Please try again later."]);
    }

    // Close connection
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["success" => false, "message" => "Please complete all required fields."]);
}
?>