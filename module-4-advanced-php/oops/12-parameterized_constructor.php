<?php 
//pass parameter i.e called  parameterized  constructor __construct(a,b) magic method  
class A 
{
    public function __construct($a,$b)
    {
        $c=$a+$b;
        echo "additions is :".$c;
    }
}
$obj=new A(10,25);

?>