<?php 
require_once('db.php'); 
date_default_timezone_set('Asia/Ho_Chi_Minh');
$currentTime = date('Y-m-d H:i:s');
echo $currentTime;
class Comment {
    public static function thembl($iduser, $idsp, $noidung) {
        $sql = "INSERT INTO comment (UserId, BookId, Content, Date) VALUES (:iduser, :id, :noidung, :datecomment)";
        $currentTime = date('Y-m-d H:i:s');
        DP::run_query($sql, [
            ':iduser' => $iduser, 
            ':id' => $idsp, 
            ':noidung' => $noidung,
            ':datecomment' => $currentTime
        ], 1);
    }

    public static function showbl($productId) {
        $sql = "SELECT c.*, CONCAT(a.FirstName, ' ', a.LastName) AS UserName, 
                c.Date 
                FROM comment c
                JOIN account a ON c.UserId = a.Id
                WHERE c.BookId = :product_id 
                ORDER BY c.id DESC";
        return DP::run_query($sql, [':product_id' => $productId], 2);
    }
    
}
?>
