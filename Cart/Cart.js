document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('#order-form form');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn form gửi đi mặc định
        
        // Kiểm tra các trường thông tin
        const name = document.getElementById('name').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const email = document.getElementById('email').value.trim();
        const address = document.getElementById('address').value.trim();
        const paymentMethod = document.querySelector('input[name="payment_method"]:checked');

        if (!name || !phone || !email || !address || !paymentMethod) {
            alert('Vui lòng nhập đầy đủ thông tin và chọn phương thức thanh toán.');
            return;
        }

        // Kiểm tra giỏ hàng có sản phẩm không
        if (cart.length === 0) {
            if (confirm('Giỏ hàng của bạn đang trống. Bạn có muốn xem sản phẩm để thêm vào giỏ hàng không?')) {
                // Chuyển hướng đến trang xem sản phẩm
                window.location.href = '../Product/Product.php'; 
            }
            return;
        }
        
        // Hiển thị thông báo thành công
        alert('Bạn đã đặt hàng thành công!');
        
        // Reset form và xóa giỏ hàng sau khi đặt hàng thành công
        form.reset();
        cart = [];
        updateCart();
        displayCartItems(); // Cập nhật giỏ hàng trống
    });

    // Lấy danh sách sản phẩm từ localStorage
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Hàm cập nhật giỏ hàng trong localStorage
    function updateCart() {
        localStorage.setItem('cart', JSON.stringify(cart));
    }

    // Hàm xử lý định dạng giá tiền để chuyển đổi thành số
    function formatPrice(price) {
        // Đảm bảo price là chuỗi trước khi gọi replace
        if (typeof price !== 'string') {
            price = price.toString();
        }
        
        return price.replace(/[^\d.-]/g, '');
    }

    function formatPriceDisplay(price) {
        return price.toLocaleString('vi-VN') + 'đ';
    }

    // Hàm hiển thị tổng tiền
    function updateTotalPrice() {
        const totalPriceElement = document.querySelector('.total-price');
        const totalPrice = cart.reduce((total, item) => {
            const price = parseFloat(formatPrice(item.price));
            return total + (price * item.quantity);
        }, 0);
        totalPriceElement.innerText = `Tổng tiền: ${formatPriceDisplay(totalPrice)}`;
    }

    // Hàm hiển thị thông tin sản phẩm trong giỏ hàng
    function displayCartItems() {
        const cartContainer = document.querySelector('.cart-items-container');
        cartContainer.innerHTML = '';

        if (cart.length === 0) {
            cartContainer.innerHTML = '<p>Giỏ hàng của bạn đang trống.</p>';
            document.querySelector('.total-price').innerText = ''; // Xóa tổng tiền khi giỏ hàng trống
            return;
        }

        cart.forEach((item, index) => {
            const cartItem = document.createElement('div');
            cartItem.classList.add('cart-item');
            
            cartItem.innerHTML = `
                <div class="cart-item-image" style="background-image: url(${item.image});"></div>
                <div class="cart-item-details">
                    <h3>${item.name}</h3>
                    <p>Mã sản phẩm: ${item.id}</p>
                    <p>Giá: ${formatPriceDisplay(item.price)}<sup>đ</sup></p>
                    <div class="quantity-controls">
                        <button class="decrease-quantity">-</button>
                        <span>${item.quantity}</span>
                        <button class="increase-quantity">+</button>
                    </div>
                    <button class="remove-item">Xóa</button>
                </div>
            `;

            cartContainer.appendChild(cartItem);

            // Xử lý nút tăng số lượng
            cartItem.querySelector('.increase-quantity').addEventListener('click', () => {
                item.quantity += 1;
                cartItem.querySelector('.quantity-controls span').innerText = item.quantity;
                updateCart();
                updateTotalPrice();
            });

            // Xử lý nút giảm số lượng
            cartItem.querySelector('.decrease-quantity').addEventListener('click', () => {
                if (item.quantity > 1) {
                    item.quantity -= 1;
                    cartItem.querySelector('.quantity-controls span').innerText = item.quantity;
                } else {
                    cart.splice(index, 1);
                    cartItem.remove();
                }
                updateCart();
                updateTotalPrice();
            });

            // Xử lý nút xóa sản phẩm
            cartItem.querySelector('.remove-item').addEventListener('click', () => {
                cart.splice(index, 1);
                cartItem.remove();
                updateCart();
                updateTotalPrice();
            });
        });

        updateTotalPrice();
    }

    // Gọi hàm hiển thị khi trang được load
    displayCartItems();
});
