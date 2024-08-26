<!------------------------------------ ket noi database------------------------------------>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../images/icon-title.png" type="image/x-icon">
        <title>Mặt hàng</title>
        <link rel="stylesheet" href="../Homes/styleHome.css">
        <link rel="stylesheet" href="../Product/styleProduct.css">
        <script src="../Product/Product.js"></script>
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
    </head>

<body>
    <!------------------------------------ header ------------------------------------>

    <?php
        include "../view/Header.php";
    ?>
      <!------------------------------------ section ------------------------------------>
    <section>
        <div class="product-body-column">
            <!------------------------------------ menu left ------------------------------------>
            <div class="product-menu">
                <ul class="product-subMenu1">
                    <li>
                        <a href="#" >
                            <div class="product-menu-domestic-foreign fonrt-Roboto_Slab product-active-menu">Mèo trong nước</div>
                        </a>
                        <ul class="product-subMenu2">
                            <li><a class="menu-kind fonrt-Roboto_Slab product-active-menu" onclick="scrollSectionToView('domestic1')">Mèo Mướp</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('domestic2')">Mèo Vàng</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" >
                            <div class="product-menu-domestic-foreign fonrt-Roboto_Slab">Mèo nhập khẩu</div>
                        </a>
                        <ul class="product-subMenu2">
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign1')">Mèo tai cụp</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign2')">Mèo Ai Cập Sphynx</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign3')">Mèo Anh lông ngắn</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign4')">Mèo Anh lông dài</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign5')">Mèo Ba Tư</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign6')">Mèo chân ngắn Munchkin</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign7')">Mèo Ragdoll</a></li>
                            <li><a class="menu-kind fonrt-Roboto_Slab" onclick="scrollSectionToView('foreign8')">Mèo Xiêm</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!------------------------------------ main ------------------------------------>
            <div class="product-main-option-over">
                <div class="product-domestic-and-foreign">
                    <div class="product-domestic">
                        <div id="domestic1" class="product-main-option">
                            <div class="content-product-name">
                                <h1>Mèo Mướp</h1>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    
                                    <div class="product-section-option">
                                        <a href="../KindOf/KindOf.php">
                                            <div class="product-section-option-img">
                                                <img src="../Product/images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="../ViewProduct/ViewProduct.php">
                                            <div class="product-section-option-img">
                                                <img src="../Product/images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="../connect.php">
                                            <div class="product-section-option-img">
                                                <img src="../Product/images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../Product/images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../Product/images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../Product/images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <div class="slideshow-see-more fade">
                                                    <img src="../Product/images/slideshow-seemore-1.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../Product/images/slideshow-seemore-2.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../Product/images/slideshow-seemore-3.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../Product/images/slideshow-seemore-4.jpg" alt="anh 1">
                                                </div>
                                                <div class="text-slideshow-see-more">Nhấn để xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="domestic2" class="product-main-option">
                            <div class="content-product-name">
                                <h1>Mèo vàng</h1>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-1.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-2.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-3.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-4.jpg" alt="anh 1">
                                                </div>
                                                <div class="text-slideshow-see-more">Nhấn để xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
               
                <div class="product-domestic-and-foreign">
                    <div class="product-foreign">
                        <div id="foreign1" class="product-main-option">
                            <div class="content-product-name">
                                <h1>Mèo Ai Cập Sphynx</h1>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-1.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-2.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-3.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-4.jpg" alt="anh 1">
                                                </div>
                                                <div class="text-slideshow-see-more">Nhấn để xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div id="foreign2" class="product-main-option">
                            <div class="content-product-name">
                                <h1>Mèo Anh lông ngắn</h1>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-1.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-2.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-3.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-4.jpg" alt="anh 1">
                                                </div>
                                                <div class="text-slideshow-see-more">Nhấn để xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div id="foreign3" class="product-main-option">
                            <div class="content-product-name">
                                <h1>Mèo Anh lông dài</h1>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-1.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-2.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-3.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-4.jpg" alt="anh 1">
                                                </div>
                                                <div class="text-slideshow-see-more">Nhấn để xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div id="foreign4" class="product-main-option">
                            <div class="content-product-name">
                                <h1>Mèo Ba Tư</h1>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-1.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-2.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-3.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-4.jpg" alt="anh 1">
                                                </div>
                                                <div class="text-slideshow-see-more">Nhấn để xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div id="foreign5" class="product-main-option">
                            <div class="content-product-name">
                                <h1>Mèo chân ngắn Munchkin</h1>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-1.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-2.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-3.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-4.jpg" alt="anh 1">
                                                </div>
                                                <div class="text-slideshow-see-more">Nhấn để xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div id="foreign6" class="product-main-option">
                            <div class="content-product-name">
                                <h1>Mèo Ragdoll</h1>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-1.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-2.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-3.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-4.jpg" alt="anh 1">
                                                </div>
                                                <div class="text-slideshow-see-more">Nhấn để xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div id="foreign7" class="product-main-option">
                            <div class="content-product-name">
                                <h1>Mèo tai cụp</h1>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-1.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-2.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-3.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-4.jpg" alt="anh 1">
                                                </div>
                                                <div class="text-slideshow-see-more">Nhấn để xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div id="foreign8" class="product-main-option">
                            <div class="content-product-name">
                                <h1>Mèo Xiêm</h1>
                            </div>
                            <div class="product-section">
                                <div class="product-section-over">
                                    
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart" >
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-option">
                                        <a href="">
                                            <div class="product-section-option-img">
                                                <img src="../images/product.jpg" alt="product">
                                                <div class="product-gif-new">
                                                    <img src="../images/gif-new.gif" alt="new">
                                                </div>
                                                <div class="hover-add-cart-product">
                                                    <div class="product-add-cart">
                                                        <img src="../images/cart-add-product.png" alt="cart">
                                                    </div>
                                                    <div class="add-transition-icon-cart">
                                                        <img src="../images/add-cart.png" alt="add">
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="product-section-option-name">
                                                <div class="product-id"> id: M0001</div>
                                                <div class="product-name"> Mèo anh lông ngắn xám đực</div>
                                                <div class="product-price">15.000.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-section-see-more-over">
                                        <div class="product-section-see-more">
                                            <div class="slideshow-see-more-container">
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-1.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-2.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-3.jpg" alt="anh 1">
                                                </div>
                                                <div class="slideshow-see-more fade">
                                                    <img src="../images/slideshow-seemore-4.jpg" alt="anh 1">
                                                </div>
                                                <div class="text-slideshow-see-more">Nhấn để xem thêm</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-contact">
                <div class="right-contact-over">
                    <img src="../images/gif-meo-right.gif" alt="gif-meo-right">
                    <div class="right-contact-main-over">
                        <div class="right-contact-main">
                            <div class="right-email">
                                <div class="right-text-none-email">
                                    <div class="text-right-ehz"><a href="mailto:2251120313@ut.edu.vn">Email</a></div>
                                </div>
                                <img src="../images/icon-right-email.png" alt="icon-right-email">
                            </div>
                            <div class="right-hotline">
                                <div class="right-text-none-hotline">
                                    <div class="text-right-ehz"><a href="https://zalo.me/0869801744">Hotline</a></div>
                                </div>
                                <img src="../images/icon-right-hotline.png" alt="icon-right-hotline">
                            </div>
                            <div class="right-zalo">
                                <div class="right-text-none-zalo">
                                    <div class="text-right-ehz"><a href="https://zalo.me/0869801744">Zalo</a></div>
                                </div>
                                <img src="../images/icon-right-zalo.png" alt="icon-right-zalo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!------------------------------------ footer ------------------------------------>

    <?php
        include "../view/Footer.php";
    ?>

    <script src="../Product/Product.js"></script>
</body>
</html>
