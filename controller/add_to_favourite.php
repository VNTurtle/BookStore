<?php
require_once('../API/Favourite.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userId = $_SESSION['Id'];
    $bookId = $_POST['Id'];

    $checkFavourite = Favourite::checkFavourite($userId, $bookId);

    if (!empty($checkFavourite)) {
        echo json_encode([
            'status' => 'error',
            'message' => 'Sản phẩm đã có trong danh sách yêu thích!'
        ]);
    } else {
        $result = Favourite::putFavourite($userId, $bookId);
        if ($result) {
            echo json_encode([
                'status' => 'error',
                'message' => 'Không thể thêm sản phẩm vào danh sách yêu thích'
            ]);
        } else {
            echo json_encode([
                'status' => 'success',
                'message' => 'Sản phẩm đã được thêm vào danh sách yêu thích!'
            ]);
        }
    }
}
