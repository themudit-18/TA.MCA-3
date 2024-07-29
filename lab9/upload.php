<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['files'])) {
        $uploadDir = 'new/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        $files = $_FILES['files'];
        $fileCount = count($files['name']);
        $fileKeys = array_keys($files);

        for ($i = 0; $i < $fileCount; $i++) {
            $file = array();
            foreach ($fileKeys as $key) {
                $file[$key] = $files[$key][$i];
            }
            
            if ($file['error'] === UPLOAD_ERR_OK) {
                $destination = $uploadDir . basename($file['name']);
                move_uploaded_file($file['tmp_name'], $destination);
            }
        }
    }
}
?>