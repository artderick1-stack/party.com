<?php
include 'databases.php';
$success = false;
$data = ['customer_name'=>'','customer_email'=>'','customer_phone'=>'','order'=>'','quantity'=>'','status'=>'','payment'=>'','delivery_rate'=>'','total_price'=>''];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data['customer_name'] = trim($_POST['customer_name'] ?? '');
    $data['customer_email'] = trim($_POST['customer_email'] ?? '');
    $data['customer_phone'] = trim($_POST['customer_phone'] ?? '');
    $data['order'] = trim($_POST['order'] ?? '');
    $data['quantity'] = trim($_POST['quantity'] ?? '');
    $data['status'] = trim($_POST['status'] ?? '');
    $data['payment'] = trim($_POST['payment'] ?? '');
    $data['delivery_rate'] = trim($_POST['delivery_rate'] ?? '');
    $data['total_price'] = trim($_POST['total_price'] ?? '');

    // Basic server-side sanitization; keep raw values for DB escaping below
    foreach ($data as $k => $v) {
        $data[$k] = htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent</title>
    <link rel="stylesheet" href="css/style4.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
     <nav>
        <div class="header">
            <h1 class="h1">PartyNeeds</h1>
            <div class="links">
                <a href="index.php">HOME</a>
                <a href="index2.php">ABOUT US</a>
                <a href="index3.php">CONTACT US</a>
                <a href="index4.php" style="color: yellow;">RENT</a>
            </div>
            <div class="login-btn">
               <button class="log-btn" onclick="goToLogin()">Login</button>
            </div>
        </div>
</nav>
     <body class="bg-light">
    <div class="form-container py-5">
      <div class="card shadow-sm">
            <div class="card-body">
              <h3 class="card-title mb-4">Rent Order Form</h3>
              <?php if ($success): ?>
                <div class="alert alert-success">Order submitted successfully.</div>
              <?php endif; ?>
              <form method="post" action="add.php">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Customer Name</label>
                    <input type="text" name="customer_name" class="form-control" required value="<?= $data['customer_name'] ?>">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="customer_email" class="form-control" required value="<?= $data['customer_email'] ?>">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" name="customer_phone" class="form-control" required value="<?= $data['customer_phone'] ?>">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Select Product</label>
                    <select name="order" id="orderSelect" class="form-select" required onchange="updatePrice()">
                      <option value="">Choose Product...</option>
                      <option value="chairs" <?= $data['order']=='chairs'? 'selected':'' ?>>Chairs (per 20 set - $150)</option>
                      <option value="tent" <?= $data['order']=='tent'? 'selected':'' ?>>Tent - $500</option>
                      <option value="videoke" <?= $data['order']=='videoke'? 'selected':'' ?>>Videoke - $700</option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Quantity</label>
                    <input type="number" name="quantity" id="quantity" class="form-control" min="1" required value="<?= $data['quantity'] ?>" onchange="updatePrice()" oninput="updatePrice()">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                      <option value="" <?= $data['status']==''? 'selected':'' ?>>Choose...</option>
                      <option value="pending" <?= $data['status']=='pending'? 'selected':'' ?>>Pending</option>
                      <option value="confirmed" <?= $data['status']=='confirmed'? 'selected':'' ?>>Confirmed</option>
                      <option value="cancelled" <?= $data['status']=='cancelled'? 'selected':'' ?>>Cancelled</option>
                    </select>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Payment Method</label>
                    <select name="payment" class="form-select" required>
                      <option value="" <?= $data['payment']==''? 'selected':'' ?>>Choose...</option>
                      <option value="cash" <?= $data['payment']=='cash'? 'selected':'' ?>>Cash</option>
                      <option value="card" <?= $data['payment']=='card'? 'selected':'' ?>>Card</option>
                      <option value="online" <?= $data['payment']=='online'? 'selected':'' ?>>Online</option>
                    </select>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Delivery Rate</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="number" step="0.01" min="0" name="delivery_rate" id="deliveryRate" class="form-control" required value="<?= $data['delivery_rate'] ?>" onchange="updatePrice()" oninput="updatePrice()">
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label">Total Price</label>
                  <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" step="0.01" id="totalPrice" name="total_price" class="form-control" readonly value="<?= $data['total_price'] ?>">
                  </div>
                </div>

                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary" name="submitorder">Submit Order</button>
                </div>
              </form>
            </div>
          </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      const prices = {
        'chairs': 150,
        'tent': 500,
        'videoke': 700
      };

      function updatePrice() {
        const orderSelect = document.getElementById('orderSelect');
        const quantity = document.getElementById('quantity');
        const deliveryRate = document.getElementById('deliveryRate');
        const totalPrice = document.getElementById('totalPrice');

        const selectedProduct = orderSelect.value;
        const qty = parseInt(quantity.value) || 0;
        const delivery = parseFloat(deliveryRate.value) || 0;

        if (selectedProduct && qty > 0) {
          const productPrice = prices[selectedProduct];
          const subtotal = productPrice * qty;
          const total = subtotal + delivery;
          totalPrice.value = total.toFixed(2);
        } else {
          totalPrice.value = delivery.toFixed(2);
        }
      }

      // Initialize on page load
      window.addEventListener('load', function() {
        updatePrice();
      });
    </script>
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>About PartyNeeds</h3>
                <p>Your one-stop shop for all party rental needs. We provide high-quality equipment and services to make your events unforgettable.</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index2.html">About Us</a></li>
                    <li><a href="index3.html">Contact Us</a></li>
                    <li><a href="index4.html">Rent</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Info</h3>
                <p>Email: gmail@partyneeds.com</p>
                <p>Phone: 09696969676767</p>
                <p>Address: Langkiwa Binan Laguna</p>
            </div>
            <div class="footer-section">
                <h3>Follow Us</h3>
                <div class="social-media">
                    <a href="https://facebook.com" target="_blank" class="social-icon">f</a>
                    <a href="https://twitter.com" target="_blank" class="social-icon">𝕏</a>
                    <a href="https://instagram.com" target="_blank" class="social-icon">📷</a>
                    <a href="https://linkedin.com" target="_blank" class="social-icon">in</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 PartyNeeds. All rights reserved.</p>
        </div>
    </footer>
    <script>
        function changeQuantity(button, delta) {
            const input = button.parentElement.querySelector('input');
            let value = parseInt(input.value) + delta;
            if (value < 1) value = 1;
            input.value = value;
        }
           function goToLogin() {
        window.location.href = 'indexLogin.php';
        }
    </script>
</body>
</html>