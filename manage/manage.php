<?php
include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
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

        /* Đảm bảo các hàng có chiều cao bằng nhau */
        table td {
            height: 150px;
            background-color: #fff;
            vertical-align: middle; /* Đảm bảo nội dung nằm giữa */
        }

        /* Màu nền xen kẽ cho các hàng */
        tr:nth-child(even) td {
            background-color: #f9f9f9;
        }

        /* Style cho ảnh để không bị méo */
        img {
            width: 100px;
            height: 100px;
            object-fit: cover; /* Đảm bảo ảnh không bị méo */
            border-radius: 5px;
        }

        /* Style cho nút hành động */
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

        /* Responsive styling */
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
    </style>
</head>
<body>

<h1>Danh sách sản phẩm</h1>

<?php
// Truy vấn toàn bộ sản phẩm
$sql = "SELECT * FROM all_product_cat";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Chủng Loại</th>
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
    
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row['id_cat'] . "</td>
            <td>" . $row['chung_loai'] . "</td>
            <td>" . $row['ten_meo'] . "</td>
            <td><img src='" . $row['anh'] . "' alt='Ảnh sản phẩm'></td>
            <td>" . $row['price'] . "</td>
            <td>" . $row['tuoi'] . "</td>
            <td>" . $row['can_nang'] . "</td>
            <td>" . ($row['sex'] == 1 ? 'Đực' : 'Cái') . "</td>
            <td>" . $row['nguon_goc'] . "</td>
            <td>" . ($row['vaccin_4_benh'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['vaccin_dai'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['vaccin_phuc_mac'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['tay_giun'] == 1 ? 'Có' : 'Không') . "</td>
            <td>" . ($row['an_hien'] == '1' ? 'Hiện' : 'Ẩn') . "</td>
            <td class='actions'>
                <form action='../manage/delete_product.php' method='post'>
                    <input type='hidden' name='id_cat' value='" . $row['id_cat'] . "'>
                    <input type='submit' value='Xóa'>
                </form>
                <form action='../manage/toggle_visibility.php' method='post'>
                    <input type='hidden' name='id_cat' value='" . $row['id_cat'] . "'>
                    <input type='submit' value='" . ($row['an_hien'] == '1' ? 'Ẩn' : 'Hiện') . "'>
                </form>
            </td>
        </tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<p>Không có sản phẩm nào.</p>";
}

$conn->close();
?>

</body>
</html>
