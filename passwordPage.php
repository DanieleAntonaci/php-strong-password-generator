<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
    <?php
        session_start();
        $password = $_SESSION['password'];
    ?>
</head>
<body>
    <h1>
        <?php
            echo $password
        ?>
    </h1>
   <a href="./index.php">Torna indietro</a>
</body>
</html>