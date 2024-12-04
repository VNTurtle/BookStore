<?php
    require_once('Function/User.php');
    $parameters = []; // Các tham số truy vấn (nếu có)
    $resultType = 2; // Loại kết quả truy vấn (2: Fetch All)

$firstname = "";
$lastname = "";
$email = "";
$password="";
$confirm_password="";
$notemail=""; 
$notpassword="";
if(isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['cfpassword'];
    $check= User::Register($firstname, $lastname, $email, $password, $confirm_password);
    If($check==1)
    {
        $notemail="Email đã tồn tại !";
    }else if($check==2){
        $notpassword="Nhập lại không đúng";
    }else{
        header("Location: index.php?src=user/Login");
        exit;
    }
}

?>

    <link rel="stylesheet" href="assets/css/register.css">

    <div class="container">
        <form class="form" method="POST" enctype="multipart/form-data">
            <p class="title">Đăng Ký </p>
            <p class="message">Đăng ký ngay bây giờ và nhận quyền truy cập đầy đủ vào ứng dụng của chúng tôi. </p>
            <div class="flex">
                <label>
                    <input required="" name="firstname" placeholder="" type="text" class="input" value="<?php echo htmlspecialchars($firstname); ?>">
                    <span>Tên</span>
                </label>

                <label>
                    <input required="" name="lastname" placeholder="" type="text" class="input" value="<?php echo htmlspecialchars($lastname); ?>">
                    <span>Họ và tên đệm</span>
                </label>
            </div>

            <label>
                <input required="" name="email" placeholder="" type="email" class="input" value="<?php echo htmlspecialchars($email); ?>">
                <span>Email</span>
                <div class="checkemail"><?php echo $notemail ?></div>
            </label>

            <label>
                <input required="" name="password" placeholder="" type="password" class="input" value="<?php echo htmlspecialchars($password); ?>">
                <span>Mật khẩu</span>
            </label>
            <label>
                <input required="" name="cfpassword" placeholder="" type="password" class="input" value="<?php echo htmlspecialchars($confirm_password); ?>">
                <span>nhập lại mật khẩu</span>
                <div class="checkpassword"><?php echo $notpassword ?></div>
            </label>
            <button class="submit" name="register">Đăng ký</button>
            <p class="signin">Đã có tài khoản ? <a href="index.php?src=user/Login">Đăng nhập</a> </p>
        </form>
    </div>

    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
