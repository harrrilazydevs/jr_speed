<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="../img/jrsx-icon.png" type="image/x-icon">
        <title>Sign-up — Jrspeed PH</title>
        <link rel="stylesheet" href="src/style/login.css">
        <!-- BOXICON CDN LINK -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!-- FONTAWESOME CDN LINK -->
        <script src="https://kit.fontawesome.com/da97e02726.js" crossorigin="anonymous"></script>

    </head>
    <body>

        <section class="side">
            <span>Jrspeed</span>
        </section>
        <form action="#" method="POST">
            <section class="main">
                <div class="login-container">
                    <p class="title">Registration</p>
                    <div class="separator"></div>
                    <p class="register-message">
                        <!-- LEAVE BLANK FIRST -->
                        <!-- <span id="submit-error"></span> -->
                    </p>

                    <div class="login-form">
                        <div class="form-control">
                            <!-- FULL NAME -->
                            <input type="text" placeholder="Full Name" id="name" name="name" required>
                            <i class="fa-solid fa-user"></i>
                            <span id="name-error"></span>
                        </div>
                        <div class="form-control">
                            <!-- USERNAME -->
                            <input type="text" placeholder="Username" id="username" name="username" required>
                            <i class="fa-solid fa-user-shield"></i>
                            <span id="username-error"></span>
                        </div>
                        <div class="form-control">
                            <!-- PHONE -->
                            <input type="text" placeholder="Phone Number" id="phone" name="phone" pattern="^(\+63|0)9\d{9}$" required>
                            <i class="fa-solid fa-hashtag"></i>
                            <span id="phone-error"></span>
                        </div>
                        <div class="form-control">
                            <!-- EMAIL -->
                            <input type="email" placeholder="Email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@(gmail|yahoo|ama)\.(com|com\.ph|edu\.ph)$" required>
                            <i class="fa-solid fa-envelope"></i>
                            <span id="email-error"></span>
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

                        <!-- CREATE BUTTON -->
                        <button class="submit" type="submit" id="submitBtn" name="submit-register">Create</button>

                        <!-- LOGIN LINK -->
                        <div class="login">
                            <span>Already have an account?<a href="login.php"> Login</a>.</span>
                        </div>

                    </div>
                </div>
            </section>
        </form>

    </body>
    <script>
        const passwordInput = document.querySelector('#password');
        const togglePasswordButton = document.querySelector('#toggle-password');

        togglePasswordButton.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            togglePasswordButton.classList.toggle('fa-eye-slash');
            togglePasswordButton.classList.toggle('fa-eye');
        });
    </script>


</html>