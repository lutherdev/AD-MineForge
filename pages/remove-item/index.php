<!--BACKEND-->

<div class="remove-outer">
  <div class="remove">
    <h2>Remove Item</h2>
    <form action="handlers/remove-item.handler.php" method="POST">
        <label>Item Id:</label>
        <input type="text" name="item_id" required>

        <button type="submit">Remove Item</button>
        <!--BACKEND-->
    </form>
  </div>
</div>
<script src = '/pages/remove-item/assets/js/remove-item.js'></script>