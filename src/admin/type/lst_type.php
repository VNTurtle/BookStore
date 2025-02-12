<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('Function/Type.php');
require_once('Function/TypeDetail.php');
$items_per_page = 10;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$parameters = [];
$resultType = 2;

$query_count = "SELECT COUNT(*)as sl FROM type";
$count_product = DP::run_query($query_count, $parameters, 2); // Giả sử `run_query` trả về mảng kết quả
$total_items = $count_product[0]['sl'];
$total_pages = ceil($total_items / $items_per_page);
$offset = ($current_page - 1) * $items_per_page;
$adjacents = 2;

$parameters = []; // Các tham số truy vấn (nếu có)
$resultType = 2; // Loại kết quả truy vấn (2: Fetch All)
$Type = Type::getTypeBySL($offset, $items_per_page);

?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Sản Phẩm /</span> Loại sản phẩm
        </h4>
        <!-- Model List Table -->
        <div class="card">
            <div class="card-datatable ">
                <table class="datatables-products table border-top">
                    <div class="card-header d-flex border-top rounded-0 flex-wrap py-md-0">
                        <div class="d-flex justify-content-start justify-content-md-end align-items-baseline">
                            <div class="add-product dt-action-buttons d-flex align-items-start align-items-md-center justify-content-sm-center mb-3 mb-sm-0">
                                <div class="dt-buttons btn-group flex-wrap d-flex">

                                    <button class="btn btn-secondary add-new btn-primary" tabindex="0" aria-controls="DataTables_Table_0" type="button">
                                        <a href="index.php?src=admin/type/add_type" style="color: #fff;">
                                            <i class="bx bx-plus me-0 me-sm-1"></i>
                                            <span class="d-none d-sm-inline-block">Thêm loại sản phẩm</span>
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <thead>
                        <tr style="background-color: aqua;">
                            <th>STT</th>
                            <th>Tên loại</th>
                            <th>Trạng thái</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Type as $key => $lst) { ?>
                            <tr class="odd toggle-row" data-type-id="<?php echo $lst['Id']; ?>">
                                <td ><?php echo $key + 1; ?></td>
                                <td>
                                    <span class="text-truncate d-flex align-items-center toggle-row" data-type-id="<?php echo $lst['Id']; ?>">
                                        <?php echo $lst['Name']; ?>
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
                            </tr>
                            <tr class="child-rows" data-parent-id="<?php echo $lst['Id']; ?>" style="display: none;">
                                <td colspan="3">
                                    <ul id="child-list-<?php echo $lst['Id']; ?>">
                                        <?php
                                        $Lst_TD = TypeDetail::getTypeDetailByTypeId($lst['Id']);
                                        foreach ($Lst_TD as $key => $TypeDetail) {
                                            echo '<li>' . $TypeDetail['Name'] . '</li>';
                                        }

                                        ?>
                                    </ul>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>

                </table>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        // Lắng nghe sự kiện click vào các loại sản phẩm
                        const toggleRows = document.querySelectorAll('.toggle-row');
                        toggleRows.forEach(row => {
                            row.addEventListener('click', function() {
                                const typeId = this.getAttribute('data-type-id');
                                const childRow = document.querySelector(`.child-rows[data-parent-id="${typeId}"]`);
                                const childList = document.getElementById(`child-list-${typeId}`);

                                // Toggle hiển thị hàng loại con
                                if (childRow.style.display === 'none') {
                                    childRow.style.display = 'table-row';
                                } else {
                                    childRow.style.display = 'none';
                                }
                            });
                        });
                    });
                </script>
                <div class="row mx-2">
                    <div class="col-sm-12 col-md-6 shows-stt">
                        <div class="data-info">Hiển thị từ <?php echo $offset + 1 ?> đến <?php echo $offset + count($Type) ?> của <?php echo $total_items ?> loại sản phẩm</div>
                    </div>
                    <div class="col-sm-12 col-md-6 show-page">
                        <nav class="page-book" aria-label="Page navigation example" style="margin-top: 12px;">
                            <ul class="pagination">
                                <?php if ($current_page > 1) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?src=admin/type/lst_type&page=<?php echo $current_page - 1 ?>" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php
                                // Hiển thị trang đầu
                                if ($current_page > ($adjacents + 1)) {
                                    echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/type/lst_type&page=1">1</a></li>';
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
                                        echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/type/lst_type&page=' . $i . '">' . $i . '</a></li>';
                                    }
                                }

                                // Hiển thị trang cuối
                                if ($current_page < ($total_pages - $adjacents)) {
                                    if ($current_page < ($total_pages - $adjacents - 1)) {
                                        echo '<li class="page-item"><span class="page-link">...</span></li>';
                                    }
                                    echo '<li class="page-item"><a class="page-link" href="index.php?src=admin/type/lst_type&page=' . $total_pages . '">' . $total_pages . '</a></li>';
                                }

                                if ($current_page < $total_pages) : ?>
                                    <li class="page-item">
                                        <a class="page-link" href="index.php?src=admin/type/lst_type&page=<?php echo $current_page + 1 ?>" aria-label="Next">
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