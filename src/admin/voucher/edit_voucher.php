<?php
ob_start();
require 'src/admin/layout/menu.php';
require_once('API/Voucher.php');
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
if ($id <= 0) {
    die('Invalid voucher ID!');
}

$voucher = Voucher::getVoucherById($id);
if (!$voucher) {
    die('Voucher not found!');
}
$voucher = $voucher[0];

// Xử lý khi người dùng gửi form cập nhật
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $code = $_POST['Code'];
    $userId = $_POST['UserId'];
    $des = $_POST['Des'];
    $date = date('Y-m-d', strtotime($_POST['Date']));
    $enddate = date('Y-m-d', strtotime($_POST['EndDate']));
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

    $result = Voucher::updateVoucher($id, $code, $userId, $des, $date, $enddate, $maxtotal, $percent, $status);

    if (!$result) {
        header("Location: index.php?src=admin/voucher/lst_voucher");
        exit;
    } else {
        echo "<p class='text-danger'>Cập nhật voucher thất bại!</p>";
    }
}
ob_end_flush();
?>
<link rel="stylesheet" href="assets/css/edit_product.css">
<div class="container">
    <h1>Chỉnh sửa Voucher</h1>
    <form method="POST" id="updateForm">
        <div id="loading_update" class="title-pay hidden">
            <div class="dot-spinner">
                <div class="dot-spinner__dot"></div>
                <div class="dot-spinner__dot"></div>
                <div class="dot-spinner__dot"></div>
                <div class="dot-spinner__dot"></div>
                <div class="dot-spinner__dot"></div>
                <div class="dot-spinner__dot"></div>
                <div class="dot-spinner__dot"></div>
                <div class="dot-spinner__dot"></div>
            </div>
            <div class="title-loading">
                <h4>Đang xử lý</h4>
            </div>
        </div>

        <!-- Nội dung form -->
        <div id="formContent">
            <div class="form-group">
                <label for="Code">Code</label>
                <input type="text" id="Code" name="Code" class="form-control" value="<?= htmlspecialchars($voucher['Code']) ?>" required>
            </div>
            <div class="form-group">
                <label for="UserId">User ID</label>
                <input type="number" id="UserId" name="UserId" class="form-control" value="<?= htmlspecialchars($voucher['UserId']) ?>" required>
            </div>
            <div class="form-group">
                <label for="Des">Description</label>
                <textarea id="Des" name="Des" class="form-control" required><?= htmlspecialchars($voucher['Des']) ?></textarea>
            </div>
            <div class="form-group">
                <label for="Date">Start Date</label>
                <input type="date" id="Date" name="Date" class="form-control" 
                value="<?= htmlspecialchars((new DateTime($voucher['Date']))->format('Y-m-d')) ?>" required>            </div>
            <div class="form-group">
                <label for="EndDate">End Date</label>
                <input type="date" id="EndDate" name="EndDate" class="form-control" 
                value="<?= htmlspecialchars((new DateTime($voucher['EndDate']))->format('Y-m-d')) ?>" required>            </div>
            <div class="form-group">
                <label for="MaxTotal">Max Total</label>
                <input type="number" id="MaxTotal" name="MaxTotal" class="form-control" value="<?= htmlspecialchars($voucher['MaxTotal']) ?>" required>
            </div>
            <div class="form-group">
                <label for="Percent">Discount Percent</label>
                <input type="number" id="Percent" name="Percent" class="form-control" value="<?= htmlspecialchars($voucher['Percent']) ?>" required>
            </div>
            <div class="form-group">
                <label for="Status">Status</label>
                <div class="custom-switch">
                    <input type="checkbox" id="Status" name="Status" class="custom-switch-input" <?= $voucher['Status'] == 1 ? 'checked' : '' ?>>>
                    <label for="Status" class="custom-switch-label"></label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <a href="index.php?src=admin/voucher/lst_voucher" class="btn btn-secondary" style="margin-top: 10px;">Hủy</a>
        </div>
    </form>
</div>
<script>
    document.getElementById("updateForm").addEventListener("submit", function() {
        // Hiển thị loader
        document.getElementById("loading_update").classList.remove("hidden");
        document.getElementById("formContent").classList.add("hidden");
    });
</script>
