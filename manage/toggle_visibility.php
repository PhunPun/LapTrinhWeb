<?php
include "../connect.php";

if (isset($_POST['id_cat'])) {
    $id_cat = $_POST['id_cat'];

    // Lấy trạng thái hiện tại của sản phẩm
    $sql_get = "SELECT an_hien FROM all_product_cat WHERE id_cat = ?";
    $stmt_get = $conn->prepare($sql_get);
    $stmt_get->bind_param("s", $id_cat);
    $stmt_get->execute();
    $result = $stmt_get->get_result();
    $row = $result->fetch_assoc();
    
    $new_visibility = ($row['an_hien'] == '1') ? '0' : '1'; // Đổi trạng thái

    // Cập nhật trạng thái
    $sql_update = "UPDATE all_product_cat SET an_hien = ? WHERE id_cat = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("ss", $new_visibility, $id_cat);
    $stmt_update->execute();
    
    $stmt_get->close();
    $stmt_update->close();
    $conn->close();

    // Quay về trang danh sách sản phẩm
    header("../../LapTrinhWeb/manage/manage.php");
    exit();
}
?>
