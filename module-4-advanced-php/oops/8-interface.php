<?php 
/* 

interface : 

  interface is a solution of multiple inheritance 
  we cane access multiple parent class properties via one child class using interface 

  syntax 
  
  interface A 
  {
   public function display1();
  }
   
  interface B 
  {
   public function display2();
  }
   
  interface C 
  {
   public function display3();
  }

  class D implements A,B,C
  {
    public function display1()
    {
     echo "My name is : Brijesh"."<br>";
    }
     
    public function display2()
    {
     echo "My name is : Govind"."<br>";
    }
     
    public function display3()
    {
     echo "My name is : Harmit"."<br>";
    }
  
  }

  $obj=new D;
  $obj->display1();
  $obj->display2();
  $obj->display3();

*/


interface A 
  {
   public function display1();
  }
   
  interface B 
  {
   public function display2();
  }
   
  interface C 
  {
   public function display3();
  }

  class D implements A,B,C
  {
    public function display1()
    {
     echo "My name is : Brijesh"."<br>";
    }
     
    public function display2()
    {
     echo "My name is : Govind"."<br>";
    }
     
    public function display3()
    {
     echo "My name is : Harmit"."<br>";
    }
  
  }

  $obj=new D;
  $obj->display1();
  $obj->display2();
  $obj->display3();


?>