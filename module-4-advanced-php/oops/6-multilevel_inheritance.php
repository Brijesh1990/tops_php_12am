<?php 
/*

 multilevel inheritance :

  A multilevel inheritance access one parent class properties via its child and further access   by its  child class after a child class properties access by another child class its so on i.e multilevel_inheritance called single inheritance

   examples :  A => B => C => D =>E

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
      $owner="Tiger owner is  : Mr vivek patel"."<br>";
      echo $owner;  
    }
}
class C extends B 
{
  public function display3()
    {
      $house="Tiger house name is  : Pet Penta house  150 feet ring road rajkot";
      echo $house;  
    }    
}
$obj=new C;
$obj->display1();
$obj->display2(); 
$obj->display3();
?>