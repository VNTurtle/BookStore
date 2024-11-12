<?php 
class DP {
    // Phương thức tạo kết nối đến CSDL
    private static function connect_DB() {
        $host = 'localhost';
        $dbname = 'db_book';
        $us = 'root';
        $pass = '';

        try {
            $conn = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8mb4",
                $us, 
                $pass, 
                array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_PERSISTENT => false,
                    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4"
                )
            );
            return $conn;
        } catch (PDOException $e) {
            echo "<h1>Error: " . $e->getMessage() . "</h1>";
            return null;
        }
    }

    // Phương thức xác định kiểu dữ liệu để bind giá trị trong PDO
    private static function get_type($var) {
        switch (gettype($var)) {
            case 'integer': return PDO::PARAM_INT;
            case 'boolean': return PDO::PARAM_BOOL;
            case 'NULL': return PDO::PARAM_NULL;
            default: return PDO::PARAM_STR;
        }
    }

    // Phương thức thực thi câu truy vấn
    // $q: câu SQL, $paras: tham số cho truy vấn, $t: loại trả về
    // $t = 1 (TRUE/FALSE), $t = 2 (Dữ liệu dạng mảng), $t = 3 (ID bản ghi mới)
    public static function run_query($q, $paras = [], $t = 1) {
        try {
            $con = DP::connect_DB();
            if (!$con) {
                return false;
            }
            
            // Chuẩn bị truy vấn
            $stmt = $con->prepare($q);

            // Bind các giá trị tham số
            foreach ($paras as $key => $para) {
                $stmt->bindValue(is_int($key) ? $key + 1 : $key, $para, DP::get_type($para));
            }

            // Thực thi truy vấn
            $stmt->execute();
            $result = '';

            // Xử lý kết quả dựa trên giá trị $t
            switch ($t) {
                case 1: 
                    $result = true; 
                    break;
                case 2: 
                    $result = $stmt->fetchAll(PDO::FETCH_ASSOC); 
                    break;
                case 3: 
                    $result = $con->lastInsertId(); 
                    break;
            }

            // Đóng kết nối
            $con = null;
            return $result;
        } catch (PDOException $e) {
            echo '<h1>' . $e->getMessage() . '</h1>';
            return false;
        }
    }

    // Hàm công khai để lấy kết nối cho các tệp khác nếu cần
    public static function getConnection() {
        return self::connect_DB();
    }
}
?>
