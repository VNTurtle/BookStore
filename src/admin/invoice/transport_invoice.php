<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('API/Invoice.php');
require_once('API/OrderStatus.php');

$items_per_page = 10;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$parameters = [];
$resultType = 2;

$query_count = "SELECT COUNT(*)as sl FROM invoice";
$count_product = DP::run_query($query_count, $parameters, 2); // Giả sử `run_query` trả về mảng kết quả
$total_items = $count_product[0]['sl'];
$total_pages = ceil($total_items / $items_per_page);
$offset = ($current_page - 1) * $items_per_page;
$adjacents = 2;

$invoice = Invoice::getInvoicebyOrStatus(3, $offset, $items_per_page);
$Order = OrderStatus::getOrderStatus();
?>

<link rel="stylesheet" href="assets/css/lst_invoice.css">

<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Hóa Đơn /</span> Danh Sách Hóa Đơn Đang Giao Hàng
        </h4>
        <div class="card">
            <div class="card-datatable ">
                <table class="datatables-products table border-top">
                    <thead>
                        <tr style="background-color: aqua;">
                            <th>STT</th>
                            <th>Code</th>
                            <th>UserName</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>price</th>
                            <th>qty</th>
                            <th>status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($invoice as $key => $lst) {
                        ?>
                            <tr class="odd">
                                <td>
                                    <?php echo $key + 1 ?>
                                </td>
                                <td class="sorting_1">
                                    <a class="text-truncate align-items-center" href="index.php?src=admin/invoice/invoice_detail&id_invoice=<?= $lst['Code'] ?>">
                                        <?= $lst['Code'] ?>
                                    </a>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <?php echo $lst['Username'] ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <?php echo $lst['ShippingAddress'] ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <?php echo $lst['ShippingPhone'] ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <?php echo $lst['Total'] ?> đ
                                    </span>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <?php echo $lst['Quantity'] ?>
                                    </span>
                                </td>
                                <td>
                                    <select name="order_status" id="order_status" class="custom-select order_status" data-order-id="<?php echo $lst['Code']; ?>">
                                        <?php
                                        foreach ($Order as $key => $item) {
                                            $selected = ($lst['OrderStatusId'] == $item['Id']) ? 'selected' : '';
                                            echo '<option value="' . ($item['Id']) . '" ' . $selected . '>' . $item['Name'] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="row mx-2">
                    <div class="col-sm-12 col-md-6 shows-stt">
                        <div class="data-info">Hiển thị từ <?php echo $offset + 1 ?> đến <?php echo $offset + count($invoice) ?> của <?php echo $total_items ?> hóa đơn</div>
                    </div>
                    <div class="col-sm-12 col-md-6 show-page">
                        <nav class="page-book" aria-label="Page navigation example" style="margin-top: 12px;">
                            <ul class="pagination">
                                <?php if ($current_page > 1) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?src=admin/invoice/transport_invoice&page=<?php echo $current_page - 1 ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php
                                // Hiển thị trang đầu
                                if ($current_page > ($adjacents + 1)) {
                                    echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/invoice/transport_invoice&page=1">1</a></li>';
                                    if ($current_page > ($adjacents + 2)) {
                                        echo '<li class="page-item"><span class="page-link">...</span></li>';
                                    }
                                }

                                // Hiển thị các trang xung quanh trang hiện tại
                                $start = max(1, $current_page - $adjacents);
                                $end = min($total_pages, $current_page + $adjacents);
                                for ($i = $start; $i <= $end; $i++) {
                                    if ($i == $current_page) {
                                        echo '<li class="page-item active"><span class="page-link">' . $i . '</span></li>';
                                    } else {
                                        echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/invoice/transport_invoice&page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }

                                // Hiển thị trang cuối
                                if ($current_page < ($total_pages - $adjacents)) {
                                    if ($current_page < ($total_pages - $adjacents - 1)) {
                                        echo '<li class="page-item"><span class="page-link">...</span></li>';
                                    }
                                    echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/invoice/transport_invoice&page=' . $total_pages . '">' . $total_pages . '</a></li>';
                                }

                                if ($current_page < $total_pages) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?src=admin/invoice/transport_invoice&page=<?php echo $current_page + 1 ?>" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require 'src/admin/layout/footer.php';
?>