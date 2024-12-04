<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('Function/Invoice.php');
require_once('Function/Product.php');
// Lấy ngày hiện tại
$currentDate = date('Y-m-d');

// Lấy ngày 7 ngày trước
$startDate = date('Y-m-d', strtotime('-7 days'));
$startDate1 = date('Y-m-d', strtotime('-30 days'));
$startDate2 = date('Y-m-d', strtotime('-365 days'));
$revenue = Invoice::getRevenueByDate($startDate, $currentDate);
$revenue = Invoice::getRevenueByDate($startDate, $currentDate);
$revenue1 = Invoice::getRevenueByDate($startDate1, $currentDate);
$revenue1_1 = Invoice::getRevenueByDate2($startDate1, $currentDate);
$revenue2 = Invoice::getRevenueByDate($startDate2, $currentDate);
$DoanhthuTuan = 0.0;
$DonHangTuan = 0;
$DoanhthuThang = 0.0;
$DonHangThang = 0;
$DoanhthuNam = 0.0;
$DonHangNam = 0;
$chartData = [];
foreach ($revenue as $day) {
    if ($day['OrderStatusId'] == 4) {
        $DoanhthuTuan += $day['Total'];
        $DonHangTuan += $day['total_quantity_sold'];
    }
}
foreach ($revenue1 as $day) {
    if ($day['OrderStatusId'] == 4) {
        $DoanhthuThang += $day['Total'];
        $DonHangThang += $day['total_quantity_sold'];
    }
}
foreach ($revenue2 as $day) {
    if ($day['OrderStatusId'] == 4) {
        $DoanhthuNam += $day['Total'];
        $DonHangNam += $day['total_quantity_sold'];
    }
}
foreach ($revenue1_1 as $day) {
    $chartData[] = [
        'date' => $day['date'], // Ngày
        'revenue' => $day['Total']
    ];
}
$jsonData = json_encode($chartData);

?>
<script src="assets/Chart/chart.js"></script>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-widget-separator-wrapper">
                <div class="card-body card-widget-separator">
                    <div class="row gy-4 gy-sm-1">
                        <!-- Cột Tuần -->
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-between align-items-start card-widget border-end pb-3 pb-sm-0">
                                <div>
                                    <h6 class="mb-2">Doanh thu Tuần</h6>
                                    <h4 class="mb-2"><?= number_format($DoanhthuTuan, 3, ',', ',') ?> VNĐ</h4>
                                    <p class="mb-0"><span class="text-muted me-2"><?= $DonHangTuan ?> đơn hàng</span></p>
                                </div>
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="bx bx-calendar-week bx-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Cột Tháng -->
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-between align-items-start card-widget border-end pb-3 pb-sm-0">
                                <div>
                                    <h6 class="mb-2">Doanh thu Tháng</h6>
                                    <h4 class="mb-2"><?= number_format($DoanhthuThang, 3, ',', ',') ?> VNĐ</h4>
                                    <p class="mb-0"><span class="text-muted me-2"><?= $DonHangThang ?> đơn hàng</span></p>
                                </div>
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="bx bx-calendar bx-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- Cột Năm -->
                        <div class="col-sm-4">
                            <div class="d-flex justify-content-between align-items-start card-widget">
                                <div>
                                    <h6 class="mb-2">Doanh thu Năm</h6>
                                    <h4 class="mb-2"><?= number_format($DoanhthuNam, 3, ',', ',') ?> VNĐ</h4>
                                    <p class="mb-0"><span class="text-muted me-2"><?= $DonHangNam ?> đơn hàng</span></p>
                                </div>
                                <div class="avatar">
                                    <span class="avatar-initial rounded bg-label-secondary">
                                        <i class="bx bx-calendar-check bx-sm"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-7">
                <canvas id="revenueChart" width="300" height="200" style="max-width: 800px; max-height: 500px; background-color: #fff;"></canvas>
            </div>
            <div class="col-5 bg-light">
                <h3>Sản phẩm bán chạy trong 30 ngày</h3>
                <ul>
                    <table class="table table-top-countries">
                        <thead>
                            <tr style="background-color: aqua;">
                                <th>Sách</th>
                                <th>Đã bán</th>
                            </tr>
                        </thead>
                        <?php
                        $topProducts = Product::getTopSellingProducts(10);
                        foreach ($topProducts as $product): ?>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="avatar-wrapper">
                                            <div class="avatar me-2 rounded-2 bg-label-secondary">
                                                <img class="rounded-2" src="assets/img/products/<?= $product['Path'] ?>" alt="">
                                            </div>
                                            <div class="name-product" style="width: 315px;">
                                                <h6 class="text-body text-nowrap mb-0" style="white-space: normal !important; overflow-wrap: break-word;"><?= $product['Name'] ?> </h6>

                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <h6><?= $product['TotalSold'] ?> Sách</h6>
                                    </td>
                                </tr>

                            </tbody>
                        <?php endforeach; ?>
                    </table>

                </ul>
            </div>
        </div>

        <script>
            // Lấy dữ liệu từ PHP
            const data = <?php echo $jsonData; ?>;

            // Tách dữ liệu ngày và doanh thu
            const labels = data.map(item => item.date); // Ngày
            const revenues = data.map(item => item.revenue); // Doanh thu (số)

            // Cấu hình biểu đồ
            const ctx = document.getElementById('revenueChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar', // Biểu đồ cột
                data: {
                    labels: labels, // Ngày
                    datasets: [{
                        label: 'Doanh thu (000 VND)',
                        data: revenues, // Doanh thu
                        backgroundColor: 'rgba(105, 108, 255, 1)', // Màu nền
                        borderColor: 'rgba(75, 192, 192, 1)', // Màu viền
                        borderWidth: 2 // Độ dày viền
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true
                        },
                        tooltip: {
                            callbacks: {
                                // Định dạng tooltip để hiển thị với .000 đ
                                label: function(context) {
                                    let value = context.raw; // Lấy giá trị gốc
                                    return new Intl.NumberFormat('vi-VN', {
                                        style: 'currency',
                                        currency: 'VND',
                                        minimumFractionDigits: 0
                                    }).format(value * 1000); // Thêm .000 vào doanh thu
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            title: {
                                display: true,
                                text: 'Ngày'
                            }
                        },
                        y: {
                            title: {
                                display: true,
                                text: 'Doanh thu (000 VND)'
                            }
                        }
                    }
                }
            });
        </script>
    </div>
</div>

<?php
require 'src/admin/layout/footer.php';
?>