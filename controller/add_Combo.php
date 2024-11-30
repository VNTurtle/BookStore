<?php
require_once('../Function/ComboBook.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị của trường username từ form
    $comboName = $_POST['Combo'];
    $check=ComboBook::putComboBook($comboName);
    if($check){
        $Combo=ComboBook::getComboBook();
    }
    // Trả về danh sách combo dưới dạng JSON để xử lý trong JavaScript (nếu cần)
    echo json_encode($Combo);
} else {
    // Đoạn mã này sẽ được thực hiện nếu không phải là phương thức POST
    echo "Yêu cầu không hợp lệ!";
}
?>