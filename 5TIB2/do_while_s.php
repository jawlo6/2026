Przy użyciu pętli do..while 
wypisz liczby parzyste od 0 do 10

<?php
$number = 0;
do {
    if ($number % 2 == 0) {
        echo $number . "\n";
    }
    $number++;
} while ($number <= 10);
