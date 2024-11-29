<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('API/Invoice.php');
// Lấy ngày hiện tại
$currentDate = date('Y-m-d');

// Lấy ngày 7 ngày trước
$startDate = date('Y-m-d', strtotime('-30 days'));
$revenue = Invoice::getRevenueByDate($startDate, $currentDate);

// Hiển thị kết quả
echo "Doanh thu từ $startDate đến $currentDate:<br>";
if (!empty($revenue)) {
    foreach ($revenue as $day) {
        // Hiển thị ngày và tổng doanh thu theo định dạng số
        echo "Ngày: " . htmlspecialchars($day['date']) . " - Doanh thu: " . number_format($day['total_revenue'], 0, ',', '.') . " VND<br>";
    }
} else {
    echo "Không có doanh thu trong khoảng thời gian này.";
}
?>


<?php
require 'src/admin/layout/footer.php';
?>