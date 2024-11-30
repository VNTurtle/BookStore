<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('Function/Invoice.php');
require_once('Function/OrderStatus.php');


// Mặc định giá trị cho start_date và end_date
$startDate = isset($_GET['start_date']) ? $_GET['start_date'] : '';
$endDate = isset($_GET['end_date']) ? $_GET['end_date'] : '';

if ($startDate && $endDate) {
    // Lấy dữ liệu theo khoảng thời gian
    $productRevenue = Invoice::getRevenueByProduct($startDate, $endDate);
    $categoryRevenue = Invoice::getRevenueByCategory($startDate, $endDate);
} else {
    // Lấy danh sách hóa đơn mặc định
    $productRevenue = Invoice::getInvoiceAndSL(1, 0);
    $categoryRevenue = Invoice::getInvoiceAndSL(1, 0);
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
            } else if (startDate > endDate) {
                event.preventDefault(); // Ngăn form gửi đi
                alert('Ngày bắt đầu không được lớn hơn ngày kết thúc!');
            }

            const baseUrl = "index.php?src=admin/statistic/statisticbyProduct";
            const queryParams = `start_date=${startDate}&end_date=${endDate}`;
            window.location.href = `${baseUrl}&${queryParams}`;
        });
    </script>

    <div class="row">
        <div class="col-8 mt-4">
            <h2>Doanh thu theo sản phẩm</h2>
            <table class=" table border-top bg-light">
                <thead>
                    <tr style="background-color: aqua;">
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Đã bán</th>
                        <th>Doanh thu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($productRevenue as $key => $product): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td>
                                <div class="d-flex justify-content-start align-items-center product-name">
                                    <div class="avatar-wrapper">
                                        <div class="avatar me-2 rounded-2 bg-label-secondary">
                                            <img class="rounded-2" src="assets/img/products/<?= $product['Path'] ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="name-product" style="width: 315px;">
                                        <h6 class="text-body text-nowrap mb-0" style="white-space: normal !important; overflow-wrap: break-word;"><?= $product['ProductName'] ?> </h6>
                                    </div>

                                </div>
                            </td>
                            <td><?= $product['total_quantity_sold'] ?></td>
                            <td><?= number_format($product['TotalRevenue'], 3, ',', '.') ?> VNĐ</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="col-4 mt-4">
            <h2>Doanh thu theo danh mục</h2>
            <table class="table border-top bg-light">
                <thead>
                    <tr style="background-color: aqua;">
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Doanh thu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($categoryRevenue as $key => $category): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $category['CategoryName'] ?></td>
                            <td><?= number_format($category['TotalRevenue'], 3, ',', '.') ?> VNĐ</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php
require 'src/admin/layout/footer.php';
?>