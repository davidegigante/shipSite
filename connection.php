<?php

$host = 'localhost';
$port = '5432';
$dbname = 'TSW';
$user = 'gruppo13';
$password = 'gruppo13';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Errore nella connessione al database.";
    exit;
}
?>
