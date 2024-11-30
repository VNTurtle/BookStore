<?php
ob_start();
require 'src/admin/layout/menu.php';
require_once('Function/Account.php');

// Lấy ID tài khoản từ URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Kiểm tra ID hợp lệ
if ($id <= 0) {
    die('Invalid account ID!');
}

// Lấy thông tin tài khoản từ database
$account = Account::getAccountById($id);
if (!$account) {
    die('Account not found!');
}
$account = $account[0];

// Xử lý khi người dùng gửi form cập nhật
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $email = $_POST['Email'];
    $roleId = isset($_POST['RoleId']) ? 1 : 2;
    $status = isset($_POST['Status']) ? 1 : 0;

    $result = Account::updateAccount($id, $firstName, $lastName, $email, $roleId, $status);

    if (!$result) {
        header("Location: index.php?src=admin/account/edit_account&id=$id");
        exit; // Ngừng script để tránh tiếp tục thực thi                                    
    } else {
        echo "<p class='text-danger'>Cập nhật tài khoản thất bại!</p>";
    }
}
ob_end_flush();
?>
<link rel="stylesheet" href="assets/css/edit_product.css">
<div class="container">
    <h1>Chỉnh sửa tài khoản</h1>
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
                <label for="FirstName">First Name</label>
                <input type="text" id="FirstName" name="FirstName" class="form-control" value="<?= htmlspecialchars($account['FirstName']) ?>" required>
            </div>
            <div class="form-group">
                <label for="LastName">Last Name</label>
                <input type="text" id="LastName" name="LastName" class="form-control" value="<?= htmlspecialchars($account['LastName']) ?>" required>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" id="Email" name="Email" class="form-control" value="<?= htmlspecialchars($account['Email']) ?>" required>
            </div>
            <div class="form-group">
                <label for="Role">Role Admin</label>
                <div class="custom-switch">
                    <input type="checkbox" id="Role" name="RoleId" class="custom-switch-input" value="1" <?= $account['RoleId'] == 1 ? 'checked' : '' ?>>
                    <label for="Role" class="custom-switch-label"></label>
                </div>
            </div>
            <div class="form-group">
                <label for="Status">Status</label>
                <div class="custom-switch">
                    <input type="checkbox" id="Status" name="Status" class="custom-switch-input" <?= $account['Status'] == 1 ? 'checked' : '' ?>>
                    <label for="Status" class="custom-switch-label"></label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cập nhật</button>
            <a href="index.php?src=admin/account/lst_account" class="btn btn-secondary" style="margin-top: 10px;">Hủy</a>
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