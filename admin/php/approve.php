<?php
include '../../config.php';

if (isset($_POST['approve'])) {
    $property_id = $_POST['property_id'];

    $update_sql = "UPDATE property SET permission = 'approved' WHERE property_id = $property_id";
    $update_result = $conn->query($update_sql);

    if ($property_id) {
        echo "Property approved successfully.";
        // Redirect back to the admin panel after approval
        header("Location: ../aprove-property.php"); // Adjust as necessary
        exit();
    } else {
        echo "Error updating property: " . $conn->error;
    }

    $property_id->close();
}

$conn->close();
?>
