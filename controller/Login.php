<?php
    require_once('../API/User.php');
    header('Content-Type: application/json'); // Đặt content type là JSON

        // Lấy giá trị email và password từ form
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Gọi hàm Login với email và password
        $jwt = User::Login($email, $password);
        
        // Trả về kết quả dưới dạng JSON
        if ($jwt) {
            echo json_encode(['token' => $jwt, 'status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Không đúng Email hoặc Mật khẩu']);
        }
?>
