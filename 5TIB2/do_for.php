Przy użyciu pętli for oblicz 
sumę elementów tablicy zawierającej cztery liczby.

<?php
$numbers = [5, 10, 15, 20];
$sum = 0;
for ($i = 0; $i < count($numbers); $i++) {
    $sum += $numbers[$i];
}
echo "Suma elementów tablicy: " . $sum;