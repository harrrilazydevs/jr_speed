<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JRSpeed Marketing</title>
    <link rel="stylesheet" href="src/bootstrap/bs.css">
    <link rel="stylesheet" href="src/style/all.css">
</head>

<body>

    <div id="pane_user" style="display:none;">

        <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary banner">

            <div class="container">

                <div class="navbar-brand logo" href="#">

                    <img src="src/img/jrspeed.png" width="40">

                    <span style="vertical-align: middle;">JRSPEED</span>

                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse ms-lg-5" id="navbarNav">

                    <ul class="navbar-nav">

                        <li class="nav-item">

                            <a id="btn_goto_home" class="nav-link text-light active" aria-current="page" href="#">HOME</a>

                        </li>

                        <li class="nav-item">

                            <a id="btn_goto_shop" class="nav-link text-light" href="#">SHOP</a>

                        </li>

                        <li class="nav-item">

                            <a id="btn_goto_contact" class="nav-link text-light" href="#">CONTACT</a>

                        </li>

                        <li class="nav-item">

                            <a id="btn_goto_faq" class="nav-link text-light" href="#">FAQ</a>

                        </li>

                    </ul>

                </div>

                <button class="btn btn-primary d-none d-lg-block">Login</button>

            </div>
        </nav> -->

        <header class="header" id="header">
            <nav class="nav bd-container">
                <a href="index.php"><li href="index.php" class="nav__logo" style="font-size: larger;">Kōhī</li></a>
                <!-- <img src="img/logo.png" style="width: 50px; height: 50px;"> -->
                <div class="nav__menu mt-lg-3" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="menu.php" class="nav__link">Menu</a></li>
                        <li class="nav__item"><a href="about.php" class="nav__link">About</a></li>

                        <?php 
                            if(isset($_SESSION['auth'])){
                                ?>  
                                    <li class="nav-item nav__item dropdown">
                                        <a class="dropdown-toggle nav__link" href="#" id="navbarDropdown"  data-bs-toggle="dropdown">
                                        <?= $_SESSION['auth_user']['name']; ?>
                                        </a>
                                        <ul class="dropdown-menu">
                                        <li><a class="nav__link dropdown-item text-black" href="cart.php"><i class="fa-solid fa-cart-shopping fa-xs pe-lg-2"></i>My Cart</a></li>
                                        <li><a class="nav__link dropdown-item text-black" href="edit-acc.php"><i class="fa-solid fa-user fa-xs pe-lg-2"></i>My Profile</a></li>
                                        <li><a class="nav__link dropdown-item text-black" href="logout.php"><i class="fa-solid fa-right-from-bracket fa-xs pe-lg-2"></i>Logout</a></li>
                                        </ul>
                                    </li>
                                <?php
                            }else{
                                ?> 
                                    <li class="nav__item"><a href="register.php" class="nav__link" >Join Now</a></li> 
                                    <li class="nav__item"><a href="login.php" class="nav__link  text-center text-white" style="background: #1f8555; border-radius:100px; width:100px; border: none;">Sign in</a></li>
                                <?php
                            }
                        ?>
                        <!-- <li class="ms-lg-2">
                        <i class="change-theme fa-solid fa-moon" id="theme-button"></i>
                        </li> -->
                    </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </nav>
        </header>


        <div class="container">

            <div class="row page" id="div_home">
                <div class="col p-2 border mt-3">
                    HOME PAGE
                </div>
            </div>

            <div class="row page" style="display:none;" id="div_shop">
                <div class="col p-2 border mt-3">
                    SHOP PAGE
                </div>
            </div>

            <div class="row page" style="display:none;" id="div_contact">
                <div class="col p-2 border mt-3">
                    CONTACT PAGE
                </div>
            </div>

            <div class="row page" style="display:none;" id="div_faq">
                <div class="col p-2 border mt-3">
                    FAQ PAGE
                </div>
            </div>

        </div>

    </div>

    <div id="pane_admin">

        <?php include 'src/pages/admin.php'; ?>

    </div>

    <div id="pane_controlpanel">

        <?php include 'src/pages/admin.php'; ?>

    </div>

    <script src="src/bootstrap/bs.js"></script>
    <script src="src/jquery/jquery.js"></script>
    <script src="src/func/all.js"></script>
    <script src="src/func/admin.js"></script>
</body>

</html>