<?php 
/* 

what is inheritance ?

 A inheritance is used to access parent class properties by its child class i.e called inheritance 

 or

 A parent class properties access by its child class i.e called inheritance

 examples ...
 
  A => B
  
  Note : inheritance is used via extends keyword 

  syntax ....

  class A 
  {
   
    public function display1()
    {
       
     statements;
    
    }
  
  }
  class B extends A 
  {
    
    public function display2()
    {
    
      statements;
    }
    
  } 

  $obj=new B;
  $obj->display1()
  $obj->display2()



  # types of inheritance.... 
  
  a) single inheritance
  b) multilevel inheritance
  c) multiple inheritance 


*/

class A 
{
    public function display1()
    {
      $name="My pet name is : Tiger"."<br>";
      echo $name;  
    }
}

class B extends A 
{
    public function display2()
    {
      $owner="Tiger owner is  : Mr vivek patel";
      echo $owner;  
    }
}

$obj=new B;
$obj->display1();
$obj->display2(); 



?>