<?php

function generateRandomString($passwordLength) {

    // caratteri per la password
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?$?%^&*()_-+={[}]:;@#|\<,>.?/';

    // lunghezza stringa caratteri
    $charactersLength = strlen($characters);

    // stringa di ritorno
    $randomString = '';

    // ciclo generazioe stringa
    for ($i = 0; $i < $passwordLength; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
};