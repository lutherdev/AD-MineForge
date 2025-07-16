<!--
BACKEND
-->
<div class="view-outer">
  <div class="in-outer">
    <div class="view">
      <h2>ALL ITEMS</h2>
    </div>

    <div class="table-container">
      <!--BACKEND-->
        <div class="scroll-wrapper">
          <table class="user-table">
            <thead>
              <tr>
                <th>Item ID#</th>
                <th>Item name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($items as $item): ?>
                <tr>
                  <td><?= htmlspecialchars($item['id']) ?></td>
                  <td><!--BACKEND--></td>
                  <td><!--BACKEND--></td>
                  <td><!--BACKEND--></td>
                  <td><!--BACKEND--></td>
                  <td><!--BACKEND--></td>
                  <td><!--BACKEND--></td>
                </tr>
              <!--BACKEND-->
            </tbody>
          </table>
        </div>
    <!--BACKEND-->
    </div>
  </div>
</div>