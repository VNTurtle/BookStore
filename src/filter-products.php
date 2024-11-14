<?php
require_once('../API/LstProduct_.php');

// Thiết lập tiêu đề JSON
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);
$priceRanges = $data['priceRanges'];
$lst_id = isset($data['lst_id']) ? $data['lst_id'] : null;
$lst_id2 = isset($data['lst_id2']) ? $data['lst_id2'] : null;

// Chuyển đổi khoảng giá từ chuỗi sang số
$minPrice = 0;
$maxPrice = PHP_INT_MAX;

if (in_array('Dưới 10.000đ', $priceRanges)) {
    $minPrice = 0;
    $maxPrice = 9.999;
} elseif (in_array('Từ 10.000đ - 50.000đ', $priceRanges)) {
    $minPrice = 10.000;
    $maxPrice = 50.000;
} elseif (in_array('Từ 50.000đ - 100.000đ', $priceRanges)) {
    $minPrice = 50.000;
    $maxPrice = 100.000;
} elseif (in_array('Từ 100.000đ - 300.000đ', $priceRanges)) {
    $minPrice = 100.000;
    $maxPrice = 300.000;
} elseif (in_array('Từ 300.000đ - 500.000đ', $priceRanges)) {
    $minPrice = 300.000;
    $maxPrice = 500.000;
} elseif (in_array('Trên 1 triệu', $priceRanges)) {
    $minPrice = 1000.000;
    $maxPrice = PHP_INT_MAX;
}

// Gọi hàm lấy sản phẩm đã lọc
$filteredProducts = LstProduct::getFilteredProducts($lst_id, $lst_id2, $minPrice, $maxPrice);

// Trả về dữ liệu JSON
echo json_encode($filteredProducts);
