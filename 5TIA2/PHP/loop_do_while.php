Przy użyciu pętli do..while wypisz liczby parzyste od 0 do 100
<?php
$i=0;
do {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
    $i++;
} while ($i <= 100);
