<!DOCTYPE html>
<html lang="en">
<?php $title = "E-Reservation System" ?>
<?php session_start() ?>
<?php include('./includes/helper.php') ?>
<?php include('./includes/head.php') ?>

<body>
    <div class="scroll-up-btn">
        <i class="far fa-caret-square-up"></i>
    </div>
    <?php include('./includes/nav-bar.php') ?>
    <!-- home section start -->

    <div style="padding: 90px;"></div>
    <?php
    if (isset($_POST['submit'])) {

        include('./includes/connection.php');
        $from = $_POST["from"];
        $to = $_POST["to"];
        $date = $_POST["date"];
        $pass = $_POST["pas"];
        $c = $_POST["class"];
        $_SESSION['pass'] = $pass;
        $_SESSION['date'] = $date;
        $_SESSION['class'] = $c;
        $_error="From and To should not be same";

        if($date < date("Y-m-d"))
        {
            header('location:'.url('index.php'));
            $_SESSION['alert'] = ['type'=>'info','title'=>'You cant Book Ticket In Past'];
            die();
        }



        if($from==$to)
        {
            $_SESSION['error'] = $_error;
            header('location:'.url('index.php'));
        }

        $sql = "select * from cities where id=$to";
        $data = $conn->query($sql);
        $to_city = $data->fetch_assoc();

        $sql = "select * from cities where id=$from";
        $data = $conn->query($sql);
        $from_city = $data->fetch_assoc();

        $sql = "select schedules.*,from_city.name as from_city,to_city.name as to_city,flights.icon as flight_logo,flights.name as flight_name from schedules JOIN cities as from_city ON schedules.from_city_id=from_city.id JOIN cities as to_city ON schedules.to_city_id=to_city.id JOIN flights on schedules.flight=flights.id WHERE schedules.from_city_id='$from' && schedules.to_city_id='$to'";
        $data = $conn->query($sql);

    ?>
        <span style="margin-left: 20%; position: absolute;margin-top: 10px; font-family: sans-serif;font-size: 20px;color: crimson;"><?php echo "You are here : " . $from_city['name']; ?></span><span style=" margin-left: 68%; position: relative;font-family: sans-serif;font-size: 20px;color: crimson;"><?php echo $to_city['name']; ?></span>
        <span style="margin-left: 60px;"><button class="red-button" onclick="goBack()"> Back To Search...</button></h3></span>
        <center><img style="position: relative; width: 40%;height: 80px;margin-top: -25px; margin-bottom: 30px; " src="gif/air_load1.gif" alt="load flight"></center>



        <script>
            function goBack() {
                window.history.back();
            }
        </script>
        <?php

        while ($row = ($data->fetch_assoc())) {
        ?>
            <style type="text/css">
                @keyframes evenfade {
                    0% {
                        opacity: 0;
                    }

                    100% {
                        opacity: 1;
                    }
                }
            </style>
            <div class="fdetail_cont">
                <div class="fdetail">
                    <img src="<?php echo url('admin/'.$row['flight_logo']); ?>">
                    <div class="aaaa">
                        <table style="color: #eb9b4b; font-family: sans-serif;">
                            <tr>
                            <tr style="color:#c2670c ;">
                                <td></td>
                                <td><span class="tag">From</span></td>
                                <td><span class="tag">To</span></td>
                                <td><span class="tag">Departure</span></td>
                                <td><span class="tag">Duration</span></td>
                                <td><span class="tag">Arrival</span></td>
                                <td><span class="tag">Price</span></td>
                            </tr>
                            <td><span style="font-size: 15px;" class="not"><?php echo $row['flight_name']; ?></span></td>
                            <td><span><?php echo $row['from_city']; ?></span></td>
                            <td><span><?php echo $row['to_city']; ?></span></td>
                            <td><span><?php echo $row['departure']; ?></span></td>
                            <td><span style="color: green; font-size: 15px;">Non-Stop</span></td>
                            <td><span><?php echo $row['arrival']; ?></span></td>
                            <td><span style="color: #8c3f08;"><?php echo $row['price']; ?></span></td>

                            <td>&emsp;<span class="btn"><a href="conf_book.php<?php echo '?flight_id=' . $row['id']; ?>&<?php echo 'passenger=' . $pass; ?>&<?php echo 'class=' . $c; ?>">BOOK</a></span></td>
                            </tr>
                        </table>
                    </div><br clear="all">
                </div>
            </div>
    <?php }
    } ?>
    <div style="padding: 20px;"></div>
    <?php include('./includes/footer.php') ?>
</body>

</html>