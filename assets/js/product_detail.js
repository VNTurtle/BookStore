var binElement = document.getElementById('Model_bin');
var binName = binElement ? binElement.value : null;
console.log(binName);

var modelElement = document.getElementById('Model');
var modelName = modelElement ? modelElement.value : null;
console.log(modelName);

if(binName!=null){
    window.addEventListener('DOMContentLoaded', function() {
        var canvas = document.getElementById('3D-Book');
        var engine = new BABYLON.Engine(canvas, true);
    
        // Tạo scene
        var scene = new BABYLON.Scene(engine);
        // Đặt màu nền
        scene.clearColor = new BABYLON.Color3(0, 0.749, 0.984);
        // Tạo camera
        var camera = new BABYLON.ArcRotateCamera('camera', Math.PI, Math.PI / 3, 10, BABYLON.Vector3.Zero(), scene);
        camera.attachControl(canvas, true);
        camera.wheelPrecision = 50; // Điều chỉnh tốc độ zoom
    
        // Thiết lập giá trị minZ và maxZ
        camera.minZ = 0.1; // Khoảng cách gần nhất mà camera có thể hiển thị
        camera.maxZ = 10000; // Khoảng cách xa nhất mà camera có thể hiển thị
    
    
        // Ngăn chặn hành động mặc định của trình duyệt khi cuộn trên thẻ canvas
        canvas.addEventListener('wheel', function(event) {
            event.preventDefault();
        }, {
            passive: false
        });
        var cameraStateFromMySQL = {
            alpha: parseFloat(cameraState2.alpha.replace(/'/g, '')),
            beta: parseFloat(cameraState2.beta.replace(/'/g, '')),
            radius: parseFloat(cameraState2.radius.replace(/'/g, '')),
            target: {
                x: parseFloat(cameraState2.target.x.replace(/'/g, '')),
                y: parseFloat(cameraState2.target.y.replace(/'/g, '')),
                z: parseFloat(cameraState2.target.z.replace(/'/g, ''))
            }
        };
        console.log(cameraStateFromMySQL);
        // Sử dụng dữ liệu từ MySQL để cập nhật camera
        if (cameraStateFromMySQL) {
            camera.alpha = cameraStateFromMySQL.alpha;
            camera.beta = cameraStateFromMySQL.beta;
            camera.radius = cameraStateFromMySQL.radius;
            camera.setTarget(new BABYLON.Vector3(cameraStateFromMySQL.target.x, cameraStateFromMySQL.target.y, cameraStateFromMySQL.target.z));
        }
        // Tạo ánh sáng
        var light = new BABYLON.HemisphericLight('light', new BABYLON.Vector3(0, 1, 0), scene);
    
        // Tải mô hình từ Blender
    
    
        
        // Tạo đường dẫn đầy đủ với 'Modun/' trước tên file
        BABYLON.SceneLoader.ImportMesh('', '', modelName, scene, function(meshes) {
            // Meshes là một mảng chứa các mesh trong mô hình
            // Bạn có thể thực hiện các thao tác khác trên các mesh ở đây
    
            // Chỉnh kích thước mô hình
            var model = meshes[0];
            model.scaling = new BABYLON.Vector3(2.5, 2.5, 2.5);
            model.position = new BABYLON.Vector3(0, -3, 0);
            // Chạy vòng lặp chính
            engine.runRenderLoop(function() {
                scene.render();
            });
        });
    
        // Xử lý sự kiện khi cửa sổ trình duyệt thay đổi kích thước
        window.addEventListener('resize', function() {
            engine.resize();
        });
    });
}

    let countImg=document.getElementsByClassName('count-img').length;
    console.log(countImg);
    if(countImg==1 || countImg==2){
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows: false,
            centerMode: true,
            centerPadding: '60px',
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }else{
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.slider-for',
            dots: false,
            arrows: false,
            centerMode: true,
            centerPadding: '60px',
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    }
    
    
    
    $('.slick-slider2').slick({
        dots: false,
        infinite: true,
        speed: 300,
        
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow:'.btn-pre-slider1',
        nextArrow:'.btn-next-slider1',
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
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
    
    $('.slick-slider3').slick({
        dots: false,
        infinite: true,
        speed: 300,
        
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow:'.btn-pre-slider2',
        nextArrow:'.btn-next-slider2',
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
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
    
    // Lấy tất cả các liên kết tab và nội dung tab
    var tabLinks = document.querySelectorAll('.tab-link');
    var tabContents = document.querySelectorAll('.tab-content');
    
    // Lặp qua mỗi tab link
    tabLinks.forEach(function(tabLink, index) {
        // Gán sự kiện click cho mỗi tab link
        tabLink.addEventListener('click', function() {
            // Xóa lớp active khỏi tất cả các tab link và tab content
            tabLinks.forEach(function(link) {
                link.classList.remove('active');
            });
            tabContents.forEach(function(content) {
                content.classList.remove('active');
            });
            // Thêm lớp active cho tab link được chọn
            this.classList.add('active');
            // Hiển thị tab content tương ứng với tab link được chọn
            tabContents[index].classList.add('active');
        });
    });
    document.getElementById('product-form').addEventListener('submit', function(event) {
        // Chuyển hướng sang trang đăng nhập nếu không có token
        event.preventDefault();

        var form = event.target;
        var buttonClicked = event.submitter.name;
        const Quantityvalue = document.getElementById('quantityBook').value;
        var priceElement = document.getElementById("price-product");
        var IdProduct = document.getElementById("Id-product").value;
        var priceText = priceElement.innerText;
        var priceValue = priceText.replace(" VNĐ", "");
        var nameproduct = document.getElementById('name-product').textContent;
        const firstImage = document.querySelector('.swiper-slide .img-product');
        if (firstImage) {
            var Img = firstImage.title;
        } else {
            console.log('No image found');
        }
        console.log(priceValue);
        console.log(Quantityvalue);
        const selectedProducts = [];
        if (buttonClicked === 'add-to-cart') {           
            var token=localStorage.jwt_token
         
            if (token==null) {            
                window.location.href = 'index.php?src=user/Login';
                return; 
            }
            var formData = new FormData(form);
            console.log(formData);
            document.querySelector('.thongbao').classList.add('show');
            // Send AJAX request to the PHP script
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'controller/add_to_cart.php', true);

            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Successfully received response
                        setTimeout(function() {
                            document.querySelector('.thongbao').classList.remove('show');
                        }, 2000);
                    } else {
                        // Error occurred
                        console.log('Error occurred:', xhr.status, xhr.statusText);
                    }
                }
            };
            xhr.send(formData);
        } else if (buttonClicked === 'checkout') {
            var token=localStorage.jwt_token
         
            if (token==null) {            
                window.location.href = 'index.php?src=user/Login';
                return; 
            }
            selectedProducts.push({
                id: IdProduct,
                price: priceValue,
                name: nameproduct,
                img: Img,
                quantity: Quantityvalue,
            });
            console.log(selectedProducts);
           // Chuyển đổi selectedProducts thành chuỗi JSON và lưu vào Local Storage
             localStorage.setItem('selectedProducts', JSON.stringify(selectedProducts));

            // Chuyển hướng đến trang thanh toán mà không cần truyền dữ liệu qua URL
            window.location.href = 'index.php?src=checkout/checkout_2';
        }
    });
    $('.add-to-favourite').on('click', function () {
        var Id = $(this).data('product-id');
        console.log('bookId:', Id); // Kiểm tra giá trị của bookId
    
        // Kiểm tra xem Id có hợp lệ không
        if (Id) {
            var token = localStorage.jwt_token;
    
            // Nếu không có token, chuyển hướng đến trang đăng nhập
            if (token == null) {
                window.location.href = 'index.php?src=user/Login';
                return;
            }
    
            // Tạo đối tượng FormData và thêm Id vào dữ liệu gửi đi
            var formData = new FormData();
            formData.append('Id', Id);
            formData.append('token', token);
    
            console.log(formData);
    
            // Hiển thị thông báo khi đang xử lý
           
    
            // Tạo đối tượng XMLHttpRequest để gửi yêu cầu
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'controller/add_to_favourite.php', true);
    
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        try {
                            document.querySelector('.thongbao').classList.add('show');
                            var response = JSON.parse(xhr.responseText); 
                            
                            document.querySelector('.thongbao').innerText = response.message;

                            // Nếu sản phẩm được thêm thành công
                            if (response.status === 'success') {
                               // Ẩn nút "Add to Favourite"
                               document.querySelector('.add-to-favourite').classList.add('hidden');

                                // Hiển thị thẻ "Đã thêm"
                                document.querySelector('.remove-to-favourite').classList.remove('hidden');
                            } else {
                                setTimeout(function() {
                                    document.querySelector('.thongbao').classList.remove('show');
                                }, 2000);
                            }
                        } catch (e) {
                            console.error('Lỗi khi phân tích JSON:', e);
                        }
    
                        // Ẩn thông báo sau khi xử lý xong
                        setTimeout(function() {
                            document.querySelector('.thongbao').classList.remove('show');
                        }, 2000);
                    } else {
                        // Xảy ra lỗi khi gửi yêu cầu
                        console.log('Lỗi khi gửi yêu cầu:', xhr.status, xhr.statusText);
    
                        // Ẩn thông báo nếu có lỗi
                        setTimeout(function() {
                            document.querySelector('.thongbao').classList.remove('show');
                        }, 2000);
                    }
                }
            };
    
            // Gửi yêu cầu AJAX
            xhr.send(formData);
        } else {
            // Nếu Id không hợp lệ, hiển thị thông báo
            alert('Id sản phẩm không hợp lệ');
        }
    });    
    
    $('.remove-to-favourite').on('click', function () {
        var product_id = $(this).data('product-id');
       
        var formData = new FormData();
        formData.append('product_id', product_id);
        console.log(formData);
        var xhr = new XMLHttpRequest();
            xhr.open('POST', 'controller/remove_favourite.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        try {
                            document.querySelector('.thongbao').classList.add('show');
                            var response = JSON.parse(xhr.responseText); 
                            
                            document.querySelector('.thongbao').innerText = response.message;

                            // Nếu sản phẩm được thêm thành công
                            if (response.status === 'success') {
                                document.querySelector('.remove-to-favourite').classList.add('hidden');

                                // Hiển thị thẻ "Đã thêm"
                                document.querySelector('.add-to-favourite').classList.remove('hidden');
                                $state.reload(state);
                            } else {
                                setTimeout(function() {
                                    document.querySelector('.thongbao').classList.remove('show');
                                }, 2000);
                            }
                        } catch (e) {
                            console.error('Lỗi khi phân tích JSON:', e);
                        }
    
                        // Ẩn thông báo sau khi xử lý xong
                        setTimeout(function() {
                            document.querySelector('.thongbao').classList.remove('show');
                        }, 2000);
                    } else {
                        // Xảy ra lỗi khi gửi yêu cầu
                        console.log('Lỗi khi gửi yêu cầu:', xhr.status, xhr.statusText);
    
                        // Ẩn thông báo nếu có lỗi
                        setTimeout(function() {
                            document.querySelector('.thongbao').classList.remove('show');
                        }, 2000);
                    }
                }
            };  
            // Gửi yêu cầu AJAX
            xhr.send(formData);
    });

    document.addEventListener("DOMContentLoaded", function() {
        var decreaseButton = document.getElementById('btn-decrease');
        var increaseButton = document.getElementById('btn-increase');
        var quantityInput = document.getElementById('quantityBook');
        var maxStock = parseInt(quantityInput.getAttribute('max'));
    
        decreaseButton.addEventListener('click', function() {
            var currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });
    
        increaseButton.addEventListener('click', function() {
            var currentValue = parseInt(quantityInput.value);
            if (currentValue < maxStock) {
                quantityInput.value = currentValue + 1;
            }
        });
    
        quantityInput.addEventListener('input', function() {
            // Ensure only numbers are inputted
            this.value = this.value.replace(/[^0-9]/g, '');
            var currentValue = parseInt(this.value);
            // Ensure value does not exceed max
            if (currentValue > maxStock) {
                this.value = maxStock;
            }
        });
    
        quantityInput.addEventListener('blur', function() {
            // Ensure value is at least 1
            if (this.value === '' || parseInt(this.value) < 1) {
                this.value = 1;
            }
        });
    });
