<?

$number = 1;

while ($number < 10) {
  echo $number . '<br>';
// $number = $number + 1;
// $number += 1;
$number ++;

}

echo '<select>';
echo "<option selected disabled> -- Выберите значение -- </option>";
for ($i = 1; $i < 10 ; $i++) {
    echo "<option> $i </option>";
}
echo '</select>';

$f = - 50;
while ($f <= 50) {
$c = round (($f - 32)*5/9, 2);
echo "$f: $c<br>";
$f ++;
}