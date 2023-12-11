<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>
<body>
    <form action="censored-text.php" method="GET">
        <label for="user-text">Scrivi qualcosa</label>
        <input type="text" id="user-text" name="user-text">

        <label for="bad-word">Decidi la parola da censurare</label>
        <input type="text" id="bad-word" name="bad-word">

        <button type="submit">Invia</button>
    </form>
</body>
</html>