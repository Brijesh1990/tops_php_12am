<?php 
require_once("config.php");
if(isset($_POST["add_users"]))
{
date_default_timezone_set("Asia/Calcutta");   
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"]; 
$date_time=date("d/m/Y H:i:s a");
//stored data write a insert query 
$insert="insert into tbl_addusers(name,email,phone,added_date_time) values('$name','$email','$phone','$date_time')";
// create a function for execute query
$query=mysqli_query($con,$insert);
if($query)
{
echo "<script>
alert('users successfully addedd')
window.location='index.php';
</script>";
}

}

?>