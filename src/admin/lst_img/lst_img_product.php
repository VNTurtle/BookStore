<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('API/Img.php');
require_once('API/Product.php');

$items_per_page = 10;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$parameters = [];
$resultType = 2;

$query_count = "SELECT COUNT(*)as sl FROM `book`";
$count_product = DP::run_query($query_count, $parameters, 2); // Giả sử `run_query` trả về mảng kết quả
$total_items = $count_product[0]['sl'];
$total_pages = ceil($total_items / $items_per_page);
$offset = ($current_page - 1) * $items_per_page;
$adjacents = 2;

$lst_product = Product::getProductBySL($offset, $items_per_page);

$lst_IMG = Img::getImg();
?>


<link rel="stylesheet" href="assets/css/lst_img_product.css">

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Sản Phẩm /</span> Danh sách hình ảnh
        </h4>
        <!-- Model List Table -->
        <div class="card">
            <div class="card-datatable ">
                <table class="datatables-products table border-top">
                    <div class="card-header d-flex border-top rounded-0 flex-wrap py-md-0">
                        <div class="me-5 ms-n2 pe-5">
                            <div class="dataTables_filter">
                                <label>
                                    <input type="search" class="form-control" placeholder="Search Product" aria-controls="DataTables_Table_0">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <thead>
                        <tr style="background-color: aqua;">
                            <th>STT</th>
                            <th style="width: 50%;">IMG</th>
                            <th>product</th>
                            <th>status</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($lst_product as $key => $lst) {
                        ?>
                            <tr class="odd">
                                <td>
                                    <?php echo $key + 1 ?>
                                </td>
                                <td class="sorting_1">
                                    <div class="d-flex justify-content-start align-items-center product-name">
                                        <div class="avatar-wrapper">
                                            <div class="avatar me-2 rounded-2 bg-label-secondary">
                                                <?php
                                                foreach ($lst_IMG as $key => $item_img) {
                                                    if ($item_img['BookId'] === $lst['Id']) {
                                                ?>
                                                        <img class="rounded-2" src="assets/img/products/<?= $item_img['Path'] ?>" alt="">
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="text-truncate align-items-center">
                                        <h6 class="text-body text-nowrap mb-0"><?php echo $lst['Name'] ?> </h6>
                                    </span>
                                </td>
                                <td>
                                    <label>
                                        <input class="toggle-checkbox" type="checkbox" <?php echo ($lst['Status'] == 1) ? 'checked' : ''; ?>>
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
                                            <a href="index.php?folder=admin&template=model/edit_model_product&id=<?php echo $lst['Id']; ?>">
                                                <i class="bx bx-edit"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-sm btn-icon">
                                            <a href="index.php?folder=admin&template=model/model_detail_product&id=<?php echo $lst['Id']; ?>">
                                                <i class="bx bx-show"></i>
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
                        <div class="data-info">Hiển thị từ <?php echo $offset + 1 ?> đến <?php echo $offset + count($lst_product) ?> của <?php echo $total_items ?> sản phẩm</div>
                    </div>
                    <div class="col-sm-12 col-md-6 show-page">
                        <nav class="page-book" aria-label="Page navigation example" style="margin-top: 12px;">
                            <ul class="pagination">
                                <?php if ($current_page > 1) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?src=admin/lst_img/lst_img_product&page=<?php echo $current_page - 1 ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php
                                // Hiển thị trang đầu
                                if ($current_page > ($adjacents + 1)) {
                                    echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/lst_img/lst_img_product&page=1">1</a></li>';
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
                                        echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/lst_img/lst_img_product&page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }

                                // Hiển thị trang cuối
                                if ($current_page < ($total_pages - $adjacents)) {
                                    if ($current_page < ($total_pages - $adjacents - 1)) {
                                        echo '<li class="page-item"><span class="page-link">...</span></li>';
                                    }
                                    echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/lst_img/lst_img_product&page=' . $total_pages . '">' . $total_pages . '</a></li>';
                                }

                                if ($current_page < $total_pages) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?src=admin/lst_img/lst_img_product&page=<?php echo $current_page + 1 ?>" aria-label="Next">
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