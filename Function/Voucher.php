<?php
require_once('db.php'); 
class Voucher {
    public static function getVoucherById($id) {
        $query = "SELECT * FROM `voucher` WHERE Code = :id";
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
    public static function updateVoucher($code, $stock, $des, $date, $enddate, $maxtotal, $percent, $status){
        $query = "
    UPDATE `voucher` 
    SET       
        stock = :stock,
        Des = :des,
        Date = :date,
        EndDate = :enddate,
        MaxTotal = :maxtotal,
        Percent = :percent,
        Status = :status
    WHERE code = :code
";
        $parameters = [
            ':code' => $code,
            ':stock' => $stock,
            ':des' => $des,
            ':date' => $date,
            ':enddate' => $enddate,
            ':maxtotal' => $maxtotal,
            ':percent' => $percent,
            ':status' => $status,
        ];
        return DP::run_query($query, $parameters, 2); 
    }    
    public static function updateStockVoucher($code){
        $VC=self::getVoucherById($code);
        $newStock=$VC[0]['Stock']-1;
        $query = "
        UPDATE `voucher`
        SET stock = ?
        WHERE code = ?
    ";    
        $parameters = [   
            $newStock, $code
        ];
        return DP::run_query($query, $parameters, 1); 
    }
    public static function getVouchers() {
        $query = "SELECT * FROM `voucher` 
                  WHERE Date <= NOW() 
                  AND (EndDate IS NULL OR EndDate >= NOW()) 
                  AND Status = 1";  // Giả sử Status = 1 là mã giảm giá còn hiệu lực
        $parameters = []; // Tham số đầu vào là UserId
        $resultType = 2; // Trả về danh sách
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function addVoucher($code, $stock, $des, $date, $enddate, $maxtotal, $percent, $status) {
        $query = "
            INSERT INTO `voucher` (Code, stock, Des, Date, EndDate, MaxTotal, Percent, Status)
            VALUES (:code, :stock, :des, :date, :enddate, :maxtotal, :percent, :status)
        ";
        $parameters = [
            ':code' => $code,
            ':stock' => $stock,
            ':des' => $des,
            ':date' => $date,
            ':enddate' => $enddate,
            ':maxtotal' => $maxtotal,
            ':percent' => $percent,
            ':status' => $status,
        ];
        return DP::run_query($query, $parameters, 1);
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
