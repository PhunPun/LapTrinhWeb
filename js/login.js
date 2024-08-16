const loginBox = document.getElementById('login-box');
const registerBox = document.getElementById('register-box');
const showRegister = document.getElementById('show-register');
const showLogin = document.getElementById('show-login');
// form đăng nhập
let w;

function supportlg() {
  w = window.open(
    "Login.html",
    "lg",
    "width=500, height=500, top=50,left=600"
  );
  w.focus();
}

// Ẩn form Đăng nhập và hiện form Đăng ký khi trang load
window.onload = () => {
    // Kiểm tra nếu có thông tin đăng ký trong localStorage
    const registeredUsername = localStorage.getItem('registeredUsername');
    if (registeredUsername) {
        loginBox.style.display = 'block';
        registerBox.style.display = 'none';
        document.getElementById('login-username').value = registeredUsername;
        document.getElementById('login-password').focus();
        localStorage.removeItem('registeredUsername');
    } else {
        registerBox.style.display = 'block';
        loginBox.style.display = 'none';
    }
};

showRegister.addEventListener('click', () => {
    loginBox.style.display = 'none';
    registerBox.style.display = 'block';
});

showLogin.addEventListener('click', () => {
    registerBox.style.display = 'none';
    loginBox.style.display = 'block';
});

// Xử lý đăng ký người dùng
document.getElementById('register-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('register-username').value;
    
    // Lưu tên đăng nhập vào localStorage và hiển thị thông báo
    localStorage.setItem('registeredUsername', username);
    alert("Đăng ký thành công! Vui lòng đăng nhập.");
    loginBox.style.display = 'block';
    registerBox.style.display = 'none';
});

// Xử lý đăng nhập
document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('login-username').value;
    const registeredUsername = localStorage.getItem('registeredUsername');

    // Kiểm tra xem người dùng đã đăng ký chưa
    if (username !== registeredUsername) {
        alert("Tên đăng nhập không tồn tại. Vui lòng đăng ký trước.");
        registerBox.style.display = 'block';
        loginBox.style.display = 'none';
    } else {
        // Lưu thông tin đăng nhập vào localStorage
        localStorage.setItem('username', username);
        
        
        // Thay thế chữ "Đăng Nhập" trên trang Home
        const userDisplay = window.opener.document.getElementById('user-display');
        if (userDisplay) {
            userDisplay.textContent = username;
        }
        
        // Đóng cửa sổ đăng nhập
        window.close();
    }
});

