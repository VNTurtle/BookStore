<?php 
require_once('db.php'); 

class Comment {
    public static function thembl($iduser, $idsp, $noidung) {
        $sql = "INSERT INTO comment (UserId, BookId, Content) VALUES (:iduser, :id, :noidung)";
        DP::run_query($sql, [
            ':iduser' => $iduser, 
            ':id' => $idsp, 
            ':noidung' => $noidung
        ], 1);
    }

    public static function showbl($productId) {
        $sql = "SELECT c.*, CONCAT(a.FirstName, ' ', a.LastName) AS UserName 
        FROM comment c
        JOIN account a ON c.UserId = a.Id
        WHERE c.BookId = :product_id 
        ORDER BY c.id DESC";
        return DP::run_query($sql, [':product_id' => $productId], 2);
    }
}
?>
