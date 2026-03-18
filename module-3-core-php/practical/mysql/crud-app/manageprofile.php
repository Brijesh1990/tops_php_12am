<?php 
include_once("config.php");
include_once("navigation.php");
if(!isset($_SESSION["rid"]))
{
 header("location:index.php");   
}
// manage profile
$rid=$_SESSION["rid"];
$select="select * from tbl_register where rid='$rid'";
$query=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($query);    
?>
<div class="w-1/2 mx-auto  mb-8">
<h1 class="text-3xl font-bold mt-8">Manage Profile</h1>
<div class="space-x-4 mt-3">
<!-- 2 Grid Layout -->
<div class="grid md:grid-cols-1 gap-6 w-full   shadow-lg p-5">
<form method="post">
<div class="form-group mt-2">
<label><img src="<?php echo $fetch["photo"];?>" alt="photo"  class="rounded-full w-36"/></label>
<br>    
<input type="file" name="photo" class="p-2 w-full" />    
</div>

<div class="form-group mt-2">
<label>Edit fullName *</label>
<br>    
<input type="text" name="fullname" value="<?php echo $fetch["fullname"];?>" placeholder="Enter New password" class="p-2 w-full" />    
</div>
<div class="form-group mt-2">
<label>Edit email</label>
<br>    
<input type="text" name="email" value="<?php echo $fetch["email"];?>"  class="p-2 w-full" />    
</div>

<div class="form-group mt-2">
<input type="submit" name="update_profile" value="Update Profile" class="p-2 bg-black text-white mt-5" />    
</div>


</form>
</div>
</div>
</div>
<!-- add modal here -->
<?php 
include_once("adduser.php");
?>
</body>
</html>