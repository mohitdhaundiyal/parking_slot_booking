<?php
include('include/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parking</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .container {
        text-align: center;
        margin-top: 15%;
    }

    .list-group-item {
        padding: 20px !important;
        font-size: 1.5rem;
        transition: all 0.5s ease;
        color: black;
    }

    .list-group-item:hover {
        background: black;
        color: white;
    }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
                <div class="card">
                    <ul class=" list-group list-group-flush">
                        <a href="register.php" class="list-group-item">Register</a>
                        <a href="user_login.php" class="list-group-item">Login</a>
                        <a href="admin_login.php" class="list-group-item">Admin</a>
                    </ul>
                </div>
            </div>
            <div class="col-lg-1"></div>
        </div>
    </div>
</body>

</html>