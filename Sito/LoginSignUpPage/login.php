<?php

require '../connection.php';

// Verifica delle credenziali
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = $1 AND password = $2";
    $result = pg_query_params($conn, $query, array($email, $password));

    if ($result && pg_num_rows($result) > 0) {
        echo "Accesso effettuato con successo!";
    } else {
        echo "Credenziali non valide.";
    }

    // Liberazione delle risorse
    pg_free_result($result);
}

pg_close($conn);
?>
