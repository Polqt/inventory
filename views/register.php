<?php
    include "../connection.php";
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
        <link rel="stylesheet" href="../public/styles/register.css">
    </head>
    <body>
        <div class="container">
            <div class="w-50 text-start box">
                <div class="text-center mb-4">
                    <h1>Create an account</h1>
                    <p>Already have an account? <a href="./index.php" class="link-primary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Sign In</a></p>
                </div>
                <form action="sign_up.php" method="post">
                    <div class="w-100 container">
                        <div class="w-100 center row row-cols-2">
                            <div class="col mb-4">
                                <label class="form-label" for="first-name">First Name</label>
                                <input class="form-control" type="text" name="first-name" id="first-name" autocomplete="off" autocapitalize="on" placeholder="Jepoy">
                            </div>

                            <div class="col mb-4">
                                <label class="form-label" for="last-name">Last Name</label>
                                <input class="form-control" type="text" name="last-name" id="last-name" autocomplete="off" autocapitalize="on" placeholder="Hidalgo">
                            </div>
                            
                            <div class="col mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input class="form-control" type="email" name="email" id="email" autocomplete="off" placeholder="poyhidalgo@gmail.com">
                            </div>

                            <div class="col mb-4">
                                <label class="form-label" for="date-of-birth">Date of Birth</label>
                                <input class="form-control" type="date" name="birthday" id="birthday">
                            </div>

                            <div class="col mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input class="form-control" type="password" name="password" id="password" autocomplete="off">
                            </div>

                            <div class="col mb-4">
                                <label class="form-label" for="confirm-password">Confirm Password</label>
                                <input class="form-control" type="password" name="confirm-password" id="confirm-password">
                            </div>

                            <div class="w-100">
                                <button type="submit" name="submit-btn" id="submit-btn" class="w-100 btn btn-primary">Sign up</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <script src=""></script>
    </body>
</html>