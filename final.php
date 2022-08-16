<!DOCTYPE html>
<html lang="en">
<?php $title = "E-Reservation System" ?>
<?php $print=true ?>
<?php include('./includes/check_login.php') ?>
<?php include('./includes/head.php') ?>

<body>
    <div class="scroll-up-btn">
        <i class="far fa-caret-square-up"></i>
    </div>
    <?php include('./includes/nav-bar.php') ?>
    <!-- home section start -->

    <div style="padding: 60px;"></div>
    <div class="">
        <div class="main">
            <div class="sub">
                <div class="head">
                    <h2><i class="far fa-plane-departure" aria-hidden="true"></i> E-Ticket Booking System</h2>
                    <h2 style="float: right; margin-top:-38px;margin-right: 5px; font-family: sans-serif;font-weight: bold; font-style: italic; ">Boarding Pass</h2>
                </div>
                <div class="body">
                    <table style="text-align: left;" cellspacing="5px">
                        <tbody>
                            <tr>
                                <th>Passenger Name</th>
                            </tr>
                            <tr>
                                <td><?php echo $user['fname'] .' '.$user['lname'] ?><br></td>
                            </tr>
                            <tr>
                                <th>From</th>
                                <th width="10%">Flight</th>
                                <th width="10%">Date</th>
                                <th width="50%">Time</th>
                            </tr>
                            <tr>
                                <td width="30%"><?php echo $_SESSION['schedule']['from_city'] ?></td>
                                <td width="20%"><?php echo $_SESSION['schedule']['flight_name'] ?></td>
                                <td width="25%"><?php echo $_SESSION['date'] ?></td>
                                <td width="25%"><?php echo $_SESSION['schedule']['departure'] ?></td>
                            </tr>
                            <tr>
                                <th>To</th>
                            </tr>
                            <tr>
                                <td><?php echo $_SESSION['schedule']['to_city'] ?></td>
                            </tr>

                            <tr>
                                <th>Gate</th>
                                <th>Boarding</th>
                                <th style="padding-left: 15px;">Seat</th>
                            </tr>
                            <tr>
                                <td>---</td>
                                <td>---</td>
                                <td style="padding-left: 15px;"><?php echo $_SESSION['seat_num'] ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="qr">
                        <img src="admin/icon/qr.jpg">
                    </div>
                    <!-- <div style="height: 10px; background:linear-gradient(to left,#08d4d4,#1ae8e8,#37fafa);border-radius:  0 0 0 20px/ 0 0 0 20px; "></div> -->
                </div>

            </div>

        </div>
        <div class="main1">
            <div class="head">
                <h2>Have A Nice Flight <3&nbsp;</h2>
            </div>
            <div class="body1">
                <table style="text-align: left;" cellspacing="5px">
                    <tbody>
                        <tr>
                            <th>Passenger Name</th>
                        </tr>
                        <tr>
                            <td><?php echo $user['fname'] .' '.$user['lname'] ?><br></td>
                        </tr>
                        <tr>
                            <th>From</th>
                            <th>To</th>
                        </tr>
                        <tr>

                            <td><?php echo $_SESSION['schedule']['from_city'] ?></td>
                            <td><?php echo $_SESSION['schedule']['to_city'] ?></td>
                        </tr>
                        <tr>
                            <th>Flight</th>
                            <th>Date</th>
                            <th>Time</th>
                        </tr>
                        <tr>

                            <td><?php echo $_SESSION['schedule']['flight_name'] ?></td>
                            <td><?php echo $_SESSION['date'] ?></td>
                            <td><?php echo $_SESSION['schedule']['departure'] ?></td>
                        </tr>

                        <tr>
                            <th>Gate</th>
                            <th>Boarding</th>
                            <th>Seat</th>
                        </tr>
                        <tr>
                            <td>---</td>
                            <td>---</td>
                            <td><?php echo $_SESSION['seat_num'] ?></td>
                        </tr>
                    </tbody>
                </table>
                <!-- <div style="height: 10px; background:linear-gradient(to left,#08d4d4,#1ae8e8,#37fafa);border-radius:  0 0 25px 0/0 0 25px 0;} "></div> -->
            </div>

        </div><br clear="all">


        <center class="contain" style="padding-top: 50px;">
            <h2 class="down" style="color: #7d2323; margin-right: 100px;">&emsp;&emsp;&emsp;Download Your Ticket <i class="far fa-hand-point-right"></i> <a title="Download Ticket" href="javascript:window.print()"> <i class="far fa-file-powerpoint"></i></a></h2>
            <h2 style="font-family: sans-serif; border: 2px solid green; border-radius: 10px; padding: 10px;">Enjoy Your Trip....... <3 </h2>
        </center>
    </div>
    <div style="padding: 30px;"></div>
    <?php include('./includes/footer.php') ?>
</body>

</html>