<?php
require_once('../Function/User.php');

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo  User::Send_otp($email);  
}
?>