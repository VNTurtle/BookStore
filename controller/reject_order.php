<?php
    require_once('../API/db.php');


    $orderId = $_POST['order_id'] ?? null;
    $Content = $_POST['reason'] ?? null;

    if ($orderId && $Content) {
    $query = "UPDATE cancel_requests SET status = 'refused', Content2 = ? WHERE order_id = ?";
    $check=DP::run_query($query,[$Content,$orderId],1);

    if ($check) {
        echo json_encode(['success' => true, 'message' => 'Đã từ chối đơn hàng.']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Lỗi khi từ chối đơn hàng.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Dữ liệu không hợp lệ.']);
}
?>
