<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <?php
        require_once __DIR__ . "/libs/helper.php";

        $passwordLength = $_GET['passwordLength'] ?? 0;
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