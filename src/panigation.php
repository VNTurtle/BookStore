<?php
require_once('../Function/Search.php');
header('Content-Type: application/json');

// Lấy tham số `timkiem` và `page` từ URL
$searchKeyword = isset($_GET['timkiem']) ? trim($_GET['timkiem']) : '';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Cài đặt phân trang
$limit = 20;
$offset = ($page - 1) * $limit;

// Truy vấn sản phẩm theo từ khóa và phân trang
$conditions = ["b.Name LIKE ?"];
$placeholders = ["%$searchKeyword%"];
$sql = "
    SELECT b.Name, b.Price, i.Path
    FROM book b
    JOIN image i ON b.ID = i.BookID
    WHERE i.Id = (
        SELECT MIN(i2.Id)
        FROM image i2
        WHERE i2.BookId = b.Id
    ) AND " . implode(" AND ", $conditions) . "
    LIMIT $limit OFFSET $offset";

// Lấy kết quả và trả về JSON
$ketqua = DP::run_query($sql, $placeholders, PDO::FETCH_ASSOC);
$totalProducts = count($ketqua);
$totalPages = ceil($totalProducts / $limit);

echo json_encode([
    'products' => $ketqua,
    'totalPages' => $totalPages,
    'currentPage' => $page
]);
?>
