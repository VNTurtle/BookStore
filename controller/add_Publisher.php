<?php
require_once('../API/Publisher.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị của trường username từ form
    $PublisherName = $_POST['Publisher'];
    $check=Publisher::putPublisher($PublisherName);
    if($check){
        $Publisher=Publisher::getPublisher();
    }
    // Trả về danh sách combo dưới dạng JSON để xử lý trong JavaScript (nếu cần)
    echo json_encode($Publisher);
} else {
    // Đoạn mã này sẽ được thực hiện nếu không phải là phương thức POST
    echo "Yêu cầu không hợp lệ!";
}
?>