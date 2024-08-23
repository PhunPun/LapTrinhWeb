
var w;

//form yêu cầu hỗ trợ
function support() {
    w = window.open(
      "/Support/Support.html",
      "sp",
      "width=500, height=500, top=50,left=600"
    );
    w.focus();
}

//form đăng nhập
function supportlg() {
    w = window.open(
      "/Login/Login.html",
      "lg",
      "width=500, height=500, top=50,left=600"
    );
    w.focus();
}

window.onload = () => {
    const loginBox = document.getElementById('login-box');
    const registerBox = document.getElementById('register-box');
    const showRegister = document.getElementById('show-register');
    const showLogin = document.getElementById('show-login');
    const loginForm = document.getElementById('login-form');
    const registerForm = document.getElementById('register-form');

    // Kiểm tra xem người dùng đã đăng nhập chưa
    const storedUsername = localStorage.getItem('username');
    if (storedUsername) {
        // Nếu đã đăng nhập, ẩn các form và hiển thị thông tin người dùng
        loginBox.style.display = 'none';
        registerBox.style.display = 'none';

        const userDisplay = window.opener ? window.opener.document.getElementById('user-display') : null;
        if (userDisplay) {
            userDisplay.innerHTML = `Chào mừng, <span id="username">${storedUsername}</span>! <button id="logout-btn">Đăng xuất</button>`;
            
            // Xử lý đăng xuất
            const logoutBtn = window.opener ? window.opener.document.getElementById('logout-btn') : null;
            if (logoutBtn) {
                logoutBtn.addEventListener('click', () => {
                    localStorage.removeItem('username');
                    userDisplay.innerHTML = 'Đăng Nhập';
                    window.close();
                });
            }
        }
    } else {
        if (loginBox && registerBox && showRegister && showLogin) {
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

            showRegister.addEventListener('click', () => {
                loginBox.style.display = 'none';
                registerBox.style.display = 'block';
            });

            showLogin.addEventListener('click', () => {
                registerBox.style.display = 'none';
                loginBox.style.display = 'block';
            });
        }
    }

    // Xử lý đăng ký người dùng
    if (registerForm) {
        registerForm.addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('register-username').value;
            const password = document.getElementById('register-password').value;
            const email = document.getElementById('register-email').value;
            const phone = document.getElementById('register-phone').value;

            // Kiểm tra mật khẩu phải có ít nhất 8 ký tự
            if (password.length < 8) {
                alert("Mật khẩu phải có ít nhất 8 ký tự.");
                document.getElementById('register-password').focus();
                return;
            }

            // Kiểm tra định dạng email
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            if (!emailPattern.test(email)) {
                alert("Vui lòng nhập email hợp lệ.");
                document.getElementById('register-email').focus();
                return;
            }

            // Kiểm tra định dạng số điện thoại (ví dụ: phải có 10 số)
            const phonePattern = /^\d{10}$/;
            if (!phonePattern.test(phone)) {
                alert("Vui lòng nhập số điện thoại hợp lệ (10 số).");
                document.getElementById('register-phone').focus();
                return;
            }

            // Lưu tên đăng nhập vào localStorage và hiển thị thông báo
            localStorage.setItem('registeredUsername', username);
            alert("Đăng ký thành công! Vui lòng đăng nhập.");
            loginBox.style.display = 'block';
            registerBox.style.display = 'none';
        });
    }

    // Xử lý đăng nhập
    if (loginForm) {
        loginForm.addEventListener('submit', function(event) {
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
                const userDisplay = window.opener ? window.opener.document.getElementById('user-display') : null;
                if (userDisplay) {
                    userDisplay.innerHTML = `<span id="username">${username}</span>! <button id="logout-btn">Đăng xuất</button>`;
                    
                    // Xử lý đăng xuất
                    const logoutBtn = window.opener ? window.opener.document.getElementById('logout-btn') : null;
                    if (logoutBtn) {
                        logoutBtn.addEventListener('click', () => {
                            localStorage.removeItem('username');
                            userDisplay.innerHTML = 'Đăng Nhập';
                            window.close();
                        });
                    }
                }

                // Đóng cửa sổ đăng nhập
                window.close();
            }
        });
    }
}
      
      

