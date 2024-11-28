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
foreach ($revenue as $day) {
    echo "Ngày: " . $day['date'] . " - Doanh thu: " . number_format($day['total_revenue'], 3) . " VND<br>";
}
?>


<?php
require 'src/admin/layout/footer.php';
?>