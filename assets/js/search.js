function ShowMenu(element) {
    var target = element.dataset.target;
    var detail = document.getElementById(target);

    var codeElement = element.parentNode.querySelector('.category-code');
    console.log(codeElement);
    detail.classList.toggle("show");
    codeElement.classList.toggle("show");
}
document.addEventListener("DOMContentLoaded", function () {
    const checkboxes = document.querySelectorAll('.aside-item-input');

    // Đảm bảo chỉ một checkbox được chọn cùng lúc
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('click', function () {
            checkboxes.forEach(function (otherCheckbox) {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;
                }
            });
        });
    });
    // Lắng nghe sự kiện thay đổi trên checkbox để thực hiện lọc
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            let selectedPrices = Array.from(document.querySelectorAll('.aside-item-input:checked'))
                .map(cb => cb.nextElementSibling.innerText);

            // Lấy từ khóa tìm kiếm từ URL
            const params = new URLSearchParams(window.location.search);
            const searchKeyword = params.get('timkiem'); // Từ khóa tìm kiếm

            // Kiểm tra từ khóa tìm kiếm và in ra console trước khi gửi
            console.log('Sending data:', { searchKeyword, selectedPrices });

            // Gửi yêu cầu đến `filter-search.php` để thực hiện lọc
            fetch('src/filter-search.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    searchKeyword: searchKeyword, // Từ khóa tìm kiếm
                    priceRanges: selectedPrices   // Danh sách khoảng giá
                })
            })
            .then(response => response.text()) // Sử dụng .text() để kiểm tra dữ liệu thô
            .then(data => {
                console.log('Raw response:', data);
                try {
                    const jsonData = JSON.parse(data); // Phân tích nếu dữ liệu là JSON
                    console.log('Filtered products:', jsonData);
                    updateProductList(jsonData); // Cập nhật giao diện với kết quả lọc
                } catch (error) {
                    console.error('JSON parse error:', error);
                }
            })
            .catch(error => {
                console.log("Lỗi AJAX:", error);
            });
        });
    });
});

// Hàm cập nhật danh sách sản phẩm trên giao diện
function updateProductList(products) {
    const productContainer = document.querySelector('.product-container .row');
    productContainer.innerHTML = ''; // Xóa các sản phẩm cũ

    if (products.length > 0) {
        products.forEach(product => {
            const productElement = document.createElement('div');
            productElement.classList.add('product__panel-item', 'col-lg-3', 'col-md-4', 'col-sm-6');
            productElement.innerHTML = `
            <div class="product__panel-item-wrap">
                <div class="product__panel-img-wrap">
                    <a href="index.php?src=product/product_detail&id=${product.BookId}">
                        <img src="assets/img/products/${product.Path}" alt="${product.BookName}" class="product__panel-img">
                    </a>
                </div>
                <div class="product__panel-heading">
                    <a href="index.php?src=product/product_detail&id=${product.BookId}" class="product__panel-link">
                        ${product.BookName}
                    </a>
                </div>
                <div class="product__panel-price">
                    <span class="product__panel-price-current">
                        ${product.Price} đ
                    </span>
                </div>
            </div>
        `;
            productContainer.appendChild(productElement);
        });
    } else {
        productContainer.innerHTML = '<p>Không có sản phẩm nào phù hợp.</p>';
    }
}
