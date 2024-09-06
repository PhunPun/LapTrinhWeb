<?php
include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>
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
    <h1>Sửa Sản Phẩm</h1>
    <?php
            if(isset($_POST['fix_cat'])){
                $id_cat = $_POST['fix_cat'];
                $sql = "SELECT * FROM all_product_cat where id_cat = '$id_cat'";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
            ?>
    <form action="xuly_fix.php" method="post" enctype="multipart/form-data">
        <label for="chung_loai">Chủng Loại:</label>
        <select id="chung_loai" name="chung_loai" required>
            <option value="muop" <?php echo ( $row['chung_loai'] == 'muop') ? 'selected' : ''; ?>>Mèo Mướp</option>
            <option value="vang" <?php echo ( $row['chung_loai'] == 'vang') ? 'selected' : ''; ?>>Mèo Vàng</option>
            <option value="tai_cup" <?php echo ($row['chung_loai'] == 'tai_cup') ? 'selected' : ''; ?>>Mèo tai cụp</option>
            <option value="Ai Cập Sphynx" <?php echo ($row['chung_loai'] == 'Ai Cập Sphynx') ? 'selected' : ''; ?>>Ai Cập Sphynx</option>
            <option value="Anh Lông Ngắn" <?php echo ($row['chung_loai'] == 'Anh Lông Ngắn') ? 'selected' : ''; ?>>Anh Lông Ngắn</option>
            <option value="Anh Lông Dài" <?php echo ($row['chung_loai'] == 'Anh Lông Dài') ? 'selected' : ''; ?>>Anh Lông Dài</option>
            <option value="Ba Tư" <?php echo ($row['chung_loai'] == 'Ba Tư') ? 'selected' : ''; ?>>Ba Tư</option>
            <option value="Chân Ngắn Munchkin" <?php echo ($row['chung_loai'] == 'Chân Ngắn Munchkin') ? 'selected' : ''; ?>>Chân Ngắn Munchkin</option>
            <option value="Ragdoll" <?php echo ($row['chung_loai'] == 'Ragdoll') ? 'selected' : ''; ?>>Ragdoll</option>
            <option value="Xiêm" <?php echo ( $row['chung_loai'] == 'Xiêm') ? 'selected' : ''; ?>>Mèo Xiêm</option>
        </select><br><br>

        <label for="id_cat">ID Cat:</label>
        <input type="text" id="id_cat" name="id_cat" value="<?php echo $row['id_cat'] ?>" required><br><br>

        <label for="ten_meo">Tên Mèo:</label>
        <input type="text" id="ten_meo" name="ten_meo" value="<?php echo $row['ten_meo'] ?>" required><br><br>

        <label for="anh">Ảnh:</label>
        <input type="file" id="anh" name="anh" accept="image/*"><br><br>

        <?php if (!empty($row['anh'])): ?>
            <p>Ảnh hiện tại:</p>
            <img src="<?php echo $row['anh']; ?>" alt="Ảnh hiện tại" style="width: 200px; height: 200px;">
        <?php endif; ?>

        <label for="price">Giá (vnd):</label>
        <input type="number" step="1000" min="0" id="price" name="price" value="<?php echo $row['price'] ?>" required><br><br>

        <label for="tuoi">Tuổi:</label>
        <input type="text" id="tuoi" name="tuoi" value="<?php echo $row['tuoi'] ?>" required><br><br>

        <label for="can_nang">Cân Nặng (kg):</label>
        <input type="number" step="0.1" min="0" id="can_nang" name="can_nang" value="<?php echo $row['can_nang'] ?>" required><br><br>

        <label for="sex">Giới Tính:</label>
        <select id="sex" name="sex" required>
            <option <?php echo ($row['sex'] == 1) ? 'selected' : ''; ?> value="1">Đực</option>
            <option <?php echo ($row['sex'] == 0) ? 'selected' : ''; ?> value="0">Cái</option>
        </select><br><br>

        <label for="nguon_goc">Nguồn Gốc:</label>
        <select id="nguon_goc" name="nguon_goc" required>
            <option <?php echo ($row['nguon_goc'] == 'Anh') ? 'selected' : ''; ?> value="Anh">Anh</option>
            <option <?php echo ($row['nguon_goc'] == 'Canada') ? 'selected' : ''; ?> value="Canada">Canada</option>
            <option <?php echo ($row['nguon_goc'] == 'Châu Âu') ? 'selected' : ''; ?> value="Châu Âu">Châu Âu</option>
            <option <?php echo ($row['nguon_goc'] == 'Hoa Kỳ') ? 'selected' : ''; ?> value="Hoa Kỳ">Hoa Kỳ</option>
            <option <?php echo ($row['nguon_goc'] == 'Nga') ? 'selected' : ''; ?> value="Nga">Nga</option>
            <option <?php echo ($row['nguon_goc'] == 'Nhật Bản') ? 'selected' : ''; ?> value="Nhật Bản">Nhật Bản</option>
            <option <?php echo ($row['nguon_goc'] == 'Pháp') ? 'selected' : ''; ?> value="Pháp">Pháp</option>
            <option <?php echo ($row['nguon_goc'] == 'Thái Lan') ? 'selected' : ''; ?> value="Thái Lan">Thái Lan</option>
            <option <?php echo ($row['nguon_goc'] == 'Trung Quốc') ? 'selected' : ''; ?> value="Trung Quốc">Trung Quốc</option>
            <option <?php echo ($row['nguon_goc'] == 'Việt Nam') ? 'selected' : ''; ?> value="Việt Nam">Việt Nam</option>
           
            <!-- Thêm các quốc gia khác nếu cần -->
        </select><br><br>

        <label for="vaccin_4_benh">Vaccin 4 Bệnh:</label>
        <select id="vaccin_4_benh" name="vaccin_4_benh" required>
            <option value="1" <?php echo ($row['vaccin_4_benh'] == 1) ? 'selected' : ''; ?>>Có</option>
            <option value="0" <?php echo ($row['vaccin_4_benh'] == 0) ? 'selected' : ''; ?>>Không</option>
        </select><br><br>

        <label for="vaccin_dai">Vaccin Dại:</label>
        <select id="vaccin_dai" name="vaccin_dai" required>
            <option value="1" <?php echo ($row['vaccin_dai'] == 1) ? 'selected' : ''; ?>>Có</option>
            <option value="0" <?php echo ($row['vaccin_dai'] == 0) ? 'selected' : ''; ?>>Không</option>
        </select><br><br>

        <label for="vaccin_phuc_mac">Vaccin Phúc Mạc:</label>
        <select id="vaccin_phuc_mac" name="vaccin_phuc_mac" required>
            <option value="1" <?php echo ($row['vaccin_phuc_mac'] == 1) ? 'selected' : ''; ?>>Có</option>
            <option value="0" <?php echo ($row['vaccin_phuc_mac'] == 0) ? 'selected' : ''; ?>>Không</option>
        </select><br><br>

        <label for="tay_giun">Tẩy Giun:</label>
        <select id="tay_giun" name="tay_giun" required>
            <option value="1" <?php echo ($row['tay_giun'] == 1) ? 'selected' : ''; ?>>Có</option>
            <option value="0" <?php echo ($row['tay_giun'] == 0) ? 'selected' : ''; ?>>Không</option>
        </select><br><br>

        <label for="additional_images">Thêm Ảnh:</label>
        <input type="file" id="additional_images" name="additional_images[]" accept="image/*" multiple><br><br>
        <?php
            }
            ?>
        <input type="submit" value="Cập nhật">
    </form>
</body>
</html>
