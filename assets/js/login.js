document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Ngăn form gửi theo cách truyền thống

    // Lấy giá trị email và password
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var urlParams = new URLSearchParams(window.location.search);
    var productId = urlParams.get('id');

    // Gửi dữ liệu đến server bằng fetch API
    fetch('controller/Login.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded'
      },
      body: 'email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password) + '&btn_Login=1'
    })
    .then(response => response.json()) // Chuyển response thành JSON
    .then(data => {
      if (data.status === 'success') {
        if (productId) {
          window.location.href = 'index.php?src=product/product_detail&id=' + productId;
      } else {
          window.location.href = 'index.php';
      }
        localStorage.setItem('jwt_token', data.token);
      } else {
        var mms= document.querySelector('.mms');
        mms.textContent = data.message;
        console.log('Đăng nhập thất bại:', data.message);
      }
    })
    .catch(error => {
      console.error('Lỗi:', error);
    });
  });