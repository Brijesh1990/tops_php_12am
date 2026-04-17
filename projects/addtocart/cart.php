<?php 
require_once("functions.php");
require_once("includes/header.php");

?>
<div class="container my-5">
  <h2 class="mb-4">🛒 Your Cart</h2>

  <div class="row">

    <!-- Cart Items -->
    <div class="col-lg-8">

      <!-- Item -->
      <div class="card mb-3 shadow-sm cart-item">
        <div class="row g-0 align-items-center">

          <div class="col-md-3">
            <img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg" class="img-fluid rounded-start">
          </div>

          <div class="col-md-5">
            <div class="card-body">
              <h5 class="card-title">iPhone 14</h5>
              <p class="text-muted">Smartphone</p>
              <h6 class="text-primary">$999</h6>
            </div>
          </div>

          <div class="col-md-2 text-center">
            <div class="d-flex justify-content-center align-items-center">

              <button class="btn btn-outline-secondary btn-sm">−</button>
              <input type="text" value="1" class="form-control mx-2 text-center" style="width:60px;">
              <button class="btn btn-outline-secondary btn-sm">+</button>

            </div>
          </div>

          <div class="col-md-2 text-center">
            <h6>$999</h6>
            <button class="btn btn-sm btn-danger mt-2">Remove</button>
          </div>

        </div>
      </div>

      <!-- Item -->
      <div class="card mb-3 shadow-sm cart-item">
        <div class="row g-0 align-items-center">

          <div class="col-md-3">
            <img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg" class="img-fluid rounded-start">
          </div>

          <div class="col-md-5">
            <div class="card-body">
              <h5>Headphones</h5>
              <p class="text-muted">Noise Cancelling</p>
              <h6 class="text-primary">$150</h6>
            </div>
          </div>

          <div class="col-md-2 text-center">
            <div class="d-flex justify-content-center align-items-center">
              <button class="btn btn-outline-secondary btn-sm">−</button>
              <input type="text" value="2" class="form-control mx-2 text-center" style="width:60px;">
              <button class="btn btn-outline-secondary btn-sm">+</button>
            </div>
          </div>

          <div class="col-md-2 text-center">
            <h6>$300</h6>
            <button class="btn btn-sm btn-danger mt-2">Remove</button>
          </div>

        </div>
      </div>

    </div>

    <!-- Cart Summary -->
    <div class="col-lg-4">
      <div class="card shadow-sm p-4 summary-box">

        <h4>Summary</h4>
        <hr>

        <div class="d-flex justify-content-between">
          <span>Subtotal</span>
          <span>$1299</span>
        </div>

        <div class="d-flex justify-content-between">
          <span>Tax (5%)</span>
          <span>$65</span>
        </div>

        <hr>

        <div class="d-flex justify-content-between fw-bold">
          <span>Total</span>
          <span>$1364</span>
        </div>

        <a href="checkout.php" class="btn btn-success w-100 mt-3">
          Proceed to Checkout
        </a>

      </div>
    </div>

  </div>
</div>
<?php
require_once("includes/footer.php"); 
?>