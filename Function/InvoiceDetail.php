<?php
require_once('db.php');
class InvoiceDetail{  
    public static function getInvoiceDetail(){
        $query = "SELECT * FROM `invoice`";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getInvoiceDetailByCode($code){
        $query = "SELECT ivd.*, b.Stock, b.Name,b.Price, i.Path
                FROM invoicedetail ivd
                JOIN book b ON ivd.BookId = b.Id
                LEFT JOIN `image` i ON b.Id = i.BookId
                WHERE  i.Id = (
                                SELECT MIN(i2.Id)
                                FROM `image` i2
                                WHERE i2.BookId = b.Id
                            ) AND ivd.Parent_code = '$code'";
        $parameters = [];
        $resultType = 2;
        return DP::run_query($query, $parameters, $resultType);
    }
    
}
?>