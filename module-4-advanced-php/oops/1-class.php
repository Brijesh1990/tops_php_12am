<?php 
/*

what is class in oops ?

  1. A class is group of members and its member function i.e called class 
  2. A class is blue print of an object 
  3. A class is nothing whenever we can not create its object 
  4. An object is created by new keyword of class name

  syntax : 
  
  class classname 
  {
   public function display()
   {
     
    statements;
   
   }
  
  }

  call an object
  call a member function

*/
// class A 
// {

//  public function display()
//  {
//   $name="My name is : Govind";
//   echo $name;
//  }
// }
// //$obj=new A; //new A is an object of class A
// $obj->display(); 

// class A 
// {
    
//  public function display()
//  {
//   $a=15;
//   $b=25;
//   $c=$a+$b;
//   echo "Additions of numbers is :".$c;
//  }
// }
// $obj=new A; //new A is an object of class A
// $obj->display(); 


// w.a.p to print name take input from users
class Name 
{
    public function display()
    {
        if(isset($_POST["add_btn"]))
            {
                $name=$_POST["uname"];
                echo "<h3 align='left'>Your name is : $name</h3>";

            }
    }
}

$obj=new Name;
$obj->display();


?>

<html>
   <head>
    </head>
<body>
 <h2>Print your name</h2>   
 <form method="post">
    <input type="text" name="uname">
    <br><br>
    <input type="submit" name="add_btn" value="Submit">
 </form>   
</body>    
</html>
