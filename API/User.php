<?php
require_once('db.php');
require_once('Product.php');
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
    public static function getUserById($id){
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
                session_start();
                $_SESSION['Id'] = $account[0]['Id'];
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
        
            $fullname = $firstname . ' ' . $lastname;
            
            $queryISAccount = "INSERT INTO account (FirstName, lastname, email, password, fullname, roleId) VALUES (?, ?, ?, ?, ?, ?)";
            $parameters = [$firstname, $lastname, $email, $hashed_password, $fullname, 2];
            $ISAccount = DP::run_query($queryISAccount, $parameters, 1);
    
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
    public static function Pay($invoice,$invoiceDetails){
            unset($_SESSION["OTP"]);
            $queryInvoice = "INSERT INTO `invoice` (`Code`, `Username`, `IssuedDate`, `ShippingAddress`, `ShippingPhone`, `ShippingEmail`, `UserId`, `Total`, `PaymethodId`, `Quantity`, `OrderStatusId`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $parameters = [$invoice['code'], $invoice['username'], $invoice['date'], $invoice['address'], $invoice['phone'], $invoice['email'], $invoice['userId'], $invoice['total'], $invoice['paymethodId'], $invoice['quantity'], $invoice['orderStatusId']];
            $ISInvoice = DP::run_query($queryInvoice, $parameters, 1);
          
            if ($ISInvoice > 0) {
                $queryInvoiceDetail = "INSERT INTO `invoicedetail` (`Parent_code`, `BookId`, `UserId`, `UnitPrice`, `Quantity`) VALUES (?, ?, ?, ?, ?)";

                foreach ($invoiceDetails as $invoiceDetail) {
                    $parameters = [$invoiceDetail['parent_code'], $invoiceDetail['bookId'], $invoiceDetail['userId'], $invoiceDetail['price'], $invoiceDetail['quantity']];
                    DP::run_query($queryInvoiceDetail, $parameters, 1);
                    //Giam sl sp
                    $QuantityBook=Product::getProductById($invoiceDetail['bookId']);
                    $NewQuantity=$QuantityBook[0]['Stock']-$invoiceDetail['quantity'];
                    $queryBook="UPDATE `book` 
                                SET  `Stock` = ?
                                WHERE `Id` = ?";
                    DP::run_query($queryBook,[$NewQuantity, $invoiceDetail['bookId']],1);
                }
            }
        return true;
    }
    public static function Send_otp($email,)
    {
        // Đường dẫn đến các file của PHPMailer
        require '../assets/PHPMailer-master/src/Exception.php';
        require '../assets/PHPMailer-master/src/PHPMailer.php';
        require '../assets/PHPMailer-master/src/SMTP.php';

        // Bắt đầu phiên làm việc
        session_start();

        // Đặt kiểu dữ liệu là JSON
        header('Content-Type: application/json');

        // Khởi tạo một mảng phản hồi
        $response = array();

        // Kiểm tra xem có dữ liệu email được gửi từ form POST hay không
            $otp = rand(1000, 9999);

            try {
                // Tạo một đối tượng PHPMailer
                $mail = new PHPMailer\PHPMailer\PHPMailer(true);

                // Thiết lập các thông số máy chủ SMTP
                $mail->isSMTP(); // Sử dụng SMTP
                $mail->Host = 'smtp.gmail.com'; // Địa chỉ máy chủ SMTP của bạn
                $mail->SMTPAuth = true; // Bật xác thực SMTP
                $mail->Username = 'phamtrikhai2003@gmail.com'; // Tài khoản email của bạn
                $mail->Password = 'bjkuqcbzpnfaluxb'; // Mật khẩu ứng dụng của bạn
                $mail->SMTPSecure = 'ssl'; // Bật mã hóa SSL
                $mail->Port = 465; // Cổng SMTP - 465 cho SSL, 587 cho TLS

                // Thiết lập các thông tin email
                $mail->setFrom('phamtrikhai2003@gmail.com', 'Helllo'); // Đặt email người gửi
                $mail->addAddress($email); // Thêm địa chỉ email người nhận
                $mail->isHTML(true); // Đặt định dạng email là HTML
                $mail->Subject = 'Test Email'; // Đặt tiêu đề email
                $mail->Body = 'Mã OTP của bạn là:' . $otp; // Đặt nội dung email

                // Gửi email
                if ($mail->send()) {
                    $_SESSION["OTP"] = $otp;
                    $response['status'] = 'success';
                    $response['message'] = 'Email sent successfully.';
                } else {
                    $response['status'] = 'error';
                    $response['message'] = 'Mailer Error: ' . $mail->ErrorInfo;
                }
            } catch (Exception $e) {
                $response['status'] = 'error';
                $response['message'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
            }

            // Trả về kết quả dưới dạng JSON
            echo json_encode($response);
            exit;  
    }
}
?>