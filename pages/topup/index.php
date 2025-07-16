<!--BACKEND-->
<!--BACKEND-->
<!--BACKEND-->

<div class="topup-outer">
    <div class="topup-card">
        <h2>Top Up Wallet</h2>
            <!--BACKEND-->
            <!--BACKEND-->
            <!--BACKEND-->
        <form method="POST" action="/handlers/topup.handler.php">
            <label for="card_number">Card Number</label>
            <input type="text" id="card_number" name="card_number" placeholder="1234 5678 9012 3456" maxlength="19" required>
            <label for="expiry">Expiry Date</label>
            <input type="month" id="expiry" name="expiry" required>
            <label for="cvv">CVV</label>
            <input type="password" id="cvv" name="cvv" maxlength="4" placeholder="123" required>
            <label for="amount">Enter Amount (Gold):</label>
            <input type="number" id="amount" name="amount" min="1" required>
            <button type="submit" class="gold-btn">Add Gold</button>
            <a href="profile" class="gold-btn back-btn">Back to Profile</a>
        </form>
    </div>
</div>