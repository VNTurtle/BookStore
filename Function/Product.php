<?php
require_once('db.php');
class Product{  
    public static function getProduct(){
        $query ="SELECT b.*, bt.Name AS BookTypeName, s.Name AS SizeName, p.Name AS PublisherName, cv.Name AS CovertypeName, i.Path
                        FROM book b
                        LEFT JOIN TypeDetail bt ON b.TypeDetailId = bt.Id
                        JOIN Size s ON b.SizeId = s.Id
                        JOIN Publisher p ON b.PublisherId = p.Id
                        JOIN covertype cv ON b.CoverTypeId = cv.Id
                        JOIN 
                            `image` i ON b.Id = i.BookId
                            WHERE 
                            i.Id = (
                                SELECT MIN(i2.Id)
                                FROM `image` i2
                                WHERE i2.BookId = b.Id
                            )";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getProductBySL($offset, $slsp){
        $query ="SELECT b.*, bt.Name AS BookTypeName, m.Model, m.ModelBin, s.Name AS SizeName, p.Name AS PublisherName, cv.Name AS CovertypeName, i.Path
                        FROM book b
                        LEFT JOIN TypeDetail bt ON b.TypeDetailId = bt.Id
                        LEFT JOIN model m ON b.Id = m.BookId
                        JOIN Size s ON b.SizeId = s.Id
                        JOIN Publisher p ON b.PublisherId = p.Id
                        JOIN covertype cv ON b.CoverTypeId = cv.Id
                        JOIN 
                            `image` i ON b.Id = i.BookId
                            WHERE 
                            i.Id = (
                                SELECT MIN(i2.Id)
                                FROM `image` i2
                                WHERE i2.BookId = b.Id
                            ) LIMIT $offset, $slsp";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getProductByTypeId($TypeId){
        $query ="SELECT b.*, bt.Name AS BookTypeName, s.Name AS SizeName, p.Name AS PublisherName, cv.Name AS CovertypeName, i.Path, t.Name AS TypeName
                        FROM book b
                        LEFT JOIN TypeDetail bt ON b.TypeDetailId = bt.Id
                        LEFT JOIN type t ON bt.TypeId=t.Id
                        JOIN Size s ON b.SizeId = s.Id
                        JOIN Publisher p ON b.PublisherId = p.Id
                        JOIN covertype cv ON b.CoverTypeId = cv.Id
                        JOIN `image` i ON b.Id = i.BookId
                        
                        WHERE 
                            i.Id = (
                                SELECT MIN(i2.Id)
                                FROM `image` i2
                                WHERE i2.BookId = b.Id
                            ) AND t.Id=?";
        $parameters = [$TypeId]; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getProductById($id){
        $query = "SELECT b.*,m.Id AS IdModel, m.Model, m.ModelBin,m.Alpha,m.Beta,m.Radius,m.Target_x,m.Target_y,m.Target_z, bt.Name AS BookTypeName, s.Name AS SizeName, p.Name AS PublisherName, cv.Name AS CovertypeName,cb.Name AS NameCombo, t.Name AS TypeName, t.Id AS TypeId
        FROM book b
        LEFT JOIN model m ON b.Id = m.BookId
        LEFT JOIN TypeDetail bt ON b.TypeDetailId = bt.Id
        LEFT JOIN type t ON bt.TypeId=t.Id
        JOIN Size s ON b.SizeId = s.Id
        LEFT JOIN combobook cb ON b.ComboBookId=cb.Id
        JOIN Publisher p ON b.PublisherId = p.Id
        JOIN covertype cv ON b.CoverTypeId = cv.Id
        WHERE b.Id = $id;";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function putProductById($id, $comboId, $name, $author, $description, $typeId, $numberPage, $sizeId, $stock, $price, $date, $publisherId, $coverTypeId){
        $query = "UPDATE `book` 
                  SET `ComboBookId` = ?, `Name` = ?, `Author` = ?, `Description` = ?, 
                      `TypeDetailId` = ?, `NumberPage` = ?, `SizeId` = ?, `Stock` = ?, 
                      `Price` = ?, `Date` = ?, `PublisherId` = ?, `CoverTypeId` = ? 
                  WHERE `Id` = ?";
        
        $parameters = [
            $comboId, $name, $author, $description, 
            $typeId, $numberPage, $sizeId, $stock, 
            $price, $date, $publisherId, $coverTypeId, $id
        ];
        
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function deleteProductById($id){
        $query = "DELETE FROM `book` WHERE `Id` = ?";
        $parameters = [$id];
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    public static function getBookByComboBookId($id){
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
    public static function getBookByTypeId($id){
        $query = "SELECT b.* , i.Path
                FROM `book` b
                JOIN 
                `image` i ON b.Id = i.BookId
                LEFT JOIN Type t ON b.TypeDetailId=t.id
                WHERE 
                i.Id = (
                    SELECT MIN(i2.Id)
                    FROM `image` i2
                    WHERE i2.BookId = b.Id
                )AND b.TypeDetailId = $id";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }
    //  Hàm chuyển đổi Tên có dấu
    public static function removeAccents($str)
    {
        $accentedChars = ['á', 'à', 'ả', 'ã', 'ạ', 'ă', 'ắ', 'ằ', 'ẳ', 'ẵ', 'ặ', 'â', 'ấ', 'ầ', 'ẩ', 'ẫ', 'ậ', 'đ', 'é', 'è', 'ẻ', 'ẽ', 'ẹ', 'ê', 'ế', 'ề', 'ể', 'ễ', 'ệ', 'í', 'ì', 'ỉ', 'ĩ', 'ị', 'ó', 'ò', 'ỏ', 'õ', 'ọ', 'ô', 'ố', 'ồ', 'ổ', 'ỗ', 'ộ', 'ơ', 'ớ', 'ờ', 'ở', 'ỡ', 'ợ', 'ú', 'ù', 'ủ', 'ũ', 'ụ', 'ư', 'ứ', 'ừ', 'ử', 'ữ', 'ự', 'ý', 'ỳ', 'ỷ', 'ỹ', 'ỵ', 'Á', 'À', 'Ả', 'Ã', 'Ạ', 'Ă', 'Ắ', 'Ằ', 'Ẳ', 'Ẵ', 'Ặ', 'Â', 'Ấ', 'Ầ', 'Ẩ', 'Ẫ', 'Ậ', 'Đ', 'É', 'È', 'Ẻ', 'Ẽ', 'Ẹ', 'Ê', 'Ế', 'Ề', 'Ể', 'Ễ', 'Ệ', 'Í', 'Ì', 'Ỉ', 'Ĩ', 'Ị', 'Ó', 'Ò', 'Ỏ', 'Õ', 'Ọ', 'Ô', 'Ố', 'Ồ', 'Ổ', 'Ỗ', 'Ộ', 'Ơ', 'Ớ', 'Ờ', 'Ở', 'Ỡ', 'Ợ', 'Ú', 'Ù', 'Ủ', 'Ũ', 'Ụ', 'Ư', 'Ứ', 'Ừ', 'Ử', 'Ữ', 'Ự', 'Ý', 'Ỳ', 'Ỷ', 'Ỹ', 'Ỵ'];
        $unaccentedChars = ['a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'd', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'i', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'y', 'y', 'y', 'y', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'D', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U', 'U', 'Y', 'Y', 'Y', 'Y', 'Y'];

        // Đảm bảo cả hai mảng có cùng số phần tử
        if (count($accentedChars) == count($unaccentedChars)) {
            return $str; // Trả về chuỗi ban đầu nếu số lượng ký tự không khớp
        }
        return str_replace($accentedChars, $unaccentedChars, $str);
    }
    // Function to sanitize filenames
    public static function sanitizeFilename($filename)
    {
        // Loại bỏ các ký tự đặc biệt
        $filename = preg_replace('/[^\pL\d.]+/u', '', $filename);
        // Loại bỏ các ký tự không hợp lệ
        $filename = preg_replace('/[^\x20-\x7E]/', '', $filename);
        // Chuyển đổi tiếng Việt có dấu thành tiếng Việt không dấu
        $filename = mb_convert_encoding($filename, 'ASCII', 'UTF-8');
        // Loại bỏ các ký tự đặc biệt còn lại
        $filename = preg_replace('/[^-\w.]+/', '', $filename);
        return $filename;
    }
    public static function getTopSellingProducts($limit = 10, $startDate = null) {
        if (!$startDate) {
            $startDate = date('Y-m-d', strtotime('-30 days'));  // Ngày 30 ngày trước
        }
        $query = " SELECT b.*, i.Path,
            SUM(d.Quantity) AS TotalSold
        FROM 
            InvoiceDetail d
        JOIN invoice iv ON d.Parent_code=iv.Code
        JOIN Book b ON d.BookId = b.Id
        JOIN  `image` i ON b.Id = i.BookId
        WHERE 
            i.Id = (
                SELECT MIN(i2.Id)
                FROM `image` i2
                WHERE i2.BookId = b.Id
            )
            AND iv.IssuedDate >= ? AND iv.OrderStatusId=4 -- Lọc theo ngày truyền vào
        GROUP BY 
            d.BookId, b.Name
        ORDER BY 
            TotalSold DESC
        LIMIT ?";
        $parameters = [$startDate, $limit];
        $resultType = 2; // Fetch all rows as an associative array
        return DP::run_query($query, $parameters, $resultType);
    }
    
}
?>