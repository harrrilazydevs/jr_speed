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

        <?php include 'src/pages/user.php'; ?>


    </div>

    <div id="pane_admin" style="display:none;">

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