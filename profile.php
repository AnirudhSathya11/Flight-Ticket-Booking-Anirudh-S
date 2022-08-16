<!DOCTYPE html>
<html lang="en">
<?php $title = "E-Reservation System" ?>
<?php include('./includes/check_login.php') ?>
<?php include('./includes/head.php') ?>
<?php include('./includes/connection.php') ?>

<body>
    <style>
.result-cont {
    width: 55%;
    overflow: scroll;
    background: white;
    border: 1px solid gray;
    border-radius: 10px;
    outline: none;
    float: right;
    margin-right: 10%;
}

.result-cont .per-det-cont {
    width: 90%;
    margin: 3%;
}

.result-cont .per-det-cont table,
th,
td {
    border: 1px solid gray;
    border-collapse: collapse;
    width: 800px;
}

.result-cont .fl-book-det {
    width: 90%;
    margin: 3%;
}

.result-cont .fl-book-det table,
th,
td {
    border: 1px solid gray;
    border-collapse: collapse;
    width: 800px;
} 
    </style>
    <div class="scroll-up-btn">
        <i class="far fa-caret-square-up"></i>
    </div>
    <?php include('./includes/nav-bar.php') ?>
    <!-- home section start -->

    <div style="padding: 90px;"></div>
    <div class="opt-cont">
        <div class="opt-list">
            <form method="post">
                <input type="submit" name="sub1" style="text-decoration:none;" value="Personal Detail"><br>
                <input type="submit" name="sub3" style="text-decoration:none;" value="My Booking"><br>
                <input type="submit" name="sub2" style="text-decoration:none;" value="Past Bookings">
            </form>
        </div>
    </div>
    <div class="result-cont">
        <div class="per-det-cont">
            <?php
            if (isset($_POST['sub1'])) {
            ?>
                <form method="post" action="<?php echo url('profile2.php') ?>">
                    <input type="hidden" name="user_id" value="<?php echo $user['id'] ?>">
                    <span style="font-weight: bold; font-size: 25px;">Personal Data</span>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input name="fname" class="form-control" value="<?php echo $user['fname'] ?>"></input>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="lname" class="form-control" value="<?php echo $user['lname'] ?>"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input name="address" class="form-control" value="<?php echo $user['address'] ?>"></input>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input name="city" class="form-control" value="<?php echo $user['city'] ?>"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>State</label>
                                <input name="state" class="form-control" value="<?php echo $user['state'] ?>"></input>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <input name="country" class="form-control" value="<?php echo $user['country'] ?>"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" class="form-control" value="<?php echo $user['email'] ?>"></input>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile</label>
                                <input name="mobile" class="form-control" value="<?php echo $user['mobile'] ?>"></input>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="red-button" type="submit" name="submit" value="Edit">Update</button>
                        </div>
                    </div>
                </form>
        </div>
    <?php } ?>
    </div>
    <div class="cncl-book-det">
        <?php
        if (isset($_POST['sub2'])) {
            $user_id = $user['id'];
            $sql = "SELECT bookings.*,users.fname,users.lname,flights.name as flight_name,from_city.name as from_city,to_city.name as to_city FROM `bookings` JOIN users on users.id=bookings.user_id JOIN flights on flights.id = bookings.flight_id JOIN schedules on schedules.id = bookings.schedule_id JOIN cities as from_city ON schedules.from_city_id=from_city.id JOIN cities as to_city ON schedules.to_city_id=to_city.id WHERE bookings.user_id='$user_id' and bookings.date < NOW() and bookings.canceled = 0";
            $result = $conn->query($sql);
            echo ($conn->error)
        ?>
            <span style="font-weight: bold; font-size: 25px;">Your Past Bookings</span>
            <table>
                <tr>
                    <th>Flight Id</th>
                    <th>Seat Number</th>
                    <th>Date</th>
                    <th>Flight Name</th>
                    <th>Flight From</th>
                    <th>Flight To</th>
                    <th>Total Amount</th>
                </tr>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['seat_num']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['flight_name']; ?></td>
                        <td><?php echo $row['from_city']; ?></td>
                        <td><?php echo $row['to_city']; ?></td>
                        <td><?php echo $row['total_amount']; ?></td>
                    </tr>
                <?php } ?>
            </table> <?php
                    }
                        ?>
    </div>
    <div class="fl-book-det">
        <?php
        if (isset($_POST['sub3'])) {
            $user_id = $user['id'];
            $sql = "SELECT bookings.*,users.fname,users.lname,flights.name as flight_name,from_city.name as from_city,to_city.name as to_city FROM `bookings` JOIN users on users.id=bookings.user_id JOIN flights on flights.id = bookings.flight_id JOIN schedules on schedules.id = bookings.schedule_id JOIN cities as from_city ON schedules.from_city_id=from_city.id JOIN cities as to_city ON schedules.to_city_id=to_city.id WHERE bookings.user_id='$user_id' and bookings.date >= NOW() and bookings.canceled = 0";
            $result = $conn->query($sql);
            echo ($conn->error)
        ?>
            <span style="font-weight: bold; font-size: 25px;">Your Bookings</span>
            <table>
                <tr>
                    <th>Flight Id</th>
                    <th>Seat Number</th>
                    <th>Date</th>
                    <th>Flight Name</th>
                    <th>Flight From</th>
                    <th>Flight To</th>
                    <th>Total Amount</th>
                </tr>
                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['seat_num']; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo $row['flight_name']; ?></td>
                        <td><?php echo $row['from_city']; ?></td>
                        <td><?php echo $row['to_city']; ?></td>
                        <td><?php echo $row['total_amount']; ?></td>
                        <td><a href="profile2.php<?php echo "?f_id=".$row['id']?>&submit=Cancel">Cancel Booking</a></td>

                    </tr>
                <?php } ?>
            </table> <?php
                    }
                        ?>
    </div>
    </div><br clear="all">

    <div style="padding: 20px;"></div>
    <?php include('./includes/footer.php') ?>
</body>

</html>