<?php 
require_once('db.php'); 

class Cancel_requests {
    public static function PostCancel_requests($userId, $order_id, $Content, $Status) {
        $sql = "INSERT INTO `cancel_requests`(`UserId`, `order_id`, `Content`, `Status`) 
        VALUES (?,?,?,?)";
        return DP::run_query($sql, [$userId, $order_id , $Content, $Status], 1);
    }

    public static function getCancel_requestsByStatus($Status) {
        $sql = "SELECT cr.*, a.FullName, p.Name , i.OrderStatusId AS OrderId
                FROM cancel_requests cr
                JOIN account a ON cr.UserId=a.Id
                JOIN invoice i ON cr.order_id=i.Code
                JOIN paymethod p ON i.PaymethodId=p.Id
                WHERE cr.status = ?;";
        return DP::run_query($sql, [$Status], 2);
    }
    public static function putCancel_requests($Code, $Status) {
        $sql = "UPDATE `cancel_requests` 
        SET `Status`= ? WHERE order_id = ?";
        return DP::run_query($sql,[$Status ,$Code], 1);
    }
}
?>
