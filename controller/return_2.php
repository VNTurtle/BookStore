<?php
require_once('../Function/db.php');
require_once('../Function/User.php');
require_once('../Function/Cart.php');
require_once('../Function/Voucher.php');
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
date_default_timezone_set('Asia/Ho_Chi_Minh');

$vnp_HashSecret = "7WGDGPIT62YT0NHSKJCP1OP3S775IQQB"; // Chuỗi bí mật

// Get all the VNPAY returned data
$vnp_SecureHash = $_GET['vnp_SecureHash'];
$inputData = array();
foreach ($_GET as $key => $value) {
    if (substr($key, 0, 4) == "vnp_") {
        $inputData[$key] = $value;
    }
}
unset($inputData['vnp_SecureHash']);
ksort($inputData);
$hashdata = "";
$i = 0;
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
}

$secureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);


if ($secureHash == $vnp_SecureHash && $_GET['vnp_ResponseCode'] == '00') {
    

    session_start();
    $invoice = $_SESSION['invoice'];
    $invoiceDetails = $_SESSION['invoiceDetails'];

    if(User::Pay($invoice, $invoiceDetails)){        
        $response['status'] = 'success';       
    }else{
        echo "Loix";
    };

    // Clear session data after inserting the invoice
    unset($_SESSION['invoice']);
    unset($_SESSION['invoiceDetails']);
    if (isset($_SESSION['voucherCode'])) {
        $voucherCode = $_SESSION['voucherCode'];
    
        $result = Voucher::updateStockVoucher($voucherCode);
    
        if ($result) {
            echo "Voucher đã được sử dụng.";
        } else {
            echo "Không thể cập nhật trạng thái voucher.";
        }
    
        // Xóa voucherCode khỏi session sau khi xử lý xong
        unset($_SESSION['voucherCode']);
    }

    header("Location: ../index.php?src=invoice/invoice");
} else {
    echo "Payment failed or secure hash mismatch.";
}
?>
