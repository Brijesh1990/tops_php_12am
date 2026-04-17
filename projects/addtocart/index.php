<?php 
require_once("functions.php");
require_once("includes/header.php");

?>
<!-- Products -->
<div class="container-fluid my-5">
  <div class="row">

    <!-- Sidebar -->
    <div class="col-lg-3 mb-4">
      <div class="card p-3 shadow-sm">
        <h5 class="mb-3">Categories</h5>
        
        <ul class="list-group">
          <li class="list-group-item active">All Products</li>
          <li class="list-group-item">Mobiles</li>
          <li class="list-group-item">Laptops</li>
          <li class="list-group-item">Fashion</li>
          <li class="list-group-item">Electronics</li>
        </ul>

        <hr>

        <h6>Price Range</h6>
        <input type="range" class="form-range">

        <button class="btn btn-dark mt-3 w-100">Filter</button>
      </div>
    </div>

    <!-- Products Grid -->
    <div class="col-lg-9">
      <div class="row g-4">

        <!-- Product Card -->
        <div class="col-md-6 col-lg-4">
          <div class="card product-card h-100 shadow-sm">
            <img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">iPhone</h5>
              <p class="text-muted">Latest smartphone</p>
              <h6 class="text-primary">$999</h6>
              <a href="productdetails.php" class="btn btn-primary w-100">View</a>
            </div>
          </div>
        </div>

        <!-- Product -->
        <div class="col-md-6 col-lg-4">
          <div class="card product-card h-100 shadow-sm">
            <img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg" class="card-img-top">
            <div class="card-body">
              <h5>Bike</h5>
              <p class="text-muted">Fuel efficient</p>
              <h6 class="text-primary">$1200</h6>
              <a href="productdetails.php" class="btn btn-primary w-100">View</a>
            </div>
          </div>
        </div>

        <!-- Repeat Products -->
        <div class="col-md-6 col-lg-4">
          <div class="card product-card h-100 shadow-sm">
            <img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg">
            <div class="card-body">
              <h5>Laptop</h5>
              <p class="text-muted">High performance</p>
              <h6 class="text-primary">$700</h6>
              <a href="productdetails.php" class="btn btn-primary w-100">View</a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="card product-card h-100 shadow-sm">
            <img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg">
            <div class="card-body">
              <h5>Headphones</h5>
              <p class="text-muted">Noise cancelling</p>
              <h6 class="text-primary">$150</h6>
              <a href="productdetails.php" class="btn btn-primary w-100">View</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </div>
</div>
<?php
require_once("includes/footer.php"); 
?>