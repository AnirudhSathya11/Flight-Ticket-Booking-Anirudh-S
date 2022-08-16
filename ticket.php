<?php

include('./includes/check_login.php');

$pass = $_SESSION['pass'];
$c = $_SESSION['class'];
$date = $_SESSION['date'];
$total_amount = $_GET['total_amout'];
$flight_id = $_GET['flight_id'];
$schedule_id = $_GET['schedule_id'];
$user_id = $_GET['pa_id'];
$type = $_POST['submit'];
$seat_num = $flight_id .'-'.time();
var_dump($user);
echo $user_id.'<br>';
include('./includes/connection.php');
$sql = "INSERT INTO bookings (user_id,schedule_id,flight_id,total_amount,seat_num,date,class) VALUES ('$user_id','$schedule_id','$flight_id','$total_amount','$seat_num','$date','$c')";

if ($conn->query($sql)) {
    $sql = "select schedules.*,from_city.name as from_city,to_city.name as to_city,flights.name as flight_name from schedules JOIN cities as from_city ON schedules.from_city_id=from_city.id JOIN cities as to_city ON schedules.to_city_id=to_city.id JOIN flights on schedules.flight=flights.id where schedules.id=$schedule_id";
    if ($result = $conn->query($sql)) {
        $_SESSION['schedule'] = $result->fetch_assoc();
    }
    $_SESSION['seat_num'] = $seat_num;

    header('location:'.url('final.php'));
    die();
}
else
{
    $_SESSION['alert'] = ['title' => 'Opps!!!!','body' => 'Something went Wrong','type' => 'error'];
    header('location:'.url('index.php'));
    die();
}
