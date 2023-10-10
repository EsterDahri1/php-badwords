<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form class="mt-5" action="script.php" method="get">
            <div class="mb-3">
                <label for="" class="form-label">Word</label>
                <input type="text" class="form-control" name="word" id="word" aria-describedby="helpId" placeholder="Type a word to censure">
                <small id="helpId" class="form-text text-muted">Type a word to censure</small>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Sentence</label>
                <input type="text" class="form-control" name="sentence" id="sentence" aria-describedby="helpId" placeholder="Type a paragraph">
                <small id="helpId" class="form-text text-muted">Type a pragraph</small>
            </div>
            <button class="btn btn-primary " type="submit">Send</button>
        </form>
    </div>


</body>

</html>