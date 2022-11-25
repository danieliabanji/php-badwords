<?php 
    $tuo_testo = $_GET["tuo_testo"];
    $censura = $_GET["tua_censura"]; 
    $stringa_censurata = str_replace($censura, "***", $tuo_testo); 
?>
<!-- <?php var_dump($censura);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">

    <title>Document</title>
</head>
<body>
    <div class="container mt-5 ">
        <div class="card my-card text-center">
            <div class="card-body">
                <h4>Ecco il tuo testo senza filtri</h4>
                <p><?php echo $tuo_testo; ?></p>
                <p>Numero di caratteri di cui è composto:</p>
                <?php echo strlen($tuo_testo) ?>
                
                    <h5>Questa invece è la versione a cui hai deciso di applicare la censura:</h5>
                <p>
                    <?php echo $stringa_censurata; ?>
                </p>
                <span>La stringa censurata è composta da </span> <?php echo strlen($stringa_censurata) ?> <span>caratteri</span>
                <hr>
                <a href="index.php" class="btn btn-danger col-4 m-4">Cancella</a>
            </div>
        </div>
    </div>
</body>
</html>