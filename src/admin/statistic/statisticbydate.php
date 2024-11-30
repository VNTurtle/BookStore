<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('Function/Invoice.php');
require_once('Function/OrderStatus.php');

// Tính toán tổng doanh thu và các thống kê khác từ dữ liệu
$totalRevenue = 0.0;
$completedOrders = 0;
$canceledOrders = 0;

// Mặc định giá trị cho start_date và end_date
$startDate = isset($_GET['start_date']) ? $_GET['start_date'] : '';
$endDate = isset($_GET['end_date']) ? $_GET['end_date'] : '';

$items_per_page = 10;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($current_page - 1) * $items_per_page;

if ($startDate && $endDate) {
    // Lấy dữ liệu theo khoảng thời gian
    $invoice = Invoice::getRevenueByDate($startDate, $endDate);

    if (!empty($invoice)) {
        foreach ($invoice as $data) {
            if($data['OrderStatusId']==5){
                $canceledOrders+=1;
            }else{
                $totalRevenue += $data['Total'];
            }
            $completedOrders += 1;
          
        }
    }
} else {
    // Lấy danh sách hóa đơn mặc định
    $invoice = Invoice::getInvoiceAndSL($offset, 0);
}
?>

<link rel="stylesheet" href="assets/css/lst_statistic.css">
<div class="container mt-4">
    <h1 class="mb-4">Chọn ngày thống kê</h1>
    <div class="mb-4">
        <div class="row g-3">
            <div class="col-auto">
                <label for="startDate" class="form-label">Từ ngày:</label>
                <input type="date" class="form-control" id="startDate" value="<?= $startDate ?>">
            </div>
            <div class="col-auto">
                <label for="endDate" class="form-label">Đến ngày:</label>
                <input type="date" class="form-control" id="endDate" value="<?= $endDate ?>">
            </div>
            <div class="col-auto align-self-end">
                <button id="filterButton" class="btn btn-primary">Lọc</button>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("filterButton").addEventListener("click", function() {
            const startDate = document.getElementById("startDate").value;
            const endDate = document.getElementById("endDate").value;

            if (!startDate || !endDate) {
                alert("Vui lòng chọn cả hai ngày.");
                return;
            }else if(startDate > endDate){
                event.preventDefault(); // Ngăn form gửi đi
                alert('Ngày bắt đầu không được lớn hơn ngày kết thúc!');
            }

            const baseUrl = "index.php?src=admin/statistic/statisticbydate";
            const queryParams = `start_date=${startDate}&end_date=${endDate}`;
            window.location.href = `${baseUrl}&${queryParams}`;
        });
    </script>


    <!-- Summary Cards -->
    <div class="row">
        <div class="col-md-3">
            <div class="summary-card">
                <h3>Doanh thu</h3>
                <p>Tổng: <strong><?= number_format($totalRevenue, 3, ',', '.') ?> VNĐ</strong></p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="summary-card">
                <h3>Đơn hàng</h3>
                <p>Đã bán: <strong><?= $completedOrders ?> đơn hàng</strong></p>
                <p>Hủy: <strong><?= $canceledOrders ?> đơn hàng</strong></p>
            </div>
        </div>
    </div>

    <!-- Danh sách hóa đơn -->
    <div class="row">
        <table class="datatables-invoice table border-top bg-light">
            <thead>
                <tr style="background-color: aqua;">
                    <th>STT</th>
                    <th>Mã</th>
                    <th>Tên khách hàng</th>
                    <th>Địa chỉ</th>
                    <th>Số điện thoại</th>
                    <th>Tổng tiền</th>
                    <th>Số HD con</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($invoice as $key => $lst): ?>
                    <tr class="odd">
                        <td><?= $key + 1 ?></td>
                        <td class="sorting_1">
                            <a class="text-truncate align-items-center" href="index.php?src=admin/invoice/invoice_detail&id_invoice=<?= $lst['Code'] ?>">
                                <?= $lst['Code'] ?>
                            </a>
                        </td>
                        <td><?= $lst['Username'] ?></td>
                        <td><?= $lst['ShippingAddress'] ?></td>
                        <td><?= $lst['ShippingPhone'] ?></td>
                        <td><?= number_format($lst['Total'], 3, ',', '.') ?> đ</td>
                        <td><?= $lst['Quantity'] ?></td>
                        <td><?= $lst['Name'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php
require 'src/admin/layout/footer.php';
?>