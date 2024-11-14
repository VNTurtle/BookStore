<?php
require_once('../API/db.php');
require_once('../API/Product.php');
require_once('../API/Model.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $BookId = isset($_POST['Id']) ? $_POST['Id'] : null;

    $Book = Product::getProductById($BookId);

    if (count($Book) > 0) {
        $NameBook = $Book[0]['Name'];
    } else {
        echo "Không tìm thấy kết quả.";
        $NameBook = null;
    }
    $modelName = Product::sanitizeFilename(Product::removeAccents($NameBook));

    $gltfName = $_POST['gltfFile'];
    $gltfSQL = $modelName . '.gltf';
    $binSQL = $modelName . '.bin';
    $gltfPath = '../assets/model/' . $gltfName . '.gltf';
    $binPath = '../assets/model/' . $gltfName . '.bin';
    $Image1 = $_FILES['imageFile1']['name'];
    $Image2 = $_FILES['imageFile2']['name'];
    $Image3 = $_FILES['imageFile3']['name'];

    $uploadDir = "../assets/model/" . $modelName . $BookId . "/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }
    //Tạo file gltf cho model
    $newGltfPath = '../assets/model/' . $modelName .  $BookId . '/' .  $modelName .'.gltf';

    //Sao chép file bin cho model
    $newBinPath = '../assets/model/' . $modelName . $BookId . '/' .  $modelName . '.bin';
    copy($binPath, $newBinPath);


    // Đọc nội dung của tệp gltf
    $gltfContent = file_get_contents($gltfPath);
    // Thực hiện thay thế các biến trong URI
    $modifiedGltfContent = strtr($gltfContent, [
        '$mainImage' => $Image1,
        '$coverImage' => $Image2,
        '$Image' => $Image3,
        '$binPath' => $binSQL
    ]);

    // Ghi lại nội dung đã sửa đổi vào tệp GLTF mới
    file_put_contents($newGltfPath, $modifiedGltfContent);


    // Insert the model data into the database
    $query = "INSERT INTO `model` (`BookId`, `Model`, `ModelBin`,`Alpha`,`Beta`,`Radius`,`target_x`, `target_y`,`target_z`,`Status`) 
                VALUES (?,?,?,?,?,?,?,?,?, true);";
    $parameters = [$BookId, $gltfSQL, $binSQL,2.5,1.5,15,0,0,0];
    $resultType = 1;
    DP::run_query($query, $parameters, $resultType);

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

    // Create upload directory based on the sanitized book name

    // Upload image file (assuming single file)
    if (isset($_FILES['imageFile1']) && $_FILES['imageFile1']['error'] === UPLOAD_ERR_OK) {
        $imageFile = [
            'name' => $_FILES['imageFile1']['name'],
            'type' => $_FILES['imageFile1']['type'],
            'tmp_name' => $_FILES['imageFile1']['tmp_name'],
            'error' => $_FILES['imageFile1']['error'],
            'size' => $_FILES['imageFile1']['size'],
        ];
        moveUploadedFile($imageFile, $uploadDir);
    } else {
        echo "Error uploading image file: " . $_FILES['imageFile']['name'] . " (Error code: " . $_FILES['imageFile']['error'] . ")<br>";
    }
    if (isset($_FILES['imageFile2']) && $_FILES['imageFile2']['error'] === UPLOAD_ERR_OK) {
        $imageFile = [
            'name' => $_FILES['imageFile2']['name'],
            'type' => $_FILES['imageFile2']['type'],
            'tmp_name' => $_FILES['imageFile2']['tmp_name'],
            'error' => $_FILES['imageFile2']['error'],
            'size' => $_FILES['imageFile2']['size'],
        ];
        moveUploadedFile($imageFile, $uploadDir);
    } else {
        echo "Error uploading image file: " . $_FILES['imageFile']['name'] . " (Error code: " . $_FILES['imageFile']['error'] . ")<br>";
    }
    if (isset($_FILES['imageFile3']) && $_FILES['imageFile3']['error'] === UPLOAD_ERR_OK) {
        $imageFile = [
            'name' => $_FILES['imageFile3']['name'],
            'type' => $_FILES['imageFile3']['type'],
            'tmp_name' => $_FILES['imageFile3']['tmp_name'],
            'error' => $_FILES['imageFile3']['error'],
            'size' => $_FILES['imageFile3']['size'],
        ];
        moveUploadedFile($imageFile, $uploadDir);
    } else {
        echo "Error uploading image file: " . $_FILES['imageFile']['name'] . " (Error code: " . $_FILES['imageFile']['error'] . ")<br>";
    }
}
