<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
    <?php
        session_start();

        require_once __DIR__ . "/libs/helper.php";
    ?>
</head>
<body>
    <form method="get">
        <input type="number" name="passwordLength"
    
        >
        <input type="submit" value="number">
    </form>

    <?php
        if($passwordLength > 0){

            $_SESSION['password'] = generateRandomString($passwordLength);
            header('Location: ./passwordPage.php');
    }
    ;
    ?>
</body>
</html>