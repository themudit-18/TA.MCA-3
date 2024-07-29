<!DOCTYPE html>
<html>
<head>
    <title>Multiple File Upload</title>
</head>
<body>

<h2>Upload Files</h2>
<form method="post" enctype="multipart/form-data">
    <label for="dirName">Enter Folder Name: </label>
    <input type="text" name="dirName" id=""> <br>
    <label for="file1">File 1:</label>
    <input type="file" id="file1" name="files[]" multiple><br>
    <input type="submit" value="Upload" name="submit">
</form>

<?php
if(isset($_POST['submit'])) {
    $targetDir = "server_upload_files"."/";

    foreach ($_FILES['files']['name'] as $key => $name) {
        
        $tmpFilePath = $_FILES['files']['tmp_name'][$key];

        if ($tmpFilePath != "") {
            $newFilePath = $targetDir . $name;
            if (move_uploaded_file($tmpFilePath, $newFilePath)) {
                echo "<p>File  '$name' uploaded successfully.</p>";
            } else {
                echo "<p>Error uploading file '$name'.</p>";
            }
        }
    }
}
?>

</body>
</html>
