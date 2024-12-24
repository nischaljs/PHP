<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>Upload a file</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="upload_file">Upload a file</label>
        <input type="file" name="upload_file" id="upload_file">
        <button type="submit">Submit File</button>
    </form>
</body>
</html>

<?php
if (isset($_FILES['upload_file'])) {
    echo "<pre>";
    print_r($_FILES['upload_file']);
    echo "</pre>";

    $file_name = $_FILES['upload_file']['name'];
    $file_temp = $_FILES['upload_file']['tmp_name'];

    if (move_uploaded_file($file_temp, "uploads/" . $file_name)) {
        echo "File uploaded successfully!<br>";
        echo "<img src='uploads/$file_name' width='300' height='200' alt='Uploaded File'>";
    } else {
        echo "Error uploading the file.";
    }
}
?>
