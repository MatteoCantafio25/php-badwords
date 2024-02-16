<?php

// PRENDO LA RISPOSTA DELL'UTENTE NEL FORM IN GET 
$paragraph = $_GET['paragraph'];

// ELIMINO EVENTUALI SPAZI IN PIU' MESSI DALL'UTENTE
$trimmed_paragraph = trim($paragraph);

// CONTROLLO LA LUNGHEZZA DEL PARAGRAFO
$paragraph_lenght = strlen($trimmed_paragraph);

// CREO UN NUOVO PARAGRAFO DOVE ALL'INTERNO CENSURO UNA PAROLA SPECIFICA
$new_paragraph = str_replace('ipsum', '***', $trimmed_paragraph);

// CONTROLLO LA LUNGHEZZA DEL NUOVO PARAGRAFO
$new_paragraph_lenght = strlen($new_paragraph);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords Back</title>
</head>
<body>
    <h1>Il tuo testo è: <?= $trimmed_paragraph ?>, lunghezza (<?= $paragraph_lenght ?>)</h1>
    <h2><?= $new_paragraph ?>, lunghezza (<?= $new_paragraph_lenght ?>)</h2>
</body>
</html>