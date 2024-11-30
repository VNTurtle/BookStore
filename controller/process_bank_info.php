<?php
require_once('../Function/db.php');
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy trạng thái đơn hàng mới và ID đơn hàng từ yêu cầu AJAX
    $orderId = $_POST['orderId'];
    $bankName = $_POST['bankName'];
    $accountNumber =$_POST['accountNumber'];
    $accountName =$_POST['accountName'];
    $Content3 = "Ngân hàng: " . $bankName . ". Số tài khoản: " . $accountNumber . ". Tên tài khoản: " . $accountName;
    $Status='bankpay';
    // Câu truy vấn cập nhật
    $query="UPDATE `cancel_requests` 
        SET `Content3`=?, `Status`= ? WHERE order_id = ? ";
    $check=DP::run_query($query,[$Content3, $Status, $orderId],1);
    // Thực hiện câu truy vấn
    if ($check) {
        $response['status'] = 'success';
        $response['message'] = 'Đã thay đổi trạng thái thành công.';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Đã xảy ra lỗi khi thay đổi trạng thái.';
    }
}
echo json_encode($response);
?>
