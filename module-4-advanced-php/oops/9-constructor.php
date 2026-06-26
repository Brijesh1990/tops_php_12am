<?php 
/*  
what is constructor in oops  ?

   1. A constructor is a same name of class 
   2. A constructor is automatically called when we create an object of class 


   types of constructor 
   
   1) user defined constructor 
   2) pre defined constructor 
   3) parameterized constructor  


*/

class A 
{
    public function __construct()
    {
        echo "Hi i am brijesh";
    }
}
$obj=new A;

?>