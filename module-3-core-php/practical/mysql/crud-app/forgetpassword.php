<?php 
include_once("config.php");
// login here 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<script src="https://cdn.tailwindcss.com"></script>

<style>
/* simple floating animation */
@keyframes float {
0% { transform: translateY(0px); }
50% { transform: translateY(-10px); }
100% { transform: translateY(0px); }
}

.animate-float{
animation: float 4s ease-in-out infinite;
}
</style>

</head>

<body class="bg-slate-100 min-h-screen flex items-center justify-center p-6">

<div class="max-w-5xl w-full bg-white shadow-xl rounded-xl overflow-hidden grid md:grid-cols-2">

<!-- Left Grid -->
<div class="bg-gradient-to-br from-indigo-600 to-blue-500 text-white p-10 flex flex-col justify-center items-center">

<h1 class="text-4xl font-bold mb-4 animate-float">
Welcome Back
</h1>

<p class="text-center opacity-90 mb-6">
Manage users, roles and system settings from your admin dashboard.
</p>

<div class="w-40 h-40 bg-white/20 rounded-full flex items-center justify-center animate-float">
<svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" fill="none" viewBox="0 0 24 24" stroke="white">
<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
d="M5.121 17.804A8 8 0 1118.364 4.56 8 8 0 015.12 17.804z"/>
</svg>
</div>
</div>
<!-- Right Grid (Login Form) -->
<div class="p-10 flex flex-col justify-center">
<h2 class="text-2xl font-bold text-gray-700 mb-6">
Forget your Password ?
</h2>

<form class="space-y-5">
<div>
<label class="block text-sm text-gray-600 mb-1">
Enter Email
</label>
<input type="email"
class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 outline-none"
placeholder="admin@email.com">
</div>


<div class="flex items-center justify-between text-sm">
</div>

<button
class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">
Submit
</button>
</form>
</div>
</div>
</body>
</html>
