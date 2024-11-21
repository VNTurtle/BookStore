<?php
require_once('API/LstProduct_.php');
require_once('API/Img.php');
// Lấy danh sách loại sách, chi tiết loại, loại bìa, và nhà xuất bản
$bookTypeIds = LstProduct::getBookTypes();
$Lst_Type = LstProduct::getAllTypeDetailsForBookTypes();
$Lst_CoverType = LstProduct::getCoverTypes();
$Lst_Publisher = LstProduct::getPublishers();

// Kiểm tra và thông báo nếu không có dữ liệu
if (!$bookTypeIds) {
    echo "Không có dữ liệu loại sách hoặc xảy ra lỗi.";
}
if (!$Lst_Type) {
    echo "Không có dữ liệu chi tiết loại hoặc xảy ra lỗi.";
}
if (!$Lst_CoverType) {
    echo "Không có dữ liệu loại bìa hoặc xảy ra lỗi.";
}
if (!$Lst_Publisher) {
    echo "Không có dữ liệu nhà xuất bản hoặc xảy ra lỗi.";
    }

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Giới hạn số sản phẩm trên mỗi trang
$limit = 20;
$offset = ($page - 1) * $limit;

// Lấy danh sách sản phẩm dựa trên `lst_id` và `lst_id2` từ URL
$lst_id = isset($_GET['lst_id']) ? $_GET['lst_id'] : null;
$lst_id2 = isset($_GET['lst_id2']) ? $_GET['lst_id2'] : null;

// Gọi hàm `getLstProduct` với `lst_id` và `lst_id2` (nếu có)
$limit = 20;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Lấy tổng số sản phẩm để tính tổng số trang
$totalProducts = LstProduct::getLstProduct($lst_id, $lst_id2, null, null, true);
$totalPages = ceil($totalProducts / $limit);

// Truy vấn sản phẩm với phân trang
$lst_bv = LstProduct::getLstProduct($lst_id, $lst_id2, $limit, $offset);
require 'src/layout/header.php';
?>
<script>
    console.log($totalProducts)
