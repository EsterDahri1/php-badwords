<?php
$w1 = $_POST['word'];
$bad_Word = $_POST['bad_Word'];
$wright_word = str_replace($bad_word, '***', $w1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The bad word</title>
</head>

<body>
    <p>Word 1: <?php echo $w1; ?></p>
    <h4>The inserted word is <?php echo strlen($w1) ?> letters long.</h4>


</body>

</html>