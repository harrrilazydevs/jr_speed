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
                } else {
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

<div style="overflow: hidden;">

    <div style="display: none;">
        <!-- HOME SECTION -->
        <section class="row page mt-5 pt-5 my-5" id="div_home">
            <div class="container banner-column mt-lg-5 pt-lg-5 my-lg-5" style="max-width: 75rem; height: auto; margin: 0 auto; padding: 0 1.25rem;">
                <img src="src/img/grayPreview.png" alt="missing img-banner-bike" class="banner-image">
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
                    <a href="https://www.facebook.com/jrspeedphilippines" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/jrspeedmarketing" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@JRSPEEDPHILIPPINES" class="youtube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </section>

        <!-- CAROUSEL SECTION -->
        <section class="carousel">
            <div class="img-list" id="img-list">
                <img src="src/img/img-slider1.jpg" width="770" alt="missing img-slider">
                <img src="src/img/img-slider1.jpg" width="770" alt="missing img-slider">
                <img src="src/img/img-slider1.jpg" width="770" alt="missing img-slider">
                <img src="src/img/img-slider1.jpg" width="770" alt="missing img-slider">
            </div>
            <div class="content">
                <div class="text-content">
                    <h2 class="carousel-title" data-text="Best bike shop">Best bike shop</h2>
                    <p class="carousel-paragraph">One of the best bike shop around Quezon City, Philippines.</p>
                </div>
            </div>
            <div class="btn-section-carousel">
                <div class="caro-btn" onclick="slideImg(0)"></div>
                <div class="caro-btn" onclick="slideImg(1)"></div>
                <div class="caro-btn" onclick="slideImg(2)"></div>
                <div class="caro-btn" onclick="slideImg(3)"></div>
            </div>
        </section>

        <!-- FEATURED ITEMS -->
        <section class="feature">
            <div class="feature-title">
                <h3 class="feature-title-display">What's Hot</h3>
            </div>

            <div class="feature-items">
                <!-- FEATURED ITEMS -->
            </div>
        </section>

    </div>

    <div class="row page" id="div_shop">

        <section style="background-image: url('src/img/img-slider1.jpg') !important; background-repeat: no-repeat; background-position: left !important; background-size: cover; background-attachment: fixed;"">
            <div class="container">
                <div class="row min-vh-100 align-items-center">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <h1 style="letter-spacing: 10px; font-size: 50pt; color: #1f8555;">SEND A MESSAGE</h1>
                        <h3 id="text" style="letter-spacing: 3px; font-size: 15pt;" class="text-white"></h3>
                        <button type="button" class="btn btn-success mt-lg-2 btn-sm">Discover our flavors!</button>
                    </div>
                </div>
            </div>
        </section>


        <section class="mt-5 pt-5 my-5">
            <div class="container">
                <div class="row miv-vh-100 align-items-center">
                    <div class="row text-center mt-5 mb-5">
                        <h1 style="letter-spacing: 5px; font-size: 20pt; color: #2463EB;" class="pb-lg-0 mb-lg-0">SEND A MESSAGE</h1>
                        <p style="font-size: small;">We always welcome your feedback about our service and your in-store experience – whether you found it friendly and helpful, or it fell short of your expectations.</p>
                    </div>

                    <div class="col-lg-6">
                        <iframe style="filter: grayscale(100%) invert(10%);" class="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15449.097360368622!2d121.04093402526051!3d14.526294058613376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8c8c683603d%3A0xe71e5f3cd00d6813!2sPinagsama%2C%20Taguig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1646354666141!5m2!1sen!2sph" width="700" height="470" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="col-lg-5 offset-lg-1">
                        <form>
                            <div class="mb-3">
                                <small>Name</small>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <small>Email</small>
                                <input type="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <small>Subject</small>
                                <input type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <small>Message</small>
                                <textarea cols="30" rows="4" class="form-control"></textarea>
                            </div>
                            
                            <a href="#" class="nav__link  text-center text-white" style="background: #2463EB; border-radius:100px; width:100px; border: none;">Submit</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>













    <div class="row page" style="display:none;" id="div_contact">
        <div class="col p-2 border mt-3">

        </div>
    </div>


















    <div class="row page" style="display:none;" id="div_faq">
        <div class="col p-2 border mt-3">
            FAQ PAGE
        </div>
    </div>

</div>