document.querySelectorAll('.menu-item > .menu-link.menu-toggle').forEach(item => {
    item.addEventListener('click', () => {
      const submenu = item.nextElementSibling;
      if (submenu && submenu.classList.contains('menu-sub')) {
        submenu.classList.toggle('show');
      }
    });
  });


$(document).ready(function() {
    $('#notification-icon').on('click', function() {
        $('#notification-dropdown').toggle();
  
        if ($('#notification-dropdown').is(':visible')) {
            $.ajax({
                url: 'controller/get_new_invoice.php',
                method: 'GET',
                success: function(response) {
                    var orders = JSON.parse(response);
                    var notificationContent = '';
  
                    if (orders.length > 0) {
                        orders.forEach(function(order) {
                            notificationContent += '<div class="notification-item" id="notification-item-' + order.invoice_id + '">';
                            notificationContent += '<div class="notification-item">';
                            notificationContent += '<p><strong>Đơn hàng mới:</strong> ' + order.Code + '</p>';
                            notificationContent += '<p>Số hóa đơn con: ' + order.ivd_count + '</p>';
                            notificationContent += '<p>Ngày đặt: ' + order.IssuedDate + '</p>';
                            notificationContent += '<p>Tổng tiền: ' + order.Total + '</p>';
                            notificationContent += '<a href="index.php?src=admin/invoice/invoice_detail&id_invoice=' + order.invoice_id + '" class="btn btn-sm btn-primary" style="margin-right: 20px;">Xem chi tiết</a>';
                            notificationContent += '<button class="btn btn-sm btn-primary update-status-btn" data-order-status="2" data-order-id="' + order.invoice_id + '">Xác nhận</button>';
                            notificationContent += '</div></div>';
                        });
                        $('#notification-content').html(notificationContent);
                    } else {
                        notificationContent = '<p>Không có thông báo mới</p>';
                        $('#notification-content').html(notificationContent);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching new orders:', error);
                }
            });
        }
    });
  
    // Đóng menu khi nhấn bên ngoài
    $(document).on('click', function(event) {
        if (!$(event.target).closest('#notification-icon, #notification-dropdown').length) {
            $('#notification-dropdown').hide();
        }
    });
  
    // Xử lý sự kiện click trên nút "Xác nhận"
    $('#notification-content').on('click', '.update-status-btn', function() {
        var orderId = $(this).data('order-id');
        var orderStatusId = $(this).data('order-status');
  
        // Gửi yêu cầu AJAX để cập nhật trạng thái của đơn hàng
        $.ajax({
            url: 'controller/update_invoice.php',
            method: 'POST',
            data: { order_id: orderId, order_status: orderStatusId },
            success: function(response) {
                // Xử lý phản hồi từ server nếu cần
                console.log('Đã cập nhật trạng thái đơn hàng');
                // Ẩn thông báo đã xác nhận
                $('#notification-item-' + orderId).remove();
            },
            error: function(xhr, status, error) {
                console.error('Lỗi khi cập nhật trạng thái đơn hàng:', error);
            }
        });
    });
  });
    

