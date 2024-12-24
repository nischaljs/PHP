<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restricted File Upload</title>
</head>
<body>
    <h2>Upload an Image</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="uploaded_img">Upload Image</label>
        <input type="file" name="uploaded_img" id="uploaded_img">
        <p>Only jpeg, jpg, png, gif files are allowed. Max size: 2MB</p>
        <button type="submit" name="upload_image">Submit</button>
    </form>
</body>
</html>

<?php
if (isset($_POST['upload_image']) && isset($_FILES['uploaded_img'])) {
    $file = $_FILES['uploaded_img'];
    $file_name = $file['name'];
    $file_type = $file['type'];
    $file_size = $file['size'];
    $file_temp = $file['tmp_name'];


    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    $max_size = 2 * 1024 * 1024; 

    if (in_array($file_type, $allowed_types) && $file_size <= $max_size) {
 
        $upload_path = "uploads/" . $file_name;

        if (move_uploaded_file($file_temp, $upload_path)) {
            echo "File uploaded successfully: " . htmlspecialchars($file_name) . "<br>";

            if (in_array($file_type, ['image/jpeg', 'image/png', 'image/gif'])) {
                echo "<img src='$upload_path' width='300' height='200' alt='Uploaded Image'>";
            }
        } else {
            echo "Error moving the uploaded file.<br>";
        }
    } else {
  
        if (!in_array($file_type, $allowed_types)) {
            echo "Invalid file type. Only jpeg, jpg, png, and gif files are allowed.<br>";
        }
        if ($file_size > $max_size) {
            echo "File size exceeds 2MB limit.<br>";
        }
    }
}
?>
