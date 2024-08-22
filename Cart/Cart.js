document.addEventListener("DOMContentLoaded", function() {
    const cartItemsContainer = document.querySelector(".cart-items");
    const totalPriceElement = document.getElementById("total-price");
    let cart = [];

    document.querySelectorAll(".add-to-cart").forEach(button => {
        button.addEventListener("click", addToCart);
    });

    function addToCart(event) {
        const productCard = event.target.closest(".product-card");
        const productName = productCard.getAttribute("data-name");
        const productPrice = parseFloat(productCard.getAttribute("data-price"));

        const existingItem = cart.find(item => item.name === productName);

        if (existingItem) {
            existingItem.quantity++;
        } else {
            const cartItem = {
                name: productName,
                price: productPrice,
                quantity: 1
            };
            cart.push(cartItem);
        }
        renderCart();
    }

    function renderCart() {
        cartItemsContainer.innerHTML = "";
        let total = 0;

        cart.forEach(item => {
            const cartItemElement = document.createElement("div");
            cartItemElement.classList.add("cart-item");

            cartItemElement.innerHTML = `
                <span class="item-name">${item.name}</span>
                <span class="item-price">$${item.price.toFixed(2)}</span>
                <input type="number" class="item-quantity" value="${item.quantity}" min="1">
                <button class="remove-item">Remove</button>
            `;

            cartItemsContainer.appendChild(cartItemElement);

            total += item.price * item.quantity;

            cartItemElement.querySelector(".item-quantity").addEventListener("change", function(event) {
                updateQuantity(item.name, event.target.value);
            });

            cartItemElement.querySelector(".remove-item").addEventListener("click", function() {
                removeItem(item.name);
            });
        });

        totalPriceElement.textContent = total.toFixed(2);
    }

    function updateQuantity(productName, quantity) {
        const item = cart.find(item => item.name === productName);
        if (item) {
            item.quantity = parseInt(quantity);
            renderCart();
        }
    }

    function removeItem(productName) {
        cart = cart.filter(item => item.name !== productName);
        renderCart();
    }
});
