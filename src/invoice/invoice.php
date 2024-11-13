<?php
require 'src/layout/header.php';
require_once('API/OrderStatus.php');
require_once('API/Invoice.php');
require_once('API/InvoiceDetail.php');
$OrderStatus = OrderStatus::getOrderStatus();
?>

<link rel="stylesheet" href="assets/css/invoice.css">

<div class="bodywrap container">
    <div class="product-tab e-tabs not-dqtab" id="tab-product">
        <ul class="tabs tabs-title clearfix">
            <?php
            foreach ($OrderStatus as $lst_order) {
                $activeClass = $lst_order['Id'] == 1 ? 'active' : '';
                echo '<li class="tab-link ' . $activeClass . '" id="tab-link-' . $lst_order["Id"] . '">
                        <h3>' . $lst_order["Name"] . '</h3>
                      </li>';
            }
            ?>
        </ul>
        <div class="tab-float">
            <?php
            $invoice = Invoice::getInvoiceByuserId($userId);
            foreach ($OrderStatus as $lst_order) {
                $activeTabClass = ($lst_order['Id'] == 1 || $lst_order['Id'] == 2) ? 'active' : '';
                echo '<div id="tab' . $lst_order['Id'] . '" class="tab-content ' . $activeTabClass . '">
                        <div class="rte product_getcontent">';

                foreach ($invoice as $lst_invoice) {
                    if ($lst_invoice['OrderStatusId'] == $lst_order['Id']) {
                        echo '<div class="invoice-page">
                                <div class="drawer-inner">
                                    <div class="InvoicePageContainer">
                                        <form action="" class="invoice ajaxcart">
                                            <div class="invoice-header-info">
                                                <div>Mã hóa đơn</div>
                                                <div>Ngày mua</div>
                                                <div>Số Lượng</div>
                                                <div">Option</div>
                                            </div>
                                            <div class="invoice-body">
                                                <div class="invoice-body-ajax">
                                                    <div class="invoice-body-info" onclick="toggleInvoiceDetail(this)" data-target="invoice-detail-' . $lst_invoice['Code'] . '">
                                                        <div class="grid-item invoice-code" id="invoice-code-' . $lst_invoice['Code'] . '">' . $lst_invoice['Code'] . '</div>
                                                        <div class="grid-item invoice-date">' . $lst_invoice['IssuedDate'] . '</div>
                                                        <div class="grid-item invoice-stock">' . $lst_invoice['Quantity'] . '</div>
                                                        <div class="grid-item invoice-stock">
                                                        <button class="btn-cancel-order btn-received" type="button" data-order-id="' . $lst_invoice['Code'] . '">Hủy đơn</button>
                                                        </div>
                                                    </div>
                                                    <div class="invoice-body-detail" id="invoice-detail-' . $lst_invoice['Code'] . '">';
                                                    
                        $ivd = InvoiceDetail::getInvoiceDetailByCode($lst_invoice['Code']);
                        foreach ($ivd as $lst_ivd) {
                            echo '<div class="invoice-detail">
                                    <div class="ajaxcart-row">
                                        <div class="ajaxcart-product invoice-product">
                                            <a href="" class="ajaxcart-product-image invoice-image">
                                                <img src="assets/img/products/' . $lst_ivd['Path'] . '" alt="">
                                            </a>
                                            <div class="grid-item invoice-info">
                                                <div class="invoice-name">
                                                    <a href="">' . $lst_ivd['Name'] . '</a>
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
                        echo '                  </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>';
                    }
                }
                echo '          </div>
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
                echo '<div class="checkbox-wrapper-46">
                        <input type="checkbox" id="cbx-' . ($index + 1) . '" class="inp-cbx" data-reason="' . $reason . '" />
                        <label for="cbx-' . ($index + 1) . '" class="cbx"><span>
                                <svg viewBox="0 0 12 10" height="10px" width="12px">
                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                </svg></span><span>' . $reason . '</span>
                        </label>
                      </div>';
            }
            ?>
        </div>
        <textarea id="cancelReason" rows="4" cols="50" placeholder="Nhập lý do khác nếu có..."></textarea>
        <button id="confirmCancel" class="btn btn-primary">Xác nhận</button>
    </div>
</div>

<?php
require 'src/layout/footer.php';
?>
