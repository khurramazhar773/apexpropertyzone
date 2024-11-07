<?php
include '../../config.php';

if (isset($_POST['submit'])) {
    // Collect POST data
    $title = $_POST['title'];
    $description = $_POST['description'];

    $image_urls = [];

    // Set the upload directory for images
    $uploadDir = 'uploads/blog/';

    // Ensure the uploads directory exists
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Handle the main image upload
    if (isset($_FILES['main_img']) && $_FILES['main_img']['error'] === UPLOAD_ERR_OK) {
        $main_img = $_FILES['main_img'];
        $main_img_path = $uploadDir . basename($main_img['name']);

        // Move the uploaded file to the destination directory
        if (move_uploaded_file($main_img['tmp_name'], $main_img_path)) {
            $image_urls[] = $main_img_path;  // Add main image URL to array
        } else {
            echo "Failed to upload main image.";
        }
    }

    // Convert the array of image URLs to JSON format
    $gallery_json = json_encode($image_urls);

    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("INSERT INTO `blog` (`title`, `detail`, `img`) VALUES (?, ?, ?)");
    $stmt->bind_param('sss', $title, $description, $gallery_json);

    // Execute the statement and check for success
    if ($stmt->execute()) {
        // Redirect after success
        echo "<script>alert('Blog added successfully'); window.location.href = '../add-blog.php';</script>";
    } else {
        echo "Error inserting blog: " . $stmt->error;
    }

    // Close the prepared statement and the database connection
    $stmt->close();
    $conn->close();
}
?>