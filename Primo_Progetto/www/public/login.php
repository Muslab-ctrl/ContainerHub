<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>Pagina di Login</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >

</head>
<body>
<form action="controllo.php" method="post">

    <h2>Accesso all'area riservata</h2>
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Accedi">

</form>

</body>
</html>
