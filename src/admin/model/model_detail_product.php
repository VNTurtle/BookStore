<?php
require 'src/admin/layout/menu.php';
require 'src/admin/layout/header.php';
require_once('API/Product.php');
if (isset($_GET['id'])) {
    $bookId = $_GET['id'];
}

$modelbook = Product::getProductById($bookId);

if (count($modelbook) > 0) {
    $NameBook = $modelbook[0]['Name'];
    $model = $modelbook[0]['Model'];
    $modelBin = $modelbook[0]['ModelBin'];
    $cameraState = [
        'alpha' => $modelbook[0]['Alpha'],
        'beta' => $modelbook[0]['Beta'],
        'radius' => $modelbook[0]['Radius'],
        'target' => [
            'x' => $modelbook[0]['Target_x'],
            'y' => $modelbook[0]['Target_y'],
            'z' => $modelbook[0]['Target_z']
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

$modelName = Product::sanitizeFilename(Product::removeAccents($NameBook));
if ($model != null) {
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

<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <input id="ModelId" type="hidden" name="Model" value="<?php echo $modelbook[0]['IdModel'] ?>">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Sản Phẩm /</span> Edit Model Sản Phẩm
        </h4>
        <div class="card">
            <?php
            if ($modelbook[0]['Model'] != null) {
            ?>
                <input id="Model" type="hidden" name="model" value="<?php echo $gltfFilePath ?>">
                <input id="Model_bin" type="hidden" name="modelbin" value="<?php echo $binFilePath ?>">
            
            <h4 class="py-3 mb-4" style="color: #656cf9;">
                <span class="text-muted fw-light">  -  Tên Sản Phẩm /</span>  <?php echo $modelbook[0]['Name'] ?>
            </h4>
            <div class="model3D d-flex justify-content-center" >
                <canvas id="3D-Book" class="3DImage" height="400" width="400"></canvas>
            </div>
            <button id="Edit_model" class="btn btn-primary" style="margin: 1rem auto;">
                <a href="index.php?src=admin/model/edit_model_product&id=<?php echo $bookId ?>" style="color: #fff;">
                    Sửa góc nhìn
                </a>
            </button>
            <?php
            }
            else{
            ?>
            <button id="add_model" class="btn btn-primary" style="margin: 1rem auto;">
                <a href="index.php?src=admin/model/add_model_product&id=<?php echo $bookId ?>" style="color: #fff;">
                    Thêm model
                </a>
            </button>
            <button id="Edit_model" class="btn btn-primary" style="margin: 1rem auto;">
                <a href="index.php?src=admin/model/add_modelIMG_product&id=<?php echo $bookId ?>" style="color: #fff;">
                    Thêm model IMG
                </a>
            </button>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<?php
require 'src/admin/layout/footer.php';
?>
<script src="assets/babylon/babylon.js"></script>
<script src="assets/babylon/babylonjs.loaders.min.js"></script>
