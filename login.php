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
    <title>Document</title>
    
</head>
<body>
    <div class="container">
        <div>
            <a href="index.php" class="btn btn-default float-right">Home</a>
            <h1 class="display-4">Login</h1>
        </div>
        <div class="col-md-8">
            <form class="js-login">
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                
                <p class="js-error text-danger mt-1"></p>
                
                <button type="submit" class="btn btn-primary">LOGIN</button>
            </form>
        </div>
    </div>
    <?php require_once 'footer.php'?>

</body>
</html>
