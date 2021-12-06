<?php

$number = 4;

if ($number > 5) {
    echo '10 больше 5';
    echo '<br>';
    echo '!';
}

echo '<br>';
echo 'Эта строка выводится всегда';

if ($number > 5) {
   echo '<br>';
   echo 'число больше 5';

} else {
    echo '<br>';
    echo 'число меньше или равно 5';
}

if ($number > 5) {
    echo '<br>';
    echo 'число больше 5';
 
 } else if ($number > 3 ){
     echo '<br>';
     echo 'число меньше или равно 5, но больше 3';

 } else if ($number > 0) {

    echo '<br>';
    echo 'либо 1, либо 2. либо 3';

 } else {
    echo '<br>';
    echo'0 либо отрицательный';
 }
 $second_number = 0;
  
 echo '<hr>';

 if ($number > 0 or $second_number == 0) {
    echo '$number >0 и $second_number равно 0';
 }
 if ($number > 0) {
     if ($number >2) {
         echo 'число больше 2';
     }
    }

    if ($number != 0) {
        echo '<br>';
        echo'число не 0';

    }
# вывести одно из 3 сообщений
# если возраст меньше 7 : Вы дошкольник
# если старше 6 и младше 19: Вы в школе
# если старше 18: Закончили школу


$age = 13;

if ($age < 7) {
    echo 'Вы дошкольник';
    echo '<br>';
   }

if ($age > 6 and $age < 19) {
   echo '<br>';
   echo 'Вы в школе';
}

if ($age > 18 ) {
    echo 'Вы закончили школу';
}