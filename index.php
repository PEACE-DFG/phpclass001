<?php 
  // php code goes here...
  // teminate every php line of code...
  echo"hello world! ";
  echo"<br>"; 
  EcHo"hello world!" 
  
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php class</title>
</head>

<body>

  <?php
  $color="red";
  $x=5;
  $y=7;
  echo "My car is". $color . "<br>";
 /*
  echo "My car is". $COLOR . "<br>";
 */

 echo($x+$y);

 $o=3; //global scope variable
 
 function myTwist(){
  // genrates error 
   $o=7; //local scope variable

  echo "<p> Variable o inside the function is: $o </p>";
 }

 myTwist();
 
  
 echo "<p> Variable o outside the function is: $o </p>";



 $r = 5;
 $d = 9;
 
 function myTest(){
/*global $r,$d;
  
  $d= $r+$d;


  $GLOBALS[INDEX]
    */

    
  // $GLOBALS['d']= $GLOBALS['r'] + $GLOBALS['d'];
  
  
 }
//  myTest();
//  echo  $d;



 function myStat(){
  static $x=0;
  echo $x;
  $x++;
 }

 myStat();
 echo "<br>";
 myStat();
 echo "<br>";
 myStat();
 
  ?>

</body>

</html>