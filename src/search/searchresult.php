<link rel="stylesheet" href="../../assets/css/layout.css">
<link rel="icon" href="../../assets/img/logo-web.jpg">
<link rel="stylesheet" href="../../assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
<link rel="stylesheet" href="../../assets/sclick/css/slick.min.css">
<?php
// Đặt thư mục làm việc hiện tại là gốc dự án (thay đổi đường dẫn nếu cần)
chdir(__DIR__ . '/../../');

// Gọi các tệp cần thiết
require_once('Function/db.php');
require_once('Function/Img.php');
require_once('Function/Type.php');
require_once('src/layout/header.php');
?>
<link rel="stylesheet" href="../../assets/css/lst_product.css">
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
                        if (isset($_GET['timkiem'])) {
                            $noidung = trim($_GET['timkiem']);
                            $tukhoa = explode(' ', $noidung);

                            // Khởi tạo câu lệnh SQL
                            $sql = "
                                    SELECT b.Name, b.Price, i.Path 
                                    FROM book b
                                    JOIN image i ON b.ID = i.BookID 
                                    WHERE 
                                    i.Id = (
                                        SELECT MIN(i2.Id)
                                        FROM `image` i2
                                        WHERE i2.BookId = b.Id
                                    )";

                            $conditions = [];
                            $placeholders = [];
                            foreach ($tukhoa as $index => $keyword) {
                                $conditions[] = "b.Name LIKE ?";
                                $placeholders[] = "%$keyword%";
                            }

                            if (!empty($conditions)) {
                                $sql .= " AND (" . implode(" OR ", $conditions) . ")";
                            }


                            $ketqua = DP::run_query($sql, $placeholders, PDO::FETCH_ASSOC);

                            // Kiểm tra nếu truy vấn thành công


                            $soluong = count($ketqua);

                            echo "<h6> KẾT QUẢ TÌM KIẾM CHO: " . htmlspecialchars($noidung) . " (" . $soluong . " Kết quả) </h6>";



                            foreach ($ketqua as $key => $lst_search) {
                        ?>
                                <div class="product__panel-item col-lg-3 col-md-4 col-sm-6">
                                    <div class="product__panel-item-wrap">
                                        <div class="product__panel-img-wrap">
                                            <img src="../../assets/img/products/<?php echo htmlspecialchars($lst_search['Path']); ?>" alt="" class="product__panel-img">
                                        </div>
                                        <div class="product__panel-heading">
                                            <a href="product.html" class="product__panel-link"><?php echo htmlspecialchars($lst_search['Name']); ?></a>
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
                                                <?php echo htmlspecialchars($lst_search['Price']); ?> đ
                                            </span>
                                        </div>
                                    </div>
                                </div>
                        <?php

                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/lst-book.js"></script>

<script src="assets/babylon/babylon.js"></script>
<script src="assets/babylon/babylonjs.loaders.min.js"></script>

<?php
require 'src/layout/footer.php';
?>