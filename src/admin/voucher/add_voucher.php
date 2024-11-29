<?php
ob_start();
require 'src/admin/layout/menu.php';
require_once('API/Voucher.php');

// Xử lý khi người dùng gửi form thêm voucher
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['Code'];
    $userId = $_POST['UserId'];
    $des = $_POST['Des'];
    $date = $_POST['Date'];
    $enddate = $_POST['EndDate'];
    $maxtotal = $_POST['MaxTotal'];
    $percent = $_POST['Percent'];
    $status = isset($_POST['Status']) ? 1 : 0;

    if (!empty($date) && !empty($enddate)) {
        $startDate = strtotime($date);
        $endDate = strtotime($enddate);

        if ($startDate > $endDate) {
            echo "<script>
            alert('Ngày bắt đầu không được lớn hơn ngày kết thúc!');
            window.history.back(); // Quay lại trang trước
        </script>";
        exit;
        }
    }

    $result = Voucher::addVoucher($code, $userId, $des, $date, $enddate, $maxtotal, $percent, $status);

    if (!$result) {
        header("Location: index.php?src=admin/voucher/lst_voucher");
        exit;
    } else {
        echo "<p class='text-danger'>Thêm voucher thất bại!</p>";
    }
}
ob_end_flush();
?>

<link rel="stylesheet" href="assets/css/edit_product.css">
<div class="container">
    <h1>Thêm Voucher</h1>
    <form method="POST" id="addForm">
        <div id="formContent">
            <div class="form-group">
                <label for="Code">Code</label>
                <input type="text" id="Code" name="Code" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="UserId">User ID</label>
                <input type="number" id="UserId" name="UserId" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Des">Description</label>
                <textarea id="Des" name="Des" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="Date">Start Date</label>
                <input type="date" id="Date" name="Date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="EndDate">End Date</label>
                <input type="date" id="EndDate" name="EndDate" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="MaxTotal">Max Total</label>
                <input type="number" id="MaxTotal" name="MaxTotal" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Percent">Discount Percent</label>
                <input type="number" id="Percent" name="Percent" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Status">Status</label>
                <div class="custom-switch">
                    <input type="checkbox" id="Status" name="Status" class="custom-switch-input">
                    <label for="Status" class="custom-switch-label"></label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Thêm Voucher</button>
            <a href="index.php?src=admin/voucher/lst_voucher" class="btn btn-secondary" style="margin-top: 10px;">Hủy</a>
        </div>
    </form>
</div>
<script>
    document.getElementById("updateForm").addEventListener("submit", function(event) {
        const startDate = new Date(document.getElementById("Date").value);
        const endDate = new Date(document.getElementById("EndDate").value);

        if (startDate > endDate) {
            event.preventDefault(); // Ngăn form gửi đi
            alert('Ngày bắt đầu không được lớn hơn ngày kết thúc!');
        }
    });
</script>