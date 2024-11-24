<?php
require_once('API/User.php');
require_once('API/Voucher.php');
session_start();
if (isset($_SESSION['Id'])) {
    $userId = $_SESSION['Id'];
} else {
    $userId = null;
}
$LstUser = User::getUserById($userId);
$userVouchers = Voucher::getVouchersByUserId($userId);
$User = $LstUser[0];
?>

<link rel="stylesheet" href="assets/css/checkout.css">
<link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/sclick/css/slick.min.css">

<script>
    // Lấy dữ liệu sản phẩm từ localStorage
    const check = JSON.parse(localStorage.getItem('selectedProducts')) || [];

    // Check if selectedProducts is empty
    if (check.length === 0) {
        // If empty, redirect to the homepage or index page
        window.location.href = "index.php";
    }
    var token = localStorage.jwt_token;
    const base64Url = token.split('.')[1];
    const base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    const jsonPayload = decodeURIComponent(
        atob(base64)
        .split('')
        .map(c => '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2))
        .join('')
    );

    const decoded = JSON.parse(jsonPayload);


    const userId = decoded.data.Id;
    console.log(userId);
</script>

<div id="opacity"></div>
<div class="bodywrap">


    <div class="container">

        <div class="row">
            <div class="col-xl-7">

                <div class="card">
                    <div class="card-body">
                        <ol class="activity-checkout mb-0 px-4 mt-3">
                            <li class="checkout-item">
                                <div class="avatar checkout-icon p-1">
                                    <div class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bxs-receipt text-white font-size-20"></i>
                                    </div>
                                </div>
                                <div class="feed-item-list">
                                    <div>
                                        <h5 class="font-size-16 mb-1">Địa chỉ giao hàng</h5>
                                        <p class="text-muted text-truncate mb-4">Sed ut perspiciatis unde omnis iste</p>
                                        <div class="mb-3">
                                            <form id="check_out" method="POST">
                                                <div>
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-name">Họ tên người nhận</label>
                                                                <input type="text" class="form-control" id="billing-name" placeholder="Enter name" value="<?= $User["FullName"] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-email-address">Email Address</label>
                                                                <input type="email" class="form-control" name="email" id="billing-email-address" value="<?= $User['Email'] ?>" placeholder="Enter email">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="mb-3">
                                                                <label class="form-label" for="billing-phone">Phone</label>
                                                                <input type="text" class="form-control" id="billing-phone" maxlength="10" pattern="\d{10}" placeholder="Enter Phone no." title="Vui lòng nhập đủ 10 số.">
                                                            </div>
                                                        </div>
                                                    </div>



                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="mb-4 mb-lg-0">
                                                                <label class="form-label" for="province-select">Tỉnh / Thành phố</label>
                                                                <select id="province-select" class="form-control form-select" title="Province">
                                                                    <option value="0">Select Province</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="mb-4 mb-lg-0">
                                                                <label class="form-label" for="district-select">Quận / Huyện</label>
                                                                <select id="district-select" class="form-control form-select" title="District" disabled>
                                                                    <option value="0">Select District</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="mb-0">
                                                                <label class="form-label" for="ward-select">Phường / Xã</label>
                                                                <select id="ward-select" class="form-control form-select" title="Ward" disabled>
                                                                    <option value="0">Select Ward</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label" for="billing-address">Địa chỉ nhận hàng</label>
                                                        <textarea class="form-control" id="billing-address" rows="3" placeholder="Enter full address"></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="sort-product">
                                    <h5 class="sort-heading">
                                        Mã giảm giá
                                    </h5>
                                    <div class="d-flex">
                                        <select class="sort-arrange" name="voucher-code" id="voucher-select">
                                            <option value="" disabled selected>Chọn mã giảm giá</option>
                                            <?php
                                            if (!empty($userVouchers)) {
                                                foreach ($userVouchers as $voucher) {
                                                    echo '<option class="sort-item" value="' . $voucher['Code'] . '">' . $voucher['Des'] . '</option>';
                                                }
                                            } else {
                                                echo '<option value="">Không có mã giảm giá khả dụng</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </li>
                            <li class="checkout-item">
                                <div class="avatar checkout-icon p-1">
                                    <div class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bxs-wallet-alt text-white font-size-20"></i>
                                    </div>
                                </div>
                                <div class="feed-item-list">
                                    <div>
                                        <h5 class="font-size-16 mb-1">Payment Info</h5>
                                        <p class="text-muted text-truncate mb-4">Duis arcu tortor, suscipit eget</p>
                                    </div>
                                    <div>
                                        <h5 class="font-size-14 mb-3">Payment method :</h5>
                                        <div class="row">
                                            <div class="col-lg-3 col-sm-6">
                                                <div data-bs-toggle="collapse">
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="pay-method" id="1" class="card-radio-input">
                                                        <span class="card-radio py-3 text-center text-truncate">
                                                            <img style="height: 40px;" src="assets/img/payment_1.webp" alt="">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div data-bs-toggle="collapse">
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="pay-method" id="2" class="card-radio-input">
                                                        <span class="card-radio py-3 text-center text-truncate">
                                                            <img style="height: 40px;" src="assets/img/vnpay-logo.jpg" alt="">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-sm-6">
                                                <div data-bs-toggle="collapse">
                                                    <label class="card-radio-label">
                                                        <input type="radio" name="pay-method" id="3" class="card-radio-input">
                                                        <span class="card-radio py-3 text-center text-truncate">
                                                            <img style="height: 40px;" src="assets/img/momo.webp" alt="">
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row my-4">
                    <div class="col">
                        <a href="index.php" class="btn btn-link text-muted">
                            &nbsp;
                            <i class="fa-solid fa-angle-left"></i>
                            &nbsp; Trang chủ
                        </a>
                    </div> <!-- end col -->
                    <div class="col">
                        <div class="text-end mt-2 mt-sm-0">
                            <button id="btn-checkout" class="btn btn-success btn-checkout" disabled>
                                <i class="fa-solid fa-cart-shopping"></i> Thanh toán
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-5">
                <div class="card checkout-order-summary">
                    <div class="card-body">
                        <div class="p-3 bg-light mb-3">
                            <h5 class="font-size-16 mb-0">Order Summary <span class="float-end ms-2">#MN0124</span></h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-centered mb-0 table-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0" style="width: 110px;" scope="col">Product</th>
                                        <th class="border-top-0" style="width: 270px;" scope="col">Product Desc</th>
                                        <th class="border-top-0" scope="col">Price</th>
                                    </tr>
                                </thead>
                                <tbody id="product-table">

                                </tbody>
                                <tfoot>
                                    <tr class="bg-light">
                                        <td colspan="2">
                                            <h5 class="font-size-14 m-0">Total:</h5>
                                        </td>
                                        <td id="old-total" style="text-decoration: line-through"></td>
                                        <td id="total"></td>
                                    </tr>
                                </tfoot>
                            </table>
                            <script>
                                // Lấy dữ liệu sản phẩm từ localStorage
                                const products = JSON.parse(localStorage.getItem('selectedProducts')) || [];
                                const productTable = document.getElementById('product-table');
                                let price2 = 0;
                                let total = 0;
                                let count = 0;
                                console.log(products);
                                // Lặp qua từng sản phẩm và thêm vào bảng
                                products.forEach(product => {
                                    price2 = product.price * product.quantity;
                                    total += price2;
                                    count++;
                                    const row = document.createElement('tr');
                                    row.innerHTML = `
                                                <th scope="row">
                                                    <img src="assets/img/products/${product.img}" alt="product-img" title="product-img" class="avatar-lg rounded">
                                                </th>
                                                <td>
                                                    <h5 class="font-size-16 text-truncate2">
                                                        <a href="#" class="text-dark">${product.name}</a>
                                                    </h5>
                                                    <p class="text-muted mb-0">
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star text-warning"></i>
                                                        <i class="bx bxs-star-half text-warning"></i>
                                                    </p>
                                                    <p class="text-muted mb-0 mt-1">${product.price}0 đ x ${product.quantity}</p>
                                                </td>
                                                <td>${price2}.000 đ</td>
                                            `;
                                    productTable.appendChild(row);
                                });
                                console.log(total);

                                // Cập nhật tổng giá trị
                                document.getElementById('total').innerText = `${total}.000đ`;
                                console.log(count);
                            </script>
                            <script>
                                const vouchers = <?php echo json_encode($userVouchers); ?>;
                                let totalElement = document.getElementById('total');
                                let oldPriceElement = document.getElementById('old-total');
                                const originalTotal = parseFloat(totalElement.innerText);

                                document.getElementById('voucher-select').addEventListener('change', function() {
                                    const selectedCode = this.value;

                                    fetch('controller/update_voucher_status.php', {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json'
                                            },
                                            body: JSON.stringify({
                                                voucherCode: selectedCode
                                            })
                                        })
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.success) {
                                                console.log('Voucher save section');
                                            } else {
                                                console.error('Failed to voucher');
                                            }
                                        })
                                        .catch(error => console.error('Error:', error));

                                    total = originalTotal;

                                    let discountedTotal = 0;
                                    const voucher = vouchers.find(v => v.Code === selectedCode);

                                    if (voucher) {

                                        const discount = Math.min(total * voucher.Percent /100, voucher.MaxTotal);


                                        discountedTotal = total - discount;

                                        discountedTotal = Math.max(discountedTotal, 0);


                                        oldPriceElement.innerText = total.toFixed(3) + `đ`;

                                        totalElement.innerText = discountedTotal.toFixed(3) + `đ`;
                                        totalElement.innerText = discountedTotal.toFixed(3) + ` ` + `đ`;

                                        total = discountedTotal;
                                        console.log(total);
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div>
    <!-- Form OTP, mặc định ẩn -->
    <div id="otpContainer"
        style="display: none; background: #fff;
        width: 20%;
        position: fixed;
        top: 20% !important;
        left: 45%;
        z-index: 99999;
        justify-content: center;
        align-items: center;">
        <style>
            .form {
                margin: auto;
                display: flex;
                align-items: center;
                flex-direction: column;
                justify-content: space-around;
                width: 300px;
                background-color: white;
                border-radius: 12px;
                padding: 20px;
            }

            .title {
                font-size: 20px;
                font-weight: bold;
                color: black
            }

            .message {
                color: #a3a3a3;
                font-size: 14px;
                margin-top: 4px;
                text-align: center
            }

            .inputs {
                margin-top: 10px
            }

            .inputs input {
                width: 32px;
                height: 32px;
                text-align: center;
                border: none;
                border-bottom: 1.5px solid #d2d2d2;
                margin: 0 10px;
            }

            .inputs input:focus {
                border-bottom: 1.5px solid royalblue;
                outline: none;
            }

            .action {
                margin-top: 24px;
                padding: 12px 16px;
                border-radius: 8px;
                border: none;
                background-color: royalblue;
                color: white;
                cursor: pointer;
                align-self: end;
            }

            .dot-spinner {
                --uib-size: 5.8rem;
                --uib-speed: .9s;
                --uib-color: #000;
                position: relative;
                display: flex;
                align-items: center;
                justify-content: flex-start;
                margin: auto;
                height: 4.8rem;
                width: var(--uib-size);
            }

            .dot-spinner__dot {
                position: absolute;
                top: 0;
                left: 0;
                display: flex;
                align-items: center;
                justify-content: flex-start;
                height: 100%;
                width: 100%;
            }

            .dot-spinner__dot::before {
                content: '';
                height: 20%;
                width: 20%;
                border-radius: 50%;
                background-color: var(--uib-color);
                transform: scale(0);
                opacity: 0.5;
                animation: pulse0112 calc(var(--uib-speed) * 1.111) ease-in-out infinite;
                box-shadow: 0 0 20px rgba(18, 31, 53, 0.3);
            }

            .dot-spinner__dot:nth-child(2) {
                transform: rotate(45deg);
            }

            .dot-spinner__dot:nth-child(2)::before {
                animation-delay: calc(var(--uib-speed) * -0.875);
            }

            .dot-spinner__dot:nth-child(3) {
                transform: rotate(90deg);
            }

            .dot-spinner__dot:nth-child(3)::before {
                animation-delay: calc(var(--uib-speed) * -0.75);
            }

            .dot-spinner__dot:nth-child(4) {
                transform: rotate(135deg);
            }

            .dot-spinner__dot:nth-child(4)::before {
                animation-delay: calc(var(--uib-speed) * -0.625);
            }

            .dot-spinner__dot:nth-child(5) {
                transform: rotate(180deg);
            }

            .dot-spinner__dot:nth-child(5)::before {
                animation-delay: calc(var(--uib-speed) * -0.5);
            }

            .dot-spinner__dot:nth-child(6) {
                transform: rotate(225deg);
            }

            .dot-spinner__dot:nth-child(6)::before {
                animation-delay: calc(var(--uib-speed) * -0.375);
            }

            .dot-spinner__dot:nth-child(7) {
                transform: rotate(270deg);
            }

            .dot-spinner__dot:nth-child(7)::before {
                animation-delay: calc(var(--uib-speed) * -0.25);
            }

            .dot-spinner__dot:nth-child(8) {
                transform: rotate(315deg);
            }

            .dot-spinner__dot:nth-child(8)::before {
                animation-delay: calc(var(--uib-speed) * -0.125);
            }

            @keyframes pulse0112 {

                0%,
                100% {
                    transform: scale(0);
                    opacity: 0.5;
                }

                50% {
                    transform: scale(1);
                    opacity: 1;
                }
            }

            #opacity {
                display: none;
            }

            #opacity.hidden {
                background: rgba(0, 0, 0, 0.8);
                position: fixed;
                top: 0 !important;
                left: 0;
                height: 100%;
                width: 100%;
                z-index: 99999;
                display: block !important;
            }

            #pay-loading.hidden {
                display: none;
            }

            .title-pay {
                background: #fff;
                width: 20%;
                position: fixed;
                top: 20% !important;
                left: 45%;
                z-index: 99999;
                height: 40%;
                display: inline-grid;
                justify-content: center;
                align-items: center;
            }

            #messenger.hidden {
                display: none;
            }
        </style>
        <form class="form" id="otpForm" method="POST">
            <div class="title">OTP</div>
            <div class="title">Verification Code</div>
            <p class="message">We have sent a verification code to your mobile number</p>
            <div class="inputs">
                <input type="hidden" name="invoice" value="<?php echo htmlspecialchars(json_encode($invoice)); ?>">
                <input type="hidden" name="invoiceDetails" value="<?php echo htmlspecialchars(json_encode($invoicedetail)); ?>">
                <input id="input1" type="text" name="number1" maxlength="1" required>
                <input id="input2" type="text" name="number2" maxlength="1" required>
                <input id="input3" type="text" name="number3" maxlength="1" required>
                <input id="input4" type="text" name="number4" maxlength="1" required>
            </div>
            <div id="messenger" class="hidden">Nhập sai OTP</div>
            <button class="action" type="submit" name="verify">Xác thực</button>
        </form>
    </div>
    <div id="pay-loading" class="title-pay hidden">
        <div class="dot-spinner ">

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

