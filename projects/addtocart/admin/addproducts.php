<?php 
require_once("functions.php");
require_once("includes/header.php");
require_once("includes/sidebar.php");
// set session 
if(!isset($_SESSION["adminid"]))
{
header("location:index.php");
}  
// add category logic here
if(isset($_POST["btn_addproducts"]))
{
$catname=$_POST["catname"];
$tmp_name=$_FILES["photo"]["tmp_name"];
$name="uploads/products/".$_FILES["photo"]["name"];
move_uploaded_file($tmp_name,$name);
$pname=$_POST["pname"];
$oprice=$_POST["oprice"];
$newprice=$_POST["newprice"];
$qty=$_POST["qty"];
$desc=$_POST["desc"];
$av=$_POST["availability"];
// array stored here
$data=array("catid"=>$catname,"photo"=>$name,"pname"=>$pname,"oldprice"=>$oprice,"offerprice"=>$newprice,"qty"=>$qty,"descriptions"=>$desc,"availability"=>$av);

if(insertalldata('tbl_addproducts',$data))
{
 echo "<script>
 alert('Products added successfully')
 window.location='addproducts.php';
 </script>";
}
}
?>
<!-- Content -->
<div class="content fade-in">
<h2 class="mb-4">Add Products</h2>
<!-- Cards -->
<div class="row p-5 shadow">
<form method="post" enctype="multipart/form-data">

<div class="form-group mt-3">
<input type="text" name="catname" placeholder="Enter categoryName *" required class="form-control w-50" />
<div>    


<div class="form-group mt-3">
<input type="file" name="photo" placeholder="Enter Photo *" required class="form-control w-50" />
<div>    

<div class="form-group mt-3">
<input type="text" name="pname" placeholder="Enter ProductName *" required class="form-control w-50" />
<div>    

<div class="form-group mt-3">
<input type="text" name="oprice" placeholder="Enter Old price *" required class="form-control w-50" />
<div>    

<div class="form-group mt-3">
<input type="text" name="newprice" placeholder="Enter Offerprice *" required class="form-control w-50" />
<div>    

<div class="form-group mt-3">
<input type="text" name="qty" placeholder="Enter qty*" required class="form-control w-50" />
<div>    

<div class="form-group mt-3">
<textarea name="desc" placeholder="Enter descriptions *" required class="form-control w-50"></textarea>
<div>    

<div class="form-group mt-3">
<input type="text" name="availability" placeholder="availability *" required class="form-control w-50" />
<div>    


<div class="form-group mt-3">
<input type="submit" name="btn_addproducts"  class="btn btn-sm btn-dark text-white" value="Add Products" />
<div>    

</form>
</div>

<!-- Table -->
<div class="card mt-4 p-3 shadow">
<h5>Manage Category</h5>

<table class="table mt-3">
<tr>
<th>ID</th>
<th>Customer</th>
<th>Amount</th>
<th>Status</th>
</tr>

<tr>
<td>#101</td>
<td>John</td>
<td>$200</td>
<td><span class="badge bg-success">Completed</span></td>
</tr>


</table>

</div>
</div>
