<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Word</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
    <header>
        <h1 class="text-center py-3">PHP - BADWORDS</h1>
    </header>

    <main>
        <div class="container">
            <form action="censored.php" method="post">
                <div class="row">
                    <div class="col-6">
                        <div>
                            <label for="par" class="mb-3">
                                Inserisci un paragrafo
                            </label>
                            <textarea class="form-control" name="par" id="par" cols="30" rows="10"></textarea>    
                        </div>
                    </div>
    
                    <div class="col-6">
                        <div>
                            <label for="censured" class="mb-3">
                                Inserisci una parola da censurare
                            </label>
                            <input class="form-control" type="text" name="censured" id="censured">
                        </div>
                    </div>
                    <div class="col">
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary">Clicca per censurare!</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>