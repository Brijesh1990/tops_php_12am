<?php 
require_once("functions.php");
require_once("includes/header.php");
?>

<div class="container my-5">
  <div class="row align-items-center">

    <!-- Left Side GIF -->
    <div class="col-lg-6 mb-4 text-center">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL2aTrhv2Y0sPp-LBcfLJEybLAN9HfQdz1Jw&s class="img-fluid rounded account-img">
    </div>
    <!-- Right Side Form -->
    <div class="col-lg-6">
      <div class="card p-4 shadow account-card">
        <h2 class="mb-4 text-center">Login Form</h2>
        <form>
        
          <div class="mb-3">
            <input type="email" class="form-control custom-input" placeholder="Email">
          </div>

          <div class="mb-3">
            <input type="password" class="form-control custom-input" placeholder="Password">
          </div>

          <button class="btn btn-primary w-100">Login</button>

          <p class="text-center mt-3">
            Already have an account? <a href="account.php">Login</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
require_once("includes/footer.php"); 
?>