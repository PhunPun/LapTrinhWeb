<?php
ob_start(); // Bắt đầu output buffering
include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th, table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }

        table th {
            background-color: #4CAF50;
            color: white;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        table td {
            height: 150px;
            background-color: #fff;
            vertical-align: middle;
        }

        tr:nth-child(even) td {
            background-color: rgba(210, 142, 87, 0.300);
        }

        img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 5px;
        }

        .actions form {
            display: inline-block;
        }

        .actions input[type="submit"] {
            padding: 5px 10px;
            background-color: #f44336;
            border: none;
            color: white;
            cursor: pointer;
            margin-right: 5px;
            border-radius: 3px;
        }

        .actions input[type="submit"]:hover {
            background-color: #d32f2f;
        }

        .actions input[type="submit"][value="Ẩn"], 
        .actions input[type="submit"][value="Hiện"] {
            background-color: #2196F3;
        }

        .actions input[type="submit"][value="Ẩn"]:hover,
        .actions input[type="submit"][value="Hiện"]:hover {
            background-color: #1976D2;
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            table th {
                background-color: transparent;
                position: absolute;
                top: -9999px;
                left: -9999px;
            }

            tr {
                margin-bottom: 20px;
            }

            td {
                border: none;
                position: relative;
                padding-left: 50%;
                text-align: left;
            }

            td:before {
                position: absolute;
                top: 10px;
                left: 10px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
            }

            td:nth-of-type(1):before { content: "ID"; }
            td:nth-of-type(2):before { content: "Chủng Loại"; }
            td:nth-of-type(3):before { content: "Tên Mèo"; }
            td:nth-of-type(4):before { content: "Ảnh"; }
            td:nth-of-type(5):before { content: "Giá"; }
            td:nth-of-type(6):before { content: "Tuổi"; }
            td:nth-of-type(7):before { content: "Cân Nặng"; }
            td:nth-of-type(8):before { content: "Giới Tính"; }
            td:nth-of-type(9):before { content: "Nguồn Gốc"; }
            td:nth-of-type(10):before { content: "Vaccin 4 Bệnh"; }
            td:nth-of-type(11):before { content: "Vaccin Dại"; }
            td:nth-of-type(12):before { content: "Vaccin Phức Mạc"; }
            td:nth-of-type(13):before { content: "Tẩy Giun"; }
            td:nth-of-type(14):before { content: "Trạng Thái"; }
            td:nth-of-type(15):before { content: "Hành Động"; }
        }

        #backToTopBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 0;
            z-index: 1000;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            transition: opacity 0.3s;
        }

        #backToTopBtn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h1>Danh sách sản phẩm</h1>
<?php
// Xử lý việc xóa sản phẩm
if (isset($_POST['delete_cat'])) {
    $id_cat = $_POST['delete_cat'];
    $sql = "DELETE FROM all_product_cat WHERE id_cat = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id_cat);
    if ($stmt->execute()) {
        // Xóa thành công, làm mới trang
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    } else {
        echo "Xóa thất bại: " . $stmt->error;
    }
    $stmt->close();
}

// Xử lý việc thay đổi trạng thái ẩn/hiện
if (isset($_POST['toggle_cat'])) {
    $id_cat = $_POST['toggle_cat'];
    
    // Lấy trạng thái hiện tại của sản phẩm
    $sql_get = "SELECT an_hien FROM all_product_cat WHERE id_cat = ?";
    $stmt_get = $conn->prepare($sql_get);
    $stmt_get->bind_param("s", $id_cat);
    $stmt_get->execute();
    $result_get = $stmt_get->get_result();

    // Kiểm tra nếu có dữ liệu trả về
    if ($result_get->num_rows > 0) {
        $row = $result_get->fetch_assoc();
        $new_visibility = ($row['an_hien'] == '1') ? '0' : '1'; // Đổi trạng thái

        // Cập nhật trạng thái
        $sql_update = "UPDATE all_product_cat SET an_hien = ? WHERE id_cat = ?";
        $stmt_update = $conn->prepare($sql_update);
        $stmt_update->bind_param("ss", $new_visibility, $id_cat);

        if ($stmt_update->execute()) {
            // Cập nhật thành công, làm mới trang
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        } else {
            echo "Cập nhật trạng thái thất bại: " . $stmt_update->error;
        }

        $stmt_update->close();
    } else {
        echo "Không tìm thấy sản phẩm với ID này.";
    }

    $stmt_get->close();
}

