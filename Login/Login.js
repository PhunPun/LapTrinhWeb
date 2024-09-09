var w;
// Mở cửa sổ hỗ trợ
function support() {
  w = window.open(
    "../../LapTrinhWeb/Support/Support.php",
    "sp",
    "width=500, height=500, top=50, left=600"
  );
  w.focus();
}
// Mở cửa sổ đăng nhập
function supportlg() {
  w = window.open(
    "../../LapTrinhWeb/Login/Login.php",
    "lg",
    "width=500, height=500, top=50, left=600"
  );
  w.focus();
}
window.onload = () => {
  const loginBox = document.getElementById("login-box");
  const registerBox = document.getElementById("register-box");
  const showRegister = document.getElementById("show-register");
  const showLogin = document.getElementById("show-login");
  const userInfo = document.getElementById("user-info");
  const userUsername = document.getElementById("user-username");
  const userEmail = document.getElementById("user-email");
  const userPhone = document.getElementById("user-phone");
  const logoutBtn = document.getElementById("logout-btn");
  // Kiểm tra xem người dùng đã đăng nhập chưa qua session (PHP)
  fetch("./check_session.php")
    .then((response) => response.json())
    .then((data) => {
      if (data.loggedIn) {
        loginBox.style.display = "none";
        registerBox.style.display = "none";
        userInfo.style.display = "block";
        userUsername.value = data.username;
        userEmail.value = data.email;
        userPhone.value = data.phone;
      } else {
        loginBox.style.display = "block";
        registerBox.style.display = "none";
      }
    })
    .catch((error) => {
      console.error("Error checking session:", error);
      alert("Có lỗi xảy ra khi kiểm tra phiên làm việc.");
    });
  if (showRegister && showLogin) {
    showRegister.addEventListener("click", () => {
      loginBox.style.display = "none";
      registerBox.style.display = "block";
    });
    showLogin.addEventListener("click", () => {
      registerBox.style.display = "none";
      loginBox.style.display = "block";
    });
  }
  if (logoutBtn) {
    logoutBtn.addEventListener("click", () => {
      fetch("./logout.php")
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            userInfo.style.display = "none";
            loginBox.style.display = "block";
            registerBox.style.display = "none";
            // Cập nhật thông tin người dùng trên cửa sổ chính
            if (window.opener) {
              const userDisplay =
                window.opener.document.getElementById("user-display");
              if (userDisplay) {
                userDisplay.innerHTML = "Đăng Nhập";
              }
            }
            location.reload();
          } else {
            alert("Lỗi khi đăng xuất.");
          }
        })
        .catch((error) => {
          console.error("Error logging out:", error);
          alert("Có lỗi xảy ra khi đăng xuất.");
        });
    });
  }
  document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.getElementById("login-form");
    loginForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const formData = new FormData(loginForm);
      fetch("login.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => response.text())
        .then((data) => {
          if (data.includes("Đăng nhập thành công!")) {
            const username = formData.get("username");
            // Lưu thông tin vào sessionStorage
            sessionStorage.setItem("username", username);
            // Nếu đăng nhập thành công, thay đổi tên hiển thị và đóng cửa sổ
            if (window.opener) {
              const userDisplay =
                window.opener.document.getElementById("user-display");
              if (userDisplay) {
                userDisplay.innerHTML = formData.get("username"); // Hiển thị tên đăng nhập
                window.opener.location.reload(); // Refresh trang cha để cập nhập
              }
              window.close();
            }
          } else {
            alert(data); // Hiển thị lỗi hoặc thông báo không chính xác
          }
        })
        .catch((error) => {
          console.error("Có lỗi xảy ra khi đăng nhập:", error);
          alert("Có lỗi xảy ra khi đăng nhập.");
        });
    });
  });
};
