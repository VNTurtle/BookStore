<?php
require_once('db.php');
class OrderStatus{  
    public static function getOrderStatus(){
        $query = "SELECT * 
FROM `orderstatus` 
WHERE 1
ORDER BY Id";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }   
}
?>