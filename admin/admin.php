<!------------------------------------ kết nối database ------------------------------------>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon-title.png" type="image/x-icon">
    <title>Admin</title>
    <link rel="stylesheet" href="../Homes/styleHome.css">
    <link rel="stylesheet" href="../admin/admin.css">
    <!-- Thư viện font chữ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Pacifico&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <!-- Thư viện icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <!-- header -->

    <!-- section -->
    <section>
        <div class="product-body-column">

            <!-- menu left -->
            <div class="product-menu">
                <div class="user-icon">
                    <i class="fas fa-user-circle"></i>
                    <span class="username">Admin</span>
                </div>
                <ul class="product-subMenu1">
                    <li>
                        <ul class="product-subMenu2">
                            <li><a class="menu-kind fonrt-Roboto_Slab product-active-menu"
                                    onclick="loadIframe('../statistical/statistical.php',this)">Thống kê</a></li>
                            <li>
                                <a class="menu-kind fonrt-Roboto_Slab" onclick="choose(this)">Quản lí sản phẩm</a>
                                <ul class="product-subMenu3 manage_product">
                                    <li><a class="menu-kind1 fonrt-Roboto_Slab"
                                            onclick="loadIframe1('../manage/manage.php',this)">Danh sách sản phẩm</a>
                                    </li>
                                    <li><a class="menu-kind1 fonrt-Roboto_Slab"
                                            onclick="loadIframe1('../add_product/add_product.php',this)">Thêm sản
                                            phẩm</a></li>
                                </ul>
                            </li>
                            <li><a class="menu-kind fonrt-Roboto_Slab">Quản lý đơn hàng</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab">Quản lý khách hàng</a></li>
                        </ul>
                    </li>
                </ul>
                <div>
                    <a href="../Homes/Home.php" class="logo">
                        <img src="../images/logo.png" alt="" />
                    </a>
                </div>
            </div>
            <!-- main -->
            <div class="product-main-option-over">
                <div class="space"></div>
                <iframe id="content_iframe" src="../statistical/statistical.php" width="99%" height="100%" frameborder="0"
                    allowfullscreen></iframe>
            </div>
        </div>
    </section>
        
    <!-- footer -->
    <script>
    function loadIframe(page, element) {
        document.getElementById('content_iframe').src = page;
        const menuItems = document.querySelectorAll('.product-subMenu2 .menu-kind');
        menuItems.forEach(item => item.classList.remove('product-active-menu'));
        element.classList.add('product-active-menu');
        document.querySelector('.manage_product').style.display = "none";
    }

    function loadIframe1(page, element) {
        document.getElementById('content_iframe').src = page;
        const menuItems = document.querySelectorAll('.product-subMenu3 .menu-kind1');
        menuItems.forEach(item => item.classList.remove('product-active-menu'));
        element.classList.add('product-active-menu');
    }

    function choose(element) {
        const menuItems = document.querySelectorAll('.product-subMenu2 .menu-kind');
        menuItems.forEach(item => item.classList.remove('product-active-menu'));
        element.classList.add('product-active-menu');
        document.querySelector('.manage_product').style.display = "block";
    }
    </script>
</body>

</html>