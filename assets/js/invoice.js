function toggleInvoiceDetail(element) {

    var target = element.dataset.target;
    var detail = document.getElementById(target);

    var codeElement = element.querySelector('.invoice-code');

    detail.classList.toggle("show");
    codeElement.classList.toggle("show");
}

var tabLinks = document.querySelectorAll('.tab-link');
var tabContents = document.querySelectorAll('.tab-content');

// Lặp qua mỗi tab link
tabLinks.forEach(function (tabLink, index) {
    // Gán sự kiện click cho mỗi tab link
    tabLink.addEventListener('click', function () {
        // Xóa lớp active khỏi tất cả các tab link và tab content
        tabLinks.forEach(function (link) {
            link.classList.remove('active');
        });
        tabContents.forEach(function (content) {
            content.classList.remove('active');
        });
        // Thêm lớp active cho tab link được chọn
        this.classList.add('active');
        // Hiển thị tab content tương ứng với tab link được chọn
        tabContents[index].classList.add('active');
    });
});

$(document).ready(function() {
    var modal = $('#cancelModal');
    var span = $('.close');
    var cancelButton;
    
    // Hiển thị modal khi nhấn nút "Hủy đơn"
    $(document).on('click', '.btn-cancel-order', function() {
        cancelButton = $(this);
        modal.show();
    });
    $(document).on('click', '.btn-request-cancel', function() {
        cancelButton = $(this);
        modal.show();
    });
    // Đóng modal khi nhấn nút close
    span.on('click', function() {
        modal.hide();
    });

    // Đóng modal khi nhấn bên ngoài modal
    $(window).on('click', function(event) {
        if (event.target.id == 'cancelModal') {
            modal.hide();
        }
    });

    document.querySelectorAll('input[name="cancelReason"]').forEach((radio) => {
        radio.addEventListener('change', function () {
            // Kiểm tra nếu lựa chọn là "Khác"
            const customReasonTextarea = document.getElementById('customCancelReason');
            if (this.value === "Khác") {
                customReasonTextarea.style.display = "block"; // Hiển thị textarea
            } else {
                customReasonTextarea.style.display = "none"; // Ẩn textarea nếu không phải "Khác"
            }
        });
    });
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
    
    // Xử lý sự kiện xác nhận hủy
    $('#confirmCancel').on('click', function() {
        const selectedReason = $('input[name="cancelReason"]:checked').val();  // Lý do được chọn
        const otherReason = $('#customCancelReason').val().trim();  // Lý do "Khác"
        const orderId = cancelButton.data('order-id');
    
        // Kiểm tra xem đã chọn lý do chưa
        if (!selectedReason && !otherReason) {
            alert("Vui lòng chọn hoặc nhập lý do hủy đơn.");
            return;
        }
        
        const reason = selectedReason || otherReason;  // Chọn lý do
    
        console.log("Lý do hủy đơn:", reason);
    
        $.ajax({
            url: 'controller/cance_invoice.php',
            method: 'POST',
            data: { 
                order_id: orderId, 
                userId: userId,
                reason: reason 
            },
            success: function() {
                console.log('Chờ Admin xác nhận');
                cancelButton.closest('.invoice-detail').remove();  // Ẩn đơn hàng
                location.reload();  // Làm mới trang
            },
            error: function(xhr, status, error) {
                console.error('Lỗi khi hủy đơn hàng:', error);
            }
        });
    });
    $('.btn-transport-order').on('click', function() {
        var orderId = $(this).data('order-id');
        var orderStatusId = $(this).data('order-status');

        // Lấy `id` của phần tử thông báo
       
        $.ajax({
            url: 'controller/update_invoice.php',
            method: 'POST',
            data: { order_id: orderId, order_status: orderStatusId},
            success: function(response) {
                // Xử lý phản hồi từ server nếu cần
                location.reload();
                // Ẩn thông báo đã xác nhận
                notificationItem.fadeOut(300, function () {
                    $(this).remove();
                });
            },
            error: function(xhr, status, error) {
                console.error('Lỗi khi cập nhật trạng thái đơn hàng:', error);
            }
        });
    });
});
