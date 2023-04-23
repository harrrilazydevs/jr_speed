<header class="header" id="header">
    <nav class="nav bd-container">
        <a href="index.php">
            <li href="index.php" class="nav__logo" style="font-size: larger;"><img src="src/img/jrspeed.png" style="width: 50px; height: 50px;"> JRSpeed</li>
        </a>
        <div class="nav__menu mt-lg-3" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a class="btn_nav_home nav__link active-link">Home</a></li>
                <li class="nav__item"><a class="btn_nav_shop nav__link">Shop</a></li>
                <li class="nav__item"><a class="btn_nav_contact nav__link">Contact</a></li>
                <li class="nav__item"><a class="btn_nav_faq nav__link">FAQ</a></li>

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

<div style="overflow: hidden;">

    <div class="row page" style="display: none;" id="div_home">
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
        <section style="background-image: url('src/img/contact_sec.png') !important; background-repeat: no-repeat; background-position: left !important; background-size: cover; background-attachment: fixed;">
            <div class=" container">
                <div class="row align-items-center" style="height: 300px;">
                    <div class="col-lg-12 col-sm-12 text-center mt-lg-5">
                        <h1 style="letter-spacing: 7px; font-size: 40pt;" class="text-white">Our Shop</h1>
                        <a href="#" class="nav__link  text-center text-white" style="background: #2463EB; border-radius:130px; width:150px; border: none;">View More <i class="fa-solid fa-eye"></i></a>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-5">
                <div class="row min-vh-50">
                    <h3>Our Products</h3>
                    <hr>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 mb-sm-3 mb-3">
                                <a href="#">
                                    <div class="card mt-lg-3" style="background-color: #101419 !important; width: 80%; height: 100%; border: none;">
                                        <div class="card-body text-center">
                                            <div class="image_hover">
                                                <img src="src/img/bikes/exploro-ultra-force-d1eagle-axs-1x.png" alt="Category Image" width="100%">
                                            </div>
                                            <h6 style="letter-spacing: 3px; font-size: 12pt; color: white;">Bike #1</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 mb-sm-3 mb-3">
                                <a href="#">
                                    <div class="card mt-lg-3" style="background-color: #101419 !important; width: 80%; height: 100%; border: none;">
                                        <div class="card-body text-center">
                                            <div class="image_hover">
                                                <img src="src/img/bikes/exploro-ultra-rival-1x11_650b.png" alt="Category Image" width="100%">
                                            </div>
                                            <h6 style="letter-spacing: 3px; font-size: 12pt; color: white;">Bike #1</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 mb-sm-3 mb-3">
                                <a href="#">
                                    <div class="card mt-lg-3" style="background-color: #101419 !important; width: 80%; height: 100%; border: none;">
                                        <div class="card-body text-center">
                                            <div class="image_hover">
                                                <img src="src/img/bikes/exploro-ultra-rival-1x11.png" alt="Category Image" width="100%">
                                            </div>
                                            <h6 style="letter-spacing: 3px; font-size: 12pt; color: white;">Bike #1</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4 mb-sm-3 mb-3">
                                <a href="#">
                                    <div class="card mt-lg-3" style="background-color: #101419 !important; width: 80%; height: 100%; border: none;">
                                        <div class="card-body text-center">
                                            <div class="image_hover">
                                                <img src="src/img/bikes/new-strada-force-d1-axs-2x12.png" alt="Category Image" width="100%">
                                            </div>
                                            <h6 style="letter-spacing: 3px; font-size: 12pt; color: white;">Bike #1</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 mb-sm-3 mb-3">
                                <a href="#">
                                    <div class="card mt-lg-3" style="background-color: #101419 !important; width: 80%; height: 100%; border: none;">
                                        <div class="card-body text-center">
                                            <div class="image_hover">
                                                <img src="src/img/bikes/strada-icr-rival-axs-2x12.png" alt="Category Image" width="100%">
                                            </div>
                                            <h6 style="letter-spacing: 3px; font-size: 12pt; color: white;">Bike #1</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4 mb-sm-3 mb-3">
                                <a href="#">
                                    <div class="card mt-lg-3" style="background-color: #101419 !important; width: 80%; height: 100%; border: none;">
                                        <div class="card-body text-center">
                                            <div class="image_hover">
                                                <img src="src/img/bikes/strada-icr-rival-xplr.png" alt="Category Image" width="100%">
                                            </div>
                                            <h6 style="letter-spacing: 3px; font-size: 12pt; color: white;">Bike #1</h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="row page" style="display: none;" id="div_contact">
        <section style="background-image: url('src/img/contact_sec.png') !important; background-repeat: no-repeat; background-position: left !important; background-size: cover; background-attachment: fixed;">
            <div class=" container">
                <div class="row align-items-center" style="height: 400px;">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <h1 style="letter-spacing: 7px; font-size: 40pt; color: #2EEFE2;">SEND A MESSAGE</h1>
                        <h3 id="text" style="letter-spacing: 3px; font-size: 15pt;" class="text-white"></h3>
                        <p style="font-size: small;" class="text-white">We always welcome your feedback about our service and your in-store experience – whether you found it friendly and helpful, or it fell short of your expectations.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 pt-4 my-5">
            <div class="container">
                <div class="row miv-vh-100 align-items-center">
                    <div class="row text-center">
                        <h1 style="letter-spacing: 5px; font-size: 20pt; color: #2463EB;" class="pb-lg-0 mb-lg-2">CONTACT INFO</h1>
                        <p class="mb-xs-5" style="font-size: small;">
                            <i class="fa-solid fa-phone phone flex-end" style="color: green;"></i>&nbsp; Phone - 0917 828 0280
                            &nbsp;&nbsp;
                            <i class="fa-solid fa-envelope mail" style="color: #2463EB;"></i>&nbsp; Email - luckyjunreyes@gmail.com
                            &nbsp;&nbsp;
                            <i class="fa-solid fa-location-dot" style="color: red;"></i>&nbsp; 927 Aurora Blvd., Cubao, Quezon City
                        </p>
                    </div>

                    <div class="col-lg-6 mt-lg-5 mb-sm-5">
                        <iframe style="filter: grayscale(100%) invert(10%);" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.5207077539153!2d121.05717707299615!3d14.626357985863065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b78dc6b27359%3A0xce1e9928e81c07ab!2sJRSPEED%20Bicycle%20%26%20Motorcycle%20Parts%20Store!5e0!3m2!1sen!2sph!4v1681807317395!5m2!1sen!2sph" width="100%" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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

    <div class="row page"  style="display:none;" id="div_faq" >
        <section style="background-color: var(--section);" class="mt-lg-3 mt-5">
            <div class=" container">
                <div class="row align-items-center" style="height: 200px;">
                    <div class="col-lg-12 col-sm-12 text-center pt-5">
                        <h1 style="letter-spacing: 4px; font-size: 20pt;">Frequenly Asked Questions <span>(FAQ).</span></h1>
                        <p style="font-size: small;">We have answers (well, most of the time.)</p>

                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5 my-5">
            <div class="container text-center">
                <div class="row"> 
                    <div class="col-lg-6 pb-lg-5 mb-lg-5">
                        <img src="src/img/faq.gif" class="faq_image" width="80%" style="object-fit: contain;">
                    </div>
                    <div class="col-lg-6 mt-5 my-lg-5 pt-lg-5">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How much is a gravel bike?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>Gravel bike</strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum, urna ac euismod volutpat, eros urna gravida nisl, ac consectetur tortor enim eu tellus. Nulla vulputate metus id dui ornare volutpat. Quisque et mattis nisl, eu mollis sapien. Vestibulum quis diam convallis, vehicula turpis vel, dapibus ligula. Praesent id justo quam. Aliquam eu lobortis lacus. Donec ullamcorper mauris et ante mollis, in commodo libero vulputate. Donec lobortis sem est, sed maximus mauris congue ac. Aliquam erat volutpat. Sed pretium enim nec erat cursus, a laoreet neque aliquet. Donec dignissim eros risus, ut egestas risus viverra in. Donec iaculis turpis sit amet ipsum aliquet, quis imperdiet neque laoreet. Nullam tincidunt erat et tellus condimentum, ac finibus lorem faucibus.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Can i pick up girls using road bike?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can i swap my mtb frame to gravel frame?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How to be a millionaire?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>