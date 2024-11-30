document.getElementById("filterButton").addEventListener("click", function () {
    const startDate = document.getElementById("startDate").value;
    const endDate = document.getElementById("endDate").value;

    if (!startDate || !endDate) {
        alert("Vui lòng chọn cả hai ngày.");
        return;
    }

    fetch(`controller/filter_invoice.php`, {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
        },
        body: JSON.stringify({ start_date: startDate, end_date: endDate }),
    })
        .then((response) => response.json())
        .then((data) => {
            // Xử lý và hiển thị kết quả
            document.getElementById("statisticsResult").innerHTML = `
                <p>Tổng doanh thu: ${data.totalRevenue} VNĐ</p>
                <p>Đơn hàng hoàn thành: ${data.completedOrders}</p>
                <p>Đơn hàng hủy: ${data.canceledOrders}</p>
            `;
        })
        .catch((error) => console.error("Error:", error));
});
