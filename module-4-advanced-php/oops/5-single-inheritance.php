<?php 
/*

 single inheritance :

  A single inheritance meanse one parent class properties only access by its one child class i.e called single inheritance

   examples :  A => B 

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