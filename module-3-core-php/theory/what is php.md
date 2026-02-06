# What is php ?

## Definition 
    
   1. php stands for personal home page in 1994
   2. php is now stands for php:hypertext preprocessor
   3. php is first time release in in 1994 by rasmus landroef 
   4. php server side scripting language 
   5. php run on apache  server using some server tools

        types of server tool in php

        1. wamp 
              1. w : windows
              2. a : apache(server)
              3. m : mysql
              4. p : perl
        2. xampp
              1. x : cross plateform(support all OS)
              2. a : apache(server)
              3. m : mysql
              4. p : perl
              5. p : php
        3. lamp  
              1. l : linux/unix
              2. a : apache(server)
              3. m : mysql
              4. p : perl
   6. php support all os
   7. php support all server 
      examples : apache | tomcat | IIS
   8. php support all database also 
      examples: mysql | mongoDB | oracle | cybase | sql server etc.

   9.  php is one of most popular server side language 
   10. php create a dynamic website 
   11. php file extension .php or .php3 or .phtml
   12. php is open source language 
       example : open source meanse avaiale free without any licence


   **how to start php**
   
   php start with its extension with .php 

   1. standard delimeter 
      ```
      <?php  
      statements;
      ?> 
      ```  

   2. direct output  delimeter 
      ```
      <?=  
      statements;
      ?>   
      ```

## what is operator in php

  A operator is used to perform any operation on its values and variables there we used operator 

   **types of oeperator**
   1. airtmatic operator 
      **examples**
      ```
      + , - , * , / , %
      ``` 
    2. Relational or comparison operator 
       **examples**
      ```
      >, >= , < , <= , ===
      ```    

    3. assingment operator 
     
       **examples**
      ```
      ==, =, != , +=, -=, *=, /= , %=  
      ```

     
    4. ternary operator 
     
       **examples**
      ```
      ? :  
      ```

      
    5. increment/decrement operator 
     
       **examples**
      ```
      ++ , -- 
      ```
      
    6. string concatenate operator 
     
       **examples**
      ```
       .
      ```
      7. logical operator 

        **examples**

        ```
        && , ||, !
        
        ```
## what is variable in php
   
   1. A variable is used to stored an  information about data there we used variables.

   2. A variable is assinged in php by $ symbol

      **examples**

      ```
       <?php 
     $a=10;
     $b=20;
     $name="Brijesh";
     $c=10.56;
     $d=114545656565;
     $e=true;

     echo $a."<br>".$b."<br>".$name;

      ?>
      ```

## Rules to assign any variables
   
   1. any variable in php start with $ symbol
   2. any variables start with character $name can not start with number
   3. any variables in php does not accept space $a b=10
   4. any variables does not start with white space $ a=10
   5. any variables did  start with underscore $_a=10
   6. any variables does not start with reserved keyword 


   ```
   <?php 
   // $a=10;
   // $b=20;
   // $name="Brijesh";
   // $c=10.56;
   // $d=114545656565;
  // $e=true;
  // echo $a."<br>".$b."<br>".$name;


  // $a=10;
  // echo $a;

  // $ab=10;

  // _$a=10

  $name="hi i am brijesh";
  echo $name;
  ?>

   ```

## data types in variables

   A data types is used to stored which type of value in variables i.e called data types 

   **types of data type**
   1. int 
   2. string 
   3. float 
   4. undefined 
   5. boolean 
   6. null

   ```
  <?php

  $a=10; //int
  $b=20; //int
  $name="Brijesh"; //string
  $c=10.56;   //float
  $d=114545656565; //int
  $e=true; //boolean
  //$f;
  $g=null;

  echo $a."<br>".$b."<br>".$name."<br>";
  echo var_dump($e)."<br>";
  echo var_dump($c);
  //echo $f;
  echo var_dump($g);
  // 
   ?>
  ```
## examples of operator

  ```
 // examples of operator 
 $a=10;
 $b=5;
// airthematic operator

// echo $a+$b."<br>";
// echo $a-$b."<br>";
// echo $a*$b."<br>";
// echo $a/$b."<br>";
// echo $a%$b."<br>";

// relational or comparison operator

// echo ($a > $b)."<br>";
// echo ($a >= $b)."<br>";
// echo ($a < $b)."<br>";
// echo ($a <= $b)."<br>";
// echo ($a != $b)."<br>";

// ternary operator (conditional operator)
// without condition check true or false or conditional operator
 
// $age=10;
// $res=$age>=18?"i am adult":"i am child";
// echo $res;


// true both assinged same values with data types  
// $a=10;
// $b=5;
// echo ($a && $b);

// true
// $a=10;
// $b=5;
// echo ($a || $b);


// false 
// $a=10;
// $b=5;
// echo (! $a);


// increments / decrement 

// $i=10;
// // $i++;
// $i=$i+1;
// echo $i;


// $i=10;
// $i--;
// echo $i;


// $i=10;
// ++$i;
// echo $i;


$i=10;
--$i;
echo $i;

  ```

  
   

