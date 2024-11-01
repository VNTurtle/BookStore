$(document).ready(function() {
    function updateTotalPrice(element) {
        var parent = element.closest('.item-book-cart');
        var price = parseFloat(parent.data('price'));
        var quantity = parseInt(parent.find('.prd-quantity').val());
        var totalPriceElement = parent.find('.total-price');
        var totalPrice = price * quantity;
        totalPriceElement.text(totalPrice.toLocaleString('vi-VN') + '.000 đ');
        updateSelectedProducts();

        
        var productId = parent.data('product-id');
        console.log(productId);
        
        updateProductQuantityInDatabase(productId, quantity);
    }
    function updateProductQuantityInDatabase(productId, quantity) {
        $.ajax({
            url: 'controller/update_quantity.php',
            type: 'POST',
            data: {
                product_id: productId,
                quantity: quantity
            },
            success: function(response) {
                var result = JSON.parse(response);
                if (result.status === 'success') {
                    console.log("Cập nhật thành công!");
                } else {
                    console.error("Lỗi: " + result.message);
                }
            },
            error: function(xhr, status, error) {
                console.error("Lỗi khi gửi yêu cầu: " + error);
            }
        });
    }
    function removeProduct(productId) {
        $.ajax({
            url: 'controller/remove_cart.php',
            type: 'POST',
            data: {
                product_id: productId
            },
            success: function(response) {
                try {
                    var result = JSON.parse(response);
                    if (result.status === 'success') {
                        console.log("Sản phẩm đã được xóa thành công!");
                        $('#' + productId).closest('.item-book-cart').remove();
                    } else {
                        console.error("Lỗi: " + result.message);
                    }
                } catch (e) {
                    console.error("Lỗi khi phân tích JSON: ", e);
                    console.log("Phản hồi từ máy chủ:", response);
                }
            },
            error: function(xhr, status, error) {
                console.error("Lỗi khi gửi yêu cầu: " + error);
            }
        });
    }
    $('.input-number-product .num-1').on('click', function() {
        var quantityInput = $(this).siblings('.prd-quantity');
        var currentValue = parseInt(quantityInput.val());
        if (currentValue > 1) {
            quantityInput.val(currentValue - 1);
            updateTotalPrice($(this));
        }
    });

    $('.input-number-product .num-2').on('click', function() {
        var quantityInput = $(this).siblings('.prd-quantity');
        var maxStock = parseInt(quantityInput.data('max'));
        var currentValue = parseInt(quantityInput.val());
        if (currentValue < maxStock) {
            quantityInput.val(currentValue + 1);
            updateTotalPrice($(this));
        }
    });

    $('.prd-quantity').on('input', function() {
        var maxStock = parseInt($(this).data('max'));
        var value = $(this).val().replace(/[^0-9]/g, '');
        $(this).val(value);

        var currentValue = parseInt(value);
        if (currentValue > maxStock) {
            $(this).val(maxStock);
        }
        updateTotalPrice($(this));
    });

    $('.prd-quantity').on('blur', function() {
        var currentValue = parseInt($(this).val());
        if (isNaN(currentValue) || currentValue < 1) {
            $(this).val(1);
        }
        updateTotalPrice($(this));
    });

    // Xoa gio hang
    $('.remove-cart').on('click', function() {
        productIdToDelete = $(this).closest('.item-book-cart').data('product-id');
        $('#confirmDeleteModal').modal('show'); // Mở hộp thoại xác nhận
    });

    $('#confirmDelete').on('click', function() {
        removeProduct(productIdToDelete); // Gọi hàm xóa
        $('#confirmDeleteModal').modal('hide'); // Đóng hộp thoại xác nhận
    });
    $('.btn-secondary').on('click', function() {
        $('#confirmDeleteModal').modal('hide'); // Đóng hộp thoại xác nhận
    });
    const checkboxAll = document.getElementById('checkbox-all-products');
    const checkboxes = document.querySelectorAll('.checkbox-add-cart');
    const totalPriceElement = document.getElementById('total-price');
    const checkoutButton = document.getElementById('checkoutButton');

    function updateSelectedProducts() {
        let totalPrice = 0;
        const selectedProducts = [];
        
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                const price2 = parseInt(checkbox.getAttribute('data-price2'));
                const name = checkbox.getAttribute('data-name');
                const img = checkbox.getAttribute('data-img');
                const price = checkbox.getAttribute('data-price');
                
                // Thay đổi để tìm cha trực tiếp của checkbox
                const quantityInput = checkbox.closest('.item-book-cart').querySelector('.prd-quantity');
                const quantity = parseInt(quantityInput.value);

                totalPrice += price * quantity;

                const productId = checkbox.id;
                selectedProducts.push({
                    id: productId,
                    price: price,
                    name: name,
                    img: img,
                    quantity: quantity
                });
            }
        });

        totalPriceElement.textContent = totalPrice.toLocaleString('vi-VN') + '.000 đ';
        localStorage.setItem('selectedProducts', JSON.stringify(selectedProducts)); // Lưu vào Local Storage

        // Bật hoặc tắt nút "Thanh toán" dựa trên số lượng sản phẩm đã chọn
        if (selectedProducts.length > 0) {
            checkoutButton.disabled = false;
        } else {
            checkoutButton.disabled = true;
        }
    }

    checkboxAll.addEventListener('change', function() {
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = checkboxAll.checked;
        });
        updateSelectedProducts();
    });

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            updateSelectedProducts();
            if (!checkbox.checked) {
                checkboxAll.checked = false;
            } else {
                const allChecked = Array.from(checkboxes).every(cb => cb.checked);
                checkboxAll.checked = allChecked;
            }
        });
    });

    // Cập nhật giá trị ban đầu khi trang được tải
    updateSelectedProducts();

    // Lắng nghe sự kiện khi nút "Thanh toán" được nhấp vào
    checkoutButton.addEventListener('click', function() {
        var selectedProducts = localStorage.getItem('selectedProducts');
        // Chuyển hướng đến trang thanh toán và truyền danh sách sản phẩm đã chọn qua tham số URL
        window.location.href = 'index.php?src=checkout/checkout';
    });
});
