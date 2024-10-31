<?php
include '../../config.php'; // Include your database connection

if (isset($_GET['id'])) {
    $property_id = intval($_GET['id']);

    // Fetch the property details to get image information
    $fetchQuery = "SELECT gallery FROM property WHERE property_id = ?";
    $stmt = $conn->prepare($fetchQuery);
    $stmt->bind_param("i", $property_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $property = $result->fetch_assoc();

    if ($property) {
        // Decode gallery JSON to get all image paths
        $gallery = json_decode($property['gallery'], true);

        // Delete each image from the server
        foreach ($gallery as $image) {
            $filePath = "uploads/" . basename($image);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        // Delete the property record from the database
        $deleteQuery = "DELETE FROM property WHERE property_id = ?";
        $stmt = $conn->prepare($deleteQuery);
        $stmt->bind_param("i", $property_id);
        $stmt->execute();

        // Redirect back with a success message
        header("Location: ../update-property.php?message=Property deleted successfully");
        exit();
    } else {
        echo "Property not found.";
    }
} else {
    echo "No property ID specified.";
}
?>
