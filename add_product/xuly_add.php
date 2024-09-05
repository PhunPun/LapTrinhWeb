<?php
include "../connect.php";
// Kiểm tra xem tệp có được tải lên không và không có lỗi nào
if (isset($_FILES['anh']) && $_FILES['anh']['error'] == UPLOAD_ERR_OK) {
    // Lấy thông tin tệp chính
    $fileTmpPath = $_FILES['anh']['tmp_name'];
    $fileName = $_FILES['anh']['name'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Danh sách các loại tệp ảnh được phép
    $allowedExts = array('jpg');

    if (in_array($fileExtension, $allowedExts)) {
        // Lấy ID từ form
        $id_cat = $_POST['id_cat'];
        
        // Đặt đường dẫn lưu trữ ảnh chính với tên tệp là ID và phần mở rộng của tệp gốc
        $uploadFileDir = '../images/'; // Đảm bảo thư mục này tồn tại và có quyền ghi
        $dest_file_path = $uploadFileDir . $id_cat . '.' . $fileExtension;

        // Di chuyển tệp từ thư mục tạm đến thư mục đích
        if (move_uploaded_file($fileTmpPath, $dest_file_path)) {
            // Lấy dữ liệu từ form
            $chung_loai = $_POST['chung_loai'];
            $ten_meo = $_POST['ten_meo'];
            $anh = '../images/'.$id_cat . '.' . $fileExtension;  // Lưu tên tệp chính là ID với phần mở rộng
            $price = $_POST['price'];
            $tuoi = $_POST['tuoi'];
            $can_nang = $_POST['can_nang'];
            $sex = $_POST['sex'];
            $nguon_goc = $_POST['nguon_goc'];
            $vaccin_4_benh = $_POST['vaccin_4_benh'];
            $vaccin_dai = $_POST['vaccin_dai'];
            $vaccin_phuc_mac = $_POST['vaccin_phuc_mac'];
            $tay_giun = $_POST['tay_giun'];

            // Chuẩn bị câu lệnh SQL
            $sql = "INSERT INTO all_product_cat (id_cat, chung_loai, ten_meo, anh, price, tuoi, can_nang, sex, nguon_goc, vaccin_4_benh, vaccin_dai, vaccin_phuc_mac, tay_giun)
            VALUES ('$id_cat', '$chung_loai', '$ten_meo', '$anh', $price, '$tuoi', $can_nang, $sex, '$nguon_goc', $vaccin_4_benh, $vaccin_dai, $vaccin_phuc_mac, $tay_giun)";

            // Thực thi câu lệnh SQL và kiểm tra kết quả
            if ($conn->query($sql) === TRUE) {
                echo "Sản phẩm đã được thêm thành công!<br>";

                // Xử lý ảnh bổ sung
                if (isset($_FILES['additional_images']) && $_FILES['additional_images']['error'][0] == UPLOAD_ERR_OK) {
                    $totalFiles = count($_FILES['additional_images']['name']);

                    for ($i = 0; $i < $totalFiles; $i++) {
                        $fileTmpPath = $_FILES['additional_images']['tmp_name'][$i];
                        $fileName = $_FILES['additional_images']['name'][$i];
                        $fileNameCmps = explode(".", $fileName);
                        $fileExtension = strtolower(end($fileNameCmps));

                        if (in_array($fileExtension, $allowedExts)) {
                            // Tạo ID mới cho ảnh bổ sung
                            $id_cat_temp = intval(substr($id_cat, 1)); // Loại bỏ ký tự đầu tiên và chuyển đổi phần còn lại thành số nguyên
                            $newFileId = $id_cat_temp + $i + 1;
                            
                            // Đảm bảo định dạng với số không đứng đầu
                            $newFileIdFormatted = str_pad($newFileId, 4, '0', STR_PAD_LEFT);
                            $newid_cat = 'M'.$newFileIdFormatted;
                            $newFileName = '../images/M' . $newFileIdFormatted . '.' . $fileExtension;
                            $dest_file_path = $uploadFileDir . $newFileName;
                            
                            $sql = "INSERT INTO all_product_cat (id_cat, chung_loai, ten_meo, anh, price, tuoi, can_nang, sex, nguon_goc, vaccin_4_benh, vaccin_dai, vaccin_phuc_mac, tay_giun)
                            VALUES ('$newid_cat', '$chung_loai', '$ten_meo', '$newFileName', $price, '$tuoi', $can_nang, $sex, '$nguon_goc', $vaccin_4_benh, $vaccin_dai, $vaccin_phuc_mac, $tay_giun)";
                            $conn->query($sql);
                            if (move_uploaded_file($fileTmpPath, $dest_file_path)) {
                                echo "Ảnh bổ sung $newFileName đã được tải lên thành công!<br>";
                            } else {
                                echo 'Có lỗi khi di chuyển ảnh bổ sung đến thư mục đích.';
                            }
                        } else {
                            echo 'Chỉ cho phép tải lên các tệp ảnh có định dạng jpg.';
                        }
                    }
                }
            } else {
                echo "Lỗi: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo 'Có lỗi khi di chuyển tệp chính đến thư mục đích.';
        }
    } else {
        echo 'Chỉ cho phép tải lên các tệp ảnh có định dạng jpg.';
    }
} else {
    echo 'Có lỗi xảy ra khi tải lên tệp chính.';
}


?>
