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
document.querySelectorAll('.menu-item > .menu-link.menu-toggle').forEach(item => {
    item.addEventListener('click', () => {
      const submenu = item.nextElementSibling;
      if (submenu && submenu.classList.contains('menu-sub')) {
        submenu.classList.toggle('show');
      }
    });
  });

  

$(document).ready(function() {  
    $('#mess-icon').on('click', function() {
        $('#mess-dropdown').toggle(); 
        if ($('#mess-dropdown').is(':visible')) {
        }
    });
  
    // Xử lý sự kiện click trên nút "Xác nhận"
    $('#mess-content').on('click', '.update-status-btn', function() {
        var orderId = $(this).data('order-id');
        var orderStatusId = $(this).data('order-status');

        // Lấy `id` của phần tử thông báo
        const notificationItem = $(this).closest('div[id^="mess-item-"]');
       
        $.ajax({
            url: 'controller/update_invoice.php',
            method: 'POST',
            data: { order_id: orderId, order_status: orderStatusId },
            success: function(response) {
                // Xử lý phản hồi từ server nếu cần
                console.log('Đã cập nhật trạng thái đơn hàng');
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
    // Xử lý sự kiện click trên nút "Xác nhận"
    $('#mess-content').on('click', '.approve-cancel, .complete-cancel', function() {
        var orderId = $(this).data('order-id');
        var status = $(this).data('status');
        var orderStatusId = $(this).data('order-status');

        // Lấy `id` của phần tử thông báo
        const notificationItem = $(this).closest('div[id^="mess-item-"]');
       
        $.ajax({
            url: 'controller/approve_cancel.php',
            method: 'POST',
            data: { order_id: orderId, order_status: orderStatusId, status:  status},
            success: function(response) {
                // Xử lý phản hồi từ server nếu cần
                console.log('Đã cập nhật trạng thái đơn hàng');
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
    let currentOrderId = null;

    // Khi nhấn nút "Từ chối"
    $('.reject-cancel').on('click', function () {
        currentOrderId = $(this).data('order-id'); // Lấy order_id
        $('#rejectModal').fadeIn();
        $('#mess-dropdown').toggle(); 
        if ($('#mess-dropdown').is(':visible')) {
        } // Hiển thị modal
    });

    // Khi nhấn nút "Xác nhận" trong modal
    $('#submitReject').on('click', function () {
        const rejectReason = $('#rejectReason').val().trim();

        if (!rejectReason) {
            alert('Vui lòng nhập lý do từ chối.');
            return;
        }

        $.ajax({
            url: 'controller/reject_order.php',
            method: 'POST',
            data: { order_id: currentOrderId, reason: rejectReason },
            success: function (response) {
                console.log('Đã từ chối đơn hàng:', response);
                $('#rejectModal').fadeOut();
                alert('Đã từ chối đơn hàng!');
                location.reload(); // Tải lại trang nếu cần
            },
            error: function (xhr, status, error) {
                console.error('Lỗi khi từ chối đơn hàng:', error);
            }
        });
    });

    // Đóng modal
    $('.close').on('click', function () {
        $('#rejectModal').fadeOut();
    });
    
});
    

