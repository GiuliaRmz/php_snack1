<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina con Variabili PHP</title>
</head>
<body>
    <?php
    // Dichiarazione delle variabili
    $titolo = "Benvenuto nel mio sito!";
    $sottotitolo = "Esplora il mondo del PHP";
    $descrizione = "Questa è una semplice pagina web in cui PHP viene utilizzato per generare contenuti dinamici all'interno di HTML.";
    ?>

    <h1><?php echo $titolo; ?></h1>
    <h2><?php echo $sottotitolo; ?></h2>
    <p><?php echo $descrizione; ?></p>
</body>
</html>
