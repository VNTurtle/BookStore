<?php
require_once('../Function/Favourite.php');
session_start();
$userId = $_SESSION['Id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookId = $_POST['product_id'];
    $check=Favourite::delateFavourite($userId, $bookId);
    if ($check > 0) {
        echo json_encode(["status" => "success", "message" => "Đã xóa sản phẩm yêu thích"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to remove product"]);
    }
}
?>