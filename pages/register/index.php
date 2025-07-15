<?php
$error = $_GET['error'] ?? '';
?>

<div class="register-container">
  <div class="register-box">
    <h2>Register</h2>
    <form action="handlers/auth.handler.php" method="POST">

      <div class="input-group">
        <label>Username: </label>
        <input type="text" name="username" required>
      </div>

      <div class="input-group">
        <label>Password: </label>
        <input type="password" name="password" required>
      </div>
      
    </form>
  </div>
</div>