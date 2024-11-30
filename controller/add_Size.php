<?php
require_once('../Function/Size.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị của trường username từ form
    $SizeName = $_POST['Size'];
    $check=Size::postSize($SizeName);
    if($check){
        $Size=Size::getSize();
    }

    // Trả về danh sách combo dưới dạng JSON để xử lý trong JavaScript (nếu cần)
    echo json_encode($Size);
} else {
    // Đoạn mã này sẽ được thực hiện nếu không phải là phương thức POST
    echo "Yêu cầu không hợp lệ!";
}
?>