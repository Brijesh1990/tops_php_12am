<?php 
require_once("config.php");
// create a function for admin login
function admin_login($email,$password)
{
global $conn;
$select="select * from tbl_admin where email='$email' and password='$password'";
$query=mysqli_query($conn,$select);
$num_rows=mysqli_num_rows($query);
$fetch=mysqli_fetch_array($query);
if($num_rows==1)
{
//session
$_SESSION["adminid"]=$fetch["adminid"];
$_SESSION["admin_email"]=$fetch["email"]; 
return true; 
}   
else 
{
return false;
}
}

// create a function for insert all data 
function insertalldata($table,$data)
{
    global $conn;
    // convert array keys 
    $column=array_keys($data);
    $column1=implode(",",$column);

    $values=array_values($data);
    $values1=implode("','",$values);

    $insert="insert into $table($column1) values ('$values1')";
    $query=mysqli_query($conn,$insert);
    return $query;

}

// create a function for add category

// create a function for logout admin 
function logout_admin()
{
 
 unset($_SESSION["adminid"]);
 unset($_SESSION["admin_email"]);
 session_destroy();
 return true;    
}
?>