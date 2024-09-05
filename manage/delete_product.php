<?php
include "../connect.php";

if (isset($_POST['id_cat'])) {
    $id_cat = $_POST['id_cat'];
    $sql = "DELETE FROM all_product_cat WHERE id_cat = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id_cat);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Quay về trang danh sách sản phẩm
    header("../../LapTrinhWeb/manage/manage.php");
    exit();
}
?>
