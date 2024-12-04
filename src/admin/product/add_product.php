<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('Function/Product.php');
require_once('Function/ComboBook.php');
require_once('Function/Type.php');
require_once('Function/Size.php');
require_once('Function/Publisher.php');
require_once('Function/CoverType.php');
require_once('Function/TypeDetail.php');

$joinedTables = [
    'cb' => 'Combo',
    's' => 'Size',
    'p' => 'Publisher',
    'cv' => 'Covertype'
];

$Combo = ComboBook::getComboBook();
$Type = Type::getType();
$Size = Size::getSize();
$Publisher = Publisher::getPublisher();
$CoverType = CoverType::getCoverType();
$CoverType = CoverType::getCoverType();
$TypeDetail = TypeDetail::getType();
?>


<link rel="stylesheet" href="assets/css/edit_product.css">

<div id="opacity"></div>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Sản Phẩm /</span> Thêm Sản Phẩm
        </h4>
        <div class="card">
            <h4 class="py-3 mb-4" style="color: #656cf9;">
                <span class="text-muted fw-light"> - Sản Phẩm /</span>
            </h4>
            <div class="edit_product">
                <form id="add_Product" onsubmit="add_Product(event)" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input type="text" name="Name" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Theo Bộ</label>
                                <select name="<?= $joinedTables['cb'] ?>">
                                    <option value="0">Không có</option>
                                    <?php
                                    foreach ($Combo as $key => $lst_combo) {
                                        echo '<option  value="' . $lst_combo['Id'] . '">' . $lst_combo['Name'] . '</option>';
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
                                <input type="text" name="Author" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="type-select">Loại sản phẩm</label>
                                <select id="type-select" name="TypeId" required>
                                    <option value="">Chọn loại sản phẩm</option>
                                    <?php
                                    foreach ($Type as $lst_type) {
                                        echo '<option value="' . $lst_type['Id'] . '">' . $lst_type['Name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="type-detail-select">Loại con sản phẩm</label>
                                <select id="type-detail-select" name="TypeDetailId" disabled required>
                                    <option value="">Chọn loại con sản phẩm</option>
                                </select>
                            </div>
                            <?php
                            $TypeDetailGrouped = [];
                            foreach ($TypeDetail as $lst_td) {
                                $TypeDetailGrouped[$lst_td['TypeId']][] = $lst_td;
                            }
                            ?>
                            <script>
                                // Chuyển dữ liệu PHP sang JavaScript
                                const typeDetails = <?php echo json_encode($TypeDetailGrouped); ?>;
                                const typeSelect = document.getElementById('type-select');
                                const typeDetailSelect = document.getElementById('type-detail-select');

                                // Lắng nghe sự kiện thay đổi của loại sản phẩm
                                typeSelect.addEventListener('change', function() {
                                    const selectedTypeId = this.value;

                                    // Xóa tất cả các tùy chọn hiện có trong Loại con sản phẩm
                                    typeDetailSelect.innerHTML = '<option value="">Chọn loại con sản phẩm</option>';

                                    // Nếu có loại sản phẩm được chọn
                                    if (selectedTypeId && typeDetails[selectedTypeId]) {
                                        // Kích hoạt ô select và thêm các tùy chọn tương ứng
                                        typeDetailSelect.disabled = false;

                                        typeDetails[selectedTypeId].forEach(detail => {
                                            const option = document.createElement('option');
                                            option.value = detail.Id;
                                            option.textContent = detail.Name;
                                            typeDetailSelect.appendChild(option);
                                        });
                                    } else {
                                        // Vô hiệu hóa ô select nếu không có loại con sản phẩm
                                        typeDetailSelect.disabled = true;
                                    }
                                });

                                // Hàm kiểm tra trước khi submit form
                                function validateForm(event) {
                                    // Kiểm tra "Loại sản phẩm"
                                    if (typeSelect.value === "") {
                                        alert("Vui lòng chọn Loại sản phẩm.");
                                        return false; // Ngăn gửi form
                                    }

                                    // Kiểm tra "Loại con sản phẩm"
                                    if (typeDetailSelect.disabled || typeDetailSelect.value === "") {
                                        alert("Vui lòng chọn Loại con sản phẩm.");
                                        return false; // Ngăn gửi form
                                    }

                                    return true; // Cho phép gửi form
                                }
                            </script>

                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="">Số trang</label>
                                <input type="number" name="NumberPage" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kích thước</label>
                                <select name="<?= $joinedTables['s'] ?>">
                                    <?php
                                    foreach ($Size as $key => $lst_size) {
                                        echo '<option value="' . $lst_size['Id'] . '" >' . $lst_size['Name'] . ' cm</option>';
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
                                <input type="number" name="Stock" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Giá sản phẩm</label>
                                <input type="number" name="Price" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="">Ngày sản xuất</label>
                                <input type="date" name="Date" value="" required>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="">Tên nhà xuất bản</label>
                                <select name="<?= $joinedTables['p'] ?>">
                                    <?php
                                    foreach ($Publisher as $key => $lst_publisher) {
                                        echo '<option value="' . $lst_publisher['Id'] . '" >' . $lst_publisher['Name'] . '</option>';
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

                                        echo '<option value="' . $lst_coverType['Id'] . '">' . $lst_coverType['Name'] . '</option>';
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
                                <textarea name="Description" id="Description" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="coverImage">Ảnh Bìa:</label>
                                <input type="file" id="coverImage" name="coverImage" accept="image/*" required>
                            </div>
                            <div class="form-group">
                                <label for="additionalImages">Các Hình Phụ:</label>
                                <input type="file" id="additionalImages" name="additionalImages[]" accept="image/*" multiple required>
                            </div>
                            <div class="form-group">
                                <label for="imagePreview">Xem Trước Hình:</label>
                                <div id="imagePreview"></div>
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