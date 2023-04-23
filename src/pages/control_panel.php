<div id="pane_control_panel">

    <nav class="navbar navbar-expand-lg bg-body-tertiary banner">

        <div class="container">

            <button class="logo ps-0 btn_cp_close_sidebar" id="cp_logo" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav_cp_sidebar">

                <img src="src/img/jrspeed.png" alt="missing img-company-logo" class="companyLogo" style="filter: brightness(100%);">

                <span class="companyName text-light" style="font-size:20pt;">Control Panel</span>

            </button>

            <button class="btn btn-primary d-none d-lg-block" style="font-size:10pt" id="btn_goto_admin"><i class="fa-solid fa-user"></i> View as Customer</button>

        </div>

    </nav>


    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="nav_cp_sidebar" aria-labelledby="nav_cp_sidebarLabel">

        <div class="offcanvas-header on-scroll" style=" height: 9.4vh; background:#101419;">

            <button class="logo ps-0 ">

                <img src="src/img/jrspeed.png" alt="missing img-company-logo" class="companyLogo " style="filter: brightness(100%);">

                <span class="companyName  text-light" style="font-size:20pt;">Control Panel</span>

            </button>

        </div>

        <div class="offcanvas-body px-0">

            <ul style="margin:0; padding:0;">
                <li class="mb-2 ms-3">
                    <small class="text-secondary">MAINTENANCE</small>
                    <ul class="sidenav-list ms-0 ps-1">
                        <li class="mb-1" id="btn_goto_bm">
                            <a class="text-dark ms-1">
                                <i class="fa-solid fa-bicycle fa-fw fa-sm pe-1"></i>
                                Product Maintenance
                            </a>
                        </li>
                        <li class="mb-1" id="btn_goto_am">
                            <a class="text-dark ms-1">
                                <i class="fa-solid fa-user-group  fa-fw fa-sm pe-1"></i>
                                Accounts Maintenance
                            </a>
                        </li>
                        <li class="mb-1" id="btn_goto_dm">
                            <a class="text-dark ms-1">
                                <i class="fa-solid fa-truck  fa-fw fa-sm pe-1"></i>
                                Delivery Maintenance
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="mb-2 ms-3">
                    <small class="text-secondary">MONITORING</small>
                    <ul class="sidenav-list ms-0 ps-1">
                        <li class="mb-1" id="btn_goto_sm">
                            <a class="text-dark ms-1">
                                <i class="fa-solid fa-cart-flatbed fa-fw fa-sm pe-1"></i></i>
                                Stocks Monitoring
                            </a>
                        </li>
                        <li class="mb-1" id="btn_goto_slm">
                            <a class="text-dark ms-1">
                                <i class="fa-solid fa-sack-dollar fa-fw fa-sm pe-1"></i>
                                Sales Monitoring
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="mb-1 ms-3">
                    <small class="text-secondary">SYSTEM</small>
                    <ul class="sidenav-list ms-0 ps-1">

                        <li class="mb-1">
                            <a class="text-dark ms-1 btn_logout">
                                <i class="fa-solid fa-arrow-right-from-bracket fa-fw fa-sm pe-1"></i>
                                Logout
                            </a>
                        </li>

                    </ul>
                </li>



            </ul>

        </div>

    </div>

    <div class="container ">

        <div class="row page" id="div_cp_bm">

            <div class="col p-2  mt-3">

                <div class="page_cp_header">

                    <p class="lead">Product Maintenance</p>

                </div>

                <div class="page_cp_content mt-1 pt-2 border-top px-0">

                    <div class="row">

                        <div class="col text-end">

                            <input type="text" class="form-control-sm" style="width:300px;" placeholder="Search..." id="cp_bikelist_search">

                        </div>

                    </div>

                    <table class="table mt-3" id="cp_tbl_productlist">
                        <thead>
                            <tr>
                                <th class="text-center ps-0" width="5%">NO</th>
                                <th>NAME</th>
                                <th>Description</th>
                                <th class="text-center" width="10%">TYPE</th>
                                <th width="10%">PRICE</th>
                                <th width="7%"></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                    <div class="text-end">
                        <button class="btn btn-primary btn-sm" id="btn_pm_add"><i class="fa-solid fa-file-circle-plus"></i> Add</button>
                    </div>

                </div>

            </div>

        </div>


        <div class="row page" style="display:none" id="div_cp_sm">
            <div class="col p-2  mt-3">

                <div class="page_cp_header">
                    <p class="lead">Stocks Monitoring</p>
                </div>

                <div class="page_cp_content mt-1 pt-2 border-top px-0">

                    <div class="row text-dark mt-2">
                        <div class="col-4">
                            <div class="p-3 pt-0" style="font-size:10pt;">
                                <h6>Low Stock Indicator (LSI)</h6>
                                <span style="width:40px" class="badge text-bg-danger">#</span> - LOW STOCK
                                <span style="width:40px" class="badge text-bg-success ms-3">#</span> - HIGH STOCK
                            </div>
                        </div>
                        <div class="col text-end">
                            <input type="text" class="form-control-sm" style="width:300px;" placeholder="Search..." id="cp_bikelist_search">
                        </div>

                    </div>


                    <table class="table mt-3" id="cp_tbl_stocks">
                        <thead>
                            <tr>
                                <th class="text-center" width="5%">NO</th>
                                <th>NAME</th>
                                <th class="text-center" width="10%">STOCKS</th>
                                <th class="text-center" width="10%">LSI</th>
                                <th class="text-center" width="15%">LAST MODIFIED</th>
                                <th width="7%"></th>
                            </tr>
                        </thead>
                        <tbody></tbody>

                    </table>

                    <div class="text-end">
                        <button class="btn btn-primary btn-sm" id="btn_stocks_add">Add</button>

                    </div>

                </div>

            </div>

        </div>

        <div class="row page" style="display:none" id="div_cp_slm">
            <div class="col p-2  mt-3">
                <div class="page_cp_header">
                    <p class="lead">Sales Monitoring</p>
                </div>

                <div class="page_cp_content mt-1 pt-2 border-top px-0">

                    <div class="row">
                        <div class="col"></div>
                        <div class="col-3">
                            <input type="text" class="form-control form-control-sm mb-1" placeholder="Search...">
                            <select name="" id="" class="form-select form-select-sm">
                                <option value="Date">Date</option>
                            </select>
                        </div>
                    </div>

                    <table class="table mt-2">
                        <thead>
                            <tr>
                                <th class="text-center ps-0" width="10%">TXN NO</th>
                                <th>CUSTOMER NAME</th>
                                <th class="text-center" width="10%">DATE</th>
                                <th width="7%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center ps-0">TP0002011</td>
                                <td>RBA 1002</td>
                                <td class="text-center">10/21/2023</td>
                                <td class="text-end">
                                    <i class="fa-solid fa-eye"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="text-end">
                        <button class="btn btn-primary btn-sm" id="btn_generate_report"><i class="fa-solid fa-file-invoice-dollar"></i> Generate Reports</button>

                    </div>

                </div>
            </div>
        </div>


        <div class="row page" style="display:none" id="div_cp_am">
            <div class="col p-2  mt-3">
                <div class="page_cp_header">
                    <p class="lead">Account Maintenance</p>
                </div>


                <div class="page_cp_content mt-1 pt-2 border-top px-0">

                    <div class="row bo">

                        <div class="col text-end">
                            <input type="text" class="form-control-sm" style="width:300px;" placeholder="Search..." id="cp_bikelist_search">
                        </div>
                    </div>


                    <table class="table mt-3" id="cp_tbl_accountlist">
                        <thead>
                            <tr>
                                <th class="text-center ps-0" width="5%">NO</th>
                                <th class="text-center">USERNAME</th>
                                <th class="text-center">EMAIL</th>
                                <th class="text-center" width="20%">CONTACT NO</th>
                                <th class="text-center" width="15%">POSITION</th>
                                <th width="7%"></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>

                    <div class="text-end">
                        <button class="btn btn-primary btn-sm"><i class="fa-solid fa-user-plus"></i> Add</button>

                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade text-dark" id="cp_md_vw_product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Product Detail</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">

                                <div class="col">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control mb-2" id="vwp_name" readonly>

                                    <label for="">Type</label>
                                    <input type="text" class="form-control mb-2" id="vwp_type" readonly>

                                    <label for="">Price</label>
                                    <input type="text" class="form-control mb-2" id="vwp_price" readonly>

                                    <label for="">Description</label>
                                    <textarea type="text" class="form-control mb-2" id="vwp_description" rows="3" readonly></textarea>
                                </div>

                                <div class="col-6 align-middle">
                                    <img width="100%" class="mt-3" id="vwp_img">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade text-dark" id="cp_md_ed_product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Product Detail</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">

                                <div class="col">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control mb-2" id="edp_name">

                                    <label for="">Type</label>
                                    <select name="" id="edp_type" class="form-select  mb-2">
                                        <option value="BIKE">BIKE</option>
                                        <option value="ACCESORY">ACCESORY</option>
                                    </select>

                                    <label for="">Price</label>
                                    <input type="text" class="form-control mb-2" id="edp_price">

                                    <label for="">Description</label>
                                    <textarea type="text" class="form-control mb-2" id="edp_description" rows="3"></textarea>
                                </div>

                                <div class="col-6 align-middle">
                                    <a class="clickable"><img width="100%" class="mt-3" id="edp_img"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade text-dark" id="cp_md_add_product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Product Detail</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">

                                <div class="col">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control mb-2" id="edp_name">

                                    <label for="">Type</label>
                                    <select name="" id="edp_type" class="form-select  mb-2">
                                        <option value="BIKE">BIKE</option>
                                        <option value="ACCESORY">ACCESORY</option>
                                    </select>

                                    <label for="">Price</label>
                                    <input type="text" class="form-control mb-2" id="edp_price">

                                    <label for="">Description</label>
                                    <textarea type="text" class="form-control mb-2" id="edp_description" rows="3"></textarea>
                                </div>

                                <div class="col-6 text-center">
                                    <div class="d-grid gap-2">
                                        <button class="btn border" style="height:320px;" type="button"><i class="fa-solid fa-camera fa-xl"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm">Save</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade text-dark" id="cp_md_add_stock" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Stock</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">

                                <div class="col">
                                    <label for="">Product</label>
                                    <select name="" id="stock_product_id" class="form-select mb-2"></select>

                                    <label for="">Stock Count</label>
                                    <input type="text" class="form-control mb-2" id="edp_price">

                                    <label for="">LSI</label>
                                    <input type="text" class="form-control mb-2" id="edp_price">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm">Save</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade text-dark" id="cp_md_vw_transaction_detail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Product Detail</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">

                                <div class="col">
                                    <label for="">Name</label>
                                    <input type="text" class="form-control mb-2" id="vwp_name" readonly>

                                    <label for="">Type</label>
                                    <input type="text" class="form-control mb-2" id="vwp_type" readonly>

                                    <label for="">Price</label>
                                    <input type="text" class="form-control mb-2" id="vwp_price" readonly>

                                    <label for="">Description</label>
                                    <textarea type="text" class="form-control mb-2" id="vwp_description" rows="3" readonly></textarea>
                                </div>

                                <div class="col-6 align-middle">
                                    <img width="100%" class="mt-3" id="vwp_img">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade text-dark" id="cp_md_generate_report" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Generate Sales Report</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">

                            <div class="row">
                                <div class="col">
                                    <label for="">Date From</label>
                                    <input type="date" value="2023-04-01" class="form-control mb-2" id="vwp_name" readonly>

                                    <label for="">Date To</label>
                                    <input type="date" value="2023-04-01" class="form-control mb-2" id="vwp_type" readonly>

                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm">Generate</button>
                    </div>

                </div>
            </div>
        </div>



    </div>

