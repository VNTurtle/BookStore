<?php
require_once('../Function/db.php');
require_once('../Function/Product.php');
require_once('../Function/Model.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo 'GLTF File Error: ' . $_FILES['gltfFile']['error'] . '<br>';
    echo 'BIN File Error: ' . $_FILES['binFile']['error'] . '<br>';
    // Lấy giá trị 'Id' từ $_POST
    $BookId = isset($_POST['Id']) ? $_POST['Id'] : null;

    // Tiếp tục xử lý các file được tải lên
    $gltfName = $_FILES['gltfFile']['name'];

    $binName = $_FILES['binFile']['name'];
    
    $Book = Product::getProductById($BookId);

    $NameBook = $Book[0]['Name'];
  
    

    // Function to move uploaded files to the target directory
    function moveUploadedFile($file, $uploadDir)
    {
        $filename = basename($file['name']);
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $targetFile = $uploadDir . $filename;

        // If the file already exists, rename the new file
        $i = 1;
        while (file_exists($targetFile)) {
            $newFilename = pathinfo($filename, PATHINFO_FILENAME) . '_' . $i . '.' . $extension;
            $targetFile = $uploadDir . $newFilename;
            $i++;
        }
        if ($file['error'] === UPLOAD_ERR_OK) {
            if (move_uploaded_file($file['tmp_name'], $targetFile)) {
                $size = $file['size'] / 1024;
                echo "File uploaded successfully: $targetFile (Size: $size KB)<br>";
            } else {
                echo "Error moving file: $filename<br>";
            }
        } else {
            echo "Error uploading file: $filename (Error code: " . $file['error'] . ")<br>";
        }
    }
    $modelName = Product::sanitizeFilename(Product::removeAccents($NameBook));
    // Create upload directory based on the sanitized book name
    $uploadDir = "../assets/model/" . $modelName . $BookId . "/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Upload gltfFile
    if (isset($_FILES['gltfFile']) && $_FILES['gltfFile']['error'] === UPLOAD_ERR_OK) {
        moveUploadedFile($_FILES['gltfFile'], $uploadDir);
    } else {
        echo "Lỗi: Có lỗi khi tải lên tệp gltfFile.";
    }

    
    // Upload binFile
    if (isset($_FILES['binFile']) && $_FILES['binFile']['error'] === UPLOAD_ERR_OK) {
        moveUploadedFile($_FILES['binFile'], $uploadDir);
    }
    
    // Upload imageFiles (assuming multiple files)
    if (isset($_FILES['imageFiles']) && is_array($_FILES['imageFiles']['name'])) {
        foreach ($_FILES['imageFiles']['name'] as $key => $value) {
            if ($_FILES['imageFiles']['error'][$key] === UPLOAD_ERR_OK) {
                $imageFile = [
                    'name' => $_FILES['imageFiles']['name'][$key],
                    'type' => $_FILES['imageFiles']['type'][$key],
                    'tmp_name' => $_FILES['imageFiles']['tmp_name'][$key],
                    'error' => $_FILES['imageFiles']['error'][$key],
                    'size' => $_FILES['imageFiles']['size'][$key],
                ];
                moveUploadedFile($imageFile, $uploadDir);
            } else {
                echo "Error uploading image file: " . $_FILES['imageFiles']['name'][$key] . " (Error code: " . $_FILES['imageFiles']['error'][$key] . ")<br>";
            }
        }
    } else {
        echo "No image files uploaded.<br>";
    }
    Model::postModel($BookId, $gltfName, $binName);
}
