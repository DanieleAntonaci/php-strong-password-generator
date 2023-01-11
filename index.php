<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <?php
        $passwordLength = $_GET['passwordLength'] ?? 0;

        function generateRandomString($passwordLength) {
            
            // caratteri per la password
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

            // lunghezza stringa caratteri
            $charactersLength = strlen($characters);

            // stringa di ritorno
            $randomString = '';

            // ciclo generazioe stringa
            for ($i = 0; $i < $passwordLength; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

    ?>
</head>
<body>
    <form method="get">
        <input type="number" name="passwordLength">
        <input type="submit" value="number">
    </form>

    <?php
        echo  generateRandomString($passwordLength)
    ?>
</body>
</html>