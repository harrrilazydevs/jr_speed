<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/jrsx-icon.png" type="image/x-icon">
    <title>Log in — Jrspeed PH</title>
    <link rel="stylesheet" href="src/style/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/da97e02726.js" crossorigin="anonymous"></script>
</head>
    <body>
        <section class="side">
            <span>Jrspeed</span>
        </section>
        <form action="#" method="POST">
            <!-- Add a hidden input field for the CSRF token -->
            <section class="main">
                <div class="login-container">
                    <p class="title">Welcome</p>
                    <div class="separator"></div>
                    <p class="welcome-message">
                        You're about to pedal it out,
                        <br>
                        please sign-in
                        <br>
                        <span id="submit-error"></span>

                        <?php
                            if (isset($_SESSION['error'])) {
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            }
                            if (isset($_SESSION['errorno'])) {
                                echo $_SESSION['errorno'];
                                unset($_SESSION['errorno']);
                            }
                            if (isset($_SESSION['resetMsg'])) {
                                echo $_SESSION['resetMsg'];
                                unset($_SESSION['resetMsg']);
                            }
                            if (isset($_SESSION['accountFailed'])) {
                                echo $_SESSION['accountFailed'];
                                unset($_SESSION['accountFailed']);
                            }
                        ?>
                    </p>
                    <div class="login-form">
                        <div class="form-control">
                            <!-- USERNAME OR EMAIL -->
                            <input type="text" placeholder="Username or Email" id="user" name="username" required>
                            <i class="fa-solid fa-user"></i>
                            <span id="user-error"></span>
                        </div>
                        <div class="form-control">
                            <!-- PASSWORD -->
                            <input type="password" id="password" placeholder="Password" name="password" required>
                            <i class="fa-solid fa-lock"></i>
                            <div class="show-hide">
                                <i id="toggle-password" class="fa-solid fa-eye-slash"></i>
                            </div>
                            <span id="password-error"></span>
                        </div>

                        <!-- REMEMBER ME -->
                        <div class="remember-me">
                            <input type="checkbox" id="remember-me" name="remember-me">
                            <label for="remember-me">Remember me</label>
                        </div>

                        <!-- FORGOT PASSWORD -->
                        <div class="forgot-password">
                            <a href="forgot_password.php">Forgot password?</a>
                        </div>

                        <!-- LOGIN BUTTON -->
                        <button class="submit" type="submit" id="submitBtn" name="submit-login">Login</button>

                        <!-- SIGN-UP LINK -->
                        <div class="sign-up">
                            <span>You don't have an account?<a href="register.php"> Sign-up</a>.</span>
                        </div>

                    </div>
                </div>
            </section>
        </form>

    </body>
    <script>
        const passwordInput = document.querySelector('#password');
            const togglePasswordButton = document.querySelector('#toggle-password');

            togglePasswordButton.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePasswordButton.classList.toggle('fa-eye-slash');
            togglePasswordButton.classList.toggle('fa-eye');
        });
    </script>

</html>