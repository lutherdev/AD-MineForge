let cart = [];

function showOrderSummary() {
    const cartBox = document.querySelector('.cart-box');
    if (cartBox) {
        cartBox.scrollIntoView({ behavior: 'smooth' });
    }
}

function addToCart(id, item, price, category = "default") {
    let itemExists = false;

    for (let i = 0; i < cart.length; i++) {
        if (cart[i].id === id && cart[i].category === category) {
            cart[i].quantity++;
            itemExists = true;
            break;
        }
    }

    if (!itemExists) {
        cart.push({ id: id, name: item, price: price, quantity: 1, category: category });
    }

    updateCart();
    showOrderSummary();
}

function updateCart() {
    const cartItemsDesktop = document.getElementById('cart-items');
    const cartTotalDesktop = document.getElementById('cart-total');
    const cartItemsMobile = document.getElementById('cart-items-mobile');
    const cartTotalMobile = document.getElementById('cart-total-mobile');

    if (cartItemsDesktop) cartItemsDesktop.innerHTML = '';
    if (cartItemsMobile) cartItemsMobile.innerHTML = '';

    let total = 0;

    cart.forEach(item => {
        const subtotal = item.price * item.quantity;

        if (cartItemsDesktop) {
            const liDesktop = document.createElement('li');
            liDesktop.innerHTML = `${item.name} x${item.quantity} <span>₱${subtotal}</span>`;
            cartItemsDesktop.appendChild(liDesktop);
        }

        if (cartItemsMobile) {
            const liMobile = document.createElement('li');
            liMobile.innerHTML = `${item.name} x${item.quantity} <span>₱${subtotal}</span>`;
            cartItemsMobile.appendChild(liMobile);
        }
        total += subtotal;
    });

    if (cartTotalDesktop) cartTotalDesktop.textContent = total;
    if (cartTotalMobile) cartTotalMobile.textContent = total;
}

document.addEventListener('DOMContentLoaded', function () {
    const checkoutBtn = document.getElementById('checkout-btn');
    const cancelBtn = document.getElementById('cancel-btn');
    const checkoutBtnMobile = document.getElementById('checkout-btn-mobile');
    const cancelBtnMobile = document.getElementById('cancel-btn-mobile');

    const handleCheckout = () => {
        if (cart.length === 0) {
            alert('Your cart is empty!');
            return;
        }
        fetch('/handlers/checkout.handler.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            credentials: 'include',
            body: JSON.stringify({ cart })
        })
        .then(response => response.json())
        .then(result => {
            if (result.message) {
                alert(result.message);
                cart = [];
                updateCart();
            } else {
                alert('Checkout error: ' + (result.error || 'Unknown'));
            }
        })
        .catch(err => {
            console.error('Checkout failed:', err);
            alert('Checkout failed. Try again.');
        });
    };

    const handleCancel = () => {
        if (confirm('Are you sure you want to cancel your order?')) {
            cart = [];
            updateCart();
        }
    };

    if (checkoutBtn) checkoutBtn.addEventListener('click', handleCheckout);
    if (cancelBtn) cancelBtn.addEventListener('click', handleCancel);

    if (checkoutBtnMobile) checkoutBtnMobile.addEventListener('click', handleCheckout);
    if (cancelBtnMobile) cancelBtnMobile.addEventListener('click', handleCancel);
});

document.addEventListener("DOMContentLoaded", function () {
  const categoryButtons = document.querySelectorAll(".menu-btn");
  const productCards = document.querySelectorAll(".product-card");

  categoryButtons.forEach(button => {
    button.addEventListener("click", () => {
      const category = button.getAttribute("data-category");

      categoryButtons.forEach(btn => btn.classList.remove("active"));
      button.classList.add("active");

      productCards.forEach(card => {
        const cardCategory = card.getAttribute("data-category");

        if (category === "all" || cardCategory === category) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      });
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const categoryPopup = document.getElementById("mobile-category-popup");
  const categoryToggle = document.getElementById("mobile-category-toggle");

  const cartPopup = document.getElementById("mobile-cart-popup");
  const cartToggle = document.getElementById("mobile-cart-toggle");

  categoryToggle.addEventListener("click", () => {
    categoryPopup.classList.toggle("hidden");
  });

  cartToggle.addEventListener("click", () => {
    updateCart();
    cartPopup.classList.toggle("hidden");
  });

  categoryPopup.addEventListener("click", (e) => {
    if (e.target === categoryPopup) categoryPopup.classList.add("hidden");
  });

  cartPopup.addEventListener("click", (e) => {
    if (e.target === cartPopup) cartPopup.classList.add("hidden");
  });
});