<?php
require_once('db.php'); // Kết nối với database

class Voucher {
    public static function getAllVouchers() {
        $query = "SELECT * FROM `voucher`";
        $parameters = []; // Không cần tham số
        $resultType = 2; // Trả về danh sách
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getVouchersByUserId($userId) {
        $query = "SELECT * FROM `voucher` 
                  WHERE UserId = ? 
                  AND Date <= NOW() 
                  AND (EndDate IS NULL OR EndDate >= NOW()) 
                  AND Status = 1";  // Giả sử Status = 1 là mã giảm giá còn hiệu lực
        $parameters = [$userId]; // Tham số đầu vào là UserId
        $resultType = 2; // Trả về danh sách
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function updateVoucherStatus($voucherCode, $status) {
        $query = "UPDATE `voucher` 
                  SET `Status` = ? 
                  WHERE `Code` = ?";

        $parameters = [$status, $voucherCode]; // Tham số đầu vào: trạng thái mới và mã giảm giá
        $resultType = 1; // Kiểu thực thi UPDATE
        return DP::run_query($query, $parameters, $resultType);
    }
    
}
