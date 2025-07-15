<section class="store-container" id="inventory">
  <div class="store-header">
    <h1>Miner's Ware</h1>
      <div class="leftside">
        <a href='/topup'><button class="topupbtn">TOP UP</button></a>
        <a href='/view-orders'><button class="ordersbtn">YOUR ORDERS</button></a>
        <div class="walet">
          <h1>Wallet: gold</h1>
        </div>
      </div>
    <div class="store-filters">
    </div>
  </div>

  <div class="store-main">
    <div class="sidebar">
      <div class="cart-image-wrapper desktop-cart">
        <aside class="cart-box">
          <h2>Cart</h2>
          <ul id="cart-items"></ul>
          <div class="total">Total: ₱<span id="cart-total">0</span></div>
          <div class='cart-buttons'>
            <div class='btn-cancel'><button id="checkout-btn">CHECKOUT</button></div>
            <div class='btn-cancel'><button id="cancel-btn">CANCEL</button></div>
          </div>
        </aside>
      </div>

      <div class="cart-image-wrapper desktop-category">
        <aside class="category">
          <div class="store-filters">
            <button class="menu-btn active" data-category="all">All</button>
            <button class="menu-btn" data-category="ore">Ore</button>
            <button class="menu-btn" data-category="tools">Tools</button>
            <button class="menu-btn" data-category="gear">Gear</button>
          </div>
        </aside>
      </div>
    </div>

    <div class="products-image-wrapper">
      <div class="products-grid">
          <div class="product-card">
          <img src="">
          <div class="product-info">
            <h3></h3>
            <p></p>
            <p> PIECES LEFT</p>
            <div class="price-action">
              <span class="price">₱</span>
              <button onclick="">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    

<button id="mobile-category-toggle" class="mobile-category-button">☰ Categories</button>

    <button id="mobile-cart-toggle" class="mobile-cart-button">🛒 Cart</button>

    <div id="mobile-category-popup" class="mobile-category-popup hidden">
    <div class="category-popup-content">
        <aside class="category">
        <div class="store-filters">
            <button class="menu-btn active" data-category="all">All</button>
            <button class="menu-btn" data-category="ore">Ore</button>
            <button class="menu-btn" data-category="tools">Tools</button>
            <button class="menu-btn" data-category="gear">Gear</button>
        </div>
        </aside>
    </div>
    </div>

    <div id="mobile-cart-popup" class="mobile-cart-popup hidden">
    <div class="cart-popup-content">
        <aside class="cart-box">
            <h2>Cart</h2>
            <ul id="cart-items-mobile"></ul>
            <div class="total">Total: ₱<span id="cart-total-mobile">0</span></div>
            <div class='cart-buttons'>
            <div class='btn-cancel'><button id="checkout-btn-mobile">CHECKOUT</button></div>
            <div class='btn-cancel'><button id="cancel-btn-mobile">CANCEL</button></div>
            </div>
        </aside>
    </div>
    </div>
  </div>

</section>
<script src="/pages/store/assets/js/store.js"></script>