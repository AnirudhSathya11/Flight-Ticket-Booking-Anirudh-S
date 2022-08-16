<!DOCTYPE html>
<html lang="en">
<?php $title = "E-Reservation System" ?>
<?php include('./includes/check_login.php'); ?>
<?php include('./includes/head.php') ?>
<?php

$flight_id = $_GET['flight_id'];
include 'includes/connection.php';
$sql = "select schedules.*,from_city.name as from_city,to_city.name as to_city,flights.id as flight_id,flights.name as flight_name,flights.icon as flight_icon from schedules JOIN cities as from_city ON schedules.from_city_id=from_city.id JOIN cities as to_city ON schedules.to_city_id=to_city.id JOIN flights on schedules.flight=flights.id where schedules.id=$flight_id";

if ($result = $conn->query($sql)) {
    $row = $result->fetch_assoc();
}
else
{
    $_SESSION['alert'] = ['title' => 'oops!!!', 'body' => 'Something Went Wrong', 'type' => 'error'];
}

?>
<body>
    <div class="scroll-up-btn">
        <i class="far fa-caret-square-up"></i>
    </div>
    <?php include('./includes/nav-bar.php') ?>
    <!-- home section start -->

    <div style="padding: 30px;"></div>

    <div class="container">
        <div class="container1">
            <p style=" float: left; font-weight: bold; font-size: 20px;padding-left: 10px; text-align: left;">Flight Summary</p><br clear="all">
            <div class="flght-dt-cont">
                <div style="font-size: 20px; font-weight: bold; padding: 5px; word-spacing: 5px;">
                    <span><?php echo $row['from_city'] .'-'.$row['to_city'] ?></span><br>
                    <span style="font-size: 15px;">Departure <?php echo $_SESSION['date']?></span>
                </div>
                <div style="border-bottom: 2px solid gray;"></div>
                <div>
                    <table>
                        <tbody>
                            <tr>
                                <td class="td ntd"><span><img src="<?php echo url('admin/'.$row['flight_icon']) ?>"><?php echo $row['flight_name'] ?></span></td>
                                <td class="td"><span><?php echo $row['departure'] ?></span></td>
                                <td class="td"><span style="color: green; font-size: 13px;">5 h 30 m</span></td>
                                <td class="td"><span><?php echo $row['arrival'] ?></span></td>
                            </tr>
                            <tr>
                                <td class="td11"><span></span></td>
                                <td class="td1"><span><?php echo $row['from_city'] ?></span></td>
                                <td class="td1"><span style="border-top: 3px solid gray; font-size: 13px; color: green;">Non-Stop</span></td>
                                <td class="td1"><span><?php echo $row['to_city'] ?></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <p style="float: left; font-weight: bold; font-size: 20px;text-align: left; margin-top: -45px;">Fare Summary</p>
            <div class="tot-pay-dt">
                <h4 style="font-size: 20px; font-weight: bold; padding: 5px; word-spacing: 5px;"><span>Base Fare</span></h4>
                <div>
                    <table style=" font-size: 15px; margin-left: 10px; width: 90%;">
                        <tbody>
                            <tr>
                                <td>Adult(s)<?php echo $_SESSION['pass'] ?> X ₹ <?php echo $row['price']?></td>
                                <td style="text-align: right;">₹ <?php $total = $row['price']*$_SESSION['pass']; echo $total?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div>
                    <table style=" font-size: 15px; margin-left: 10px;width: 90%;">
                        <tbody>
                            <tr>
                                <td>tax &amp; Service charge</td>
                                <td style="text-align: right;">₹ <?php echo $total*18/100 ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div>
                    <table style=" font-size: 15px; margin-left: 10px; width: 90%;">
                        <tbody>
                            <tr>
                                <td>Total Amount</td>
                                <td style="text-align: right; font-weight: bold;">₹ <?php $total = $total + $total*18/100;echo $total ?></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            <br clear="all">
            <div class="user-dt-cont">
                <p style="font-weight: bold; font-size: 20px;padding-left: 5px;padding-bottom:10px; padding-top: 5px; text-align: left;">Traveller Details</p>
                <div class="user-dt">
                    <fieldset class="form-group border p-3" style="border-radius: 15px; text-align: left; font-weight: bold;">
                        <legend  class="w-auto px-2">Personal Detail</legend>
                        <table style="width: 90%; text-align: left; font-size: 15px;">
                            <tbody>
                                <tr>
                                    <td>your id</td>
                                    <td>Last Name</td>
                                    <td>First Name</td>
                                    <td></td>
                                </tr>
                                <tr style="font-size: 20px; color: green;">
                                    <td><?php echo $user['id'] ?></td>
                                    <td><?php echo $user['fname'] ?></td>
                                    <td><?php echo $user['lname'] ?></td>
                                    <td></td>
                                </tr>

                                <tr>
                                    <td>Address Information</td>
                                    <td>Street address</td>
                                    <td>District</td>
                                </tr>
                                <tr style="font-size: 20px; color: green;">
                                    <td></td>
                                    <td><?php echo $user['address'] ?></td>
                                    <td><?php echo $user['city'] ?></td>
                                </tr>

                                <tr>
                                    <td></td>
                                    <td>State</td>
                                    <td>Country</td>
                                </tr>
                                <tr style="font-size: 20px; color: green;">
                                    <td></td>
                                    <td><?php echo $user['state'] ?></td>
                                    <td><?php echo $user['country'] ?></td>
                                </tr>

                                <tr>
                                    <td>Contact Information</td>
                                    <td>Mobile Number</td>
                                    <td>Email</td>
                                </tr>
                                <tr style="font-size: 20px; color: green;">
                                    <td></td>
                                    <td><?php echo $user['mobile'] ?></td>
                                    <td><?php echo $user['email'] ?></td>
                                    <td></td>
                                </tr>

                            </tbody>
                        </table>
                    </fieldset>
                </div>
                <botton><a class="red-button" href="ticket.php?flight_id=<?php echo $row['flight_id'] ?>&schedule_id=<?php echo $flight_id?>&pa_id=<?php echo $user['id'] ?>&total_amout=<?php echo $total?>"> Continue</a></botton>
            </div>
        </div>
    </div>
    <div style="padding: 20px;"></div>
    <?php include('./includes/footer.php') ?>
</body>

</html>