<?php
require_once('db.php');
class Cart{ 
    public static function getCart(){
        $query = "SELECT c.*
        FROM cart c";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getCartbyUserId($userId){
        $query = "SELECT c.UserId, b.*, c.Quantity, i.Path
            FROM Cart c 
            JOIN Account a ON c.UserId = a.Id 
            JOIN Book b ON c.BookId = b.Id 
            LEFT JOIN `image` i ON b.Id = i.BookId 
            WHERE c.UserId = $userId AND i.Id = (
                SELECT MIN(i2.Id)
                FROM `image` i2
                WHERE i2.BookId = b.Id
            );";
        $parameters = []; 
        $resultType = 2; 
    return  DP::run_query($query, $parameters, $resultType);
    }
}