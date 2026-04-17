<?php 
require_once("functions.php");
require_once("includes/header.php");

?>
<!-- Products -->
<!DOCTYPE html>
<html>
<head>
<title>Flipkart Style Shop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container-fluid my-3">
<div class="row">
<!-- SIDEBAR -->
<div class="col-lg-3">
<div class="sidebar position-sticky" style="top:80px;">
<!-- Categories -->
<div class="card p-3 mb-3 shadow-sm">
<h5>Categories</h5>
<hr>
<div>📱 Mobiles</div>
<div>💻 Laptops</div>
<div>👕 Fashion</div>
<div>📺 Electronics</div>
<div>🏠 Home</div>
</div>

<!-- Offers -->
<div class="card p-3 mb-3 shadow-sm">
<h5>🔥 Offers</h5>
<hr>
<p>✔ <button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button> on Mobiles</p>
<p>✔ Buy 1 Get 1 Fashion</p>
<p>✔ Bank Discount Available</p>
</div>

<!-- Filter -->
<div class="card p-3 shadow-sm">
<h5>Filter Price</h5>
<input type="range" class="form-range">
<button class="btn btn-dark w-100 mt-2">Apply</button>
</div>

</div>
</div>

<!-- PRODUCTS GRID -->
<div class="col-lg-9">
<!--sliders-->
<div id="shopCarousel" class="carousel slide" data-bs-ride="carousel">

<!-- Indicators -->
<div class="carousel-indicators">
<button type="button" data-bs-target="#shopCarousel" data-bs-slide-to="0" class="active"></button>
<button type="button" data-bs-target="#shopCarousel" data-bs-slide-to="1"></button>
<button type="button" data-bs-target="#shopCarousel" data-bs-slide-to="2"></button>
</div>

<!-- Slides -->
<div class="carousel-inner">

<!-- Slide 1 -->
<div class="carousel-item active">
<img src="https://rukminim2.flixcart.com/fk-p-flap/1600/780/image/9a7bd41dd40b9b4f.jpg?q=80"
class="d-block w-100" style="height:400px; object-fit:cover;">
<div class="carousel-caption">
<h3>Big Sale</h3>
<p>Up to <button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button> on Electronics</p>
</div>
</div>

<!-- Slide 2 -->
<div class="carousel-item">
<img src="https://rukminim2.flixcart.com/fk-p-flap/1600/780/image/0a30ff67950dc3b5.png?q=80"
class="d-block w-100" style="height:400px; object-fit:cover;">
<div class="carousel-caption">
<h3>New Arrivals</h3>
<p>Latest Fashion Collection</p>
</div>
</div>

<!-- Slide 3 -->
<div class="carousel-item">
<img src="https://rukminim2.flixcart.com/fk-p-flap/1600/780/image/06b77713df887b84.png?q=80"
class="d-block w-100" style="height:400px; object-fit:cover;">
<div class="carousel-caption">
<h3>Free Delivery</h3>
<p>On Orders Above ₹499</p>
</div>
</div>
</div>
<!-- Controls -->
<button class="carousel-control-prev" type="button" data-bs-target="#shopCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#shopCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>
</div>

<div class="row g-3 mt-5">
<!-- Repeat Product Cards (40 products simulated) -->

<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>
<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>
<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>
<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>


<!-- Product 1 -->
<div class="col-md-4 col-lg-3" data-aos="fade-up">
<div class="card product-card position-relative">

<span class="badge-offer"><button type="button" class="btn btn-sm btn-danger text-white">50% OFF</button></span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>iPhone 14</h6>
<p class="text-muted mb-1">Smartphone</p>
<div class="price">$999</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>

<!-- Product 2 -->
<div class="col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
<div class="card product-card position-relative">

<span class="badge-offer">30% OFF</span>

<img src="https://rukminim2.flixcart.com/image/1600/1510/xif0q/icons/original-MCYHCZ7HYARYFRYE_1.jpg"
class="product-img">

<div class="card-body">
<h6>HP Laptop</h6>
<p class="text-muted mb-1">Laptop</p>
<div class="price">$700</div>
<a href="productdetails.php" class="btn btn-primary btn-sm w-100 mt-2">View</a>
</div>

</div>
</div>
<!-- Repeat more cards for 40 products -->
<!-- (In real project use PHP loop or database) -->

</div>
</div>

</div>
</div>

</body>
</html>


<?php
require_once("includes/footer.php"); 
?>