<?php
require_once('../API/Cart.php');
session_start();
$bookId = $_POST['Id'];
$userId = $_SESSION['Id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $quantity = $_POST['quantity'];
    $checkCart=Cart::checkCart($userId, $bookId);
    if(!empty($checkCart)){
        $newQuantity = $checkCart[0]['Quantity'] + $quantity;
        Cart::updateCart($newQuantity, $userId, $bookId);
        exit;
    }else{
        Cart::putCart($userId,$bookId,$quantity);
        exit;
    }
}
?>