// Truy vấn toàn bộ sản phẩm
if (isset($_POST['filter_chung_loai'])) {
    $filter_chung_loai = $conn->real_escape_string($_POST['filter_chung_loai']);
    if ($filter_chung_loai == '*') {
        $sql = "SELECT * FROM all_product_cat WHERE CAST(SUBSTRING(id_cat,2) AS UNSIGNED) % 10 = 0";
    } else {
        $sql = "SELECT * FROM all_product_cat WHERE CAST(SUBSTRING(id_cat,2) AS UNSIGNED) % 10 = 0 AND chung_loai = '$filter_chung_loai'";
    }
} else {
    $sql = "SELECT * FROM all_product_cat WHERE CAST(SUBSTRING(id_cat,2) AS UNSIGNED) % 10 = 0";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <thead>
    <tr>
        <th>ID</th>
        "?>

        <th>
            <form action="" method="post">
                <label for="filter_chung_loai">Chủng loại</label>
                <select name="filter_chung_loai" id="filter_chung_loai" onchange="this.form.submit()">
                    <option value="*" <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == '*') ? 'selected' : ''; ?>>Tất cả</option>
                    <option value="muop" <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'muop') ? 'selected' : ''; ?>>Mèo Mướp</option>
                    <option value="vang" <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'vang') ? 'selected' : ''; ?>>Mèo Vàng</option>
                    <option value="tai_cup" <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'tai_cup') ? 'selected' : ''; ?>>Mèo tai cụp</option>
                    <option value="Xiêm" <?php echo (isset($_POST['filter_chung_loai']) && $_POST['filter_chung_loai'] == 'Xiêm') ? 'selected' : ''; ?>>Mèo Xiêm</option>
                    <!-- Thêm các giống mèo khác tùy ý -->
                </select>
            </form>                 

        </th>
        <?php
        echo "
        <th>Tên Mèo</th>
        <th>Ảnh</th>
        <th>Giá</th>
        <th>Tuổi</th>
        <th>Cân Nặng</th>
        <th>Giới Tính</th>
        <th>Nguồn Gốc</th>
        <th>Vaccin 4 Bệnh</th>
        <th>Vaccin Dại</th>
        <th>Vaccin Phức Mạc</th>
        <th>Tẩy Giun</th>
        <th>Trạng Thái</th>
        <th>Hành Động</th>
    </tr>
    </thead>
    <tbody>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . htmlspecialchars($row['id_cat']) . "</td>
            <td>" . htmlspecialchars($row['chung_loai']) . "</td>
            <td>" . htmlspecialchars($row['ten_meo']) . "</td>
            <td><img src='" . htmlspecialchars($row['anh']) . "' alt='Ảnh sản phẩm'></td>
            <td>" . htmlspecialchars($row['price']) . "</td>
            <td>" . htmlspecialchars($row['tuoi']) . "</td>
            <td>" . htmlspecialchars($row['can_nang']) . "</td>
            <td>" . ($row['sex'] == 1 ? 'Đực' : 'Cái') . "</td>
            <td>" . htmlspecialchars($row['nguon_goc']) . "</td>
            <td>" . ($row['vaccin_4_benh'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['vaccin_dai'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['vaccin_phuc_mac'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['tay_giun'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['an_hien'] == '1' ? 'Hiện' : 'Ẩn') . "</td>
            <td class='actions'>
                <form action='' method='post'>
                    <input type='hidden' name='delete_cat' value='" . htmlspecialchars($row['id_cat']) . "'>
                    <input type='submit' value='Xóa'>
                </form>
                <form action='../fix_product/fix_product.php' method='post'>
                    <input type='hidden' name='fix_cat' value='" . htmlspecialchars($row['id_cat']) . "'>
                    <input type='submit' value='Sửa'>
                </form>
                <form action='' method='post'>
                    <input type='hidden' name='toggle_cat' value='" . htmlspecialchars($row['id_cat']) . "'>
                    <input type='submit' value='" . ($row['an_hien'] == '1' ? 'Ẩn' : 'Hiện') . "'>
                </form>
            </td>
        </tr>";
    }

    echo "</tbody></table>";
} else {
    echo "<p>Không có sản phẩm nào.</p>";
}

$conn->close(); // Đóng kết nối cơ sở dữ liệu
ob_end_flush(); // Kết thúc output buffering và gửi nội dung đến trình duyệt
?>
<button id="backToTopBtn" title="Quay lại đầu trang">^</button>
<script>
    // Lấy phần tử nút
    var backToTopBtn = document.getElementById("backToTopBtn");

    // Hiển thị nút khi người dùng cuộn xuống 200px từ đầu trang
    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
            backToTopBtn.style.display = "block";
        } else {
            backToTopBtn.style.display = "none";
        }
    }

    // Khi nhấn vào nút, cuộn trở lại đầu trang
    backToTopBtn.onclick = function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
</script>
</body>
</html>
