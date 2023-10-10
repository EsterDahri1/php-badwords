<?php
$word = $_GET['word'];
$initial_p = $_GET['sentence'];

$censured_text = str_replace($word, '***', $initial_p);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The bad word</title>
</head>

<body>
    <div>
        <h3>Original text</h3>
        <p>Original: <?php echo $initial_p; ?></p>
        <p>Length: <?php echo strlen($initial_p); ?></p>
    </div>
    <hr>
    <div>
        <h3>Censured text</h3>
        <p>Censured pragraph: <?php echo $censured_text; ?></p>
        <p>Length: <?php echo strlen($censured_text); ?></p>
    </div>
</body>

</html>