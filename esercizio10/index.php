<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orario</title>
</head>
<body>
    <?php
    // Variabile orario (modifica il valore per testare)
    $orario = 10;

    // Controllo dell'orario
    if ($orario < 12) {
        echo '<p>Buongiorno! ☀️</p>';
    } else {
        echo '<p>Buonasera! 🌙</p>';
    }
    ?>
</body>
</html>
t