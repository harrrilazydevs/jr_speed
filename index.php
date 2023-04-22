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

        <nav class="navbar navbar-expand-lg bg-body-tertiary banner">

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
        </nav>

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

        <?php
        include 'admin.php';
        ?>

    </div>

    <div id="pane_controlpanel">

    </div>

    <script src="src/bootstrap/bs.js"></script>
    <script src="src/jquery/jquery.js"></script>
    <script src="src/func/all.js"></script>
    <script src="src/func/admin.js"></script>
</body>

</html>