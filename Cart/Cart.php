<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="../images/icon-title.png" type="image/x-icon" />
        <title>Giỏ Hàng</title>
        <link rel="stylesheet" href="../Homes/styleHome.css" />
        <!------------------------------------ Thư viện font chữ ------------------------------------>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lexend+Zetta:wght@100..900&family=Pacifico&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Play:wght@400;700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Cherry+Bomb+One&family=Honk&family=Lobster&family=Play:wght@400;700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <!------------------------------------ Thư viện icon ------------------------------------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        <!------------------------------------ đường dẫn ------------------------------------>
        <script src="../Login/Login.js" defer></script></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="./Cart.css">
        <script src="../Login/Login.js" defer></script></script>
        <script src="./Cart.js" defer></script>
    </head>
<body>
    <!------------------------------------ header ------------------------------------>
    <?php
      include "../view/Header.php";
    ?>
<!------------------------------------ Body ------------------------------------>
<section id="order-section">
  <div id="order-form">
      <h2>Thông tin đặt hàng</h2>
      <form action="/submit-order" method="post">
          <div class="form-group">
              <label for="name">Họ và tên:</label>
              <input type="text" id="name" name="name" required>
          </div>
  
          <div class="form-group">
              <label for="phone">Số điện thoại:</label>
              <input type="tel" id="phone" name="phone" required>
          </div>
  
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
          </div>
  
          <div class="form-group">
              <label for="address">Địa chỉ giao hàng:</label>
              <textarea id="address" name="address" rows="3" required></textarea>
          </div>
  
          <div class="form-group">
              <label for="note">Ghi chú đơn hàng:</label>
              <textarea id="note" name="note" rows="3"></textarea>
          </div>
  
          <section id="payment-methods">
              <h3>Phương thức thanh toán:</h3>
              <div class="payment-method">
                  <input type="radio" id="cod" name="payment_method" value="cod" required>
                  <label for="cod">
                      <i class="fas fa-truck"></i> Thanh toán khi nhận hàng (COD)
                  </label>
              </div>
              <div class="payment-method">
                  <input type="radio" id="momo" name="payment_method" value="momo">
                  <label for="momo">
                      <img src="./Images/LogoMoMo.png" width="35px" height="35px" alt=""> MoMo
                  </label>
              </div>
              <div class="payment-method">
                  <input type="radio" id="zalopay" name="payment_method" value="zalopay">
                  <label for="zalopay">
                      <img src="./Images/zalopay.png" width="54" alt="">ZaloPay
                  </label>
              </div>
              <div class="payment-method">
                  <input type="radio" id="qr" name="payment_method" value="qr">
                  <label for="qr">
                      <i class="fas fa-qrcode"></i> QR Code
                  </label>
              </div>
              <div class="payment-method">
                  <input type="radio" id="bank-transfer" name="payment_method" value="bank-transfer">
                  <label for="bank-transfer">
                      <i class="fas fa-university"></i> Chuyển khoản ngân hàng
                  </label>
              </div>
          </section>
  
          <button type="submit">Đặt hàng</button>
      </form>
  </div>
   <div id="cart-info">
        <h2>Thông tin giỏ hàng</h2>
        <!-- Bổ sung nội dung giỏ hàng ở đây -->
        <div class="cart-items-container">
          <!-- Sản phẩm sẽ được hiển thị ở đây -->
      </div>
      <div class="total-price">
        <!-- Tổng tiền sẽ được hiển thị ở đây -->
    </div>      
    </div>
</section>

<!------------------------------------ footer ------------------------------------>
    <?php
      include "../view/Footer.php";
    ?>
</body>
</html>