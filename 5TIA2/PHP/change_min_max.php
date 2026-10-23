Napisz funkcję, która zamienia w tablicy element minimalny z elementem maksymalnym

<?php
function znajdzMax($tablica) {
    $max_indeks = 0;
    for($i=1; $i<count($tablica);$i++) {
        if($tablica[$i] > $tablica[$max_indeks] ) {
            $max_indeks=$i; // Zwraca indeks znalezionego elementu
        }
    }
    return $max_indeks; 
  }

function znajdzMin($tablica) {
    $min_indeks = 0;
    for($i=1; $i<count($tablica);$i++) {
        if($tablica[$i] < $tablica[$min_indeks] ) {
            $min_indeks=$i; // Zwraca indeks znalezionego elementu
        }
    }
    return $min_indeks; 
  }

$liczby=[1,2,3,4,5,6,7,8];
$min_i=znajdzMin( $liczby );
$max_i=znajdzMax( $liczby );
$temp=$min_i;
$min_i=$max_i;
$max_i=$temp;


