<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('Function/Product.php');
require_once('Function/ComboBook.php');
require_once('Function/Type.php');
require_once('Function/Size.php');
require_once('Function/Publisher.php');
require_once('Function/CoverType.php');

if (isset($_GET['id'])) {
    $bookId = $_GET['id'];
}
$joinedTables = [
    'cb' => 'Combo',
    's' => 'Size',
    'p' => 'Publisher',
    'cv' => 'Covertype'
];

$book = Product::getProductById($bookId);
$Combo = ComboBook::getComboBook();
$Type = Type::getType();
$Size = Size::getSize();
$Publisher = Publisher::getPublisher();
$CoverType = CoverType::getCoverType();
?>

<link rel="stylesheet" href="assets/css/edit_product.css">
<div id="opacity"></div>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Sản Phẩm /</span> Chỉnh sửa Sản Phẩm
        </h4>
        <div class="card">
            <h4 class="py-3 mb-4" style="color: #656cf9;">
                <span class="text-muted fw-light"> - Sản Phẩm /</span>
            </h4>
            <div class="edit_product">
                <form id="update_Product" onsubmit="update_Product(event)">
                    <div class="row">
                        <div class="col-sm">
                            <input id="IdBook" type="hidden" name="Id" value="<?= $bookId ?>">
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" name="Name" value="<?php echo $book[0]['Name'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Theo Bộ</label>
                                <select name="<?= $joinedTables['cb'] ?>">
                                    <option value="0">Không có</option>
                                    <?php
                                    foreach ($Combo as $key => $lst_combo) {
                                        $selected = ($book[0]['ComboBookId'] == $lst_combo['Id']) ? 'selected' : '';
                                        echo '<option value="' . ($lst_combo['Id']) . '" ' . $selected . '>' . $lst_combo['Name'] . '</option>';
                                    }
                                    ?>
                                </select>
                                <button class="btn btn-secondary add-new btn-primary" type="button" onclick="openForm('<?= $joinedTables['cb'] ?>')">
                                    <span>
                                        <i class="bx bx-plus me-0 me-sm-1"></i>
                                        <span class="d-none d-sm-inline-block">Thêm Bộ</span>
                                    </span>
                                </button>
                            </div>
                            <div class="form-group">
                                <label for="">Tác giả</label>
                                <input type="text" name="Author" value="<?php echo $book[0]['Author'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Loại sản phẩm</label>
                                <select name="TypeId">
                                    <?php
                                    foreach ($Type as $key => $lst_type) {
                                        $selected = ($book[0]['TypeId'] == $lst_type['Id']) ? 'selected' : '';
                                        echo '<option value="' . ($lst_type['Id']) . '" ' . $selected . '>' . $lst_type['Name'] . '</option>';
                                    }
                                    ?>
                                </select>

                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="">Số trang</label>
                                <input type="number" name="NumberPage" value="<?php echo $book[0]['NumberPage'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Kích thước</label>
                                <select name="<?= $joinedTables['s'] ?>">
                                    <?php
                                    foreach ($Size as $key => $lst_size) {
                                        $selected = ($book[0]['SizeId'] == $lst_size['Id']) ? 'selected' : '';
                                        echo '<option value="' . ($lst_size['Id']) . '" ' . $selected . '>' . $lst_size['Name'] . ' cm</option>';
                                    }
                                    ?>
                                </select>
                                <button class="btn btn-secondary add-new btn-primary" type="button" onclick="openForm('<?= $joinedTables['s'] ?>')">
                                    <span>
                                        <i class="bx bx-plus me-0 me-sm-1"></i>
                                        <span class="d-none d-sm-inline-block">Thêm Kích thước</span>
                                    </span>
                                </button>
                            </div>
                            <div class="form-group">
                                <label for="">Tồn kho</label>
                                <input type="number" name="Stock" value="<?php echo $book[0]['Stock'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Giá sản phẩm</label>
                                <input type="number" name="Price" value="<?php echo $book[0]['Price'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Ngày sản xuất</label>
                                <input type="date" name="Date" value="<?php echo htmlspecialchars(date('Y-m-d', strtotime($book[0]['Date']))); ?>">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="">Tên nhà xuất bản</label>
                                <select name="<?= $joinedTables['p'] ?>">
                                    <?php
                                    foreach ($Publisher as $key => $lst_publisher) {
                                        $selected = ($book[0]['PublisherId'] == $lst_publisher['Id']) ? 'selected' : '';
                                        echo '<option value="' . ($lst_publisher['Id']) . '" ' . $selected . '>' . $lst_publisher['Name'] . '</option>';
                                    }
                                    ?>
                                </select>
                                <button class="btn btn-secondary add-new btn-primary" type="button" onclick="openForm('<?= $joinedTables['p'] ?>')">
                                    <span>
                                        <i class="bx bx-plus me-0 me-sm-1"></i>
                                        <span class="d-none d-sm-inline-block">Thêm NXB</span>
                                    </span>
                                </button>
                            </div>
                            <div class="form-group">
                                <label for="">Loại bìa</label>
                                <select name="<?= $joinedTables['cv'] ?>">
                                    <?php
                                    foreach ($CoverType as $key => $lst_coverType) {
                                        $selected = ($book[0]['CoverTypeId'] == $lst_coverType['Id']) ? 'selected' : '';
                                        echo '<option value="' . ($lst_coverType['Id']) . '" ' . $selected . '>' . $lst_coverType['Name'] . '</option>';
                                    }
                                    ?>
                                </select>
                                <button class="btn btn-secondary add-new btn-primary" type="button" onclick="openForm('<?= $joinedTables['cv'] ?>')">
                                    <span>
                                        <i class="bx bx-plus me-0 me-sm-1"></i>
                                        <span class="d-none d-sm-inline-block">Thêm bìa</span>
                                    </span>
                                </button>
                            </div>
                            <div class="form-group">
                                <label for="">Nội dung</label>
                                <textarea name="Description" id="Description"><?php echo $book[0]['Description'] ?></textarea>
                            </div>
                        </div>
                    </div>



                    <button class="btn btn-primary">Lưu</button>
                </form>
            </div>
            <div id="loading_update" class="title-pay hidden">
                <div class="dot-spinner ">

                    <div class="dot-spinner__dot"></div>
                    <div class="dot-spinner__dot"></div>
                    <div class="dot-spinner__dot"></div>
                    <div class="dot-spinner__dot"></div>
                    <div class="dot-spinner__dot"></div>
                    <div class="dot-spinner__dot"></div>
                    <div class="dot-spinner__dot"></div>
                    <div class="dot-spinner__dot"></div>
                </div>
                <div class="title-loading">
                    <h4>Đang xử lý</h4>
                </div>
            </div>
            <?php foreach ($joinedTables as $key => $lst_bv) { ?>
                <div id="<?= $lst_bv ?>" class="form-popup">
                    <div class="form-popup-content">
                        <span class="close-btn" onclick="closeForm('<?= $lst_bv ?>')">&times;</span>
                        <h2>Thêm <?= $lst_bv ?></h2>
                        <form id="form-<?= $lst_bv ?>" action="process_form.php" method="post">
                            <label for="<?= $lst_bv ?>Name">Tên <?= $lst_bv ?>:</label>
                            <input type="text" id="<?= $lst_bv ?>Name" name="<?= $lst_bv ?>" required>
                            <button type="button" class="btn btn-primary" onclick="submitForm('<?= $lst_bv ?>')">Thêm <?= $lst_bv ?></button>
                            <div id="mess_<?= $lst_bv ?>" class="mess hidden"> Đã thêm <?= $lst_bv ?></div>
                        </form>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php
require 'src/admin/layout/footer.php';
?>