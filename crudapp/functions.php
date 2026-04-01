<?php 
// connection are required in this file to perform database operations
require_once 'config.php';
// create a function to insert data into database
function registerApp($name,$email,$password,$cpassword,$gender,$phone)
{
    global $conn;
    // check password and confirmed password are matched or not
    if($password==$cpassword)
    {
        $insert="insert into tbl_register(name,email,password,gender,phone) values('$name','$email','$password','$gender','$phone')";
        $query=mysqli_query($conn,$insert);    
        return true;
        }
        else
        {
            return false;
        }
}
    
//create a login function to check email and password are correct or not
function loginApp($email,$password)
{
  
} 



?>