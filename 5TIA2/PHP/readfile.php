<?php
	$plik=fopen( "plik.txt", "r" );
    echo readfile( $plik );
	fclose( $plik );
