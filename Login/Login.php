<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/icon-title.png" type="image/x-icon">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./styleLogin.css">
    <script src="./Login.js" defer></script>
</head>
<body>
    <div class="form-container">
        <!-- Ẩn form Đăng nhập -->
        <div class="form-box" id="login-box" >
            <h2>Đăng nhập</h2>
            <form id="login-form" action="/php/login.php" method="post">
                <div class="input-group">
                    <label for="login-username">Tên đăng nhập</label>
                    <input type="text" id="login-username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="login-password">Mật khẩu</label>
                    <input type="password" id="login-password" name="password" required>
                </div>
                <button type="submit" >Đăng nhập</button>
                <p class="toggle-form">Bạn chưa có tài khoản? <a href="#" id="show-register">Đăng ký tại đây</a></p>
            </form>
        </div>

        <div class="form-box" id="register-box">
            <h2>Đăng ký</h2>
            <form id="register-form" action="/register" method="post">
                <div class="input-group">
                    <label for="register-username">Tên đăng nhập</label>
                    <input type="text" id="register-username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="register-password">Mật khẩu</label>
                    <input type="password" id="register-password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="register-phone">Số điện thoại</label>
                    <input type="tel" id="register-phone" name="phone" required>
                </div>
                <button type="submit">Đăng ký</button>
                <p class="toggle-form">Bạn đã có tài khoản? <a href="#" id="show-login">Đăng nhập tại đây</a></p>
            </form>
        </div>

        <!-- Phần hiển thị thông tin người dùng và nút đăng xuất -->
        <div id="user-info" style="display: none;">
            <h2>Thông tin người dùng</h2>
            <div class="input-group">
                <label for="user-username">Tên đăng nhập</label>
                <input type="text" id="user-username"  readonly>
            </div>
            <div class="input-group">
                <label for="user-email">Email</label>
                <input type="email" id="user-email" readonly>
            </div>
            <div class="input-group">
                <label for="user-phone">Số điện thoại</label>
                <input type="tel" id="user-phone" readonly>
            </div>
            <button id="logout-btn">Đăng xuất</button>
        </div>
    </div>
</body>
</html>
