<?php

function sayHello () {
echo 'Hello <br>';

}

function plusOne ($a) {
    echo ++$a . '<br>';
    }


function multiply ($a,$b) {
echo $a * $b . '<br>';
}
sayHello ();


function sumNumbers ($a, $b, $c = 10) {
echo $a+$b+$c . '<br>' ;

}

echo 'Hi!<br>';

sayHello ();

sayHello ();

plusOne (55);

$number = 18;
plusOne ($number);

multiply (10,5);

sumNumbers (1,2,3);

$numbers = [1,5,3,7,2,4];

function maxNumber (array $numbers) {
   $max = $numbers [0];
   foreach ($numbers as $number){
       if ($number > $max) {
           $max = $number;
       }
   }
   return $max;
}

function sumArray (array $numbers) {
      $res = 0;
      foreach ($numbers as $number) {
          $res += $number;
      }
     return $res;
}

echo maxNumber ($numbers);

echo max ($numbers) . '<br>';

