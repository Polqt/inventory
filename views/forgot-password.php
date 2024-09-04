<?php 
    include "../backend/connection.php";
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="../public/styles/forgot_password.css">
    </head>
    <body>
        <div class="container">
            <div class="box">
                <div class="text-center mb-4">
                    <h1>Forgot Password?</h1>
                    <p class="pb-2">No worries, we'll send you some instructions</p>
                    <div class="container text-start row">
                        <form action="" method="post">
                            <div class="form-floating mb-5">
                                <input class="form-control" id="floatingEmail" type="email" name="email" autocomplete="off" placeholder="Email">
                                <label for="floatingEmail">Email</label>
                            </div>
                            <div class="w-100 mb-3">
                                <button type="submit" name="submit-btn" class="w-100 btn btn-primary">Reset Password</button>
                            </div>
                        </form>
                        <div class="mb-4">
                            <button type="submit" name="submit-btn" class="w-100 btn btn-outline-primary" id="submit-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                                </svg>
                                Back to Login
                            </button>
                        </div>
                    </div>
                    <span>Don't have an account? <a href="../views/register.php" class="link-primary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Sign up</a></span>
                </div>
            </div>
        </div>

        <script src=""></script>
    </body>
</html>