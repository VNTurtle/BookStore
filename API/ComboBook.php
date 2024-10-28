<?php
require_once('db.php');
class ComboBook{  
    public static function getImg(){
        $query = "SELECT * FROM `invoice`";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getBookByBookId($id){
        $query = "SELECT  b.* , i.Path
                FROM `book` b
                JOIN 
                `image` i ON b.Id = i.BookId
                WHERE 
                i.Id = (
                    SELECT MIN(i2.Id)
                    FROM `image` i2
                    WHERE i2.BookId = b.Id
                )AND ComboBookId = $id;";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    
}
?>