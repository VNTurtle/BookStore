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
// Chuyển dữ liệu categoryRevenue thành định dạng JSON
$categoryLabels = array_column($categoryRevenue, 'CategoryName');
$categoryData = array_column($categoryRevenue, 'TotalRevenue');
?>
<script>
    const categoryLabels = <?= json_encode($categoryLabels) ?>;
    const categoryData = <?= json_encode($categoryData) ?>;
</script>


<link rel="stylesheet" href="assets/css/lst_statistic.css">
<script src="assets/Chart/chart.js"></script>
<script src="assets/Chart/chartjs-plugin.js"></script>

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
        <div class="col-5 mt-4">
            <h2>Biểu đồ doanh thu theo danh mục</h2>
            <canvas id="categoryChart" width="300" height="200" style="max-width: 800px; max-height: 500px; background-color: #fff;"></canvas>
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const ctx = document.getElementById('categoryChart').getContext('2d');

            // Chuyển tất cả các giá trị trong categoryData thành số thực trước khi tính tổng
            const totalRevenue = categoryData
                .map(value => parseFloat(value)) // Chuyển giá trị sang số thực
                .reduce((sum, value) => sum + value, 0); // Tính tổng

            console.log(totalRevenue);

            new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: categoryLabels,
                    datasets: [{
                        label: 'Doanh thu',
                        data: categoryData,
                        backgroundColor: [
                            '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    let value = context.raw;
                                    let percentage = ((value / totalRevenue) * 100).toFixed(2);
                                    return `${context.label}: ${percentage}% (${value.toLocaleString()} VNĐ)`;
                                }
                            }
                        },
                        datalabels: {
                            formatter: (value, context) => {
                                let percentage = ((value / totalRevenue) * 100).toFixed(2);
                                return `${percentage}%`;
                            },
                            color: '#fff',
                            font: {
                                weight: 'bold'
                            }
                        }
                    }
                },
                plugins: [ChartDataLabels]
            });

        });
    </script>
</div>
<?php
require 'src/admin/layout/footer.php';
?>