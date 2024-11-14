<link rel="stylesheet" href="assets/css/layout.css">

<?php
require_once('API/Type.php');
require_once('API/db.php');
require_once('API/User.php');
$bookTypeIds = Type::getType();

$typedetailList = array();
$parameters = [];
$resultType = 2;
foreach ($bookTypeIds as $bookType) {
    $typeId = $bookType['Id'];
    $queryTypeDetail = "SELECT * FROM typedetail WHERE TypeId = $typeId LIMIT 4";
    $typeDetails = DP::run_query($queryTypeDetail, $parameters, $resultType);
    // Hợp nhất kết quả truy vấn vào danh sách
    $typedetailList = array_merge($typedetailList, $typeDetails);
}
session_start();
if (isset($_SESSION['Id'])) {
    $userId = $_SESSION['Id'];
    // Thực hiện các hành động khi session Id tồn tại
}

if (isset($_GET['logout'])) {
    // Hủy toàn bộ phiên
    session_destroy();

    // Chuyển hướng người dùng đến trang đăng nhập hoặc trang khác
    header("Location: index.php");
    exit;
}
?>
<div class="opacity-menu" onclick="CLoseMenu()"></div>
<header class="header">
    <div class="container">
        <div class="row row-header align-items-center">
            <div class="menu-bar " onclick="toggeleMenu()">
                <i style="color: #fff; margin-top: 3px; margin-left: -2px;" class="fa-solid fa-bars"></i>
            </div>
            <div class="col-lg-3">
                <a href="/" class="logo" title="Logo">
                    <img class="Logo-header" src="assets/img/logo-bookstore-header.jpg" alt="Logo">
                </a>
            </div>
            <form class="col-lg-4 search-header" method="get" action="searchresult.php" >
                <div class="InputContainer">
                    <input placeholder="Search.." id="timkiem" class="input" name="timkiem" type="text" onkeyup="toggleButton()">
                    <button class="btn btn-search" style="border-color: #fff; border-radius: 25px; margin: 13px; color: #09bfff;" type="submit" id="btn">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>

            <?php
            if (isset($_GET['timkiem'])) {
                $noidung = $_GET['timkiem'];
            } else {
                $noidung = false;
            }
            if ($noidung) {
                $querySearch = "SELECT * FROM book WHERE Name LIKE '%$noidung%' ";
                $ketqua = DP::run_query($querySearch, $parameters, $resultType);
            }
            ?>

            <div class="col-lg-5 header-control">
                <ul class="ul-control">

                    <li class="header-favourite d-n">
                        <i style="width: 25px; height: 25px;" class="fa-solid fa-heart"></i>
                    </li>
                    <li class="header-cart ">
                        <a href="index.php?src=cart/cart" id="cartLink">
                            <i style="width: 25px; height: 25px; color: #000;" class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </li>
                    <script>
                        document.querySelector('.header-favourite').addEventListener('click', function(event) {
                            var token = localStorage.jwt_token;
                            if (token == null) {
                                event.preventDefault(); // Ngăn không cho thực hiện hành động mặc định
                                window.location.href = 'index.php?src=user/login'; // Chuyển hướng đến trang đăng nhập
                            }
                        });

                        // Xử lý khi nhấn vào giỏ hàng
                        document.querySelector('#cartLink').addEventListener('click', function(event) {
                            var token = localStorage.jwt_token;
                            if (token == null) {
                                event.preventDefault(); // Ngăn không cho thực hiện hành động mặc định
                                window.location.href = 'index.php?src=user/login'; // Chuyển hướng đến trang đăng nhập
                            }
                        });
                    </script>
                    <li class="header-account d-n">
                        <i style="width: 25px; height: 25px; color: #000;" class="fa-regular fa-user"></i>
                        <ul class="Show-account" id="auth-links">
                            <script>
                                var token = localStorage.jwt_token;
                                const authLinks = document.getElementById('auth-links');
                                if (token == null) {
                                    authLinks.innerHTML = `<li>
                                                <a href="index.php?src=user/login">Login</a>
                                            </li>
                                            <li>
                                                <a href="index.php?src=user/register">Register</a>
                                            </li>`;
                                } else {
                                    const base64Url = token.split('.')[1];
                                    const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
                                    const jsonPayload = decodeURIComponent(
                                        atob(base64)
                                        .split('')
                                        .map(c => '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2))
                                        .join('')
                                    );

                                    const decoded = JSON.parse(jsonPayload);
                                    const role = decoded.data.role;
                                    if (role == 1) {
                                        authLinks.innerHTML = `
                                            <li>
                                                <a href="index.php?src=user/profile">Cá nhân</a>
                                            </li>
                                            <li>
                                                <a href="index.php?src=invoice/invoice">Đơn hàng</a>
                                            </li>
                                            <li>
                                                <a href="index.php?src=admin/home">Admin</a>
                                            </li>
                                            <li>
                                                <a href="index.php?logout=true" id="logoutLink">Logout</a>
                                            </li>
                                            `;
                                    } else {
                                        authLinks.innerHTML = `
                                            <li>
                                                <a href="index.php?src=user/profile">Cá nhân</a>
                                            </li>
                                            <li>
                                                <a href="index.php?src=invoice/invoice">Đơn hàng</a>
                                            </li>
                                            <li>
                                                <a href="index.php?logout=true" id="logoutLink">Logout</a>
                                            </li>
                                            `;
                                    }

                                }
                            </script>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header-menu">
            <div class="header-menu-des">
                <nav class="header-nav">
                    <ul class="item-big">
                        <li>
                            <a href="index.php" class="logo-sitenav d-block d-lg-none">
                                <img src="assets/img/logo-bookstore-header.jpg" width="172" height="50" alt="">
                            </a>
                        </li>
                        <li class="d-lg-none d-block account-mb">
                            <ul id="ullink">
                                <script>
                                    var token = localStorage.jwt_token;

                                    if (token == null) {
                                        authLinks.innerHTML = `<li>
                                                <a href="index.php?src=user/login">Login</a>
                                            </li>
                                            <li>
                                                <a href="index.php?src=user/register">Register</a>
                                            </li>`;
                                    } else {
                                        const base64Url = token.split('.')[1];
                                        const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
                                        const jsonPayload = decodeURIComponent(
                                            atob(base64)
                                            .split('')
                                            .map(c => '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2))
                                            .join('')
                                        );

                                        const decoded = JSON.parse(jsonPayload);
                                        const role = decoded.data.role;
                                        if (role == 1) {
                                            authLinks.innerHTML = `
                                            <li>
                                                <a href="index.php?src=user/profile">Cá nhân</a>
                                            </li>
                                            <li>
                                                <a href="index.php?src=invoice/invoice">Đơn hàng</a>
                                            </li>
                                            <li>
                                                <a href="index.php?src=admin/home">Admin</a>
                                            </li>
                                            <li>
                                                <a href="index.php?logout=true" id="logoutLink">Logout</a>
                                            </li>
                                            `;
                                        } else {
                                            authLinks.innerHTML = `
                                            <li>
                                                <a href="index.php?src=user/profile">Cá nhân</a>
                                            </li>
                                            <li>
                                                <a href="index.php?src=invoice/invoice">Đơn hàng</a>
                                            </li>
                                            <li>
                                                <a href="index.php?logout=true" id="logoutLink">Logout</a>
                                            </li>
                                            `;
                                        }

                                    }
                                </script>

                            </ul>
                        </li>
                        <li class="d-block d-lg-none title-danhmuc">
                            <span>Menu chính</span>
                        </li>
                        <li class="nav-item">
                            <a href="index.php">
                                <i class="fa-solid fa-house"></i>
                                Trang chủ
                            </a>
                        </li>
                        <li class="nav-item has-mega">
                            <a href="index.php?src=product/lst_product" class="caret-down">Sản phẩm</a>
<<<<<<< Updated upstream
                            <div class="mega-content">
                                <div class="lst-Type-main">
                                    <ul class="level0">
                                        <?php
                                        foreach ($bookTypeIds as $key => $lst_type) {
                                        ?>
                                            <li class="level1 item parent">
                                                <!-- Đường dẫn với lst_id để lọc sản phẩm theo loại sách -->
                                                <a href="index.php?src=product/lst_product&lst_id=<?= urlencode($lst_type['Id']) ?>" class="hmega">
                                                    <?php echo htmlspecialchars($lst_type['Name']) ?>
                                                </a>
                                                <ul class="level1">
                                                    <?php
                                                    foreach ($typedetailList as $key => $lst_typedetail) {
                                                        if ($lst_typedetail['TypeId'] == $lst_type['Id']) {
                                                    ?>
                                                            <!-- Đường dẫn với lst_id2 để lọc sản phẩm theo chi tiết loại sách -->
                                                            <li class="level2">
                                                                <a href="index.php?src=product/lst_product&lst_id=<?= urlencode($lst_type['Id']) ?>&lst_id2=<?= urlencode($lst_typedetail['Id']) ?>">
                                                                    <?php echo htmlspecialchars($lst_typedetail['Name']) ?>
                                                                </a>
                                                            </li>
                                                    <?php
=======
                                <div class="mega-content">
                                    <div class="lst-Type-main">
                                        <ul class="level0">
                                            <?php
                                            foreach ($bookTypeIds as $key => $lst_type) {
                                            ?>
                                                <li class="level1 item parent">
                                                    <!-- Đường dẫn với lst_id để lọc sản phẩm theo loại sách -->
                                                    <a href="index.php?src=product/lst_product&lst_id=<?= urlencode($lst_type['Id']) ?>" class="hmega">
                                                        <?php echo htmlspecialchars($lst_type['Name']) ?>
                                                    </a>
                                                    <ul class="level1">
                                                        <?php
                                                        foreach ($typedetailList as $key => $lst_typedetail) {
                                                            if ($lst_typedetail['TypeId'] == $lst_type['Id']) {
                                                        ?>
                                                                <!-- Đường dẫn với lst_id2 để lọc sản phẩm theo chi tiết loại sách -->
                                                                <li class="level2">
                                                                    <a href="index.php?src=product/lst_product&lst_id=<?= urlencode($lst_type['Id']) ?>&lst_id2=<?= urlencode($lst_typedetail['Id']) ?>">
                                                                        <?php echo htmlspecialchars($lst_typedetail['Name']) ?>
                                                                    </a>
                                                                </li>
                                                        <?php
                                                            }
>>>>>>> Stashed changes
                                                        }
                                                        ?>
                                                        <li class="level2">
                                                            <a href="index.php?src=product/lst_product" style="color: #09bfff;">Xem thêm</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            <?php
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
<<<<<<< Updated upstream
                            </div>
=======
>>>>>>> Stashed changes
                        </li>
                        <li class="nav-item">
                            <a href="">Hệ thống</a>
                        </li>
                        <li class="nav-item">
                            <a href="introduce.html">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.html">Liên Hệ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>