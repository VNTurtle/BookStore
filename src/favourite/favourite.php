<?php
require 'src/layout/header.php';
?>

<link rel="stylesheet" href="assets/css/favourite.css">
<script>
    var token = localStorage.jwt_token;
    if (token == null) {
        window.location.href = "index.php?src=user/Login";
    }
</script>

<?php
require_once('Function/Favourite.php');
$Lst_Favourite = Favourite::getFavouritebyUserId($userId);
$count = 0;
foreach ($Lst_Favourite as $key => $favourite_item) {
    $count++;
}
?>
<div class="bodywrap" style="margin-top: 30px;">
    <div class="cart container">
        <div class="page-title">
            <h1>Sản phẩm yêu thích</h1>
            <span class="cart-number-item">(<?= $count ?> sản phẩm)</span>
        </div>
        <div class="thongbao">
        Đã thêm vào giỏ hàng
    </div>
        <div class="row cart-content">
            <div class="col-sm-12 col-xs-12">
                <div class="book-cart">
                    <?php
                    if (isset($_SESSION['Id'])) {
                        if ($Lst_Favourite > 0) {
                            foreach ($Lst_Favourite as $key => $favourite_item) {
                                $total_price = $favourite_item['Price'];
                    ?>
                                <div class="item-book-cart" data-product-id="<?php echo $favourite_item['Id'] ?>" data-price="<?= $favourite_item['Price']; ?>">
                                    <div class="img-book-cart">
                                        <a class="book-image" href="index.php?src=product/product_detail&id=<?php echo $favourite_item['Id']; ?>">
                                            <img src="assets/img/products/<?php echo $favourite_item['Path'] ?>" width="120" height="120" alt="">
                                        </a>
                                    </div>
                                    <div class="group-book-info">
                                        <div class="info-book-cart">
                                            <div class="name-book">
                                                <h2 class="book-name-full">
                                                    <a href="index.php?src=product/product_detail&id=<?php echo $favourite_item['Id']; ?>"><?php echo $favourite_item['Name'] ?></a>
                                                </h2>
                                            </div>
                                            <div class="price-original">
                                                <div class="cart-price">
                                                    <span class="price"> <?php echo $favourite_item['Price'] ?> đ</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                            <div class="add-to-cart">
                                                <img src="assets/img/addcart.jpg" style="width: 60px; height: 60px;" alt="">
                                            </div>
                                    </div>

                                    <div class="remove-favourite">
                                        <img src="assets/img/recycle-bin_9983371.png" style="width: 40px; height: 40px;" alt="">
                                    </div>
                                </div>
                                <div class="border-book"></div>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Hộp thoại xác nhận -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Xác nhận xóa</h5>
            </div>
            <div class="modal-body">
                Bạn có chắc chắn muốn xóa sản phẩm này không?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" id="confirmDelete">Xóa</button>
            </div>
        </div>
    </div>
</div>

<?php
require 'src/layout/footer.php';
?>