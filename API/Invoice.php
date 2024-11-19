<?php
require_once('db.php');
class Invoice{  
    public static function getInvoice(){
        $query = "SELECT * FROM `invoice`";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getInvoiceAndSL($offset, $slsp){
        $query = "SELECT * FROM `invoice`  LIMIT $offset, $slsp" ;
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
   
    public static function getInvoiceByuserId($id){
        $query = "SELECT i.* 
                FROM `invoice` AS i
                WHERE i.userId = $id
                ORDER BY i.IssuedDate DESC";
        $parameters = [];
        $resultType = 2;
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getInvoiceByOrderStatus($id){
        $query = "SELECT iv.*, COUNT(ivd.Id) AS ivd_count
                FROM invoice iv
                LEFT JOIN invoicedetail ivd ON iv.Code = ivd.Parent_code
                WHERE iv.OrderStatusId=$id
                GROUP BY iv.Code;";
        $parameters = [];
        $resultType = 2;
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getInvoicebyOrStatus($OrId,$offset, $slsp){
        $query = "SELECT * 
                FROM `invoice` i
                WHERE i.OrderStatusId = $OrId  
                ORDER BY i.IssuedDate DESC
                LIMIT $offset, $slsp";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getInvoiceByCode($code){
        $query = "SELECT iv.* , pay.Name as payname
            FROM `invoice` iv
            LEFT JOIN paymethod pay ON iv.PaymethodId= pay.Id 
            WHERE iv.Code=?";
         $parameters = [$code]; // Các tham số truy vấn (nếu có)
         $resultType = 2;
         return DP::run_query($query, $parameters, $resultType);
    }
    
}
?>