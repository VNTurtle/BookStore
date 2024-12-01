
function ShowMore() {
    // Hiển thị tất cả các mục bị ẩn
    document.querySelectorAll('.product-category-item.hidden').forEach(function(item) {
        item.classList.remove('hidden');
    });

    // Ẩn nút "Xem thêm"
    document.querySelector('.btn-see-more').style.display = 'none';
}

const checkboxes = document.querySelectorAll('.aside-item-input');
    checkboxes.forEach(function (checkbox) {
        checkbox.addEventListener('click', function () {
            // Nếu một checkbox được chọn, bỏ chọn các checkbox khác
            checkboxes.forEach(function (otherCheckbox) {
                if (otherCheckbox !== checkbox) {
                    otherCheckbox.checked = false;  // Bỏ chọn các checkbox khác
                }
            });
        });
    });
document.querySelectorAll('.aside-item-input').forEach(checkbox => {
    checkbox.addEventListener('change', function () {
        let selectedPrices = Array.from(document.querySelectorAll('.aside-item-input:checked'))
            .map(cb => cb.nextElementSibling.innerText);

        // In dữ liệu ra console trước khi gửi
        console.log('Sending data:', selectedPrices);

        // Lấy giá trị lst_id và lst_id2 từ URL, nếu có
        const params = new URLSearchParams(window.location.search);
        const lst_id = params.get('lst_id');
        const lst_id2 = params.get('lst_id2');

        fetch('src/filter-products.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                priceRanges: selectedPrices,
                lst_id: lst_id, // Gửi tham số lst_id nếu có
                lst_id2: lst_id2 // Gửi tham số lst_id2 nếu có
            })
        })
            .then(response => response.text()) // Sử dụng .text() thay vì .json()
            .then(data => {
                console.log('Raw response:', data); // In ra dữ liệu thô nhận được
                try {
                    const jsonData = JSON.parse(data); // Cố gắng phân tích dữ liệu nếu là JSON
                    console.log('Filtered products:', jsonData);
                    updateProductList(jsonData);
                } catch (error) {
                    console.error('JSON parse error:', error);
                }
            })
            .catch(error => {
                console.log("Lỗi AJAX:", error);
            });
    });
});
// Hàm lấy các khoảng giá đã được chọn
function getSelectedRanges() {
    const selectedRanges = [];
    document.querySelectorAll('.aside-item-input').forEach(checkbox => {
        if (checkbox.checked) {
            selectedRanges.push(checkbox.nextElementSibling.textContent.trim());
        }
    });
    return selectedRanges;
}


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
                <div class="product__panel-rate-wrap">
                    <i class="fas fa-star product__panel-rate"></i>
                    <i class="fas fa-star product__panel-rate"></i>
                    <i class="fas fa-star product__panel-rate"></i>
                    <i class="fas fa-star product__panel-rate"></i>
                    <i class="fas fa-star product__panel-rate"></i>
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

