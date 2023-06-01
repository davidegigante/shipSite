<?php

require '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $isCorriere = isset($_POST["aziendaCheckbox"]);
    $indirizzo = $_POST["indirizzo"]

    if ($isCorriere) {

        $nomeAzienda = $_POST["nomeAzienda"];
        $partitaIVA = $_POST["partitaIVA"];

        $queryAzienda = "INSERT INTO tabella_aziende (nome_azienda, partita_iva) VALUES ('$nomeAzienda', '$partitaIVA')";

        $resultAzienda = pg_query($connection, $queryAzienda);

        if (!$resultAzienda) {
            echo "Errore nell'inserimento dei dati aziendali.";
            exit;
        }

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $nomeAzienda = "";
    $partitaIVA = "";

    // Inserimento azienda
    if ($isAzienda) {
        $nomeAzienda = $_POST["nomeAzienda"];
        $partitaIVA = $_POST["partitaIVA"];

        $queryAzienda = "INSERT INTO tabella_aziende (nome_azienda, partita_iva) VALUES ('$nomeAzienda', '$partitaIVA')";

        $resultAzienda = pg_query($connection, $queryAzienda);

        if (!$resultAzienda) {
            echo "Errore nell'inserimento dei dati aziendali.";
            exit;
        }
    } else {
        // Inserimento Utente 
        $queryUtente = "INSERT INTO tabella_utenti (nome, email, password) VALUES ('$nome', '$email', '$password')";

        $resultUtente = pg_query($connection, $queryUtente);

        if (!$resultUtente) {
            echo "Errore nell'inserimento dei dati utente.";
            exit;
        }
    }

    echo "Nome: " . $nome . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";

    if ($isAzienda) {
        echo "Nome azienda: " . $nomeAzienda . "<br>";
        echo "Partita IVA: " . $partitaIVA . "<br>";
    }
}

pg_close($connection);
?>

