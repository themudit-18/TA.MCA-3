<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<h2>Upload a File</h2>
<form method="post" enctype="multipart/form-data">
    <label for="file">Choose a file:</label><br>
    <input type="file" id="file" name="file"><br><br>
    <input type="submit" value="Upload File" name="submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $targetDir = "./uploads/";

    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = $_FILES['file']['name'];
    $tmpFilePath = $_FILES['file']['tmp_name'];

    if ($fileName != "" && $tmpFilePath != "") {
        $newFilePath = $targetDir . $fileName;

        if (move_uploaded_file($tmpFilePath, $newFilePath)) {
            echo "<p>File '$fileName' uploaded successfully.</p>";
        } else {
            echo "<p>Error uploading file '$fileName'.</p>";
        }
    } else {
        echo "<p>Please choose a file to upload.</p>";
    }
}
?>

</body>
</html>
