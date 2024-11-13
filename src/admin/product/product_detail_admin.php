<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('API/Product.php');
require_once('API/Img.php');
if (isset($_GET['id'])) {
    $bookId = htmlspecialchars($_GET['id']);
}

$book=Product::getProductById($bookId);
if (count($book) > 0) {
    $NameBook = $book[0]['Name'];
    $model = $book[0]['Model'];
    $modelBin = $book[0]['ModelBin'];
    $comboBookId = $book[0]['ComboBookId'];
    $typeId = $book[0]['TypeId'];
    $cameraState = [
        'alpha' => $book[0]['Alpha'],
        'beta' => $book[0]['Beta'],
        'radius' => $book[0]['Radius'],
        'target' => [
            'x' => $book[0]['Target_x'],
            'y' => $book[0]['Target_y'],
            'z' => $book[0]['Target_z']
        ]
    ];
    // Gửi dữ liệu cameraState từ PHP xuống JavaScript
    echo "<script>";
    echo "var cameraState2 = " . json_encode($cameraState) . ";";
    echo "</script>";
} else {
    echo "Không tìm thấy kết quả.";
    $model = null;
    $modelBin = null;
}
$lst_Image=Img::getImgByBookId($bookId);


$modelName = Product::sanitizeFilename(Product::removeAccents($NameBook));
if ($book[0]['Model'] != null) {
    $gltfFilePath = 'assets/model/' . $modelName . $bookId . '/' . $model;
    $binFilePath = 'assets/model/' . $modelName . $bookId . '/' . $modelBin;

    // Đọc nội dung của tệp gltf
    $gltfContent = file_get_contents($gltfFilePath);

    // Thay thế đường dẫn "uri":"$modelBin" bằng "uri":"Model/$modelBin"
    if (strpos($gltfContent, 'assets/model/') === false) {
        // Thay thế đường dẫn "uri":"$modelBin" bằng "uri":"assets/model/' . $modelName . '/$modelBin"
        $modifiedGltfContent = preg_replace('/"uri"\s*:\s*"(?!assets\/model\/)([^"]+)"/', '"uri":"assets/model/' . $modelName . $bookId . '/$1"', $gltfContent);

        // Ghi lại nội dung đã sửa đổi vào tệp gltf gốc
        file_put_contents($gltfFilePath, $modifiedGltfContent);
    }
}
?>

<link rel="stylesheet" href="assets/css/product_detail_admin.css">

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Sản Phẩm /</span> Chi tiết Sản Phẩm
        </h4>
        <div class="card">
            <h4 class="py-3 mb-4" style="color: #656cf9;">
                <span class="text-muted fw-light"> - Sản Phẩm /</span>
            </h4>
            <div class="row">
                <div class="product-detail-lef product-images col-3 col-md-6 col-lg-4">
                    <div class="product-image-block relative">
                        <div class="swiper-container gallery-top ">
                            <?php
                            if ($book[0]['Model'] != null) {
                            ?>
                                <input id="Model" type="hidden" name="model" value="<?php echo $gltfFilePath ?>">
                                <input id="Model_bin" type="hidden" name="modelbin" value="<?php echo $binFilePath ?>">
                            <?php
                            }
                            ?>
                            <div class="swiper-wrapper slider-for" style="justify-content: center;">
                                <?php
                                if ($book[0]['Model'] != null) {
                                ?>
                                    <div class="swiper-slide swiper-slide-active" href="" style="width: 330px; justify-content: center;">
                                        <canvas id="3D-Book" class="3DImage" height="400" width="400"></canvas>
                                    </div>
                                <?php
                                }

                                ?>
                                <?php
                                foreach ($lst_Image as $key => $img) {
                                ?>
                                    <a class="swiper-slide swiper-slide-active" href="" style="width: 330px; justify-content: center;">
                                        <img height="400" width="400" src="assets/img/products/<?php echo $img['Path'] ?>" alt="">
                                    </a>
                                <?php
                                }
                                ?>

                            </div>

                        </div>
                        <div class="swiper-container gallery-thumb ">
                            <div class="swiper-wrapper slider-nav">
                                <?php
                                if ($book[0]['Model'] != null) {
                                ?>
                                    <div class="swiper-slide swiper-slide-visible">
                                        <img src="assets/img/model_3D.jpg" alt="">
                                    </div>
                                <?php
                                }
                                ?>
                                <?php
                                foreach ($lst_Image as $key => $img) {
                                ?>
                                    <div class="swiper-slide swiper-slide-visible">
                                        <img class="img-product" src="assets/img/products/<?php echo $img['Path'] ?>" title="<?php echo $img['Path'] ?>" alt="">
                                    </div>
                                <?php
                                }
                                ?>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8 product-detail">
                    <div class="details-pro">
                        <input id="Id-product" type="text" value="<?php echo $book[0]['Id'] ?>" style="display: none;">
                        <h1 id="name-product" class="title-product"><?php echo $book[0]['Name'] ?></h1>
                        <div class="col-12 product-detail-table">
                            <div class="title">
                                <span>Thông tin chi tiết </span>
                            </div>
                            <div class="content">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="color: #007bff;">Công ty phát hành</th>
                                            <td><?php echo $book[0]['PublisherName'] ?></td>
                                        </tr>
                                        <tr>
                                            <th style="color: #007bff;">Ngày xuất bản</th>
                                            <td><?php echo $book[0]['Date'] ?></td>
                                        </tr>
                                        <tr>
                                            <th style="color: #007bff;">Kích thước</th>
                                            <td><?php echo $book[0]['SizeName'] ?></td>
                                        </tr>
                                        <tr>
                                            <th style="color: #007bff;">Loại bìa</th>
                                            <td><?php echo $book[0]['CovertypeName'] ?></td>
                                        </tr>
                                        <tr>
                                            <th style="color: #007bff;">Số trang</th>
                                            <td><?php echo $book[0]['NumberPage'] ?></td>
                                        </tr>
                                        <tr>
                                            <th style="color: #007bff;">SKU</th>
                                            <td><?php echo $book[0]['SKU'] ?></td>
                                        </tr>
                                        <tr>
                                            <th style="color: #007bff;">Tác giả</th>
                                            <td><?php echo $book[0]['Author'] ?></td>
                                        </tr>
                                        <tr>
                                            <th style="color: #007bff;">Giá</th>
                                            <td><?php echo $book[0]['Price'] ?> Đ</td>
                                        </tr>
                                        <tr>
                                            <th style="color: #007bff;">Tồn hàng</th>
                                            <td><?php echo $book[0]['Stock'] ?></td>
                                        </tr>
                                        <tr>
                                            <th style="color: #007bff;">Thể loại</th>
                                            <td><?php echo $book[0]['BookTypeName'] ?></td>
                                        </tr>
                                        <tr>
                                            <th style="color: #007bff;">Ngày phát hành</th>
                                            <td><?php echo $book[0]['Date'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="noidung">
                        <h4>Nội dung</h4>
                        <div>
                            <?php echo $book[0]['Description'] ?>
                        </div>
                    </div>

                </div>
            </div>
            <div class="edit_product">
                <button class="btn btn-primary">
                    <a href="index.php?src=admin/product/edit_product&id=<?= $bookId ?>"
                    style="color: #fff;">Chỉnh sửa</a>
                </button>
            </div>
        </div>
    </div>
</div>

<?php
require 'src/admin/layout/footer.php';
?>