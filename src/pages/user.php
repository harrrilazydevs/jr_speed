<header class="header" id="header">
    <nav class="nav bd-container">
        <a href="index.php">
            <li href="index.php" class="nav__logo" style="font-size: larger;"><img src="src/img/jrspeed.png" style="width: 50px; height: 50px;"> JRSpeed</li>
        </a>
        <div class="nav__menu mt-lg-3" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="index.php" class="nav__link active-link">Home</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Shop</a></li>
                <li class="nav__item"><a href="#" class="nav__link">Contact</a></li>
                <li class="nav__item"><a href="#" class="nav__link">FAQ</a></li>

                <?php
                    if (isset($_SESSION['auth'])) {
                    ?>
                        <li class="nav-item nav__item dropdown">
                            <a class="dropdown-toggle nav__link" href="#" id="navbarDropdown" data-bs-toggle="dropdown">
                                <?= $_SESSION['auth_user']['name']; ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="nav__link dropdown-item text-black" href="#"><i class="fa-solid fa-cart-shopping fa-xs pe-lg-2"></i>My Cart</a></li>
                                <li><a class="nav__link dropdown-item text-black" href="#"><i class="fa-solid fa-user fa-xs pe-lg-2"></i>My Profile</a></li>
                                <li><a class="nav__link dropdown-item text-black" href="#"><i class="fa-solid fa-right-from-bracket fa-xs pe-lg-2"></i>Logout</a></li>
                            </ul>
                        </li>
                    <?php
                    }else{
                        ?>
                            <li class="nav__item"><a href="#" class="nav__link  text-center text-white" style="background: #2463EB; border-radius:100px; width:100px; border: none;">Sign in</a></li>
                        <?php
                    }
                ?>
            </ul>
        </div>
        <div class="nav__toggle" id="nav-toggle">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
</header>

<div class="container">



    <section class="row page mt-lg-5 pt-lg-5 my-lg-5" id="div_home">
        <div class="container">
            <div class="row min-vh-100">
                <div class="col-lg-12">
                    <img src="img/grayPreview.png" alt="missing img-banner-bike" class="banner-image">
                </div>
            </div>
        </div>
    </section>

    <section class="section banner banner-section row page" id="div_home">
        
            <div class="container banner-column">
                <img src="img/grayPreview.png" alt="missing img-banner-bike" class="banner-image">
                <div class="banner-inner">
                    <h1 class="heading-xl">Buy NOW, Ride ANYWHERE</h1>
                    <p class="paragraph">
                        Start your journey by discovering Jrspeed PH,
                        as you ride your bike, parts will wear down and need tuning or replacing.
                        Keep your steed in top notch condition by having it professionally maintained by our factory trained technicians.
                    </p>
                    <button class="btn btn-darken btn-inline">
                        Discover Now<i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>

                <div class="banner-links">

                    <!-- FACEBOOK PAGE -->
                    <a href="https://www.facebook.com/jrspeedphilippines" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <!-- INSTAGRAM PAGE -->
                    <a href="https://www.instagram.com/jrspeedmarketing" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <!-- YOUTUBE CHANNEL -->
                    <a href="https://www.youtube.com/@JRSPEEDPHILIPPINES" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                    <!-- VIBER ACCOUNT : to be plan anyway if needed -->
                    <!-- <a href="#" class="viber"><i class="fa-brands fa-viber"></i></a> -->

                </div>
            </div>
        </section>






































































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