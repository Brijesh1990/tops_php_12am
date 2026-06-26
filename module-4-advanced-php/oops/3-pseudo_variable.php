<?php
// pseudo variables is denoted by $this symbol 
// in oops pseudo variables is access any variables globally inside of member function 
// pseudo variables access any variables inside of member function globally via $this symbol 


// class A 
// {
//     public $name="my name is vijay setupati";
//     public function display()
//     {
//      echo $this->name;   
//     }
// }
// $obj=new A;
// $obj->display(); 



class A 
{
    public $a=10;
    public $b=20;
    public function display()
    {
     $c=$this->a + $this->b;
     echo "Additions of numbers is : ".$c;   
    }
}
$obj=new A;
$obj->display(); 

?>