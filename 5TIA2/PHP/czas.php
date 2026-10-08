Utworzenie daty przesuniętej czasowo o tydzień

<?php

$now = time();
$week = 7*24*60*60; // w sekundach
echo "<br>za tydzięń: ".
      date("d.m.Y h:i:sa", $now +$week );
