<?php
require_once('db.php');
require_once __DIR__ . '/../vendor/autoload.php';
use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;
class User{  
    public static function getUser(){
        $query = "SELECT * FROM `account`";
        $parameters = []; 
        $resultType = 2; 
        DP::run_query($query, $parameters, $resultType);
    }
    public static function getProductById($id){
        $query = "SELECT * FROM `account` AS a
        WHERE a.Id = $id;";
        $parameters = []; 
        $resultType = 2; 
        return DP::run_query($query, $parameters, $resultType);
    }

    public static function Login($email, $password) {
        $query = "SELECT * FROM `account` WHERE email = ?";
        $parameters = [$email];
        $resultType = 2; 
        $account = DP::run_query($query, $parameters, $resultType);
        
        if (!empty($account) && is_array($account)) {
            // Kiểm tra có email
            $hashed_password = $account[0]['PassWord'];
            
            // Xác minh mật khẩu
            if (password_verify($password, $hashed_password)) {
                // Mật khẩu đúng, tạo JWT
                $key = base64_encode("testing1234453656347nsmvfdbsrtgjnfsjhNJFDJFujragrg"); // Khóa bí mật để ký JWT
                $payload = [
                    'iss' => "your_website_name", // Issuer
                    'iat' => time(), // Thời gian phát hành
                    'exp' => time() + (60 * 60), // Thời gian hết hạn (1 giờ)
                    'data' => [
                        'Id' => $account[0]['Id'],
                        'email' => $account[0]['Email'],
                        'role' => $account[0]['RoleId']
                    ]
                ];
    
                $jwt = JWT::encode($payload, $key, 'HS256');
    
                // Trả về JWT thay vì session
                return $jwt;
            } else {
                // Mật khẩu sai
                return false;
            }
        } else {
            // Không có email
            return false;
        }
    }
    public static function Register($firstname, $lastname, $email, $password, $confirm_password){
        $sql = "SELECT id FROM account WHERE email = ?";
        $parameters = [$email];
        $resultType = 2;
        $checkEmail = DP::run_query($sql, $parameters, $resultType);
        if (!empty($checkEmail)) {
            return 1;
        }
        if ($password !== $confirm_password) {
            return  2;
        }
        if (empty($notemail) && empty($notpassword)) {
            // Mã hóa mật khẩu
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
            // Chèn người dùng mới vào cơ sở dữ liệu
            $queryISAccount = "INSERT INTO account (FirstName, lastname, email, password, roleId) VALUES (?, ?, ?, ?, ?, ?)";
            $parameters = [$firstname, $lastname, $email, $hashed_password, 2];
            $ISAccount = DP::run_query($queryISAccount, $parameters, $resultType);
    
            if ($ISAccount !== false) {
                return 3;
            }
        }
    }
    public static function DecodeToken($jwt) {
        $key = base64_encode("testing1234453656347nsmvfdbsrtgjnfsjhNJFDJFujragrg"); // Đảm bảo khóa bí mật là đúng
    
        try {
            // Thêm kiểm tra với thư viện Firebase\JWT\Key nếu bạn dùng phiên bản mới của JWT
            $decoded = JWT::decode($jwt, new Key($key, 'HS256'));
            
            return $decoded; // Trả về đối tượng stdClass
        } catch (\Firebase\JWT\ExpiredException $e) {
            // JWT đã hết hạn
            return "JWT đã hết hạn: " . $e->getMessage();
        } catch (\Firebase\JWT\SignatureInvalidException $e) {
            // Sai chữ ký
            return "Chữ ký không hợp lệ: " . $e->getMessage();
        } catch (Exception $e) {
            // Các lỗi khác
            return "Lỗi: " . $e->getMessage();
        }
    }
    
    
}
?>