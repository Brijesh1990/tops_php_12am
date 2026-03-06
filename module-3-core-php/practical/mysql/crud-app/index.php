<?php 
// include("config.php");
// include("config.php");
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tailwind CRUD UI</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 min-h-screen p-8">

<!-- Hidden Checkbox for Modal -->
<input type="checkbox" id="modal-toggle" class="peer hidden">

<!-- Header -->
<div class="w-1/2 mx-auto  mb-8">
<h1 class="text-3xl font-bold mt-8">User Management</h1>

<div class="space-x-4 mt-3">
<!-- Add Users Button -->
<label for="modal-toggle"
class="cursor-pointer bg-blue-600 text-white px-5 py-2 rounded-lg
hover:bg-blue-700 transition-all duration-300 hover:scale-105">
Add Users 👤
</label>

<!-- Manage Users Button -->
<button
class="bg-green-600 text-white px-5 py-2 rounded-lg
hover:bg-green-700 transition-all duration-300 hover:scale-105">
Total Users <span class="bg-red-600 rounded-full p-1 ms-5">
<?php 
$select="select count(user_id) as totalusers from tbl_addusers";
$query=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($query);   
echo $fetch["totalusers"];
?>    
</span>
</button>
</div>
</div>

<!-- 2 Grid Layout -->
<div class="grid md:grid-cols-2 gap-6 w-1/2 mx-auto  shadow-lg p-5">

<!-- User Card 1 -->
<?php 
$select="select * from tbl_addusers order by user_id desc";
$query=mysqli_query($con,$select);
while($fetch=mysqli_fetch_array($query))
{    
?>
<div class="bg-white p-6 rounded-xl shadow-md
transition-all duration-300
hover:scale-105 hover:shadow-xl">
<h3 class="text-lg font-semibold"><?php echo $fetch["name"];?></h3>
<p class="text-gray-600 mb-4"><?php echo $fetch["email"];?></p>
<p class="text-gray-600 mb-4"><?php echo $fetch["phone"];?></p>

<div class="flex justify-between">
<button class="text-blue-600 hover:underline">Edit</button>
<button class="text-red-600 hover:underline">Delete</button>
</div>
</div>
<?php 
}
?>

</div>
<!-- add modal here -->
<?php 
include_once("adduser.php");
?>
</body>
</html>