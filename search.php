<?php
session_start();
if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
    header("location:user_login.php");
}
include('include/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
    <script language="javascript">
        $(document).ready(function() {
            $("#txtdate").datepicker({
                minDate: 0,
                maxDate: 1
            });
        });
    </script>
    <style>
        .btn {
            border-radius: 0;
        }

        #search {
            margin-top: 24px;
        }

        .form-row {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .list_head {
            margin-top: 50px;
        }

        .container {
            padding-top: 20px;
        }
    </style>
</head>

<body>
    <?php include('header_user.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Enter date and time</h4>
                <form>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-label"><small><b>Date</b></small></div>
                            <input type="text" name="slot_date" id="txtdate" placeholder="MM/DD/YY" class="form-control" required>
                        </div>
                        <div class="col">
                            <div class="form-label"><small><b>Start Time</b></small></div>
                            <input type="time" id="time" name="start_time" class="form-control" required>
                        </div>
                        <div class="col">
                            <div class="form-label"><small><b>No. of hours</b></small></div>
                            <select class="custom-select mr-sm-2" name="no_of_hr" required>
                                <option selected>Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                        <div class="col">
                            <button class="btn btn-primary" id="search" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <h4 class="list_head">List of available slots:</h4>
            </div>
        </div>
    </div>
</body>

</html>