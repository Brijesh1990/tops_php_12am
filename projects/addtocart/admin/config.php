<?php 
session_start();
$ser="localhost";
$user="root";
$pass="";
$dbname="addtocart";
$conn=mysqli_connect($ser,$user,$pass,$dbname);
if($conn)
{
// echo "connection successfully stablished";
}
else 
{
  die(mysqli_error());  
}    
?>