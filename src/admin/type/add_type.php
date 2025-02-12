<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('Function/Type.php');
?>

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Sản Phẩm /</span> Thêm Loại sản phẩm
        </h4>
        <div class="card">
            <h4 class="py-3 mb-4" style="color: #656cf9;">
                <span class="text-muted fw-light"> - Loại Sản Phẩm /</span>
            </h4>
            <div class="edit_product">
                <form id="add_type" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group">
                            <label for="">Tên loại sản phẩm</label>
                            <input type="text" name="Name" value="">
                            <button class="btn btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['Name'];
            Type::postType($name);
            echo '<script>
                window.location.href = "index.php?src=admin/type/lst_type";
            </script>';
        }
        ?>
    </div>
</div>
<?php
require 'src/admin/layout/footer.php';
?>