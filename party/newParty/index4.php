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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Cossette+Texte&family=Ramabhadra&display=swap');

*{
    box-sizing: border-box;
}

html, body{
    overflow-x: hidden;
}

body{
    margin: 0;
    padding: 0;
    background: aliceblue;
}
/* Header Styles */
.header{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 100px;
    z-index: 1000;

    background: rgba(255,255,255,0.49);
    border-radius: 16px;
    backdrop-filter: blur(7px);
    -webkit-backdrop-filter: blur(7px);
    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 0 4px 30px rgba(0,0,0,0.1);
}

.h1{
    margin: 0;
    color: black;
    font-family: "Cossette Texte", sans-serif;
    filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
}

.links{
    display: flex;
    gap: 40px;
}

.links a{
    text-decoration: none;
    color: black;
    font-size: 20px;
    padding: 10px;
    transition: 0.3s ease;
    font-family: "Cossette Texte", sans-serif;
    filter: drop-shadow(5px 5px 10px rgba(0,0,0,0.5));
}

.links a:hover{
    color: yellow;
}

.log-btn{
    border: none;
    border-radius: 5px;
    background: gray;
    color: white;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    transition: 0.3s ease;
}

.log-btn:hover{
    background: rgb(42,41,41);
}
/* Form Section Styles */
.form-section{
    min-height: 100vh;
    padding: 150px 20px 80px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-container{
    width: 100%;
    max-width: 1000px;
}

.order-card{
    background: rgba(255,255,255,0.55);
    border-radius: 20px;
    padding: 40px;

    backdrop-filter: blur(10px);
    -webkit-backdrop-filter: blur(10px);

    border: 1px solid rgba(255,255,255,0.3);
    box-shadow: 0 8px 32px rgba(0,0,0,0.15);

    animation: fadeUp 0.8s ease;
}
/* Animations */
@keyframes fadeUp{
    from{
        opacity: 0;
        transform: translateY(20px);
    }
    to{
        opacity: 1;
        transform: translateY(0);
    }
}

.order-title{
    text-align: center;
    margin-bottom: 35px;
    font-family: "Ramabhadra", sans-serif;
    font-size: 36px;
    color: black;
}

.form-label{
    font-family: "Cossette Texte", sans-serif;
    margin-bottom: 8px;
}

.form-control,
.form-select{
    height: 50px;
    border-radius: 10px !important;
    border: 1px solid #d6d6d6 !important;
    box-shadow: none !important;
}

textarea.form-control{
    height: 120px;
    resize: none;
}

.input-group-text{
    border-radius: 10px 0 0 10px;
}

.submit-btn{
    width: 100%;
    height: 50px;
    border: none;
    border-radius: 10px;
    background: gray;
    color: white;
    font-size: 18px;
    transition: 0.3s ease;
    font-family: "Ramabhadra", sans-serif;
}

.submit-btn:hover{
    background: rgb(42,41,41);
}
/* Footer Styles */
footer{
    background-color: #333;
    color: white;
    padding: 60px 20px 20px;
}

.footer-container{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: 0 auto;
    gap: 40px;
}

.footer-section{
    flex: 1;
    min-width: 250px;
}

.footer-section h3{
    font-size: 20px;
    margin-bottom: 15px;
    color: #fff;
    font-family: "Ramabhadra", sans-serif;
}

.footer-section p{
    font-size: 14px;
    line-height: 1.8;
    color: #ddd;
    font-family: "Ramabhadra", sans-serif;
}

.footer-section ul{
    list-style: none;
    padding: 0;
}

.footer-section ul li{
    margin: 8px 0;
}

.footer-section ul li a{
    color: #ddd;
    text-decoration: none;
    font-size: 14px;
    font-family: "Ramabhadra", sans-serif;
}

.footer-section ul li a:hover{
    color: white;
}

.social-media{
    display: flex;
    gap: 15px;
}

.social-icon{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #555;
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-decoration: none;
    transition: 0.3s ease;
}

.social-icon:hover{
    background: #777;
}

.footer-bottom{
    text-align: center;
    border-top: 1px solid #555;
    margin-top: 30px;
    padding-top: 20px;
    color: #999;
    font-size: 14px;
    font-family: "Ramabhadra", sans-serif;
}
/* Media Queries */
@media (max-width: 1024px){

.header{
    padding: 20px 40px;
}

.links{
    gap: 20px;
}

.links a{
    font-size: 16px;
}

.order-card{
    padding: 30px;
}
}

@media (max-width: 768px){

.header{
    padding: 15px 20px;
    flex-wrap: wrap;
    justify-content: center;
    gap: 15px;
}

.h1{
    width: 100%;
    text-align: center;
}

.links{
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
}

.links a{
    font-size: 15px;
    padding: 5px;
}

.login-btn{
    width: 100%;
    display: flex;
    justify-content: center;
}

.form-section{
    padding-top: 180px;
}

.order-card{
    padding: 25px;
}

.order-title{
    font-size: 28px;
}

.footer-container{
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.social-media{
    justify-content: center;
}
}

@media (max-width: 480px){

.header{
    padding: 10px;
}

.h1{
    font-size: 22px;
}

.links a{
    font-size: 13px;
}

.log-btn{
    font-size: 14px;
    padding: 8px 14px;
}

.order-card{
    padding: 20px;
}

.order-title{
    font-size: 24px;
}

.form-control,
.form-select{
    height: 45px;
}

.submit-btn{
    font-size: 16px;
}
}
    </style>
</head>
        <!--navbar  -->
     <nav>
        <div class="header">
            <h1 class="h1">PartyNeeds</h1>
            <div class="links">
                <a href="index1.php">HOME</a>
                <a href="index2.php">ABOUT US</a>
                <a href="index3.php">CONTACT US</a>
                <a href="index4.php" style="color: yellow;">RENT</a>
            </div>
            <div class="login-btn">
               <button class="log-btn" onclick="goToLogin()">Login</button>
            </div>
        </div>
</nav>
     <body>
        <!-- Form Section -->
    <div class="form-section">
        <div class="form-container">
            <!-- Order Card -->
      <div class="order-card">
              <h3 class="order-title">Rent Order Form</h3>
              <?php if ($success): ?>
                <div class="alert alert-success">Order submitted successfully.</div>
              <?php endif; ?>
              <!-- Form -->
              <form method="post" action="add.php">
                <div class="row">
                    <!-- Customer Name -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Customer Name</label>
                    <input type="text" name="customer_name" class="form-control" required value="<?= $data['customer_name'] ?>">
                  </div>
                  <!-- Email -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="customer_email" class="form-control" required value="<?= $data['customer_email'] ?>">
                  </div>
                </div>
                    <!-- Phone Number -->
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" name="customer_phone" class="form-control" required value="<?= $data['customer_phone'] ?>">
                  </div>
                  <!-- Select Product -->
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
                <!-- Quantity and Status -->
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
                    <!-- Payment Method -->
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
                  <!-- Delivery Rate -->
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Delivery Rate</label>
                    <div class="input-group">
                      <span class="input-group-text">$</span>
                      <input type="number" step="0.01" min="0" name="delivery_rate" id="deliveryRate" class="form-control" required value="<?= $data['delivery_rate'] ?>" onchange="updatePrice()" oninput="updatePrice()">
                    </div>
                  </div>
                </div>
                    <!-- Total Price -->
                <div class="mb-3">
                  <label class="form-label">Total Price</label>
                  <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" step="0.01" id="totalPrice" name="total_price" class="form-control" readonly value="<?= $data['total_price'] ?>">
                  </div>
                </div>
                <!-- Submit Button -->
                <div class="d-flex justify-content-end">
                  <button type="submit" class="submit-btn" name="submitorder">Submit Order</button>
                </div>
              </form>
            </div>
          </div>
    </div>

    <!-- Footer -->
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
           <!-- ScriptBootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Javascript -->
    <script>
      const prices = {
        'chairs': 150,
        'tent': 500,
        'videoke': 700
      };
    // Update Price
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
      window.addEventListener('load', function() {
        updatePrice();
      });
            //Change Quantity
        function changeQuantity(button, delta) {
            const input = button.parentElement.querySelector('input');
            let value = parseInt(input.value) + delta;
            if (value < 1) value = 1;
            input.value = value;
        }
        //Login
           function goToLogin() {
        window.location.href = 'index.php';
        }
    </script>
</body>
</html>