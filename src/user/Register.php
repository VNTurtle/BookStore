<?php
    require_once('API/User.php');
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
    echo $check;
    If($check==1)
    {
        $notemail="Email đã tồn tại !";
    }else if($check==2){
        $notpassword="ConfirmPasswords không đúng";
    }else{
        header("Location: Login.php");
        exit;
    }
}

?>

    <link rel="stylesheet" href="assets/css/register.css">

    <div class="container">
        <form class="form" method="POST" enctype="multipart/form-data">
            <p class="title">Register </p>
            <p class="message">Signup now and get full access to our app. </p>
            <div class="flex">
                <label>
                    <input required="" name="firstname" placeholder="" type="text" class="input" value="<?php echo htmlspecialchars($firstname); ?>">
                    <span>Firstname</span>
                </label>

                <label>
                    <input required="" name="lastname" placeholder="" type="text" class="input" value="<?php echo htmlspecialchars($lastname); ?>">
                    <span>Lastname</span>
                </label>
            </div>

            <label>
                <input required="" name="email" placeholder="" type="email" class="input" value="<?php echo htmlspecialchars($email); ?>">
                <span>Email</span>
                <div class="checkemail"><?php echo $notemail ?></div>
            </label>

            <label>
                <input required="" name="password" placeholder="" type="password" class="input" value="<?php echo htmlspecialchars($password); ?>">
                <span>Password</span>
            </label>
            <label>
                <input required="" name="cfpassword" placeholder="" type="password" class="input" value="<?php echo htmlspecialchars($confirm_password); ?>">
                <span>Confirm password</span>
                <div class="checkpassword"><?php echo $notpassword ?></div>
            </label>
            <button class="submit" name="register">Submit</button>
            <p class="signin">Already have an acount ? <a href="index.php?src=user/Login">Signin</a> </p>
        </form>
    </div>

    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
