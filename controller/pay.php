<?php
require_once('../API/User.php');
$data = json_decode(file_get_contents("php://input"), true);
session_start();
if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['number3']) && isset($_POST['number4'])) {
    $invoice = json_decode($_POST['invoice'], true);
    $invoiceDetails = json_decode($_POST['invoiceDetails'], true);
$number1=$_POST['number1'];
$number2=$_POST['number2'];
$number3=$_POST['number3'];
$number4=$_POST['number4'];
$enteredOTP = $number1 . $number2 . $number3 . $number4;

$otpFromSession = $_SESSION["OTP"];
    if ($enteredOTP != $otpFromSession) {
        // Xác minh thất bại
        $response['status'] = 'error';
        $response['message'] = 'Invalid OTP. Please try again.';
        
    }else {
       if(User::Pay($invoice, $invoiceDetails)){
            $response['status'] = 'success';       
       };
    }
}else {
    // Nếu thiếu dữ liệu nhập từ form, trả về thông báo lỗi
    $response['status'] = 'error';
    $response['message'] = 'Incomplete data received.';
}
echo json_encode($response);
?>