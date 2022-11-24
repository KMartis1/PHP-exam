<?php
$error = $_FILES['my_file']['error'];

if ($error !== UPLOAD_ERR_OK) {
    echo 'File upload error!';
    die();
}

if (!is_dir('storage')) {
    mkdir('storage', 0777);
}

$fileName = $_FILES['my_file']['name'];
$fileTmpPath = $_FILES['my_file']['tmp_name'];
$fileStoragePath = sprintf('storage/%s.%s', $_POST['filename'], pathinfo($fileName)['extension']);

move_uploaded_file($fileTmpPath, $fileStoragePath);

echo 'File uploaded successfully!';