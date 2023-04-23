<nav class="navbar navbar-expand-lg bg-body-tertiary banner">

    <div class="container">

        <span class="logo ps-0 btn_cp_close_sidebar" id="cp_logo" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav_cp_sidebar">

            <img src="src/img/jrspeed.png" alt="missing img-company-logo" class="companyLogo">

            <span class="companyName" style="font-size:20pt;">Control Panel</span>

        </span>

        <button class="btn btn-primary d-none d-lg-block" style="font-size:10pt" id="btn_goto_admin"><i class="fa-solid fa-user"></i> View as Customer</button>

    </div>

</nav>


<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="nav_cp_sidebar" aria-labelledby="nav_cp_sidebarLabel">

    <div class="offcanvas-header" style=" height: 8vh; background:#101419;">

        <span class="logo ps-0 btn_cp_close_sidebar" id="" type="button" data-bs-toggle="offcanvas" data-bs-target="#nav_cp_sidebar">

            <img src="src/img/jrspeed.png" alt="missing img-company-logo" class="companyLogo">

            <span class="companyName" style="font-size:20pt;">Control Panel</span>

        </span> 

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
                </ul>
            </li>


            <li class="mb-1 ms-3">
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



        </ul>

    </div>

</div>

<div class="container">

    <div class="row page" id="div_cp_bm">

        <div class="col p-2  mt-3">

            <div class="page_cp_header">

                <p class="lead">Product Maintenance</p>

            </div>

            <div class="page_cp_content mt-1 pt-2 border-top">

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
                    <button class="btn btn-primary btn-sm" id="btn_pm_add">Add</button>
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

                <div class="row  mt-2">
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

                <div class="row">

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
                <div class="text-center" style="height:350px; width:100%;">
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


                <table class="table mt-3" id="cp_tbl_accountlist">
                    <thead>
                        <tr>
                            <th class="text-center ps-0" width="5%">NO</th>
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


    <!-- Modal -->
    <div class="modal fade" id="cp_md_vw_product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
    <div class="modal fade" id="cp_md_ed_product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="cp_md_add_product" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            </div>
        </div>
    </div>


</div>