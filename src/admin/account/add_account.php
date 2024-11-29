<?php
ob_start();
require 'src/admin/layout/menu.php';
require_once('API/Account.php');

// Xử lý khi người dùng gửi form thêm tài khoản
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $email = $_POST['Email'];
    $password = password_hash($_POST['Password'], PASSWORD_DEFAULT); // Mã hóa mật khẩu
    $roleId = isset($_POST['RoleId']) ? 1 : 2;
    $status = isset($_POST['Status']) ? 1 : 0;

    if (Account::emailExists($email)) {
        $errorMessage = "Email này đã được sử dụng. Vui lòng chọn một email khác.";
    } else {
        $result = Account::addAccount($firstName, $lastName, $email, $password, $roleId, $status);
        if (!$result) {
            header("Location: index.php?src=admin/account/lst_account");
            exit;
        } else {
            echo "Thêm tài khoản thất bại.";
        }
    }
}
ob_end_flush();
?>

<link rel="stylesheet" href="assets/css/edit_product.css">
<div class="container">
    <h1>Thêm tài khoản mới</h1>
    <form method="POST">
        <div class="form-group">
            <label for="FirstName">First Name</label>
            <input type="text" id="FirstName" name="FirstName" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="LastName">Last Name</label>
            <input type="text" id="LastName" name="LastName" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" id="Email" name="Email" class="form-control" required>
            <?php
            if (!empty($errorMessage)) {
            ?>
                <p class="text-danger"><?= htmlspecialchars($errorMessage) ?></p>
            <?php
            } ?>
        </div>
        <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" id="Password" name="Password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="Role">Rolde Admin</label>
            <div class="custom-switch">
                <input type="checkbox" id="Role" name="RoleId" class="custom-switch-input">
                <label for="Role" class="custom-switch-label"></label>
            </div>
        </div>
        <div class="form-group">
            <label for="Status">Status</label>
            <div class="custom-switch">
                <input type="checkbox" id="Status" name="Status" class="custom-switch-input">
                <label for="Status" class="custom-switch-label"></label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm tài khoản</button>
        <a href="index.php?src=admin/account/lst_account" class="btn btn-secondary" style="margin-top: 10px;">Hủy</a>
    </form>
</div>