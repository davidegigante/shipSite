<?php

require '../connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeCorr = $_POST["nomeCorr"];
    $telefono = $_POST["telefonoCorr"];
    $email = $_POST["emailCorr"];
    $password = $_POST["passwordCorr"];
    $indirizzo = $_POST["indirizzo"]

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

}

pg_close($connection);
?>
