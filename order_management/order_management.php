<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "laptrinhweb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM don_hang";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Đơn Hàng</title>
    <link rel="stylesheet" href="./order_management.css">
</head>
<body>
    <header>
        <h1>Quản Lý Đơn Hàng</h1>
    </header>
    <main>
        <div id="order-management">
            <table id="order-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Product Code</th>
                        <th>Order Date</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Shipping Address</th>
                        <th>Payment Method</th>
                        <th>Note</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['nguoi_nhan']}</td>
                                    <td>{$row['phone']}</td>
                                    <td>{$row['ma_san_pham']}</td>
                                    <td>{$row['order_date']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['trang_thai']}</td>
                                    <td>{$row['total']}</td>
                                    <td>{$row['shipping_address']}</td>
                                    <td>{$row['payment_method']}</td>
                                    <td>{$row['note']}</td>
                                    <td class='action-cell'>";
                            if ($row['trang_thai'] == 'Đang chờ xác nhận') {
                                echo "<button class='confirm-btn' data-id='{$row['id']}'>Confirm</button>";
                            } else {
                                echo "<button class='detail-btn' data-id='{$row['id']}'>Detail</button>";
                            }
                            echo "<button class='delete-btn' data-id='{$row['id']}'>Delete</button>
                                  </td>
                                  </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='12'>No orders found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="./order_management.js"></script>
</body>
</html>
