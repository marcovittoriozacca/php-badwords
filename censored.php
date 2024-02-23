<?php
    $paragrafo = $_POST['par'];
    $censura = $_POST['censured'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad word censored</title>
</head>
<body>
    
    <header>
        <h1>PHP - CENSORED</h1>
    </header>

    <main>

        <h2>Il paragrafo censurato è: <?php echo str_replace($censura, '***', $paragrafo)?> <br> Lunghezza caratteri: <?php echo strlen($paragrafo) ?> </h2>
    </main>

</body>
</html>