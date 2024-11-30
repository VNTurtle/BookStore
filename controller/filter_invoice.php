<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $startDate = $input['start_date'] ?? null;
    $endDate = $input['end_date'] ?? null;

    if ($startDate && $endDate) {
        $statistics = Invoice::getRevenueByDate($startDate, $endDate);

        $totalRevenue = 0;
        $completedOrders = 0;
        $canceledOrders = 0;

        foreach ($statistics as $data) {
            $totalRevenue += $data['total_revenue'];
            $completedOrders += $data['total_quantity_sold'];
        }

        echo json_encode([
            'totalRevenue' => $totalRevenue,
            'completedOrders' => $completedOrders,
            'canceledOrders' => $canceledOrders,
        ]);
    } else {
        echo json_encode(['error' => 'Invalid date range']);
    }
}

?>