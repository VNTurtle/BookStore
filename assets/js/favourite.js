$(document).ready(function () {
    function removeProduct(productId) {
        $.ajax({
            url: 'controller/remove_favourite.php',
            type: 'POST',
            data: {
                product_id: productId
            },
            success: function (response) {
                try {
                    var result = JSON.parse(response);
                    if (result.status === 'success') {
                        console.log("Sản phẩm đã được xóa thành công!");
                        $('#' + productId).closest('.item-book-cart').remove();
                        location.reload();
                    } else {
                        console.error("Lỗi: " + result.message);
                    }
                } catch (e) {
                    console.error("Lỗi khi phân tích JSON: ", e);
                    console.log("Phản hồi từ máy chủ:", response);
                }
            },
            error: function (xhr, status, error) {
                console.error("Lỗi khi gửi yêu cầu: " + error);
            }
        });
    }

    $('.input-number-product .num-1').on('click', function () {
        var quantityInput = $(this).siblings('.prd-quantity');
        var currentValue = parseInt(quantityInput.val());
        if (currentValue > 1) {
            quantityInput.val(currentValue - 1);
            updateTotalPrice($(this));
        }
    });
    $('.remove-favourite').on('click', function () {
        productIdToDelete = $(this).closest('.item-book-cart').data('product-id');
        $('#confirmDeleteModal').modal('show'); // Mở hộp thoại xác nhận
    });

    $('#confirmDelete').on('click', function () {
        removeProduct(productIdToDelete); // Gọi hàm xóa
        $('#confirmDeleteModal').modal('hide'); // Đóng hộp thoại xác nhận
    });

    $('.btn-secondary').on('click', function () {
        $('#confirmDeleteModal').modal('hide'); // Đóng hộp thoại xác nhận
    });

    const checkboxAll = document.getElementById('checkbox-all-products');
    const checkboxes = document.querySelectorAll('.checkbox-add-cart');

    // Thêm sản phẩm vào giỏ hàng
    $('.add-to-cart').on('click', function () {
        const productId = $(this).closest('.item-book-cart').data('product-id');
        $.ajax({
            url: 'controller/add_to_cart.php', // Đường dẫn API xử lý
            type: 'POST',
            data: { 
                Id: productId, 
                quantity: 1, // Mặc định là 1 sản phẩm
                source: 'favourite' // Gửi thông tin nguồn
            },
            success: function (response) {
                try {
                    const result = JSON.parse(response);
                    if (result.status === 'success') {
                        document.querySelector('.thongbao').classList.add('show');
                    } else {
                        alert(result.message); // Hiển thị lỗi
                    }
                } catch (e) {
                    console.error('Lỗi khi phân tích JSON:', e);
                    console.log('Phản hồi từ máy chủ:', response);
                }
            },
            error: function (xhr, status, error) {
                console.error('Lỗi khi thêm sản phẩm vào giỏ hàng:', error);
            }
        });
    });    
});
