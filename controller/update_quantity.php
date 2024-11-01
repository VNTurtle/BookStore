<?php
require_once('../API/Cart.php');
session_start();
$userId = $_SESSION['Id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    if (is_numeric($productId) && is_numeric($quantity) && $quantity > 0) {
        // Cập nhật số lượng sản phẩm trong giỏ hàng
        $check=Cart::updateCart($quantity, $userId, $productId);
        if ($check>0) {
            echo json_encode(["status" => "success", "message" => "Quantity updated"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Failed to update quantity"]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid input"]);
    }
}
?>