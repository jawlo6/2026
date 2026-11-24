<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="baza";

$conn=mysqli_connect($servername, $username, $password, $dbname );
if( !$conn ){
	die( "nieudane połączenie" . mysqli_connect_error() );
}else{
    echo "połączono z bazą danych";
}
