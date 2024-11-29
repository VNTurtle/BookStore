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
    public static function getRevenueByDate($startDate = null, $endDate = null) {
        $query = "SELECT DATE(IssuedDate) as date, CONVERT(SUM(Total), DECIMAL(20, 3)) AS total_revenue, SUM(ivd.Quantity) AS total_quantity_sold
                  FROM Invoice iv
                  LEFT JOIN invoicedetail ivd ON iv.Code = ivd.Parent_code";
        $parameters = [];
        
        // Thêm điều kiện ngày nếu có
        if ($startDate && $endDate) {
            $query .= " WHERE DATE(IssuedDate) BETWEEN ? AND ?";
            $parameters = [$startDate, $endDate];
        } elseif ($startDate) {
            $query .= " WHERE DATE(IssuedDate) >= ?";
            $parameters = [$startDate];
        } elseif ($endDate) {
            $query .= " WHERE DATE(IssuedDate) <= ?";
            $parameters = [$endDate];
        }        
        $query .= " GROUP BY DATE(IssuedDate)
                    ORDER BY DATE(IssuedDate) ASC";
        
        $resultType = 2; // Fetch all rows as an associative array
        return DP::run_query($query, $parameters, $resultType);
    }
    
}
?>