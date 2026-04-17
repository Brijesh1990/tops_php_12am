<?php 
require_once("functions.php");
require_once("includes/header.php");

?>
<body class="fade-in">
<div class="container my-5">
  <div class="row">

    <!-- Product Image -->
    <div class="col-md-6">
      <img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg" class="img-fluid rounded shadow">
    </div>

    <!-- Product Info -->
    <div class="col-md-6">

      <h2>iPhone 14 Pro</h2>

      <!-- Ratings -->
      <div class="mb-2">
        ⭐⭐⭐⭐☆ <span class="text-muted">(120 reviews)</span>
      </div>

      <h4 class="text-primary">$999</h4>

      <!-- Description -->
      <p class="mt-3">
        Experience powerful performance with the latest iPhone. 
        Features include a high-resolution display, advanced camera system,
        and long-lasting battery life.
      </p>

      <!-- Quantity -->
      <div class="mb-3">
        <label class="form-label"><strong>Quantity</strong></label>
        <input type="number" id="qty" class="form-control w-25" value="1" min="1">
      </div>

      <!-- Buttons -->
      <a href="cart.php"><button class="btn btn-success me-2" onclick="addToCart()">
        Add to Cart
      </button></a>

      <button class="btn btn-outline-dark">
        Buy Now
      </button>

    </div>

  </div>

  <!-- Reviews Section -->
  <div class="mt-5">
    <h4>Customer Reviews</h4>

    <!-- Review -->
    <div class="border p-3 mb-3 rounded">
      <strong>John Doe</strong>  
      <div>⭐⭐⭐⭐⭐</div>
      <p>Excellent product! Worth the price.</p>
    </div>

    <div class="border p-3 mb-3 rounded">
      <strong>Priya Sharma</strong>  
      <div>⭐⭐⭐⭐☆</div>
      <p>Good performance but battery could be better.</p>
    </div>

    <!-- Add Review -->
    <h5 class="mt-4">Add Your Review</h5>

    <form onsubmit="submitReview(event)">
      <input type="text" id="name" class="form-control mb-2" placeholder="Your Name" required>

      <select id="rating" class="form-control mb-2">
        <option value="5">⭐⭐⭐⭐⭐</option>
        <option value="4">⭐⭐⭐⭐</option>
        <option value="3">⭐⭐⭐</option>
        <option value="2">⭐⭐</option>
        <option value="1">⭐</option>
      </select>

      <textarea id="review" class="form-control mb-2" placeholder="Write review..." required></textarea>

      <button class="btn btn-primary">Submit Review</button>
    </form>

    <!-- Dynamic Reviews -->
    <div id="reviewList" class="mt-3"></div>

  </div>
</div>
<?php 
require_once("includes/footer.php");
?>