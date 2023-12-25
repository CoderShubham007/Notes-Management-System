<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyNotes - Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php
        session_start();
        if (isset($_SESSION['loggedin'])) {
            header("location: /Notes/index.php");
            exit();
        }
    ?>
    <div class="form-container d-flex align-items-center py-4 bg-body-tertiary h-">
        <main class="form-signin w-100 m-auto">
            <form>
                <h1 class="text-center mb-4">Sign up</h1>
                <!-- <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
                <!-- <h2 class="h3 mb-3 fs-5 fw-normal text-center">Create your new Account</h2> -->

                <div class="form-floating">
                    <input type="text" class="form-control" id="signup-name" placeholder="Full Name" required>
                    <label for="signup-name">Full Name</label>
                </div>
                <div class="form-floating my-3">
                    <input type="email" class="form-control" id="signup-email" placeholder="name@example.com" required>
                    <label for="signup-email">Email address</label>
                </div>
                <div class="form-floating my-3">
                    <input type="password" class="form-control" id="signup-password" placeholder="Password" maxlength="8" required>
                    <label for="signup-password">Password</label>
                </div>
                <div class="form-floating my-3">
                    <input type="password" class="form-control" id="signup-confirm-password" placeholder="Password" maxlength="8" required>
                    <label for="signup-confirm-password">Confirm Password</label>
                </div>

                <div class="form-check text-start my-3">
                    <span>
                        Already have an Account?
                        <a class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover" href="./login.php"> Log in</a>
                    </span>
                    <!-- <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label> -->
                </div>
                <button class="btn btn-primary w-100 py-2 mb-3" id="signup" type="submit">Sign up</button>
                <!-- <p class="mt-5 mb-3 text-body-secondary text-center">Create your new Account</p> -->
                <!-- <p class="mt-5 mb-3 text-body-secondary">© 2017–2023</p> -->
            </form>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="./assets/js/jquery-3.7.1.min.js"></script>
    <script src="./assets/js/signup.js"></script>
</body>

</html>