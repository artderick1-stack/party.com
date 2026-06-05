<?php
$success = false;
$data = ['customer'=>'','order'=>'','status'=>'','payment'=>'','delivery_rate'=>''];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data['customer'] = trim($_POST['customer'] ?? '');
    $data['order'] = trim($_POST['order'] ?? '');
    $data['status'] = trim($_POST['status'] ?? '');
    $data['payment'] = trim($_POST['payment'] ?? '');
    $data['delivery_rate'] = trim($_POST['delivery_rate'] ?? '');

    // Basic server-side sanitization
    foreach ($data as $k => $v) {
        $data[$k] = htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
    }

    // TODO: save $data to database if desired
    $success = true;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rent Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card shadow-sm">
            <div class="card-body">
              <h3 class="card-title mb-4">Rent Order Form</h3>
              <?php if ($success): ?>
                <div class="alert alert-success">Order submitted successfully.</div>
              <?php endif; ?>
              <form method="post" action="">
                <div class="mb-3">
                  <label class="form-label">Customer</label>
                  <input type="text" name="customer" class="form-control" required value="<?= $data['customer'] ?>">
                </div>

                <div class="mb-3">
                  <label class="form-label">Order Details</label>
                  <textarea name="order" class="form-control" rows="3" required><?= $data['order'] ?></textarea>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                      <option value="" <?= $data['status']==''? 'selected':'' ?>>Choose...</option>
                      <option value="pending" <?= $data['status']=='pending'? 'selected':'' ?>>Pending</option>
                      <option value="confirmed" <?= $data['status']=='confirmed'? 'selected':'' ?>>Confirmed</option>
                      <option value="cancelled" <?= $data['status']=='cancelled'? 'selected':'' ?>>Cancelled</option>
                    </select>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label">Payment</label>
                    <select name="payment" class="form-select" required>
                      <option value="" <?= $data['payment']==''? 'selected':'' ?>>Choose...</option>
                      <option value="cash" <?= $data['payment']=='cash'? 'selected':'' ?>>Cash</option>
                      <option value="card" <?= $data['payment']=='card'? 'selected':'' ?>>Card</option>
                      <option value="online" <?= $data['payment']=='online'? 'selected':'' ?>>Online</option>
                    </select>
                  </div>
                </div>

                <div class="mb-3">
                  <label class="form-label">Delivery Rate</label>
                  <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" step="0.01" min="0" name="delivery_rate" class="form-control" required value="<?= $data['delivery_rate'] ?>">
                  </div>
                </div>

                <div class="d-flex justify-content-end">
                  <button type="submit" class="btn btn-primary">Submit Order</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
