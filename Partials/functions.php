<?php
session_start();

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

if(isset($_GET['password'])) {
    $passwordLength = strlen($_GET['password']);
    $_SESSION['passwordCasuale'] = randomize($passwordLength);
}