<?php
require 'src/layout/header.php';
require_once('Function/OrderStatus.php');
require_once('Function/Invoice.php');
require_once('Function/InvoiceDetail.php');
require_once('Function/Cancel_requests.php');
$OrderStatus = OrderStatus::getOrderStatus();
?>

<link rel="stylesheet" href="assets/css/invoice.css">

<div class="bodywrap container">
    <div class="product-tab e-tabs not-dqtab" id="tab-product">
        <ul class="tabs tabs-title clearfix">
            <?php
            foreach ($OrderStatus as $lst_order) {
                if($lst_order['Id']==1){
                    echo '<li class="tab-link active" id="tab-link-' . $lst_order["Id"] . '">
                    <h3>' . $lst_order["Name"] . '</h3>
                  </li>';
                }else{
                    echo '<li class="tab-link " id="tab-link-' . $lst_order["Id"] . '">
                    <h3>' . $lst_order["Name"] . '</h3>
                  </li>';
                }
               
            }
            ?>
        </ul>
        <div class="tab-float">
            <?php
            $Cancel= Cancel_requests::getCancel_requestsByUserId($userId, 'pending');
            $invoice = Invoice::getInvoiceByuserId($userId);
            foreach ($OrderStatus as $lst_order) {
                if($lst_order['Id']==1){
                    echo '<div id="tab' . $lst_order['Id'] . '" class="tab-content active">
                    <div class="rte product_getcontent">';
                    
                }else{
                    echo '<div id="tab' . $lst_order['Id'] . '" class="tab-content ">
                        <div class="rte product_getcontent">';
                }
               
                foreach ($invoice as $lst_invoice) {
                    $isCanceled = false;    
                    if ($lst_invoice['OrderStatusId'] == $lst_order['Id']) 
                    {   
                        if($Cancel>0){
                        foreach ($Cancel as $cancel_item) {
                            if ($cancel_item['order_id'] == $lst_invoice['Code']) {
                                $isCanceled = true;
                                break;
                            }
                        }}
                        echo '<div class="invoice-page ' . ($isCanceled ? 'disabled' : '') . '">
                                <div class="drawer-inner">
                                    <div class="InvoicePageContainer">
                                        <form action="" class="invoice ajaxcart">
                                            <div class="invoice-header-info">
                                                <div>Mã hóa đơn</div>
                                                <div>Ngày mua</div>
                                                <div>Số Lượng</div>
                                                <div>Option</div>
                                            </div>
                                            <div class="invoice-body">
                                                <div class="invoice-body-ajax">
                                                    <div class="invoice-body-info" onclick="toggleInvoiceDetail(this)" data-target="invoice-detail-' . $lst_invoice['Code'] . '">
                                                        <div class="grid-item invoice-code" id="invoice-code-' . $lst_invoice['Code'] . '">' . $lst_invoice['Code'] . '</div>
                                                        <div class="grid-item invoice-date">' . $lst_invoice['IssuedDate'] . '</div>
                                                        <div class="grid-item invoice-stock">' . $lst_invoice['Quantity'] . '</div>
                                                        <div class="grid-item invoice-stock">';
                                                            if ($isCanceled) {
                                                                echo '<button class="processing-button" disabled>Đang xử lý</button>';
                                                            }else if($lst_order['Id']==1){
                                                                echo '<button class="btn-cancel-order btn btn-primary" type="button" data-order-id="' . $lst_invoice['Code'] . '">Hủy đơn</button>';
                                                            }else if( $lst_order['Id']==2 ){
                                                                echo '<button class="btn-request-cancel btn btn-primary" type="button" data-order-id="' . $lst_invoice['Code'] . '">Hủy đơn</button>';
                                                            }
                                                            else if ($lst_order['Id'] == 3){
                                                                echo '<button class="btn-transport-order btn btn-primary" type="button" data-order-status="4" data-order-id="' . $lst_invoice['Code'] . '">Nhận hàng</button>';
                                                            }else if ($lst_order['Id'] == 4){
                                                                echo '<button class="btn-cancel-order btn btn-primary" type="button" data-order-id="' . $lst_invoice['Code'] . '">Đánh giá</button>';
                                                            }else{
                                                                echo '<button class="btn-cancel-order btn btn-primary" type="button" data-order-id="' . $lst_invoice['Code'] . '">Mua lại</button>';
                                                            }
                                                            
                                                        echo '</div>
                                                    </div>
                                                    <div class="invoice-body-detail" id="invoice-detail-' . $lst_invoice['Code'] . '">';
                                                    $ivd = InvoiceDetail::getInvoiceDetailByCode($lst_invoice['Code']);
                                                    foreach ($ivd as $lst_ivd) {
                                                        echo '<div class="invoice-detail">
                                                                <div class="ajaxcart-row">
                                                                    <div class="ajaxcart-product invoice-product">
                                                                        <a href="index.php?src=product/product_detail&id='. $lst_ivd['BookId'] .'" class="ajaxcart-product-image invoice-image">
                                                                            <img src="assets/img/products/' . $lst_ivd['Path'] . '" alt="">
                                                                        </a>
                                                                        <div class="grid-item invoice-info">
                                                                            <div class="invoice-name">
                                                                                <a href="index.php?src=product/product_detail&id='. $lst_ivd['BookId'] .'">' . $lst_ivd['Name'] . '</a>
                                                                                <span class="variant-title">' . $lst_ivd['Price'] . 'đ</span>
                                                                            </div>
                                                                            <div class="grid">
                                                                                <div class="invoice-select">
                                                                                    <div class="input-number-product">
                                                                                        <span class="stock-title">Số lượng</span>
                                                                                        <div class="stock">' . $lst_ivd['Quantity'] . '</div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="grid2">
                                                                                <div class="invoice-prices">
                                                                                    <span class="stock-title">Thành tiền</span>
                                                                                    <span class="invoice-price">' . $lst_ivd['Price']*$lst_ivd['Quantity'] . '.000 đ</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>';
                                                        }
                                    echo '                      </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div> 
                                </div>
                            </div>';
                        }
                    }
                echo '</div>
                </div>';
                
                          
            }
            ?>
        </div>
    </div>
</div>

<div id="cancelModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Lý do hủy đơn</h2>
        <div id="cancelReasons">
            <?php
            $reasons = [
                "Đổi ý",
                "Đặt nhầm sản phẩm",
                "Tìm thấy giá tốt hơn",
                "Vấn đề với phương thức thanh toán",
                "Dịch vụ không tốt",
                "Thay đổi nhu cầu",
                "Khác"
            ];
            foreach ($reasons as $index => $reason) {
                echo '<div class="radio-wrapper">
                        <input type="radio" id="rbx-' . ($index + 1) . '" name="cancelReason" class="inp-rbx" value="' . $reason . '" />
                        <label for="rbx-' . ($index + 1) . '" class="rbx-label">' . $reason . '</label>
                      </div>';
            }
            ?>
        </div>
        
        <!-- Textarea for "Khác" reason, initially hidden -->
        <textarea id="customCancelReason" rows="4" cols="50" placeholder="Nhập lý do khác nếu có..." style="display: none;"></textarea>
        <button id="confirmCancel" class="btn btn-primary">Xác nhận</button>
    </div>
</div>



<?php
require 'src/layout/footer.php';
?>
