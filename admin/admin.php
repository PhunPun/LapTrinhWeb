<!------------------------------------ ket noi database------------------------------------>
<?php
    include "../connect.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/icon-title.png" type="image/x-icon">
        <title>Admin</title>
        <link rel="stylesheet" href="../Homes/styleHome.css">
        <link rel="stylesheet" href="../admin/admin.css">
        <!------------------------------------ Thư viện font chữ ------------------------------------>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <!------------------------------------ Thư viện icon ------------------------------------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="../Login/Login.js" defer></script>
        <script src="../admin/admin.js" defer></script>
    </head>

<body>
    <!------------------------------------ header ------------------------------------>
    <header>
      <a href="../Homes/Home.php" class="logo">
        <img src="../images/logo.png" alt="" />
      </a>
      <div class="other">
        <div class="other23">
          <li class="other2">
            <a onclick="supportlg()"><i class="fas fa-user"></i></a>
            <span id="user-display" onclick="supportlg()">Đăng Nhập</span>
          </li>
        </div>
      </div>
    </header>
      <!------------------------------------ section ------------------------------------>
    <section>
        <div class="product-body-column">
            <!------------------------------------ menu left ------------------------------------>
            <div class="product-menu">
                <ul class="product-subMenu1">
                    <li>
                        <ul class="product-subMenu2">
                            <li><a class="menu-kind fonrt-Roboto_Slab  product-active-menu" onclick="loadIframe('#',this)">Thống kê</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="choose(this)">Quản lí sản phẩm</a>
                                <ul class="product-subMenu3 manage_product">
                                <li><a class="menu-kind1 fonrt-Roboto_Slab" onclick="loadIframe('#',this)">Danh sách sản phẩm</a></li>
                                <li><a class="menu-kind1 fonrt-Roboto_Slab" onclick="loadIframe('#',this)">Thêm sản phẩm</a></li>
                                </ul>
                            </li>
                            <li><a class="menu-kind fonrt-Roboto_Slab">Quản lý đơn hàng</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab">Quản lý khách hàng</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <!------------------------------------ main ------------------------------------>
            <div class="product-main-option-over">
              <div class="space">
              </div>
                <iframe id="content_iframe" src="../Homes/Home.php" width="100%" height="100%" frameborder="0"  allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!------------------------------------ footer ------------------------------------>
</body>
</html>
