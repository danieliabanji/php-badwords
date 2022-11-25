<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>BadWords</title>
</head>
<body>
    <div class="container my-5">
        <div class="card my-card">
            <form action="print.php" method="GET" class="text-center card-body">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <label for="testo" class="form-label">Inserisci testo</label>
                        <input type="text" class="form-control" id="testo" name="tuo_testo">
                    </div>
            
                    <div class="col-5">
                        <label for="censura" class="form-label">Inserisci ciò che vuoi nascondere</label>
                        <input type="text" class="form-control" id="censura" name="tua_censura">
                    </div>
                </div>
            
                <button type="submit" class="col-4 mt-4 btn btn-success"> Invia </button>
            </form>
        </div>
    </div>
</body>
</html>