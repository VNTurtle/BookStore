function isTokenExpired(token) {
    const payload = JSON.parse(atob(token.split('.')[1])); // Decode phần payload của JWT
    const currentTime = Math.floor(Date.now() / 1000); // Thời gian hiện tại tính theo giây
    return payload.exp < currentTime; // Kiểm tra nếu đã hết hạn
}

document.addEventListener('DOMContentLoaded', () => {
    const token = localStorage.getItem('jwt_token');
    if (token && isTokenExpired(token)) {
        // Xóa token nếu hết hạn
        localStorage.removeItem('jwt_token');
        alert('Phiên đăng nhập đã hết hạn. Vui lòng đăng nhập lại.');
        window.location.href = 'index.php?src=user/Login';
    }
});

function toggeleMenu() {
    var menuBar = document.querySelector('.opacity-menu');
    var headerNav = document.querySelector('.header-nav');
    // Thêm class mới vào menuBar và headerNav
    menuBar.classList.toggle('current');
    headerNav.classList.toggle('current')
}

function CLoseMenu() {
    var menuBar = document.querySelector('.opacity-menu');
    var headerNav = document.querySelector('.header-nav');

    // Xóa class curent 
    menuBar.classList.remove('current');
    headerNav.classList.remove('current');
}

document.addEventListener('DOMContentLoaded', function () {
    const logoutLink = document.getElementById('logoutLink');
    if (logoutLink) {
        logoutLink.addEventListener('click', function (event) {
            // Ngăn chặn hành động mặc định của liên kết
            event.preventDefault();

            // Xóa jwt_token khỏi localStorage
            localStorage.removeItem('jwt_token');

            // Chuyển hướng về trang logout (hoặc bất kỳ trang nào bạn muốn)
            window.location.href = logoutLink.href;
        });
    }

});
$(document).ready(function () {
    // Hiển thị form khi nhấn nút "Ngân Hàng"
    $('.show-bank-form').on('click', function (e) {
        e.preventDefault();
        const orderId = $(this).data('order-id');
        $('#bankForm').attr('data-order-id', orderId); // Lưu orderId vào form nếu cần gửi
        $('#bank-form').fadeIn();
    });

    // Đóng form khi nhấn nút "Hủy"
    $('.cancel-bank-form').on('click', function () {
        $('#bank-form').fadeOut();
    });

    // Gửi thông tin ngân hàng
    $('.submit-bank-info').on('click', function () {
        const orderId = $('#bankForm').data('order-id');
        const bankName = $('#bankName').val();
        const accountNumber = $('#accountNumber').val();
        const accountName = $('#accountName').val();

        if (!bankName || !accountNumber || !accountName) {
            alert('Vui lòng điền đầy đủ thông tin!');
            return;
        }

        // Gửi thông tin qua AJAX
        $.ajax({
            url: 'controller/process_bank_info.php',
            method: 'POST',
            data: { orderId, bankName, accountNumber, accountName },
            success: function (response) {
                alert('Thông tin ngân hàng đã được gửi!');
                $('#bank-form').fadeOut();
            },
            error: function (xhr, status, error) {
                alert('Có lỗi xảy ra, vui lòng thử lại!');
            }
        });
    });
});
$('.end_status').on('click', function () {
    var orderId = $(this).data('order-id');
    var status = $(this).data('status');
    var orderStatusId = $(this).data('order-status');

    $.ajax({
        url: 'controller/approve_cancel.php',
        method: 'POST',
        data: { order_id: orderId, order_status: orderStatusId, status: status },
        success: function (response) {
            // Xử lý phản hồi từ server nếu cần
            console.log('Đã cập nhật trạng thái đơn hàng');
            // Ẩn thông báo đã xác nhận
            location.reload(); 
        },
        error: function (xhr, status, error) {
            console.error('Lỗi khi cập nhật trạng thái đơn hàng:', error);
        }
    });
});