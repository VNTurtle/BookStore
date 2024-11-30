<?php
require_once('../Function/Cancel_requests.php');
$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy trạng thái đơn hàng mới và ID đơn hàng từ yêu cầu AJAX
    $orderId = $_POST['order_id'];
    $userId = $_POST['userId'];
    $reason =$_POST['reason'];
    $Status='pending';
    // Câu truy vấn cập nhật
    
    $check= Cancel_requests::PostCancel_requests($userId, $orderId, $reason,null,null, $Status);
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
