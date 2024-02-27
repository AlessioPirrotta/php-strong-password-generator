<?php
$password = $_GET["password"];
$passwordLength = strlen($password);

function randomize($passwordLength)
{
    $caratteri = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()-_';
    $lunghezzaCaratteri = strlen($caratteri);
    $password = '';

    for ($i = 0; $i < $passwordLength; $i++) {
        $carattereCasuale = $caratteri[random_int(0, $lunghezzaCaratteri - 1)];
        $password .= $carattereCasuale;
    }

    return $password;
}
$passwordCasuale = randomize($passwordLength);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark ps-5 text-light">
    <form action="index.php" method="$_GET" class="mb-3 pt-5 d-flex align-items-center gap-5">
        <label for="password" class="form-label text-capitalize fw-bold fs-4 text-primary">lunghezza password:</label>
        <input style="width: 20%;" type="text" class="form-control" name="password" placeholder="" />
        <button class="btn btn-primary" type="submit">Invia</button>
    </form>
    <?php
    if (!empty($passwordCasuale)) {
        echo '<h3 class="text-danger"> La tua non Password è sicura prova con: <span class="text-warning">' . $passwordCasuale .'</span></h3>';
    }
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>