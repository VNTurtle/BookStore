<?php
// Bao gồm file kết nối cơ sở dữ liệu
include_once '../../Function/db.php'; // Đảm bảo đường dẫn đúng

// Kiểm tra kết nối cơ sở dữ liệu
if (!$conn) {
    die("Không thể kết nối tới cơ sở dữ liệu.");
}

// Lấy từ khóa tìm kiếm từ URL
$timkiem = isset($_GET['timkiem']) ? $_GET['timkiem'] : '';

// Khởi tạo biến $result để tránh lỗi
$result = null;

// Kiểm tra nếu từ khóa tìm kiếm không trống
if (!empty($timkiem)) {
    // Thực hiện truy vấn cơ sở dữ liệu để tìm kiếm các kết quả
    $sql = "SELECT * FROM book WHERE Name LIKE ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $searchTerm = '%' . $timkiem . '%';
        $stmt->bind_param("s", $searchTerm);
        $stmt->execute();
        $result = $stmt->get_result();
    } else {
        echo "Lỗi chuẩn bị truy vấn SQL.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả tìm kiếm</title>
</head>
<body>
    <h1>Kết quả tìm kiếm cho "<?php echo htmlspecialchars($timkiem); ?>"</h1>
    <?php if ($result && $result->num_rows > 0): ?>
        <ul>
            <?php while ($row = $result->fetch_assoc()): ?>
                <li><?php echo htmlspecialchars($row['Name']); ?> - <?php echo htmlspecialchars($row['price']); ?>đ</li>
            <?php endwhile; ?>
        </ul>
    <?php else: ?>
        <p>Không tìm thấy kết quả nào.</p>
    <?php endif; ?>

    <?php
    // Đóng kết nối
    if ($stmt) {
        $stmt->close();
    }
    if ($conn) {
        $conn->close();
    }
    ?>
</body>
</html>
