<?php

    define('__CONFIG__', true);

    require_once "database/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Registration</title>
    
</head>
<body>
    <div class="container">
        <div class="mt-auto">
            <h1 class="display-4">Welcome</h1>
            <h5>Todays date is: <?php echo date(' Y-m-d'); ?></h5>
            <a href="login.php" class="btn btn-primary">Login</a>
            <a href="registration.php" class="btn btn-success">Registration</a>
        </div>
    </div>
    <?php require_once 'footer.php'?>
</body>
</html>
