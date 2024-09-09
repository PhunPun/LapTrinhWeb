<?php
header('Content-Type: application/json');
$input = json_decode(file_get_contents('php://input'), true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['status' => 'error', 'message' => 'Dữ liệu không hợp lệ']);
    exit;
}
$conn = new mysqli('localhost', 'root', '', 'shop_db');
if ($conn->connect_error) {
    echo json_encode(['status' => 'error', 'message' => 'Kết nối cơ sở dữ liệu thất bại']);
    exit;
}
$name = $conn->real_escape_string($input['name']);
$email = $conn->real_escape_string($input['email']);
$total_price = $conn->real_escape_string($input['total_price']);
$address = $conn->real_escape_string($input['address']);
$payment_method = $conn->real_escape_string($input['payment_method']);
$note = $conn->real_escape_string($input['note']);
// Chèn đơn hàng vào cơ sở dữ liệu
$sql_order = "INSERT INTO orders (customer_name, customer_email, order_date, status, total, shipping_address, payment_method, note) 
              VALUES (?, ?, NOW(), 'Pending', ?, ?, ?, ?)";
$stmt_order = $conn->prepare($sql_order);
$stmt_order->bind_param('sssiss', $name, $email, $total_price, $address, $payment_method, $note);
if ($stmt_order->execute()) {
    // Lấy ID của đơn hàng vừa chèn
    $order_id = $stmt_order->insert_id;
    // Chèn các sản phẩm vào đơn hàng
    $sql_order_items = "INSERT INTO order_items (order_id, product_id, quantity, price) VALUES (?, ?, ?, ?)";
    $stmt_order_items = $conn->prepare($sql_order_items);
    foreach ($input['items'] as $item) {
        $product_id = $conn->real_escape_string($item['id']);
        $quantity = $conn->real_escape_string($item['quantity']);
        $price = $conn->real_escape_string($item['price']);
        // Kiểm tra xem sản phẩm có tồn tại trong cơ sở dữ liệu không
        $sql_check_product = "SELECT COUNT(*) FROM products WHERE product_id = ?";
        $stmt_check_product = $conn->prepare($sql_check_product);
        $stmt_check_product->bind_param('i', $product_id);
        $stmt_check_product->execute();
        $stmt_check_product->bind_result($count);
        $stmt_check_product->fetch();
        $stmt_check_product->close();
        if ($count > 0) {
            // Chèn sản phẩm vào đơn hàng
            $stmt_order_items->bind_param('iiid', $order_id, $product_id, $quantity, $price);
            $stmt_order_items->execute();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Sản phẩm không tồn tại: ID ' . $product_id]);
            exit;
        }
    }
    echo json_encode(['status' => 'success', 'message' => 'Đặt hàng thành công']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Lỗi khi đặt hàng']);
}
$stmt_order->close();
$stmt_order_items->close();
$conn->close();
?>
