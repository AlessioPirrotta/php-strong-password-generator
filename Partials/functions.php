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