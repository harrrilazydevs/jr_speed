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

        <button class="btn btn-primary d-none d-lg-block" id="btn_goto_admin">View as Customer</button>

    </div>
</nav>


<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="nav_cp_sidebar" aria-labelledby="nav_cp_sidebarLabel">

    <div class="offcanvas-header" style=" height: 8vh; background:#101419;">

        <div class="navbar-brand logo " href="#">

            <img src="src/img/jrspeed.png" class="clickable" width="40" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav_sidebar">

            <span style="vertical-align: middle;">Control Panel</span>

        </div>

    </div>

    <div class="offcanvas-body px-0">

        <ul class="sidenav-list">
            <li class="mb-1" id="btn_goto_bm"><a class="text-dark ms-3">
                    <i class="fa-solid fa-bicycle fa-fw fa-sm pe-1"></i> Bikes Maintenance</a>
            </li>
            <li class="mb-1" id="btn_goto_sm"><a class="text-dark ms-3">
                    <i class="fa-solid fa-cart-flatbed fa-fw fa-sm pe-1"></i></i> Stocks Monitoring</a>
            </li>
            <li class="mb-1" id="btn_goto_slm"><a class="text-dark ms-3">
                    <i class="fa-solid fa-sack-dollar fa-fw fa-sm pe-1"></i> Sales Monitoring</a>
            </li>
            <li class="mb-1" id="btn_goto_am"><a class="text-dark ms-3">
                    <i class="fa-solid fa-user-group  fa-fw fa-sm pe-1"></i> Accounts Maintenance</a>
            </li>

        </ul>

    </div>

</div>

