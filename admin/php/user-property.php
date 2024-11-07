<?php
include '../../config.php';

if (isset($_POST['submit'])) {
    // Collect POST data
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
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
    // $c_area_sq = $_POST['c_area_sq'];
    $baths = $_POST['baths'];
    $description = $_POST['description'];
    $cond = $_POST['condition'];
    $price = $_POST['price'];
    // $c_price = $_POST['c_price'];

    // Set permission to 'pending' for new user submissions
    $permission = 'pending';

    // Array to hold image URLs
    $image_urls = [];

    // Define the uploads directory
    $uploadDir = 'uploads/';

    // Ensure the uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
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
    echo $gallery_json;

    // Prepare and bind the SQL statement
    $user_pro_sql = "INSERT INTO `property` (`name`, `email`, `phone`, `title`, `location`, `address`, `lot_area`, `constructed_area`, `property_type`, `subtype`, `rooms`, `bedrooms`, `elecMeter`, `gasMeter`, `areaSq`, `baths`, `description`, `cond`, `price`, `gallery`, `permission`)
                                     VALUES ('$name', '$email', '$phone', '$title', '$location', ',$address', '$lot_area', '$constructed_area', '$property_type', '$subtype', '$rooms', '$bedrooms', '$electricityMeter', '$gasMeter', '$area_sq', '$baths', '$description', '$cond', '$price', '$gallery_json', 'pending')";
    $user_pro_result = $conn->query($user_pro_sql);
    

    // Execute the prepared statement
    if ($user_pro_result) {
        // Uncomment the next line if you want to redirect after successful insertion
        header('Location: ../../sell.php');
        echo "Property added successfully. It is pending admin approval.";
    } else {
        echo "Error inserting property: " . $user_pro_result->error;
    }

    // Close the statement and the connection
    
    ;
    $conn->close();
}
?>