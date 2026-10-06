<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Riepilogo</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
</head>
<body>

Gentile <?php echo $_POST["cognome"]; ?> <?php echo $_POST["name"]; ?><br>
Lei ha richiesto l'iscrizione al corso <?php echo $_POST["lingua"]; ?> livello <?php echo $_POST["livello"]; ?> con orari:<br><br>

<?php
if (isset($_POST["orario"]) && is_array($_POST["orario"])) {
    echo htmlspecialchars(implode(", ", $_POST["orario"]));
} else {
    echo "Nessun orario selezionato";
}
?><br><br>

Altre richieste:<br>
<?php echo $_POST["richieste"]; ?><br><br>

Stiamo verificando tutti i dati, le invieremo la risposta a <?php echo $_POST["email"]; ?>

</body>
</html>