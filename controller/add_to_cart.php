<?php
require_once('../API/Cart.php');
session_start();
$userId = $_SESSION['Id'] ?? null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy các tham số từ POST
    $quantity = $_POST['quantity'] ?? null;
    $bookId = $_POST['Id'] ?? null;
    $source = $_POST['source'] ?? null;

    // Kiểm tra dữ liệu đầu vào
    if (!$userId || !$bookId) {
        echo json_encode(['status' => 'error', 'message' => 'Dữ liệu không hợp lệ']);
        exit;
    }

    // Xử lý logic thêm sản phẩm vào giỏ hàng
    if ($source === 'favourite') {
        // Yêu cầu đến từ trang danh sách yêu thích
        $quantity = 1; // Mặc định thêm 1 sản phẩm từ danh sách yêu thích
    }

    // Kiểm tra sản phẩm trong giỏ hàng
    $checkCart = Cart::checkCart($userId, $bookId);
    if (!empty($checkCart)) {
        $newQuantity = $checkCart[0]['Quantity'] + $quantity;
        Cart::updateCart($newQuantity, $userId, $bookId);
    } else {
        Cart::putCart($userId, $bookId, $quantity);
    }

    // Trả phản hồi JSON thành công
    echo json_encode(['status' => 'success', 'message' => 'Sản phẩm đã được thêm vào giỏ hàng']);
    exit;
}
?>
