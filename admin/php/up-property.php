<?php
include '../../config.php';

if (isset($_POST['submit'])) {
    // Collect POST data
    $property_id = $_POST['property_id']; // Get property ID from the form
    $title = $_POST['title'];
    $location = $_POST['location'];
    $address = $_POST['address'];
    $lot_area = $_POST['lot_area'];
    $constructed_area = $_POST['constructed_area'];
    $property_type = $_POST['property_type'];
    $subtype = $_POST['Subtype'];
    $rooms = $_POST['rooms'];
    $bedrooms = $_POST['bedrooms'];
    $electricityMeter = $_POST['electricityMeter'];
    $gasMeter = $_POST['gasMeter'];
    $area_sq = $_POST['area_sq'];
    $c_area_sq = $_POST['c_area_sq'];
    $baths = $_POST['baths'];
    $status = $_POST['status'];
    $description = $_POST['description'];
    $cond = $_POST['condition'];
    $price = $_POST['price'];
    $c_price = $_POST['c_price'];
    $permission = $_POST['permission'];

    // Array to hold image URLs
    $image_urls = [];

    // Define the uploads directory
    $uploadDir = 'uploads/';

    // Ensure the uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    
    // Handle main image upload
    if (isset($_FILES['main_img']) && $_FILES['main_img']['error'] === UPLOAD_ERR_OK) {
        $main_img = $_FILES['main_img'];
        $main_img_path = $uploadDir . basename($main_img['name']);
        
        if (move_uploaded_file($main_img['tmp_name'], $main_img_path)) {
            $image_urls[] = $main_img_path;  // Add main image URL to array
        } else {
            echo "Failed to upload main image.";
        }
    }

    // Handle additional images upload
    if (!empty($_FILES['additional_imgs']['name'][0])) {
        $additional_imgs = $_FILES['additional_imgs'];
        $img_count = count($additional_imgs['name']);

        for ($i = 0; $i < $img_count; $i++) {
            if ($additional_imgs['error'][$i] === UPLOAD_ERR_OK) {
                $img_tmp_name = $additional_imgs['tmp_name'][$i];
                $img_name = basename($additional_imgs['name'][$i]);
                $img_path = $uploadDir . $img_name;

                if (move_uploaded_file($img_tmp_name, $img_path)) {
                    $image_urls[] = $img_path;  // Add additional image URL to array
                } else {
                    echo "Failed to upload additional image: $img_name";
                }
            }
        }
    }

    // Convert the array of image URLs to JSON format
    $gallery_json = json_encode($image_urls);

    // Prepare and bind the SQL statement for update
    $stmt = $conn->prepare("UPDATE `property` SET `title`=?, `location`=?, `address`=?, `lot_area`=?, `constructed_area`=?, `property_type`=?, `subtype`=?, `rooms`=?, `bedrooms`=?, `elecMeter`=?, `gasMeter`=?, `areaSq`=?, `baths`=?, `status`=?, `description`=?, `cond`=?, `price`=?, `gallery`=?, `permission`=? WHERE `property_id`=?");
    
    // Bind parameters, including the property ID for the WHERE clause
    $stmt->bind_param('sssssssssssssssssssi', $title, $location, $address, $lot_area, $constructed_area, $property_type, $subtype, $rooms, $bedrooms, $electricityMeter, $gasMeter, $area_sq, $baths, $status, $description, $cond, $price, $gallery_json, $permission, $property_id);

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Uncomment the next line if you want to redirect after successful update
        header('Location: ../update-property.php');
        echo "Property updated successfully.";
    } else {
        echo "Error updating property: " . $stmt->error;
    }

    // Close the statement and the connection
    $stmt->close();
    $conn->close();
}
?>


<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the images to delete from form input
    $imagesToDelete = isset($_POST['images_to_delete']) ? explode(',', $_POST['images_to_delete']) : [];

    // Proceed with deletion
    if (!empty($imagesToDelete)) {
        foreach ($imagesToDelete as $image) {
            $filePath = "uploads/" . basename($image); // Ensure it's the correct path
            if (file_exists($filePath)) {
                unlink($filePath); // Delete the file from the server
            }
        }

        // Update the database (remove images from gallery)
        $remaining_images = array_diff($gallery, $imagesToDelete); // Keep only non-deleted images
        $newGalleryJson = json_encode(array_values($remaining_images)); // Re-encode the gallery

        // Update query to store new gallery data
        $updateGalleryQuery = "UPDATE property SET gallery = ? WHERE property_id = ?";
        $stmt = $conn->prepare($updateGalleryQuery);
        $stmt->bind_param("si", $newGalleryJson, $property_id);
        $stmt->execute();
    }
}



?>