<!--BACKEND-->
<!--BACKEND-->
<!--BACKEND-->
<!--BACKEND-->
<!--BACKEND-->
<!--BACKEND-->

<div class="edit-profile-outer">
  <div class="edit-profile-card">
    <h2>Edit Your Profile</h2>

    <form method="POST" action="/handlers/edit-profile.handler.php">
      <label>Username:</label>
      <input type="text" name="username" value="<!--BACKEND-->" required>

      <label>First Name:</label>
      <input type="text" name="first_name" value="<!--BACKEND-->" required>

      <label>Last Name:</label>
      <input type="text" name="last_name" value="<!--BACKEND-->" required>

      <label>City:</label>
      <input type="text" name="city" value="<!--BACKEND-->" required>

      <label>Province:</label>
      <input type="text" name="province" value="<!--BACKEND-->" required>

      <label>Street:</label>
      <input type="text" name="street" value="<!--BACKEND-->" required>

      <button class="gold-btn" type="submit">Save Changes</button>
      <a href="profile-page" class="gold-btn back-btn">Cancel</a>
      <!--BACKEND-->
      <!--BACKEND-->
      <!--BACKEND-->
      <!--BACKEND-->
      
    </form>
  </div>
</div>