<?php require 'partials/header.php' ?>

<div class="h-100 d-flex justify-content-center align-items-center">
    <div class="d-flex p-4 rounded-4 shadow">
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
                <div class="mb-4 d-flex justify-content-center align-items-center">
                    <a href="index.php">
                        <button type="submit" name="submit-btn" class="w-100 btn btn-outline-primary" id="submit-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                            </svg>
                            Back to Login
                        </button>
                    </a>
                </div>
            </div>
            <span>Don't have an account? <a href="register.php" class="link-primary link-offset-2 link-underline-opacity-0 link-underline-opacity-100-hover">Sign up</a></span>
        </div>
    </div>
</div>

<?php require 'partials/footer.php' ?>