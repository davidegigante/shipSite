<?php
session_start();

// Controlla se l'utente è loggato
if (!isset($_SESSION['loggedin'])) {
    // Reindirizza all'homepage se l'utente non è loggato
    header('Location: index.html');
    exit;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'your_database_name';

// Connetti al database
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    // Se c'è un errore con la connessione, ferma lo script e visualizza l'errore.
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// Prepara la query SQL
$stmt = $con->prepare('SELECT password, email, nome, cognome, indirizzo FROM accounts WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email, $nome, $cognome, $indirizzo);
$stmt->fetch();
$stmt->close();
?>
