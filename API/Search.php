<?php
require_once('db.php'); // Kết nối cơ sở dữ liệu

class SearchAPI {
    public static function getFilteredProductsByKeyword($searchKeyword, $minPrice, $maxPrice) {
        // Câu truy vấn tìm kiếm sản phẩm theo từ khóa và khoảng giá
        $sql = "
            SELECT b.Id AS BookId, b.Name AS BookName, b.Price, i.Path 
            FROM book b
            JOIN image i ON b.ID = i.BookID
            WHERE 
                i.Id = (
                    SELECT MIN(i2.Id)
                    FROM image i2
                    WHERE i2.BookId = b.Id
                )
                AND b.Price BETWEEN ? AND ?
                AND b.Name LIKE ?
        ";

        $searchKeyword = '%' . $searchKeyword . '%';
        $params = [$minPrice, $maxPrice, $searchKeyword];

        // Sử dụng lớp DP::run_query để chạy câu truy vấn và trả về kết quả
        return DP::run_query($sql, $params, 2);
    }
}
?>
