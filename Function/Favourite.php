<?php
require_once('db.php');
class Favourite{ 
    public static function getFavourite(){
        $query = "SELECT f.*
        FROM favourite f";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function putFavourite($userId, $bookId){
        $queryAddtoFavourite = "INSERT INTO `favourite`(`UserId`, `BookId`, `Status`) VALUES (?, ?, '1')";
        $parameters = [$userId, $bookId];
        $resultType = 2; 
        return DP::run_query($queryAddtoFavourite, $parameters, $resultType);
    }
    public static function checkFavourite($userId, $bookId){
        $query = "SELECT `BookId` FROM `favourite` WHERE `UserId` = ? AND `BookId` = ?";
        $parameters = [$userId, $bookId];
        $resultType = 2;
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getFavouritebyUserId($userId){
        $query = "SELECT f.UserId, b.*, i.Path
            FROM favourite f
            JOIN Account a ON f.UserId = a.Id 
            JOIN Book b ON f.BookId = b.Id 
            LEFT JOIN `image` i ON b.Id = i.BookId 
            WHERE f.UserId = $userId AND i.Id = (
                SELECT MIN(i2.Id)
                FROM `image` i2
                WHERE i2.BookId = b.Id
            );";
        $parameters = []; 
        $resultType = 2; 
    return  DP::run_query($query, $parameters, $resultType);
    }
    //  public static function updateCart($quantity, $userId, $bookId){
    //     $query = "UPDATE `favourite` SET `Quantity` = ? WHERE `UserId` = ? AND `BookId` = ?";
    //     $parameters = [$quantity, $userId, $bookId];
    //     $resultType = 2; 
    //      return DP::run_query($query, $parameters, $resultType);
    //  }
    public static function delateFavourite($userId, $bookId){
        $query = "DELETE f FROM `favourite` AS f WHERE f.`UserId` = ? AND f.`BookId` = ?";
        $parameters = [$userId, $bookId];    
        return DP::run_query($query, $parameters, 1); 
    }
}