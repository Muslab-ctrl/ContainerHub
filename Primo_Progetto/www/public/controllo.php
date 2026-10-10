<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Controllo del Login</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
</head>
<body>


<?php
$flag = false;
$password = $_POST['password'] ?? '';

if (mb_strlen($password) < 8) {
    echo "La password deve contenere almeno 8 caratteri.";
    $flag = true;
}

if (!preg_match('/[A-Z]/', $password)){
    echo "La password deve contenere almeno una lettera maiuscola.";
    $flag = true;
}

if (!preg_match('/[0-9]/', $password)){
    echo "La password deve contenere almeno un numero.";
    $flag = true;
}

if (!$flag) {
    header("area_riservata.php");
    exit;
}

?>

</body>
</html>