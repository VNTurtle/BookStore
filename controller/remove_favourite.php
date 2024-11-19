<?php
require_once('../API/Favourite.php');
session_start();
$userId = $_SESSION['Id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookId = $_POST['product_id'];
    $check=Favourite::delateFavourite($userId, $bookId);
    if ($check > 0) {
        echo json_encode(["status" => "success", "message" => "Product removed successfully"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Failed to remove product"]);
    }
}
?>