</div>

<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
<script src="assets/fontawesome/js/all.min.js"></script>
<script>
    document.getElementById('billing-phone').addEventListener('input', function () {
    const phoneInput = this.value;
    const maxLength = 10;

    // Xóa các ký tự không phải là số
    this.value = phoneInput.replace(/\D/g, '');

    // Giới hạn số lượng ký tự
    if (this.value.length > maxLength) {
      this.value = this.value.slice(0, maxLength);
    }
  });
    var provinceSelect = document.getElementById('province-select');
    var districtSelect = document.getElementById('district-select');
    var wardSelect = document.getElementById('ward-select');

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'API/data.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var responseData = JSON.parse(xhr.responseText);
            var provinceData = responseData.province;
            var districtData = responseData.district;
            var wardsData = responseData.wards;

            console.log(provinceData);
            console.log(districtData);
            console.log(wardsData);

            provinceData.forEach(function(province) {
                var option = document.createElement('option');
                option.value = province.code;
                option.textContent = province.name;
                provinceSelect.appendChild(option);
            });

            provinceSelect.addEventListener('change', function() {
                var selectedProvince = provinceSelect.value;

                // Xóa tất cả các tùy chọn quận/huyện hiện có
                districtSelect.innerHTML = '<option value="0">Select District</option>';

                if (selectedProvince !== '0') {
                    // Tạo các tùy chọn quận/huyện mới dựa trên danh sách quận/huyện của tỉnh/thành phố được chọn
                    districtData.forEach(function(district) {
                        if (district.parent_code == selectedProvince) {
                            var option = document.createElement('option');
                            option.value = district.code;
                            option.textContent = district.name_with_type;
                            districtSelect.appendChild(option);
                        };

                    });
                    districtSelect.disabled = false;
                } else {
                    districtSelect.disabled = true;
                    wardSelect.disabled = true;
                }
            });
            districtSelect.addEventListener('change', function() {
                var selectedDistrict = districtSelect.value;

                // Xóa tất cả các tùy chọn phường/xã hiện có
                wardSelect.innerHTML = '<option value="0">Select Ward</option>';

                if (selectedDistrict !== '0') {
                    // Lấy danh sách phường/xã của quận/huyện được chọn
                    wardsData.forEach(function(wards) {
                        if (wards.parent_code == selectedDistrict) {
                            var option = document.createElement('option');
                            option.value = wards.code;
                            option.textContent = wards.name_with_type;
                            wardSelect.appendChild(option);
                        };

                    });
                    wardSelect.disabled = false;
                } else {
                    wardSelect.disabled = true;
                }
            });
        }
    };
    xhr.send();
    // Hàm lấy ngày hiện tại dưới định dạng "YYYY-MM-DD"
    function getCurrentDate() {
        var today = new Date();
        var year = today.getFullYear();
        var month = String(today.getMonth() + 1).padStart(2, '0');
        var day = String(today.getDate()).padStart(2, '0');
        var hours = String(today.getHours()).padStart(2, '0');
        var minutes = String(today.getMinutes()).padStart(2, '0');
        var seconds = String(today.getSeconds()).padStart(2, '0');

        return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
    }
    // Hàm tạo mã hóa đơn ngẫu nhiên
    function generateInvoiceCode(length) {
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ012345789';
        var now = new Date();
        var day = String(now.getDate()).padStart(2, '0');
        var month = String(now.getMonth() + 1).padStart(2, '0');
        var year = String(now.getFullYear()).slice(-2);
        var hour = String(now.getHours()).padStart(2, '0');
        var minute = String(now.getMinutes()).padStart(2, '0');
        var baseCode = `HDB${day}${month}${year}${hour}${minute}`;
        var code = baseCode;
        if (code.length < length) {
            for (var i = code.length; i < length; i++) {
                var randomIndex = Math.floor(Math.random() * characters.length);
                code += characters.charAt(randomIndex);
            }
        } else {
            // Nếu dài hơn, cắt bớt
            code = code.slice(0, length);
        }
        return code;
    }


    // Lấy tất cả các input radio của phương thức thanh toán
    var paymentMethods = document.querySelectorAll('input[name="pay-method"]');

    // Lấy nút "Thanh toán"
    var checkoutButton = document.getElementById('btn-checkout');

    // Gán sự kiện thay đổi cho từng radio button
    paymentMethods.forEach(function(paymentMethod) {
        paymentMethod.addEventListener('change', function() {
            checkoutButton.disabled = false; // Kích hoạt nút "Thanh toán" khi chọn phương thức thanh toán
        });
    });

    const selectedProducts = [];
    checkoutButton.addEventListener('click', function(event) {
        event.preventDefault(); // Ngăn chặn hành vi mặc định của thẻ <a>
        // Lấy thông tin từ các trường nhập liệu
        var billingName = document.getElementById('billing-name').value;
        var billingEmail = document.getElementById('billing-email-address').value;
        var billingPhone = document.getElementById('billing-phone').value;
        var selectedProvince = provinceSelect.options[provinceSelect.selectedIndex].text;
        var selectedDistrict = districtSelect.options[districtSelect.selectedIndex].text;
        var selectedWard = wardSelect.options[wardSelect.selectedIndex].text;
        var billingAddress = document.getElementById('billing-address').value;
        var fullAddress = billingAddress + ", " + selectedWard + ", " + selectedDistrict + ", " + selectedProvince;

        console.log(userId, billingEmail, billingName, billingPhone, fullAddress);

        // Tạo đối tượng invoice
        const invoice = {
            code: generateInvoiceCode(20), // Tạo mã hóa đơn ngẫu nhiên
            username: billingName,
            date: getCurrentDate(),
            phone: billingPhone,
            email: billingEmail,
            address: fullAddress,
            userId: userId,
            total: total,
            paymethodId: getSelectedPaymentMethod(),
            quantity: count,
            orderStatusId: 1
        };
        console.log(invoice);
        
        localStorage.setItem('invoice', JSON.stringify(invoice));

        // Tạo đối tượng mang invoicedetail
        const invoiceDetails = products.map(product => ({
            parent_code: invoice.code,
            bookId: product.id,
            userId: userId,
            price: product.price,
            quantity: product.quantity,
            status: 1
        }));

        localStorage.setItem('invoiceDetails', JSON.stringify(invoiceDetails));

        // Lựa chọn phương thức thanh toán
        if (document.getElementById('1').checked) {
            sendOtpAndRedirect();

        } else if (document.getElementById('2').checked) {
            // Chuyển hướng đến trang VNPAY và truyền selectedProducts qua URL
            window.location.href = 'index.php?src=checkout/vnpay_checkout';
        } else if (document.getElementById('3').checked) {
            window.location.href = 'payment_method_3_url.php'; // Đường dẫn đến trang thanh toán 3
        } else {
            alert('Vui lòng chọn phương thức thanh toán.'); // Thông báo nếu chưa chọn phương thức
        }
    });


    function sendOtpAndRedirect() {
        var payloading = document.getElementById('pay-loading');
        var opacity = document.getElementById('opacity');
        opacity.classList.toggle('hidden');
        payloading.classList.remove('hidden');
        var formData = $('#check_out').serialize();

        // Gửi email OTP
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "controller/send_otp.php", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    try {
                        var response = JSON.parse(xhr.responseText);
                        if (response.status === "success") {
                            document.getElementById("pay-loading").style.display = "none";
                            document.getElementById("otpContainer").style.display = "block";

                        } else {
                            alert("Gửi OTP thất bại. Vui lòng thử lại.");
                        }
                    } catch (e) {
                        console.error("Lỗi khi phân tích JSON:", e);
                        alert("Đã xảy ra lỗi trong quá trình xử lý yêu cầu. Vui lòng thử lại.");
                    }
                } else {
                    alert("Gửi OTP thất bại. Vui lòng thử lại.");
                }
            }
        };
        // Gửi dữ liệu biểu mẫu đã tuần tự hóa
        xhr.send(formData);
    }
    // Hàm lấy phương thức thanh toán được chọn
    function getSelectedPaymentMethod() {
        var paymentMethods = document.getElementsByName('pay-method');
        for (var i = 0; i < paymentMethods.length; i++) {
            if (paymentMethods[i].checked) {
                return paymentMethods[i].id;
            }
        }
        return null;
    }
    $(document).ready(function() {
        // Intercept form submission
        $('#otpForm').submit(function(event) {
            event.preventDefault(); // Prevent default form submission

            var payloading = document.getElementById('pay-loading');
            var opacity = document.getElementById('opacity');
            opacity.classList.add('hidden');
            payloading.classList.remove('hidden');
            var mess = document.getElementById('messenger');
            var billingName = document.getElementById('billing-name').value;
            var billingEmail = document.getElementById('billing-email-address').value;
            var billingPhone = document.getElementById('billing-phone').value;
            var selectedProvince = provinceSelect.options[provinceSelect.selectedIndex].text;
            var selectedDistrict = districtSelect.options[districtSelect.selectedIndex].text;
            var selectedWard = wardSelect.options[wardSelect.selectedIndex].text;
            var billingAddress = document.getElementById('billing-address').value;
            var fullAddress = billingAddress + ", " + selectedWard + ", " + selectedDistrict + ", " + selectedProvince;

            // Generate invoice code
            var invoiceCode = generateInvoiceCode(20);

            // Create invoice object
            const invoice = {
                code: invoiceCode,
                username: billingName,
                date: getCurrentDate(),
                phone: billingPhone,
                email: billingEmail,
                address: fullAddress,
                userId: userId,
                total: total,
                paymethodId: getSelectedPaymentMethod(),
                quantity: count,
                orderStatusId: 1
            };
            console.log(invoice);
            
            // Create invoiceDetails array
            var invoiceDetails = [];
            products.forEach(product => {
                invoiceDetails.push({
                    parent_code: invoice.code,
                    bookId: product.id,
                    userId: userId,
                    price: product.price,
                    quantity: product.quantity,
                    status: 1
                });
            });

            // Convert invoice and invoiceDetails to JSON
            const invoiceJSON = JSON.stringify(invoice);
            const invoiceDetailsJSON = JSON.stringify(invoiceDetails);

            // Collect form data using FormData
            var formData = new FormData(this);
            formData.append('invoice', invoiceJSON);
            formData.append('invoiceDetails', invoiceDetailsJSON);

            $.ajax({
                url: 'controller/pay.php', // URL to PHP handler
                type: 'POST',
                data: formData,
                processData: false, // Required for FormData
                contentType: false, // Required for FormData
                dataType: 'json',
                success: function(response) {
                    console.log(response);

                    // Kiểm tra phản hồi từ PHP
                    if (response.status === 'success') {
                        // Chuyển hướng về index.php khi thành công
                        window.location.href = 'index.php?src=invoice/invoice';
                    } else {
                        // Hiển thị thông báo lỗi
                        mess.classList.remove('hidden'); // Bỏ class 'hidden' để hiển thị thông báo
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error:', errorThrown);
                }
            });
        });
    });
</script>