</div>

<div id="pane_admin" style="display:none;">

    <?php
    session_start();

    if ($_SESSION['authorized'] == 0) {
        header('location:login.php?');
    }

    ?>

    <header class="header" id="header">
        <nav class="navbar container">
            <a href="#" class="company">
                <img src="src/img/jrspeed.png" alt="missing img-company-logo" class="companyLogo" id="companyLogo">
                <span class="companyName" id="companyName">JRSpeed</span>
            </a>
            <div class="burger" id="burger">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </div>
            <div class="menu" id="menu">
                <ul class="menu-inner pe-4">
                    <li class="menu-item"><a class="menu-link" id="header_home">Home</a></li>
                    <li class="menu-item"><a class="menu-link" id="header_shop">Shop</a></li>
                    <li class="menu-item"><a class="menu-link" id="header_contact">Contact</a></li>
                    <li class="menu-item"><a class="menu-link" id="header_faq">FAQ</a></li>
                </ul>
            </div>

            <div class="menu me-0" id="menu">
                <ul class="menu-inner pe-0 me-0">
                    <li class="menu-item"><a class="menu-link" id="header_cart"><i class="fa-solid fa-cart-shopping"></i></a></li>
                </ul>
            </div>

            <button class="btn btn-primary d-none d-lg-block" style="font-size:10pt" id="btn_goto_controlpanel"><i class="fa-solid fa-user"></i> View Control Panel</button>

            <?php
            if ($_SESSION['authorized'] == 1) {
            } else {
                echo "<div class='sign-in-up'>
                        <a href='login.php' class='menu-block'>Login</a>
                    </div>
                    ";
            }
            ?>
        </nav>
    </header>
    <div style="overflow: hidden;">

        <div class="row page" style="display: block;" id="div_home">
            <!-- HOME SECTION -->
            <section class="row" id="div_home">
                <div class="container banner-column mt-lg-5 pt-lg-5 my-lg-5" style="max-width: 75rem; height: auto; margin: 0 auto; padding: 0 1.25rem;">
                    <img src="src/img/grayPreview.png" alt="missing img-banner-bike" class="banner-image">
                    <div class="banner-inner">
                        <h2 class="heading-xl">Buy NOW, Ride ANYWHERE</h2>
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

        <div class="row page" style="display: none;" id="div_shop">
            <section class="row">
                <div class="container banner-column mt-5 pt-5 my-5" style="max-width: 75rem; height: auto; margin: 0 auto; padding: 0 1.25rem;">
                    <div class="banner-inner">
                        <h2 class="heading-xl ps-5 mt-4">Buy NOW</h2>
                        <p class="paragraph ps-5">
                            Start your journey by discovering Jrspeed PH,
                            as you ride your bike, parts will wear down and need tuning or replacing.
                            Keep your steed in top notch condition by having it professionally maintained by our factory trained technicians.
                        </p>
                        <button class="btn btn-darken btn-inline ms-5">
                            View More! <i class="fa-solid fa-eye"></i></a>
                    </div>
                </div>

            </section>

            <section>
                <div class="container py-5">
                    <div class="row min-vh-50">
                        <h3 class="text-black ps-5">Our Products</h3>
                        <hr class="text-black">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 mb-sm-3 mb-3">
                                    <a href="#">
                                        <div class="card mt-lg-3" style="background-color: #E6E6E6 !important; width: 100%; height: 100%; border: none;">
                                            <div class="card-body text-center">
                                                <div class="image_hover">
                                                    <img src="src/img/bikes/exploro-ultra-force-d1eagle-axs-1x.png" alt="Category Image" width="100%">
                                                </div>
                                                <h6 style="letter-spacing: 3px; font-size: 12pt; color: black;">Bike #1</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4 mb-sm-3 mb-3">
                                    <a href="#">
                                        <div class="card mt-lg-3" style="background-color: #E6E6E6 !important; width: 100%; height: 100%; border: none;">
                                            <div class="card-body text-center">
                                                <div class="image_hover">
                                                    <img src="src/img/bikes/exploro-ultra-rival-1x11_650b.png" alt="Category Image" width="100%">
                                                </div>
                                                <h6 style="letter-spacing: 3px; font-size: 12pt; color: black;">Bike #1</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4 mb-sm-3 mb-3">
                                    <a href="#">
                                        <div class="card mt-lg-3" style="background-color: #E6E6E6 !important; width: 100%; height: 100%; border: none;">
                                            <div class="card-body text-center">
                                                <div class="image_hover">
                                                    <img src="src/img/bikes/exploro-ultra-rival-1x11.png" alt="Category Image" width="100%">
                                                </div>
                                                <h6 style="letter-spacing: 3px; font-size: 12pt; color: black;">Bike #1</h6>
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
                                        <div class="card mt-lg-3" style="background-color: #E6E6E6 !important; width: 100%; height: 100%; border: none;">
                                            <div class="card-body text-center">
                                                <div class="image_hover">
                                                    <img src="src/img/bikes/new-strada-force-d1-axs-2x12.png" alt="Category Image" width="100%">
                                                </div>
                                                <h6 style="letter-spacing: 3px; font-size: 12pt; color: black;">Bike #1</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4 mb-sm-3 mb-3">
                                    <a href="#">
                                        <div class="card mt-lg-3" style="background-color: #E6E6E6 !important; width: 100%; height: 100%; border: none;">
                                            <div class="card-body text-center">
                                                <div class="image_hover">
                                                    <img src="src/img/bikes/strada-icr-rival-axs-2x12.png" alt="Category Image" width="100%">
                                                </div>
                                                <h6 style="letter-spacing: 3px; font-size: 12pt; color: black;">Bike #1</h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col-lg-4 mb-sm-3 mb-3">
                                    <a href="#">
                                        <div class="card mt-lg-3" style="background-color: #E6E6E6 !important; width: 100%; height: 100%; border: none;">
                                            <div class="card-body text-center">
                                                <div class="image_hover">
                                                    <img src="src/img/bikes/strada-icr-rival-xplr.png" alt="Category Image" width="100%">
                                                </div>
                                                <h6 style="letter-spacing: 3px; font-size: 12pt; color: black;">Bike #1</h6>
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
            <section style="background-color: whitesmoke;">
                <div class="container my-lg-5">
                    <div class="row align-items-center" style="height: 250px;">
                        <div class="col-lg-12 col-sm-12 text-center mb-0 pb-0">
                            <h1 style="letter-spacing: 7px; font-size: 40pt; color: #2EEFE2;">SEND A MESSAGE</h1>
                            <h3 id="text" style="letter-spacing: 3px; font-size: 15pt;" class="text-black"></h3>
                            <p style="font-size: small;" class="text-black">We always welcome your feedback about our service and your in-store experience – whether you found it friendly and helpful, or it fell short of your expectations.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="mt-5 pt-4 my-5">
                <div class="container">
                    <div class="row miv-vh-100 align-items-center">
                        <div class="row text-center">
                            <h1 style="letter-spacing: 5px; font-size: 20pt; color: black;" class="pb-lg-0 mb-lg-2">CONTACT INFO</h1>
                            <p class="mb-xs-5 text-black" style="font-size: small;">
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

                        <div class="col-lg-5 offset-lg-1 text-black">
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
                                <a href='#' class='menu-block'>Submit</a>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="row page" style="display: none;" id="div_faq">
            <section style="background-color: whitesmoke;">
                <div class="container my-lg-5 text-black">
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
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            How to be a millionaire?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
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
</div>