<?php
require_once('../Function/CoverType.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị của trường username từ form
    $CovertypeName = $_POST['Covertype'];
    $check=CoverType::putCoverType($CovertypeName);
    if($check){
        $Covertype=CoverType::getCoverType();
    }

    // Trả về danh sách combo dưới dạng JSON để xử lý trong JavaScript (nếu cần)
    echo json_encode($Covertype);
} else {
    // Đoạn mã này sẽ được thực hiện nếu không phải là phương thức POST
    echo "Yêu cầu không hợp lệ!";
}
?>