<link rel="stylesheet" href="assets/css/layout.css">

<?php
require_once('API/Type.php');
require_once('API/db.php');
require_once('API/User.php');
require_once('API/User.php');
require_once('API/Cancel_requests.php');
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
} else {
    $userId = null;
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
            <form class="col-lg-4 search-header" method="get" action="searchresult.php">
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
            $Lst_mess = Cancel_requests::getCancel_requestsByUserId($userId, 'approved');
            $Lst_complete = Cancel_requests::getCancel_requestsByUserId($userId, 'complete');
            $total_complete = count($Lst_complete);
            $total_mess = count($Lst_mess);
            ?>

            <div class="col-lg-5 header-control">
                <ul class="ul-control">
                    <li style="cursor: pointer; position: relative;">
                        <i class='bx bxs-message-rounded-dots' id="mess-icon" style="padding: 10px;"></i>
                        <span class="badge bg-primary rounded-circle position-absolute top-0 start-100 translate-middle">
                            <?php echo $total_mess + $total_complete; ?>
                        </span>
                        <div id="mess-dropdown" class="dropdown-menu-2 dropdown-menu-end" style="display: none;">
                            <h6 class="dropdown-header">Thông báo</h6>
                            <?php
                            foreach ($Lst_complete as $key => $complete) {
                            ?>
                                <div class="mess-content">
                                    <a id="mess-item-<?= $key ?>" data-key="<?= $key ?>" href="index.php?src=invoice/invoice">
                                        <p style="display: inline-block;"><strong>Đơn hàng:</strong> <?= $complete['order_id'] ?></p>
                                        <p>
                                            <strong>Đã hoàn tiền cho bạn.</strong>
                                            <button class="end_status float-end btn  btn-secondary btn-sm" 
                                            data-order-status="5" data-order-id="<?= $complete['order_id'] ?>" data-status="end_request">
                                            Xóa</button>
                                        </p>
                                        <p><strong>Mọi thắc mắc xin liên hệ qua số điện thoại: 0962548301.</strong> </p>
                                    </a>
                                    <div style="border-top: 5px solid #ccc; margin: 10px 0; width: 100%;"></div>
                                </div>
                                <?php
                            }
                            foreach ($Lst_mess as $key => $mess) {
                                if ($mess['PaymethodId'] == 1) {
                                ?>
                                    <div class="mess-content">
                                        <a id="mess-item-<?= $key ?>" data-key="<?= $key ?>" href="index.php?src=invoice/invoice">
                                            <p style="display: inline-block;"><strong>Đơn hàng:</strong> <?= $mess['order_id'] ?></p>
                                            <p>
                                                <strong>Đã hủy thành công</strong>
                                                <button class="end_status float-end btn  btn-secondary btn-sm" 
                                                data-order-status="5" data-order-id="<?= $mess['order_id'] ?>" data-status="end_request">
                                                Xóa</button>
                                            </p>

                                        </a>
                                        <div style="border-top: 5px solid #ccc; margin: 10px 0; width: 100%;"></div>
                                    </div>
                                <?php
                                } else { ?>
                                    <div class="mess-content">
                                        <a id="mess-item-<?= $key ?>" data-key="<?= $key ?>" href="javascript:void(0);">
                                            <p style="display: inline-block;"><strong>Đơn hàng:</strong> <?= $mess['order_id'] ?></p>
                                            <p><strong>Đã hủy thành công</strong></p>
                                            <p><strong>Quý khách chọn ngân hàng để hoàn tiền</strong></p>
                                            <button class="btn btn-secondary btn-sm show-bank-form" data-order-id="<?= $mess['order_id'] ?>">Ngân Hàng</button>
                                        </a>
                                        <div style="border-top: 5px solid #ccc; margin: 10px 0; width: 100%;"></div>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </li>
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
                                    const userId = decoded.data.Id;
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
<div id="bank-form" style="display: none; padding: 20px; border: 1px solid #ccc; background: #f9f9f9; width: 400px; position: absolute;">
    <h4>Thông tin ngân hàng</h4>
    <form id="bankForm">
        <label for="bankName">Chọn Ngân Hàng:</label>
        <select id="bankName" name="bankName" required>
            <option value="">--Chọn Ngân Hàng--</option>
            <option value="QRONLY">Thanh toan QRONLY</option>
            <option value="MBAPP">Ung dung MobileBanking</option>
            <option value="VNPAYQR">VNPAYQR</option>
            <option value="VNBANK">LOCAL BANK</option>
            <option value="IB">INTERNET BANKING</option>
            <option value="ATM">ATM CARD</option>
            <option value="INTCARD">INTERNATIONAL CARD</option>
            <option value="VISA">VISA</option>
            <option value="MASTERCARD"> MASTERCARD</option>
            <option value="JCB">JCB</option>
            <option value="UPI">UPI</option>
            <option value="VIB">VIB</option>
            <option value="VIETCAPITALBANK">VIETCAPITALBANK</option>
            <option value="SCB">Ngan hang SCB</option>
            <option value="NCB">Ngan hang NCB</option>
            <option value="SACOMBANK">Ngan hang SacomBank </option>
            <option value="EXIMBANK">Ngan hang EximBank </option>
            <option value="MSBANK">Ngan hang MSBANK </option>
            <option value="NAMABANK">Ngan hang NamABank </option>
            <option value="VNMART"> Vi dien tu VnMart</option>
            <option value="VIETINBANK">Ngan hang Vietinbank </option>
            <option value="VIETCOMBANK">Ngan hang VCB </option>
            <option value="HDBANK">Ngan hang HDBank</option>
            <option value="DONGABANK">Ngan hang Dong A</option>
            <option value="TPBANK">Ngân hàng TPBank </option>
            <option value="OJB">Ngân hàng OceanBank</option>
            <option value="BIDV">Ngân hàng BIDV </option>
            <option value="TECHCOMBANK">Ngân hàng Techcombank </option>
            <option value="VPBANK">Ngan hang VPBank </option>
            <option value="AGRIBANK">Ngan hang Agribank </option>
            <option value="MBBANK">Ngan hang MBBank </option>
            <option value="ACB">Ngan hang ACB </option>
            <option value="OCB">Ngan hang OCB </option>
            <option value="IVB">Ngan hang IVB </option>
            <option value="SHB">Ngan hang SHB </option>
            <option value="APPLEPAY">Apple Pay </option>
            <option value="GOOGLEPAY">Google Pay </option>
        </select>
        <br>
        <label for="accountNumber">Số Tài Khoản:</label>
        <input type="text" id="accountNumber" name="accountNumber" required>
        <br>
        <label for="accountNumber">Tên Tài Khoản: </label>
        <input type="text" id="accountName" name="accountName" required>
        <br>
        <button type="button" class="mb-2 btn btn-primary submit-bank-info">Gửi</button>
        <button type="button" class="btn btn-secondary cancel-bank-form">Hủy</button>
    </form>
</div>