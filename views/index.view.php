<?php require 'partials/header.php' ?>

    <div class="w-100 h-100 d-flex justify-content-center align-items-center text-center">
        <div class="rounded-4 shadow p-5">
            <h1>Welcome Back!</h1>
            <p>Don't have an account yet? <a href="./register.php" class="link-primary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Sign up</a></p>
            <form action="" method="post" class="d-flex flex-column gap-3">
                <div class="form-floating">
                    <input class="form-control" id="floatingUsername" type="text" name="username" autocomplete="off" placeholder="Username">
                    <label for="floatingUsername">Username</label>
                </div>
                <div class="form-floating mb-2">
                    <input class="form-control" id="floatingPassword" type="password" name="password" autocomplete="new-password" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button type="submit" name="submit-btn" id="submit-btn" class="w-100 btn btn-primary" onclick="redirectLink()">Sign in</button>
            </form>
            <span class="text-end d-block"><a href="forgot_password.php" class="link-dark link-offset-2 link-primary-hover link-underline-opacity-0 link-underline-opacity-100-hover">Forgot password?</a></span>
        </div>
    </div>

<?php require 'partials/footer.php' ?>