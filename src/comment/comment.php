<?php
require_once(__DIR__ . '/../../API/Comment.php');
session_start();

// Kiểm tra tham số id
$productId = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : null;
if (!$productId) {
    die("Thiếu tham số sản phẩm. Vui lòng kiểm tra lại URL.");
}

if (isset($_SESSION['Id']) && ($_SESSION['Id']) > 0) {
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $iduser = $_SESSION['Id'];
        $idsp = $_POST['idsp']; // Sửa lỗi từ 'id' thành 'idsp'
        $noidung = $_POST['noidung'];

        // Sửa lỗi undefined function
        Comment::thembl($iduser, $idsp, $noidung);
    }
    $dsbl = Comment::showbl($productId);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/comment.css">
</head>
    <body>
        <div class="customer-reviews row pb-4 py-4">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form action="src/comment/comment.php?id=<?= $productId ?>" method="post">
                    <div class="form-group">
                        <label for="formcontent">Nội dung:</label>
                        <textarea required rows="8" id="formcontent" name="noidung" class="form-control" placeholder="Viết bình luận..."></textarea>
                    </div>
                    <input type="hidden" name="idsp" value="<?= $productId ?>"> <!-- Sử dụng idsp -->
                    <input class="btn btn-primary" type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
                <?php if (!empty($dsbl)) : ?>
                    <?php foreach ($dsbl as $bl) : ?>
                        <?php
                        // Lấy thông tin bình luận từ cơ sở dữ liệu
                        $fullName = htmlspecialchars($bl['UserName']); // Tên đầy đủ người dùng
                        $content = nl2br(htmlspecialchars($bl['Content'])); // Nội dung bình luận
                        ?>

                        <div class="comment-item">
                            <div class="item-reviewer">
                                <div class="comment-item-user">
                                    <img src="assets/img/avatar/user.jpg" alt="" class="comment-item-user-img"> <!-- Đường dẫn ảnh avatar người dùng -->
                                    <span><b><?= $fullName ?></b></span>
                                </div>
                                <div class="comment-content">
                                    <p><?= $content ?></p> <!-- Nội dung bình luận -->
                                </div>
                            </div>
                        </div>
                        <hr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <p>Không có bình luận nào.</p>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </body>

    </html>
<?php
} else {
    echo "<a href='index.php?src=user/login' target='_parent'>Bạn vui lòng đăng nhập</a>";
}
?>