<?php 
require_once "functions.php";
// add expense in tbl_addexpense via form logic  
if(isset($_POST["add_exp"]))
{
$catname=$_POST["catname"];
$name=$_POST["expname"];
$desc=$_POST["desc"];
$ammount=$_POST["ammount"];
$added_date=$_POST["added_date"];
if(addExpense($catname,$name,$desc,$ammount,$added_date))
{
echo "<script>
alert('expense added successfully')
window.location='index.php';
</script>";
}
else 
{

echo "<script>
alert('something went wrong  added expense')
window.location='index.php';
</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Expense Tracker</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen p-4">
<div class="max-w-5xl mx-auto space-y-8">
<!-- Header -->
<div class="flex justify-between items-center">
<h1 class="text-2xl font-bold text-gray-800">Expense Tracker</h1>
<!-- Total Category Button (UI only) -->
<button class="px-4 py-2 rounded-xl bg-indigo-600 text-white shadow-md hover:bg-indigo-700 transition-all duration-300 hover:scale-105 active:scale-95">
Total by Category <span class="bg-white text-black rounded-full p-1">5</span>
</button>
</div>
<!-- Form Card -->
<div class="bg-white rounded-2xl shadow-lg p-6">
<h2 class="text-lg font-semibold mb-4 text-gray-700">Add Expense</h2>
<form class="grid grid-cols-1 md:grid-cols-2 gap-4" method="post">
<!-- Category -->
<select name="catname" class="p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 outline-none">
<option>Select Category</option>
<!-- fetch category here -->
<?php 
$arr=getCategory();
foreach($arr as $value)
{
?>
<option value="<?php echo $value["catid"];?>"><?php echo $value["categoryname"];?></option>

<?php 
}
?>
</select>
<!-- Name -->
<input type="text" name="expname" placeholder="Expense Name"
class="p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 outline-none" />
<!-- Description -->
<input type="text" name="desc" placeholder="Description"
class="p-3 rounded-xl border border-gray-300 md:col-span-2 focus:ring-2 focus:ring-indigo-400 outline-none" />

<!-- Amount -->
<input type="number" name="ammount" placeholder="Amount"
class="p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 outline-none" />

<!-- Date -->
<input type="date" name="added_date"
class="p-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-indigo-400 outline-none" />

<!-- Submit Button -->
<div class="md:col-span-2">
<button type="submit" name="add_exp"
class="w-full py-3 rounded-xl bg-indigo-600 text-white font-semibold shadow-md 
transition-all duration-300 hover:bg-indigo-700 hover:shadow-xl 
hover:scale-[1.02] active:scale-95 relative overflow-hidden">
<span class="relative z-10">Add Expense</span>
<!-- Animated shine effect -->
<span class="absolute inset-0 bg-white opacity-10 blur-xl transform -translate-x-full hover:translate-x-full transition-all duration-700"></span>
</button>
</div>
</form>
</div>

<!-- Expense Table -->
<div class="bg-white rounded-2xl shadow-lg p-6 overflow-x-auto">
<h2 class="text-lg font-semibold mb-4 text-gray-700">Expense List</h2>
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-gray-100 text-gray-600 text-sm">
<th class="p-3 rounded-l-xl">Category</th>
<th class="p-3">Name</th>
<th class="p-3">Description</th>
<th class="p-3">Amount</th>
<th class="p-3 rounded-r-xl">Date</th>
<th class="p-3 rounded-r-xl">Action</th>

</tr>
</thead>

<tbody class="text-gray-700">
<?php 
$expData=getExpenseData();
foreach($expData as $row)
{
?>
<!-- Sample Row -->
<tr class="border-b hover:bg-gray-50 transition">
<td class="p-3"><?php echo $row["categoryname"];?></td>
<td class="p-3"><?php echo $row["name"];?></td>
<td class="p-3"><?php echo $row["descriptions"];?></td>
<td class="p-3 font-semibold text-green-600">₹ <?php echo $row["ammount"];?> </td>
<td class="p-3"><?php echo $row["added_date_time"];?></td>
<td>

<a href="" class="bg-red-500 text-white rounded-2xl p-2">Delete</a>
<a href="" class="bg-green-500 text-white rounded-2xl p-2">Edit</a>
</td>
</tr>
<?php 
}
?>
</tbody>
</table>
</div>
</div>
</body>
</html>