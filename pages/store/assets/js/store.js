let cart = [];

function showOrderSummary() {
    const cartBox = document.querySelector('.cart-box');
    cartBox.scrollIntoView({ behavior: 'smooth' });
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
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    cartItems.innerHTML = ''; 

    let total = 0;

    cart.forEach(item => {
        const li = document.createElement('li');
        const subtotal = item.price * item.quantity;
        li.innerHTML = `${item.name} x${item.quantity} <span>₱${subtotal}</span>`;
        cartItems.appendChild(li);
        total += subtotal;
    });

    cartTotal.textContent = total;
}


document.addEventListener("DOMContentLoaded", function () {
  const categoryButtons = document.querySelectorAll(".menu-btn");
  const productCards = document.querySelectorAll(".product-card");

  categoryButtons.forEach(button => {
    button.addEventListener("click", () => {
      const category = button.getAttribute("data-category");

      // Highlight active button
      categoryButtons.forEach(btn => btn.classList.remove("active"));
      button.classList.add("active");

      // Filter products
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
  const cancelBtnMobile = document.getElementById("cancel-btn-mobile");

  // Toggle mobile category popup
  categoryToggle.addEventListener("click", () => {
    categoryPopup.classList.toggle("hidden");
  });

  // Toggle mobile cart popup
  cartToggle.addEventListener("click", () => {
    cartPopup.classList.toggle("hidden");
  });

  // Close when clicking outside content
  categoryPopup.addEventListener("click", (e) => {
    if (e.target === categoryPopup) categoryPopup.classList.add("hidden");
  });

  cartPopup.addEventListener("click", (e) => {
    if (e.target === cartPopup) cartPopup.classList.add("hidden");
  });

  // Cancel cart
  cancelBtnMobile.addEventListener("click", () => {
    cartPopup.classList.add("hidden");
  });
});
