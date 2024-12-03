<link rel="stylesheet" href="assets/css/layout.css">
<link rel="icon" href="assets/img/logo-web.jpg">
<link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
<link rel="stylesheet" href="assets/sclick/css/slick.min.css">
<?php
// Đặt thư mục làm việc hiện tại là gốc dự án (thay đổi đường dẫn nếu cần)
// Gọi các tệp cần thiết
require_once('Function/db.php');
require_once('Function/Img.php');
require_once('Function/Type.php');
require_once('Function/LstProduct_.php');
$Lst_Type = LstProduct::getAllTypeDetailsForBookTypes();

require_once('src/layout/header.php');

// Lấy tham số từ URL
$searchKeyword = isset($_GET['timkiem']) ? $_GET['timkiem'] : '';
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Giới hạn số sản phẩm trên mỗi trang
$limit = 20;
$offset = ($page - 1) * $limit;

// Tách các từ khóa (ngắt từ khóa bởi dấu cách)
$keywords = explode(' ', $searchKeyword);

// Tạo câu truy vấn để lấy sản phẩm với các điều kiện tìm kiếm và phân trang
$sql = "
    SELECT b.Id, b.Name, b.Price, i.Path 
    FROM book b
    JOIN image i ON b.ID = i.BookID 
    WHERE i.Id = (
        SELECT MIN(i2.Id)
        FROM `image` i2
        WHERE i2.BookId = b.Id
    )
";

// Tạo các điều kiện tìm kiếm cho mỗi từ khóa
$conditions = [];
foreach ($keywords as $keyword) {
    // Thêm điều kiện tìm kiếm với mỗi từ khóa
    $conditions[] = "b.Name LIKE :keyword";
}

// Kết hợp các điều kiện tìm kiếm vào câu SQL (nếu có nhiều từ khóa, dùng "OR" giữa các điều kiện)
if (!empty($conditions)) {
    $sql .= " AND (" . implode(" OR ", $conditions) . ")";
}

// Thêm phân trang vào câu truy vấn SQL
$sql .= " LIMIT $limit OFFSET $offset";

// Chạy truy vấn với các tham số tìm kiếm
$placeholders = [];
foreach ($keywords as $keyword) {
    // Thêm giá trị vào placeholders cho mỗi từ khóa
    $placeholders[":keyword"] = "%$keyword%";
}
$products = DP::run_query($sql, $placeholders, PDO::FETCH_ASSOC);

// Lấy tổng số sản phẩm để tính tổng số trang
$sqlCount = "
    SELECT COUNT(*) 
    FROM book b
    JOIN image i ON b.ID = i.BookID 
    WHERE i.Id = (
        SELECT MIN(i2.Id)
        FROM `image` i2
        WHERE i2.BookId = b.Id
    )
";

// Tạo các điều kiện tìm kiếm tương tự cho câu truy vấn đếm số sản phẩm
$conditionsCount = [];
foreach ($keywords as $keyword) {
    $conditionsCount[] = "b.Name LIKE :keyword";
}

if (!empty($conditionsCount)) {
    $sqlCount .= " AND (" . implode(" OR ", $conditionsCount) . ")";
}

// Chạy câu truy vấn đếm tổng số sản phẩm
$totalProducts = DP::run_query($sqlCount, $placeholders, PDO::FETCH_ASSOC)[0]['COUNT(*)'];
$totalPages = ceil($totalProducts / $limit);

// Trả về dữ liệu JSON nếu có yêu cầu AJAX
if (isset($_GET['ajax'])) {
    echo json_encode([
        'products' => $products,
        'totalPages' => $totalPages,
        'currentPage' => $page
    ]);
    exit;
}


?>

<link rel="stylesheet" href="assets/css/searchresult.css">
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
                            Tìm kiếm sản phẩm
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
                        echo "<h6>KẾT QUẢ TÌM KIẾM CHO: " . htmlspecialchars($noidung) . " (" . $totalProducts . " Kết quả)</h6>";

                        foreach ($products as $product) {
                        ?>
                            <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                                <div class="product__panel-item-wrap">
                                    <div class="product__panel-img-wrap">
                                        <a href="index.php?src=product/product_detail&id=<?php echo $product['Id']; ?>">
                                            <img src="assets/img/products/<?php echo $product['Path']; ?>" alt="<?php echo $bv['Name']; ?>" class="product__panel-img">
                                        </a>
                                    </div>
                                    <div class="product__panel-heading">
                                        <a href="index.php?src=product/product_detail&id=<?php echo $product['Id']; ?>" class="product__panel-link"><?php echo htmlspecialchars($product['Name']); ?></a>
                                    </div>
                                    <div class="product__panel-rate-wrap">
                                        <!-- Hiển thị 5 sao cho sản phẩm -->
                                        <?php
                                        $rating = 5;

                                        for ($i = 0; $i < $rating; $i++) {
                                            echo '<i class="fas fa-star product__panel-rate"></i>';
                                        }
                                        ?>
                                    </div>
                                    <div class="product__panel-price">
                                        <span class="product__panel-price-current">
                                            <?php echo htmlspecialchars($product['Price']); ?> đ
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php

                        }
                        ?>
                        <nav class="page-book" aria-label="Page navigation example">
                            <ul class="pagination" id="pagination-container">
                                <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?timkiem=<?= htmlspecialchars($searchKeyword) ?>&page=<?= $page - 1 ?>&minPrice=<?= $minPrice ?>&maxPrice=<?= $maxPrice ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>

                                <?php
                                for ($i = 1; $i <= $totalPages; $i++) {
                                    echo "<li class='page-item " . ($i == $page ? 'active' : '') . "'><a class='page-link' href='?timkiem=" . htmlspecialchars($searchKeyword) . "&page=$i'>$i</a></li>";
                                }
                                ?>

                                <li class="page-item <?= $page >= $totalPages ? 'disabled' : '' ?>">
                                    <a class="page-link" href="?timkiem=<?= htmlspecialchars($searchKeyword) ?>&page=<?= $page + 1 ?>&minPrice=<?= $minPrice ?>&maxPrice=<?= $maxPrice ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
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
<script src="assets/js/search.js"></script>

<script src="assets/babylon/babylon.js"></script>
<script src="assets/babylon/babylonjs.loaders.min.js"></script>
<script>
</script>
<?php
require 'src/layout/footer.php';
?>