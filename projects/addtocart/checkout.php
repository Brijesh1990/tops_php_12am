<?php 
require_once("functions.php");
require_once("includes/header.php");

?>

<div class="container my-5">
  <h2 class="mb-4">🧾 Checkout</h2>

  <div class="row">

    <!-- Customer Form -->
    <div class="col-lg-7">

      <div class="card p-4 shadow-sm checkout-card">

        <h4 class="mb-3">Billing Details</h4>

        <form>

          <div class="row">
            <div class="col-md-6 mb-3">
              <input class="form-control" placeholder="First Name">
            </div>
            <div class="col-md-6 mb-3">
              <input class="form-control" placeholder="Last Name">
            </div>
          </div>

          <div class="mb-3">
            <input class="form-control" placeholder="Email Address">
          </div>

          <div class="mb-3">
            <input class="form-control" placeholder="Phone Number">
          </div>

          <div class="mb-3">
            <textarea class="form-control" placeholder="Full Address"></textarea>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <input class="form-control" placeholder="City">
            </div>
            <div class="col-md-6 mb-3">
              <input class="form-control" placeholder="Pincode">
            </div>
          </div>

          <!-- Payment -->
          <h5 class="mt-4">Payment Method</h5>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment">
            <label class="form-check-label">Cash on Delivery</label>
          </div>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="payment">
            <label class="form-check-label">Credit / Debit Card</label>
          </div>

         <a href="orders.php"> <button type="button" class="btn btn-success w-100 mt-4">
            Place Order
          </button></a>

        </form>

      </div>

    </div>

    <!-- Cart Summary -->
    <div class="col-lg-5">

      <div class="card p-4 shadow-sm summary-box">

        <h4>Order Summary</h4>
        <hr>

        <!-- Product -->
        <div class="d-flex justify-content-between mb-3 align-items-center">
          <div>
            <h6 class="mb-0">iPhone 14</h6>
            <small class="text-muted">Qty: 1</small>
          </div>
          <span>$999</span>
        </div>

        <div class="d-flex justify-content-between mb-3 align-items-center">
          <div>
            <h6 class="mb-0">Headphones</h6>
            <small class="text-muted">Qty: 2</small>
          </div>
          <span>$300</span>
        </div>

        <hr>

        <div class="d-flex justify-content-between">
          <span>Subtotal</span>
          <span>$1299</span>
        </div>

        <div class="d-flex justify-content-between">
          <span>Shipping</span>
          <span>$20</span>
        </div>

        <div class="d-flex justify-content-between">
          <span>Tax</span>
          <span>$65</span>
        </div>

        <hr>

        <div class="d-flex justify-content-between fw-bold">
          <span>Total</span>
          <span>$1384</span>
        </div>

      </div>

    </div>

  </div>
</div>

<?php
require_once("includes/footer.php"); 
?>