<div class="container">

    <div class="row page" id="div_cp_bm">
        <div class="col p-2  mt-3">
            <div class="page_cp_header">
                <p class="lead">Bike's Maintenance</p>
            </div>


            <div class="page_cp_content mt-1 pt-2 border-top">

                <div class="row bo">

                    <div class="col text-end">
                        <input type="text" class="form-control-sm" style="width:300px;" placeholder="Search..." id="cp_bikelist_search">
                    </div>
                </div>


                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">NO</th>
                            <th width="13%">TYPE</th>
                            <th>NAME</th>
                            <th>IMAGE DIR</th>
                            <th width="10%">PRICE</th>
                            <th width="7%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Road Bike</td>
                            <td>RBA 1002</td>
                            <td>img/public/21231qwe1.jpg</td>
                            <td>₱15,000.00</td>
                            <td class="text-end">
                                <i class="fa-solid fa-eye"></i>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-box-archive"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Road Bike</td>
                            <td>RBA 1002</td>
                            <td>img/public/21231qwe1.jpg</td>
                            <td>₱15,000.00</td>
                            <td class="text-end">
                                <i class="fa-solid fa-eye"></i>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-box-archive"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Road Bike</td>
                            <td>RBA 1002</td>
                            <td>img/public/21231qwe1.jpg</td>
                            <td>₱15,000.00</td>
                            <td class="text-end">
                                <i class="fa-solid fa-eye"></i>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-box-archive"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Road Bike</td>
                            <td>RBA 1002</td>
                            <td>img/public/21231qwe1.jpg</td>
                            <td>₱15,000.00</td>
                            <td class="text-end">
                                <i class="fa-solid fa-eye"></i>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-box-archive"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Road Bike</td>
                            <td>RBA 1002</td>
                            <td>img/public/21231qwe1.jpg</td>
                            <td>₱15,000.00</td>
                            <td class="text-end">
                                <i class="fa-solid fa-eye"></i>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-box-archive"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="text-end">
                    <button class="btn btn-primary btn-sm">Add</button>

                </div>
            </div>
        </div>
    </div>

    <div class="row page" style="display:none" id="div_cp_sm">
        <div class="col p-2  mt-3">
            <div class="page_cp_header">
                <p class="lead">Stocks Monitoring</p>
            </div>


            <div class="page_cp_content mt-1 pt-2 border-top">

                <div class="row bo">

                    <div class="col text-end">
                        <input type="text" class="form-control-sm" style="width:300px;" placeholder="Search..." id="cp_bikelist_search">
                    </div>
                </div>


                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">NO</th>
                            <th>NAME</th>
                            <th class="text-center" width="10%">STOCKS</th>
                            <th class="text-center" width="10%">LSI</th>
                            <th width="7%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>RBA 1002</td>
                            <td class="text-center"><span style="width:40px" class="badge text-bg-danger">2</span></td>
                            <td class="text-center">5</td>
                            <td class="text-end">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-box-archive"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>MTB 123</td>
                            <td class="text-center"><span style="width:40px" class="badge text-bg-success">20</span></td>
                            <td class="text-center">5</td>
                            <td class="text-end">
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-box-archive"></i>
                            </td>
                        </tr>



                    </tbody>
                </table>

                <div class="text-end">
                    <button class="btn btn-primary btn-sm">Add</button>

                </div>
            </div>
        </div>
    </div>

    <div class="row page" style="display:none" id="div_cp_slm">
        <div class="col p-2  mt-3">
            <div class="page_cp_header">
                <p class="lead">Sales Monitoring</p>
            </div>


            <div class="page_cp_content mt-1 pt-2 border-top">
                <div class="text-center" style="height:500px; width:100%;">
                    <canvas class="mx-auto my-0" id="slm_chart" height="600" width="1300"></canvas>
                </div>

                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">NO</th>
                            <th>CUSTOMER</th>
                            <th width="20%">NAME</th>
                            <th class="text-center">QTY</th>
                            <th class="text-center" width="10%">DATE</th>
                            <th width="7%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>John Doe</td>
                            <td>RBA 1002</td>
                            <td class="text-center">1</td>
                            <td class="text-center">10/21/2023</td>
                            <td class="text-end">
                                <i class="fa-solid fa-eye"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">1</td>
                            <td>John Doe</td>
                            <td>RBA 1002</td>
                            <td class="text-center">1</td>
                            <td class="text-center">10/21/2023</td>
                            <td class="text-end">
                                <i class="fa-solid fa-eye"></i>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">1</td>
                            <td>John Doe</td>
                            <td>RBA 1002</td>
                            <td class="text-center">1</td>
                            <td class="text-center">10/21/2023</td>
                            <td class="text-end">
                                <i class="fa-solid fa-eye"></i>
                            </td>
                        </tr>

                        <tr>
                            <td class="text-center">1</td>
                            <td>John Doe</td>
                            <td>RBA 1002</td>
                            <td class="text-center">1</td>
                            <td class="text-center">10/21/2023</td>
                            <td class="text-end">
                                <i class="fa-solid fa-eye"></i>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row page" style="display:none" id="div_cp_am">
        <div class="col p-2  mt-3">
            <div class="page_cp_header">
                <p class="lead">Account Maintenance</p>
            </div>


            <div class="page_cp_content mt-1 pt-2 border-top">

                <div class="row bo">

                    <div class="col text-end">
                        <input type="text" class="form-control-sm" style="width:300px;" placeholder="Search..." id="cp_bikelist_search">
                    </div>
                </div>


                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th class="text-center" width="10%">NO</th>
                            <th class="text-center">USERNAME</th>
                            <th class="text-center">EMAIL</th>
                            <th class="text-center" width="15%">CONTACT NO</th>
                            <th class="text-center" width="15%">POSITION</th>
                            <th width="7%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-center">admin</td>
                            <td class="text-center">admin@rockmail.com</td>
                            <td class="text-center">09090909092</td>
                            <td class="text-center">Administrator</td>
                            <td class="text-end">
                                <i class="fa-solid fa-eye"></i>
                                <i class="fa-solid fa-pen-to-square"></i>
                                <i class="fa-solid fa-archive"></i>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <div class="text-end">
                    <button class="btn btn-primary btn-sm">Add</button>

                </div>
            </div>
        </div>
    </div>

</div>