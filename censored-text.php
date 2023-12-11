<?php
$user_text = $_GET['user-text'];
$bad_word = $_GET['bad-word'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censored text</title>
</head>
<body>
    <div>
        <h2>Il tuo testo:</h1>
        <p><?php echo $user_text ?></p>
        <span>Lunghezza del testo: <?php $length = strlen($user_text); echo $length; ?></span>
    </div>
    <div>
        <h2>Testo censurato:</h2>
        <?php $new_text = str_replace($bad_word, '***', $user_text); ?>
        <p><?php echo $new_text ?></p>
        <span>Lunghezza del testo: <?php $new_text_length = strlen($new_text); echo $new_text_length?></span>
    </div>
</body>
</html>