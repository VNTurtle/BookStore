<?php
require_once('../API/Cancel_requests.php');
require_once('../API/InvoiceDetail.php');
require_once('../API/Product.php');
require_once('../API/db.php');
$response = array();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $orderId = $_POST['order_id'];
    $status= $_POST['status'];
    $orderStatusId= $_POST['order_status'];

    $check= Cancel_requests::putCancel_requests($orderId, $status);
    $query="UPDATE invoice SET OrderStatusId = ? WHERE Code = ?";
    DP::run_query($query, [$orderStatusId, $orderId], 1);
    if($status=="approved"){
        $lst_ivd=InvoiceDetail::getInvoiceDetailByCode($orderId);
        foreach ($lst_ivd as $key => $ivd) {
            $newStock=$ivd['Stock']+$ivd['Quantity'];
            $updateStock="UPDATE book SET stock = ? WHERE Id = ?";
            DP::run_query($updateStock, [$newStock, $ivd['BookId']], 1);
        }
    }
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
