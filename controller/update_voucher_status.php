<?php
session_start();
header('Content-Type: application/json');

// Lấy dữ liệu từ AJAX
$data = json_decode(file_get_contents('php://input'), true);

if (!empty($data['voucherCode'])) {
    $voucherCode = $data['voucherCode'];

    $_SESSION['voucherCode'] = $voucherCode;

    echo json_encode(['success' => true, 'message' => 'Voucher saved to session']);
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid voucher code']);
}
