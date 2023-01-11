<?php
    $passwordLength = $_GET['passwordLength'] ?? 0;
    function generateRandomString($passwordLength) {

        // caratteri per la password
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?$?%^&*()_-+={[}]:;@#|\<,>.?/';

        // lunghezza stringa caratteri
        $charactersLength = strlen($characters);

        // stringa di ritorno
        $randomPassword = '';

        // ciclo generazioe stringa
        for ($i = 0; $i < $passwordLength; $i++) {
            $randomPassword .= $characters[rand(0, $charactersLength - 1)];
        }
       
        return $randomPassword;
    };