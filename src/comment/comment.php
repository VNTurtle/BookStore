<?php
require_once(__DIR__ . '/../../API/Comment.php');
// Kiểm tra tham số id
$productId = isset($_GET['id']) ? htmlspecialchars($_GET['id']) : null;
if (!$productId) {
    die("Thiếu tham số sản phẩm. Vui lòng kiểm tra lại URL.");
}
$loginUrl = "index.php?src=user/login&id=" . $productId;

session_start();
if (isset($_SESSION['Id']) && ($_SESSION['Id']) > 0) {
    if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
        $iduser = $_SESSION['Id'];
        $idsp = $_POST['idsp'];
        $noidung = $_POST['noidung'];

        Comment::thembl($iduser, $idsp, $noidung);
    }
} else {
?>
    <div class="alert alert-warning">
        <h4 class="alert-heading">Bạn chưa đăng nhập!</h4>
        <p>Vui lòng đăng nhập để có thể bình luận về sản phẩm.</p>
        <hr>
        <p>
            <a href="<?php echo $loginUrl; ?>" target="_parent" class="btn btn-primary">Đăng nhập</a>
        </p>
    </div>
<?php
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
            <?php
            if (isset($_SESSION['Id']) && ($_SESSION['Id']) > 0) {
            ?>
                <form method="post">
                    <div class="form-group">
                        <label for="formcontent">Nội dung:</label>
                        <textarea required rows="8" id="formcontent" name="noidung" class="form-control" placeholder="Viết bình luận..."></textarea>
                    </div>
                    <input type="hidden" name="idsp" value="<?= $productId ?>">
                    <input class="btn btn-primary" type="submit" name="guibinhluan" value="Gửi bình luận">
                </form>
            <?php
            } ?>
            <?php if (!empty($dsbl)) : ?>
                <?php foreach ($dsbl as $bl) : ?>
                    <?php
                    $fullName = htmlspecialchars($bl['UserName']);
                    $content = nl2br(htmlspecialchars($bl['Content']));
                    $time = htmlspecialchars($bl['Date']);
                    ?>

                    <div class="comment-item">
                        <div class="item-reviewer">
                            <div class="comment-item-user">
                                <img src="assets/img/avatar/user.jpg" alt="" class="comment-item-user-img">
                                <span><b><?= $fullName ?></b></span>
                            </div>
                            <div class="comment-time">
                                <p><?= $time ?></p>
                            </div>
                            <div class="comment-content">
                                <p><?= $content ?></p>
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