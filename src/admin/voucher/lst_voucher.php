<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('Function/Voucher.php');
require_once('Function/OrderStatus.php');

$items_per_page = 10;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$parameters = [];
$resultType = 2;

$query_count = "SELECT COUNT(*)as sl FROM voucher";
$count_product = DP::run_query($query_count, $parameters, 2); // Giả sử `run_query` trả về mảng kết quả
$total_items = $count_product[0]['sl'];
$total_pages = ceil($total_items / $items_per_page);
$offset = ($current_page - 1) * $items_per_page;
$adjacents = 2;

$voucher = Voucher::getAllVouchers($offset, $items_per_page);
$Order = OrderStatus::getOrderStatus();
?>

<link rel="stylesheet" href="assets/css/lst_product_admin.css">

<div class="content-wrapper">

    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Tài khoản /</span> Danh Sách tài khoản
        </h4>
        <div class="card">
            <div class="card-datatable ">
                <table class="datatables-products table border-top">
                    <div class="card-header d-flex border-top rounded-0 flex-wrap py-md-0">
                        <div class="me-5 ms-n2 pe-5">
                            <div class="dataTables_filter">
                                <label>
                                    <input type="search" class="form-control" placeholder="Search Voucher" aria-controls="DataTables_Table_0">
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-start justify-content-md-end align-items-baseline">
                            <div class="add-product dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0">
                                <div class="dt-buttons btn-group flex-wrap d-flex">
                                    <div class="btn-group">
                                        <button class="btn buttons-collection dropdown-toggle btn-label-secondary me-3" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false">
                                            <span>
                                                <i class="bx bx-export me-1"></i>Export
                                            </span>
                                        </button>
                                    </div>
                                    <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                        <a href="index.php?src=admin/voucher/add_voucher" style="color: #fff;">
                                            <i class="bx bx-plus me-0 me-sm-1"></i>
                                            <span class="d-none d-sm-inline-block">Thêm Mã giảm giá</span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <thead>
                            <tr style="background-color: aqua;">
                                <th>STT</th>
                                <th>Mã</th>
                                <th>Số lượng</th>
                                <th>Tên</th>
                                <th>Ngày hết</th>
                                <th>Trạng thái</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($voucher as $key => $lst) {
                            ?>
                                <tr class="odd">
                                    <td>
                                        <?php echo $key + 1 ?>
                                    </td>
                                    <td class="sorting_1">
                                        <span class="text-truncate align-items-center">
                                            <?= $lst['Code'] ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-truncate align-items-center">
                                            <?php echo $lst['Stock'] ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-truncate align-items-center">
                                            <?php echo $lst['Des'] ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-truncate align-items-center">
                                            <?php echo $lst['EndDate'] ?>
                                        </span>
                                    </td>
                                    <td>
                                        <label>
                                            <input class="toggle-checkbox" type="checkbox" data-book-id="<?php echo $lst['Code']; ?>" <?php echo ($lst['Status'] == 1) ? 'checked' : ''; ?>>
                                            <div class="toggle-slot">
                                                <div class="sun-icon-wrapper">
                                                    <div class="iconify sun-icon" data-icon="feather-sun" data-inline="false"></div>
                                                </div>
                                                <div class="toggle-button"></div>
                                                <div class="moon-icon-wrapper">
                                                    <div class="iconify moon-icon" data-icon="feather-moon" data-inline="false"></div>
                                                </div>
                                            </div>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-inline-block text-nowrap">
                                            <button class="btn btn-sm btn-icon">
                                                <a href="index.php?src=admin/voucher/edit_voucher&id=<?php echo $lst['Code'] ?>">
                                                    <i class="bx bx-edit"></i>
                                                </a>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                </table>
                <div class="row mx-2">
                    <div class="col-sm-12 col-md-6 shows-stt">
                        <div class="data-info">Hiển thị từ <?php echo $offset + 1 ?> đến <?php echo $offset + count($voucher) ?> của <?php echo $total_items ?> mã giảm giá</div>
                    </div>
                    <div class="col-sm-12 col-md-6 show-page" style="justify-content: left;">
                        <nav class="page-book" aria-label="Page navigation example" style="margin-top: 12px;">
                            <ul class="pagination">
                                <?php if ($current_page > 1) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?src=admin/invoice/lst_invoice&page=<?php echo $current_page - 1 ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php
                                // Hiển thị trang đầu
                                if ($current_page > ($adjacents + 1)) {
                                    echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/invoice/lst_invoice&page=1">1</a></li>';
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
                                        echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/invoice/lst_invoice&page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }

                                // Hiển thị trang cuối
                                if ($current_page < ($total_pages - $adjacents)) {
                                    if ($current_page < ($total_pages - $adjacents - 1)) {
                                        echo '<li class="page-item"><span class="page-link">...</span></li>';
                                    }
                                    echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/voucher/lst_voucher&page=' . $total_pages . '">' . $total_pages . '</a></li>';
                                }

                                if ($current_page < $total_pages) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?src=admin/voucher/lst_voucher&page=<?php echo $current_page + 1 ?>" aria-label="Next">
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
</div>
<?php
require 'src/admin/layout/footer.php';
?>