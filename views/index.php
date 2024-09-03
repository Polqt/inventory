<?php 
    include "../connection.php"
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Stocktory</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/styles/styles.css">
    </head>
    <body>
        <div class="container">
            <div class="box">
                <img src="../public/images/nyan-cat.gif" alt="waving cat" width="250">
                <h1>Welcome Back!</h1>
                <p>Don't have an account yet? <a href="./register.php" class="link-primary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Sign up</a></p>
                <form action="" method="post">
                    <div class="form-floating">
                        <input class="form-control" id="floatingEmail" type="email" name="email" autocomplete="off" placeholder="Email">
                        <label for="floatingEmail">Email</label>
                    </div>
                    <div class="form-floating">
                        <input class="form-control" id="floatingPassword" type="password" name="password" autocomplete="new-password" placeholder="Password">
                        <label for="floatingPassword">Password</label>       
                    </div>
                    <button type="submit" name="submit-btn" id="submit-btn" class="btn btn-primary" onclick="redirectLink()">Sign in</button>
                </form>
                <span><a href="../views/forgot-password.php" class="link-dark link-offset-2 link-primary-hover link-underline-opacity-0 link-underline-opacity-100-hover">Forgot your password?</a></span>
            </div>
        </div>

        <script src="../script.js"></script>
    </body>
</html>
