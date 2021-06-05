<?php include('include/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User </title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
        body {
            background-image: url("images/bg4.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card {
            border-radius: 0px !important;
            position: absolute;
            margin: 30px;
            top: 4%;
        }

        .form-control,
        .btn {
            border-radius: 0px !important;
        }

        .form-control {
            border-left: 0px !important;
            border-right: 0px !important;
            border-top: 0px !important;
            outline: none;
        }

        input:focus,
        input.form-control:focus {
            outline: none !important;
            outline-width: 0 !important;
            box-shadow: none;
            -moz-box-shadow: none;
            -webkit-box-shadow: none;
        }

        .form-control:focus {
            border-color: inherit;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <?php include('header.php'); ?>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header text-center">
                        <b>REGISTER</b>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <form action="source/user_register.php" method="post" enctype="multipart/form-data">
                                <input class="form-control" type="text" placeholder="Name" name="user_name" required><br>
                                <input class="form-control" type="text" placeholder="E-mail" name="user_email" required><br>
                                <input class="form-control" max="10" type="number" placeholder="Contact Number" name="user_contactno" required><br>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="user_gender" value="male">Male
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="user_gender" value="female">Female
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="user_gender" value="other">Other
                                    </div>
                                </div>
                                <input class="form-control" type="text" name="user_address" placeholder="Address" required><br>
                                <input class="form-control" type="text" name="user_vehicleno" placeholder="Vehicle No." required><br>

                                <input class="form-control" type="text" name="user_rc" placeholder="Vehicle RC." required><br>
                                <input class="form-control" type="password" name="user_password" placeholder="Password" required><br>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button><br>
                                <p>Already Registered? <a href="user_login.php">Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>