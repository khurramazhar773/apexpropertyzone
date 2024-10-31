<?php
include '../../config.php';

if (isset($_POST['submit'])) {
    // Collect POST data
    $title = $_POST['title'];
    $description = $_POST['description'];

    $image_urls = [];



    $uploadDir = 'uploads/blog/';

    // Ensure the uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    

    if (isset($_FILES['main_img']) && $_FILES['main_img']['error'] === UPLOAD_ERR_OK) {
        $main_img = $_FILES['main_img'];
        $main_img_path = $uploadDir . basename($main_img['name']);
        
        if (move_uploaded_file($main_img['tmp_name'], $main_img_path)) {
            $image_urls[] = $main_img_path;  // Add main image URL to array
        } else {
            echo "Failed to upload main image.";
        }
    }


    // Convert the array of image URLs to JSON format
    $gallery_json = json_encode($image_urls);
    echo $gallery_json;

    $blog_sql = "INSERT INTO `blog` (`title`, `detail`, `img`) VALUES ('$title', '$description', '$gallery_json')";
    $blog_result = $conn->query($blog_sql);

    

    // Execute the prepared statement
    if ($blog_result) {
        // Uncomment the next line if you want to redirect after successful insertion
        header('Location: ../add-blog.php');
        echo "Property added successfully.";
    } else {
        echo "Error inserting property: " . $blog_result->error;
    }

    // Close the statement and the connection
    $blog_result->close();
    $conn->close();
}
?>