</script>
<body>
    <link rel="stylesheet" href="assets/css/lst_product.css">
    <div class="bodywrap">
        <section class="bread-crumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="home">
                        <a href="index.html">
                            <span>Trang chủ</span>
                        </a>
                        <span class="mr-lr">
                            &nbsp;
                            <i class="fa-solid fa-angle-right"></i>
                            &nbsp;
                        </span>
                    </li>
                    <li>
                        <strong>
                            <span>
                                Danh sách sản phẩm
                            </span>
                        </strong>
                    </li>
                </ul>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-0 col-0">
                    <div class="left-category">
                        <div class="product-category">
                            <div class="product-category-title">
                                Danh mục sản phẩm
                            </div>
                            <ul class="product-category-list">
                                <?php
                                foreach ($bookTypeIds as $key => $lst_type) {
                                ?>
                                    <li class="product-category-item">
                                        <a class="nav-link" href="index.php?src=product/lst_product&lst_id=<?php echo $lst_type['Id']; ?>"><?php echo $lst_type['Name'] ?></a>
                                        <i id=" category-code-<?php echo $lst_type['Id'] ?>" class="open-menu category-code icon-menu" onclick="ShowMenu(this)" data-target="Menu-detail-<?php echo $lst_type['Id'] ?>"></i>
                                        <ul class="menu-down" id="Menu-detail-<?php echo $lst_type['Id'] ?>">
                                            <?php
                                            foreach ($Lst_Type as $key => $lst_typedetail) {
                                                if ($lst_typedetail['TypeId'] == $lst_type["Id"]) {
                                            ?>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="index.php?src=product/lst_product&lst_id2=<?php echo $lst_typedetail['Id'] ?>"><?php echo $lst_typedetail['Name'] ?></a>
                                                    </li>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="aside-item">
                            <div class="aside-heading">
                                Chọn mức giá
                            </div>
                            <div class="aside-content">
                                <ul>
                                    <li class="aside-content-item">
                                        <input class="aside-item-input" type="checkbox" id="checkbox1">
                                        <label class="aside-item-name" for="checkbox1">Dưới 10.000đ</label>
                                    </li>
                                    <li class="aside-content-item">
                                        <input class="aside-item-input" type="checkbox" id="checkbox2">
                                        <label class="aside-item-name" for="checkbox2">Từ 10.000đ - 50.000đ</label>
                                    </li>
                                    <li class="aside-content-item">
                                        <input class="aside-item-input" type="checkbox" id="checkbox3">
                                        <label class="aside-item-name" for="checkbox3">Từ 50.000đ - 100.000đ</label>
                                    </li>
                                    <li class="aside-content-item">
                                        <input class="aside-item-input" type="checkbox" id="checkbox4">
                                        <label class="aside-item-name" for="checkbox4">Từ 100.000đ - 300.000đ</label>
                                    </li>
                                    <li class="aside-content-item">
                                        <input class="aside-item-input" type="checkbox" id="checkbox5">
                                        <label class="aside-item-name" for="checkbox5">Từ 300.000đ - 500.000đ</label>
                                    </li>
                                    <li class="aside-content-item">
                                        <input class="aside-item-input" type="checkbox" id="checkbox6">
                                        <label class="aside-item-name" for="checkbox6">Trên 1 triệu</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-12 col-12">
                    <div class="sort-product">
                        <h3 class="sort-heading">
                            <i class="fa-solid fa-arrow-down-z-a"></i>
                            Xếp theo
                        </h3>
                        <div class="d-flex">
                            <select class="sort-arrange" name="select-item" id="sort-arr">
                                <option class="sort-item" value="1">Bán chạy tuần</option>
                                <option class="sort-item" value="2">Bán chạy tháng</option>
                                <option class="sort-item" value="3">Bán chạy năm</option>
                                <option class="sort-item" value="4">Mới nhất</option>
                            </select>

                        </div>
                    </div>
                    <div class="product-container">
                        <div class="row">
                            <?php
                            if (!empty($lst_bv)) {
                                foreach ($lst_bv as $bv) {
                            ?>
                                    <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                                        <div class="product__panel-item-wrap">
                                            <div class="product__panel-img-wrap">
                                                <a href="index.php?src=product/product_detail&id=<?php echo $bv['BookId']; ?>">
                                                    <img src="assets/img/products/<?php echo $bv['Path']; ?>" alt="<?php echo $bv['BookName']; ?>" class="product__panel-img">
                                                </a>
                                            </div>
                                            <div class="product__panel-heading">
                                                <a href="index.php?src=product/product_detail&id=<?php echo $bv['BookId']; ?>" class="product__panel-link">
                                                    <?php echo $bv['BookName']; ?>
                                                </a>
                                            </div>
                                            <div class="product__panel-rate-wrap">
                                                <i class="fas fa-star product__panel-rate"></i>
                                                <i class="fas fa-star product__panel-rate"></i>
                                                <i class="fas fa-star product__panel-rate"></i>
                                                <i class="fas fa-star product__panel-rate"></i>
                                                <i class="fas fa-star product__panel-rate"></i>
                                            </div>
                                            <div class="product__panel-price">
                                                <span class="product__panel-price-current">
                                                    <?php echo $bv['Price']; ?> đ
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            } else {
                                echo "<p>Không có sản phẩm nào phù hợp.</p>";
                            }
                            ?>
                            <nav class="page-book" aria-label="Page navigation example">
                            <ul class="pagination">
                                <!-- Nút Previous -->
                                <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                                    <a class="page-link" href="index.php?src=product/lst_product&lst_id=<?php echo $lst_id; ?>&lst_id2=<?php echo $lst_id2; ?>&page=<?php echo $page - 1; ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <!-- Hiển thị các số trang -->
                                <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                                    <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                                        <a class="page-link" href="index.php?src=product/lst_product&lst_id=<?php echo $lst_id; ?>&lst_id2=<?php echo $lst_id2; ?>&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                                    </li>
                                <?php } ?>

                                <!-- Nút Next -->
                                <li class="page-item <?php if ($page >= $totalPages) echo 'disabled'; ?>">
                                    <a class="page-link" href="index.php?src=product/lst_product&lst_id=<?php echo $lst_id; ?>&lst_id2=<?php echo $lst_id2; ?>&page=<?php echo $page + 1; ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="assets/js/lst-book.js"></script>
<script src="assets/babylon/babylon.js"></script>
<script src="assets/babylon/babylonjs.loaders.min.js"></script>

<?php
require 'src/layout/footer.php';
?>