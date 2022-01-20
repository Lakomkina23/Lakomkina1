<?php

$name = 'Iullia';

echo 'My name\'s Iullia <br>';

echo '<br>';

$message = "значение переменной name = $name";

echo $message;

echo '<br>';

echo htmlspecialchars ('<img src = "images/img.png">');

echo '<hr>';

$n = -1;

if ($n++) {
echo 'true';
} else {
    echo 'false';
}

echo '<hr>';
$n = 10;
$n *=12;

echo $n;

echo '<br>';

$name = 'Michelle';
$name .= 'Karamel';
echo $name;