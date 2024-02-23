<?php
    $paragrafo = $_POST['par'];
    $censura = $_POST['censured'];

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad word censored</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <h1 class="text-center py-3">PHP - CENSORED</h1>
    </header>

    <main>
        <div class="container">
            <div class="row">

                <div class="col-6">
                    <h2 class="text-warning mb-5">Paragrafo: 
                    <span class="text-white"><?php echo $paragrafo ?></span> 
                    </h2>
                    <h2 class="text-primary">Lunghezza caratteri:
                        <span class="text-white"><?php echo strlen($paragrafo)?></span> 
                    </h2>
                </div>
                <div class="col-6">
                    <h2 class="text-success">Il paragrafo censurato è: 
                        <span class="text-white"><?php echo str_replace($censura, '<span class="text-danger">***</span>', $paragrafo)?></span>
                    </h2>
                </div>
            </div>
        </div>
        
        
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>