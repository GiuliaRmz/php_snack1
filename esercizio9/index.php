<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stato Utente</title>
</head>
<body>
    <?php
    // Variabile che rappresenta lo stato dell'utente
    $statoOnline = true; // Cambia a false per testare l'altro caso

    // Controllo dello stato e stampa del messaggio con colore
    if ($statoOnline) {
        echo '<p style="color: green;">Utente online</p>';
    } else {
        echo '<p style="color: red;">Utente offline</p>';
    }
    ?>
</body>
</html>
