<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="assets/img/logo-web.jpg">
    <link rel="stylesheet" href="assets/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/sclick/css/slick.min.css">
    <script>
        function toggleButton() {
            const input = document.getElementById('timkiem');
            const button = document.getElementById('btn');
            button.disabled = input.value.trim() === '';
        }
    </script>
</head>

<body>
    <?php
    $page = isset($_GET['src']) ? $_GET['src'] : 'home';
    // Xây dựng đường dẫn đến tệp
    $pageFile = "src/{$page}.php";

    if (file_exists($pageFile)) {
        require $pageFile;
    } else {
        echo "Page not found!";
    }
    ?>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/sclick/js/slick.min.js"></script>
    <script src="assets/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
    <script src="assets/fontawesome/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>
    <?php
// Bao gồm tệp tin JavaScript riêng của từng trang nếu có
if (isset($page)) {
    $pageScript = "assets/js/{$page}.js";
    
    if (file_exists($pageScript)) {
        echo "<script src='{$pageScript}'></script>";
    }
}
    ?>
    <script src="assets/js/Product_detail.js"></script>
</body>

</html>