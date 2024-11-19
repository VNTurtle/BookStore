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
    $('#mess-content').on('click', '.approve-cancel, .reject-cancel', function() {
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
});
    

