<?php
require_once('db.php'); 
class Voucher {
    public static function getVoucherById($id) {
        $query = "SELECT * FROM `voucher` WHERE Id = :id";
        $parameters = [
            ':id' => $id
        ];
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getAllVouchers($offset, $slsp) {
        $query = "SELECT * FROM `voucher`  LIMIT $offset, $slsp ";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function updateVoucher($id, $code, $userId, $des, $date, $enddate, $maxtotal, $percent, $status){
        $query = "
    UPDATE `voucher` 
    SET 
        Code = :code,
        UserId = :userId,
        Des = :des,
        Date = :date,
        EndDate = :enddate,
        MaxTotal = :maxtotal,
        Percent = :percent,
        Status = :status
    WHERE Id = :id
";
        $parameters = [
            ':code' => $code,
            ':userId' => $userId,
            ':des' => $des,
            ':date' => $date,
            ':enddate' => $enddate,
            ':maxtotal' => $maxtotal,
            ':percent' => $percent,
            ':status' => $status,
            ':id' => $id
        ];
        return DP::run_query($query, $parameters, 0); // Thực thi không trả về kết quả
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
    public static function addVoucher($code, $userId, $des, $date, $enddate, $maxtotal, $percent, $status) {
        $query = "
            INSERT INTO `voucher` (Code, UserId, Des, Date, EndDate, MaxTotal, Percent, Status)
            VALUES (:code, :userId, :des, :date, :enddate, :maxtotal, :percent, :status)
        ";
        $parameters = [
            ':code' => $code,
            ':userId' => $userId,
            ':des' => $des,
            ':date' => $date,
            ':enddate' => $enddate,
            ':maxtotal' => $maxtotal,
            ':percent' => $percent,
            ':status' => $status,
        ];
        return DP::run_query($query, $parameters, 0);
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
