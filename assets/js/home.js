
$('.slick-slider').slick({
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    prevArrow: '.btn-pre-slider',
    nextArrow: '.btn-next-slider',
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                infinite: true,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
    ]
});

$(document).ready(function() {
    $('.card-button').on('click', function() {
        var token = localStorage.jwt_token
        if (token == null) {
            window.location.href = 'index.php?src=user/Login';
            return;
        }
        var productId = $(this).data('product-id');
        console.log(productId);
        document.querySelector('.thongbao').classList.add('show');
         // Lấy ID sản phẩm từ thuộc tính data
        // Gửi yêu cầu AJAX để thêm sản phẩm vào giỏ hàng
        $.ajax({
            url: 'controller/add_to_cart.php', // Đường dẫn đến file PHP xử lý
            type: 'POST',
            data: { 
                Id: productId,
                quantity: 1
            }, // Dữ liệu gửi đi
            success: function(response) {
                // Successfully received response
                setTimeout(function() {
                    document.querySelector('.thongbao').classList.remove('show');
                }, 2000);
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi
                console.error('Có lỗi xảy ra: ' + error);
            }
        });
    });
});
