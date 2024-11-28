<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('API/Cancel_requests.php');
$items_per_page = 10;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$parameters = [];
$resultType = 2;

$query_count = "SELECT COUNT(*)as sl FROM cancel_requests";
$count_product = DP::run_query($query_count, $parameters, 2); // Giả sử `run_query` trả về mảng kết quả
$total_items = $count_product[0]['sl'];
$total_pages = ceil($total_items / $items_per_page);
$offset = ($current_page - 1) * $items_per_page;
$adjacents = 2;

$Lst_rq = Cancel_requests::getCancel_requests();

?>

<link rel="stylesheet" href="assets/css/lst_invoice.css">

<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">



        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Hóa Đơn /</span> Danh Sách Hóa Đơn Chờ xử lý
        </h4>
        <div class="card">
            <div class="card-datatable ">
                <table class="datatables-products table border-top">
                    <thead>
                        <tr style="background-color: aqua;">
                            <th>STT</th>
                            <th>Code</th>
                            <th>Họ Tên</th>
                            <th>PT thanh toán</th>
                            <th>Lý do hủy</th>
                            <th>Lý do từ chối</th>
                            <th>Ngân hàng</th>
                            <th>Ngày Hủy</th>
                            <th style="width: 10%;">status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Lst_rq as $key => $lst) {
                        ?>
                            <tr class="odd">
                                <td>
                                    <?php echo $key + 1 ?>
                                </td>
                                <td class="sorting_1">
                                    <span class="text-truncate align-items-center">
                                        <?= $lst['order_id'] ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <?php echo $lst['FullName'] ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <?php echo $lst['Name'] ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <?php echo $lst['Content1'] ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <?php echo $lst['Content2'] ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <?php echo $lst['Content3'] ?>
                                    </span>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <?php echo $lst['created_at'] ?>
                                    </span>
                                </td>
                                <td>
                                    <?php 
                                    if($lst['Status']=='pending') {
                                        echo '<button class="approve-cancel btn btn-primary btn-sm" data-order-status="5" data-order-id="'. $lst['order_id'] .'" data-status="approved"><i class="bx bxs-check-square"></i></button>
                                                <button class="reject-cancel btn btn-danger btn-sm" data-order-status="'. $lst['OrderId'] .'" data-order-id="'. $lst['order_id'] .'"><i class="bx bx-x-circle"></i></button>';
                                    }else if($lst['Status']=='bankpay'){
                                        echo '<button class="complete-cancel btn btn-primary btn-sm" data-order-status="5" data-order-id="'. $lst['order_id'] .'" data-status="complete"><i class="bx bxs-check-square"></i></button>';
                                    }else{
                                        echo '<span class="text-truncate align-items-center">
                                                    Hoàn thành
                                        </span>';
                                    }
                                    ?>

                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <div class="row mx-2">
                    <div class="col-sm-12 col-md-6 shows-stt">
                        <div class="data-info">Hiển thị từ <?php echo $offset + 1 ?> đến <?php echo $offset + count($Lst_rq) ?> của <?php echo $total_items ?> hóa đơn</div>
                    </div>
                    <div class="col-sm-12 col-md-6 show-page">
                        <nav class="page-book" aria-label="Page navigation example" style="margin-top: 12px;">
                            <ul class="pagination">
                                <?php if ($current_page > 1) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?src=admin/invoice/cancel_request&page=<?php echo $current_page - 1 ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php
                                // Hiển thị trang đầu
                                if ($current_page > ($adjacents + 1)) {
                                    echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/invoice/cancel_request&page=1">1</a></li>';
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
                                        echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/invoice/cancel_request&page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }

                                // Hiển thị trang cuối
                                if ($current_page < ($total_pages - $adjacents)) {
                                    if ($current_page < ($total_pages - $adjacents - 1)) {
                                        echo '<li class="page-item"><span class="page-link">...</span></li>';
                                    }
                                    echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/invoice/cancel_request&page=' . $total_pages . '">' . $total_pages . '</a></li>';
                                }

                                if ($current_page < $total_pages) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?src=admin/invoice/cancel_request&page=<?php echo $current_page + 1 ?>" aria-label="Next">
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