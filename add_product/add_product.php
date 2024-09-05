<?php
include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f9f9f9;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input[type="text"], input[type="number"], select, input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Thêm Sản Phẩm</h1>
    <form action="xuly_add.php" method="post" enctype="multipart/form-data">
        <label for="chung_loai">Chủng Loại:</label>
        <select id="chung_loai" name="chung_loai" required>
            <option value="muop">Mướp</option>
            <option value="vang">Vàng</option>
            <option value="tai_cup">Tai Cụp</option>
        </select><br><br>

        <label for="id_cat">ID Cat:</label>
        <input type="text" id="id_cat" name="id_cat" required><br><br>

        <label for="ten_meo">Tên Mèo:</label>
        <input type="text" id="ten_meo" name="ten_meo" required><br><br>

        <label for="anh">Ảnh:</label>
        <input type="file" id="anh" name="anh" accept="image/*" required><br><br>

        <label for="price">Giá (vnd):</label>
        <input type="number" step="1000" min="0" id="price" name="price" required><br><br>

        <label for="tuoi">Tuổi:</label>
        <input type="text" id="tuoi" name="tuoi" required><br><br>

        <label for="can_nang">Cân Nặng (kg):</label>
        <input type="number" step="0.1" min="0" id="can_nang" name="can_nang" required><br><br>

        <label for="sex">Giới Tính:</label>
        <select id="sex" name="sex" required>
            <option value="1">Đực</option>
            <option value="0">Cái</option>
        </select><br><br>

        <label for="nguon_goc">Nguồn Gốc:</label>
        <select id="nguon_goc" name="nguon_goc" required>
            <option value="vietnam">Việt Nam</option>
            <option value="thailand">Thái Lan</option>
            <option value="japan">Nhật Bản</option>
            <option value="usa">Mỹ</option>
            <option value="uk">Anh</option>
            <!-- Thêm các quốc gia khác nếu cần -->
        </select><br><br>

        <label for="vaccin_4_benh">Vaccin 4 Bệnh:</label>
        <select id="vaccin_4_benh" name="vaccin_4_benh" required>
            <option value="1">Có</option>
            <option value="0">Không</option>
        </select><br><br>

        <label for="vaccin_dai">Vaccin Dại:</label>
        <select id="vaccin_dai" name="vaccin_dai" required>
            <option value="1">Có</option>
            <option value="0">Không</option>
        </select><br><br>

        <label for="vaccin_phuc_mac">Vaccin Phức Mạc:</label>
        <select id="vaccin_phuc_mac" name="vaccin_phuc_mac" required>
            <option value="1">Có</option>
            <option value="0">Không</option>
        </select><br><br>

        <label for="tay_giun">Tẩy Giun:</label>
        <select id="tay_giun" name="tay_giun" required>
            <option value="1">Có</option>
            <option value="0">Không</option>
        </select><br><br>

        <label for="additional_images">Thêm Ảnh:</label>
        <input type="file" id="additional_images" name="additional_images[]" accept="image/*" multiple><br><br>

        <input type="submit" value="Thêm Sản Phẩm">
    </form>
</body>
</html>
