<nav class="navbar navbar-expand-lg bg-body-tertiary banner">

    <div class="container">

        <div class="navbar-brand logo" href="#">

            <img src="src/img/jrspeed.png" class="clickable" width="40" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav_cp_sidebar">

            <span style="vertical-align: middle;">Control Panel</span>

        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse ms-lg-5" id="navbarNav">

            <ul class="navbar-nav">

                <!-- <li class="nav-item">

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

                </li> -->

            </ul>

        </div>

        <button class="btn btn-primary d-none d-lg-block" id="btn_goto_adminpanel">View as Customer</button>

    </div>
</nav>


<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="nav_cp_sidebar" aria-labelledby="nav_cp_sidebarLabel">

    <div class="offcanvas-header bg-dark" style=" height: 8vh;">

        <div class="navbar-brand logo " href="#">

            <img src="src/img/jrspeed.png" class="clickable" width="40" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav_sidebar">

            <span style="vertical-align: middle;">Control Panel</span>

        </div>

    </div>

    <div class="offcanvas-body">

        <ul class="text-dark">
            <li><a href="">Bikes Maintenance</a></li>
            <li><a href="">Stocks Monitoring</a></li>
            <li><a href="">Accounts Maintenance</a></li>

        </ul>

    </div>

</div>

<div class="container">

    <div class="row " id="div_home">
        <div class="col p-2  mt-3">
            <div class="page_cp_header">
                <p class="lead">Bike's Maintenance</p>
            </div>


            <div class="page_cp_content mt-1 pt-2 border-top">

                <div class="row bo">

                    <div class="col text-end">
                        <input type="text" class="form-control-sm" placeholder="Search..." id="cp_bikelist_search">
                    </div>
                </div>


                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th width="10%">BIKE ID</th>
                            <th width="13%">Type</th>
                            <th>NAME</th>
                            <th>IMAGE DIR</th>
                            <th width="10%">PRICE</th>
                            <th width="10%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Road Bike</td>
                            <td>RBA 1002</td>
                            <td>img/public/21231qwe1.jpg</td>
                            <td>₱15,000.00</td>
                            <td>
                                <i class="fa-solid fa-eye"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <button class="btn btn-primary btn-sm">Add</button>
            </div>
        </div>
    </div>

    <div class=" row page" style="display:none;" id="div_shop">
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