Napisz funkcję, która wyszuka w tablicy 
największy element i zwróci jego wartość


<?php
function znajdzMax($tablica) {
    $max = $tablica[0];
    for($i=1; $i<count($tablica);$i++) {
        if($tablica[$i] > $max ) {
            $max=$tablica[$i]; // Zwraca indeks znalezionego elementu
        }
    }
    return $max; 
  }
$tablica = [1, 2, 3, 4, 5];
$indeks = znajdzMax($tablica);
echo "Największy element w tablicy to: " . $indeks;
