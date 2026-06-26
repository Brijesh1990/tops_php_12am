<?php 
/*

what is object in oops ?

1. An object is an instance of class 
2. An object is an examples of class 
3. An object is a collection of class 
4. An object is called via new keyword 
5. An object always call same name of class with new keyword


  syntax : 
  
  class classname 
  {
   public function display()
   {
     
    statements;
   
   }
  
  }

  call an object // new same name of class
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

$obj=new Name; //new Name is an object of class Name 
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
