<?php
require 'src/layout/header.php';
?>

<link rel="stylesheet" href="assets/css/cart.css">
<script>
    var token = localStorage.jwt_token;
    if(token==null){
        window.location.href="index.php?src=user/Login";
    }
</script>

<?php
    require_once('API/Cart.php');
    require_once('API/Product.php');
    $Lst_Cart= Cart::getCartbyUserId($userId);
    
    $count=0;
    foreach ($Lst_Cart as $key => $cart_item) {
        $count++;
    }
    
?>
<div class="bodywrap" style="margin-top: 30px;">
    <div class="cart container">
        <div class="page-title">
            <h1>Giỏ hàng</h1>
            <span class="cart-number-item">(<?= $count ?> sản phẩm)</span>
        </div>
        <div class="row cart-content">
            <div class="col-sm-8 col-xs-12">
                <div class="header-cart-item">
                    <div class="checkbox-all-book">
                        <input id="checkbox-all-products" name="" class="checkbox-all-cart" type="checkbox" />
                    </div>
                    <div>
                        <span>
                            "Chọn tất cả ("
                            <span class="number-checkbox"><?= $count ?></span>
                            "sản phẩm)"
                        </span>
                    </div>
                    <div>
                        Số lượng
                    </div>
                    <div>
                        Thành tiền
                    </div>
                    <div></div>
                </div>
                <div class="book-cart-left">
                    <?php
                    if (isset($_SESSION['Id'])) {
                        if($Lst_Cart>0){
                        foreach ($Lst_Cart as $key => $cart_item) {
                            $Book=Product::getProductById($cart_item['Id']);
                            $QuantityBook=$Book[0]['Stock'];
                            $total_price = $cart_item['Price'] * $cart_item['Quantity'];
                        ?>
                            <div class="item-book-cart <?php echo $QuantityBook == 0 ? 'disabled-cart' : ''; ?>"  data-product-id="<?php echo $cart_item['Id'] ?>" data-price="<?= $cart_item['Price']; ?>">
                                <div class="checkbox-book-cart">
                                    <input id="<?php echo $cart_item['Id'] ?>" name="checkbox_book-1919" class="checkbox-add-cart" type="checkbox"  
                                    data-price="<?php echo $cart_item['Price'] ?>" 
                                    data-name="<?php echo $cart_item['Name']; ?>" 
                                    data-img="<?php echo $cart_item['Path']; ?>" 
                                    data-quantity="<?php echo $cart_item['Quantity']; ?>" 
                                    data-price2="<?php echo $total_price ?>" 
                                    <?= $QuantityBook == 0 ? 'disabled' : ''; ?> 
                                    />
                                </div>
                                <div class="img-book-cart">
                                    <a class="book-image" href="index.php?src=product/product_detail&id=<?php echo $cart_item['Id']; ?>">
                                        <img src="assets/img/products/<?php echo $cart_item['Path'] ?>" width="120" height="120" alt="">
                                    </a>
                                </div>
                                <div class="group-book-info">
                                    <div class="info-book-cart">
                                        <div class="name-book">
                                            <h2 class="book-name-full">
                                                <a href="index.php?src=product/product_detail&id=<?php echo $cart_item['Id']; ?>"><?php echo $cart_item['Name'] ?></a>
                                            </h2>
                                            <?php
                                                if($QuantityBook==0){
                                                    echo '<span> Đã hết hàng </span>';
                                                }
                                            ?>
                                        </div>
                                        <div class="price-original">
                                            <div class="cart-price">
                                                <span class="price"> <?php echo $cart_item['Price'] ?> đ</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="number-book-cart">
                                        <div class="input-number-product" data-id="<?= $cart_item['Id']; ?>">
                                            <button class="btn-num num-1">-</button>
                                            <input type="text" name="quantity" value="<?= $cart_item['Quantity']; ?>" maxlength="3" class="form-control prd-quantity" data-max="<?= $cart_item['Stock']; ?>">
                                            <button class="btn-num num-2">+</button>
                                        </div>

                                        <div class="cart-price-total">
                                            <span class="cart-price">
                                                <span class="price total-price">
                                                    <?php echo $total_price; ?>.000đ
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="remove-cart">
                                    <img src="assets/img/recycle-bin_9983371.png" style="width: 22px; height: 30px;" alt="">
                                </div>
                            </div>
                            <div class="border-book"></div>
                    <?php
                        }}
                    }
                    ?>
                </div>

            </div>
            <div class="col-sm-4 ">
                <div class="block-total-cart">
                    <div class="total-cart-page">
                        <div class="title-cart-page-left">Thành tiền</div>
                        <div class="number-cart-page-right">
                            <span id="total-price" class="price">0 đ</span>
                        </div>
                    </div>
                    <div class="button-cart" style="text-align: center;">
                        <button id="checkoutButton" class="button btn-checkout">
                            <span>Thanh toán</span>
                        </button>
                    </div>
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