<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
  height: 100vh;
  background: linear-gradient(135deg, #0d6efd, #6610f2);
  display: flex;
  justify-content: center;
  align-items: center;
}

/* Card */
.login-card {
  width: 350px;
  border-radius: 12px;
  animation: fadeIn 0.8s ease;
}

/* Inputs */
.form-control {
  border-radius: 8px;
}

button:hover {
  transform: scale(1.05);
  transition: 0.3s;
}

</style>
</head>
<body>

<div class="card p-4 shadow login-card">
  <h3 class="text-center mb-3">Admin Login</h3>

  <form>
    <input type="text" class="form-control mb-3" placeholder="Username">
    <input type="password" class="form-control mb-3" placeholder="Password">

    <button class="btn btn-dark w-100">Login</button>
  </form>
</div>

</body>
</html>