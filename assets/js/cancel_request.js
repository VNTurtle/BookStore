$(document).ready(function() { 
    $('.approve-cancel, .complete-cancel').on('click',  function() {
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